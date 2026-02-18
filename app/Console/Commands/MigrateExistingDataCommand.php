<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\ClassRoom;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MigrateExistingDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:existing-data {--dry-run : Show what will be done without executing}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate existing production data to SaaS multi-tenant structure';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $dryRun = $this->option('dry-run');
        
        if ($dryRun) {
            $this->info('=== DRY RUN MODE - No data will be changed ===');
        } else {
            $this->warn('=== PRODUCTION MODE - Data will be modified ===');
            if (!$this->confirm('Are you sure you want to proceed with data migration?')) {
                $this->info('Migration cancelled.');
                return 0;
            }
        }

        DB::beginTransaction();
        try {
            $this->migrateTeachersData($dryRun);
            $this->migrateClassRoomsData($dryRun);
            
            if (!$dryRun) {
                DB::commit();
                $this->info('✅ Data migration completed successfully!');
            } else {
                DB::rollback();
                $this->info('✅ Dry run completed. Run without --dry-run to execute.');
            }
            
        } catch (\Exception $e) {
            DB::rollback();
            $this->error('❌ Migration failed: ' . $e->getMessage());
            return 1;
        }

        return 0;
    }

    private function migrateTeachersData($dryRun)
    {
        $this->info('=== MIGRATING TEACHERS DATA ===');
        
        // Cari semua sekolah
        $schools = User::where('role', 'school')->get();
        $this->info("Found {$schools->count()} schools");
        
        // Cari guru yang belum punya school_id
        $teachersWithoutSchool = User::where('role', 'guru')
                                   ->whereNull('school_id')
                                   ->get();
        
        $this->info("Found {$teachersWithoutSchool->count()} teachers without school_id");
        
        if ($teachersWithoutSchool->count() == 0) {
            $this->info('All teachers already have school_id assigned.');
            return;
        }

        if ($schools->count() == 0) {
            $this->error('No schools found! Cannot assign teachers.');
            throw new \Exception('No schools available for teacher assignment');
        }

        // Strategy: Assign ke sekolah pertama, atau biarkan admin mengatur manual
        $defaultSchool = $schools->first();
        
        $this->table(['Strategy'], [
            ['Assign all orphaned teachers to: ' . $defaultSchool->school_name . ' (ID: ' . $defaultSchool->id . ')'],
            ['Admin can reassign later through the UI if needed']
        ]);

        if (!$dryRun) {
            $updated = User::where('role', 'guru')
                          ->whereNull('school_id')
                          ->update(['school_id' => $defaultSchool->id]);
            
            $this->info("✅ Updated {$updated} teachers with school_id: {$defaultSchool->id}");
        } else {
            $this->info("📋 Would update {$teachersWithoutSchool->count()} teachers");
        }
    }

    private function migrateClassRoomsData($dryRun)
    {
        $this->info('=== MIGRATING CLASSROOMS DATA ===');
        
        // Cari classrooms yang teacher_id-nya tidak punya school_id
        $problematicClassrooms = ClassRoom::whereHas('teacher', function($query) {
            $query->whereNull('school_id');
        })->get();

        $this->info("Found {$problematicClassrooms->count()} classrooms with teachers that have no school_id");
        
        if ($problematicClassrooms->count() > 0) {
            if (!$dryRun) {
                // Update teacher_id to null for these classrooms temporarily
                foreach ($problematicClassrooms as $classroom) {
                    $classroom->update(['teacher_id' => null]);
                }
                $this->warn("⚠️  Reset teacher assignment for {$problematicClassrooms->count()} classrooms");
                $this->info("💡 School admin can reassign teachers through the UI");
            } else {
                $this->info("📋 Would reset teacher assignment for {$problematicClassrooms->count()} classrooms");
            }
        }

        // Verify data integrity
        $this->verifyDataIntegrity($dryRun);
    }

    private function verifyDataIntegrity($dryRun)
    {
        $this->info('=== VERIFYING DATA INTEGRITY ===');
        
        // Check: All guru should have school_id
        $guruWithoutSchool = User::where('role', 'guru')->whereNull('school_id')->count();
        
        // Check: All classrooms should belong to schools that exist
        $orphanedClassrooms = ClassRoom::whereNotIn('school_id', 
            User::where('role', 'school')->pluck('id')
        )->count();
        
        // Check: Teachers assigned to classrooms should belong to the same school
        $mismatchedAssignments = ClassRoom::whereNotNull('teacher_id')
            ->whereRaw('school_id != (SELECT school_id FROM users WHERE id = teacher_id)')
            ->count();

        $this->table(['Check', 'Count', 'Status'], [
            ['Guru without school_id', $guruWithoutSchool, $guruWithoutSchool == 0 ? '✅ OK' : '❌ ISSUE'],
            ['Orphaned classrooms', $orphanedClassrooms, $orphanedClassrooms == 0 ? '✅ OK' : '❌ ISSUE'],
            ['Mismatched teacher assignments', $mismatchedAssignments, $mismatchedAssignments == 0 ? '✅ OK' : '❌ ISSUE'],
        ]);

        if ($guruWithoutSchool > 0 || $orphanedClassrooms > 0 || $mismatchedAssignments > 0) {
            $this->warn('⚠️  Data integrity issues found!');
            if (!$dryRun) {
                $this->info('💡 Please review and fix manually through admin interface.');
            }
        } else {
            $this->info('✅ Data integrity check passed!');
        }
    }
}

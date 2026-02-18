<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UpdateGuruSchoolCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix:guru-school-id';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update existing guru with school_id from first school';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $school = User::where('role', 'school')->first();
        
        if (!$school) {
            $this->error('No school found! Please create a school first.');
            return 1;
        }

        $guruWithoutSchool = User::where('role', 'guru')
                                ->whereNull('school_id')
                                ->count();

        if ($guruWithoutSchool == 0) {
            $this->info('All guru already have school_id assigned.');
            return 0;
        }

        $updated = User::where('role', 'guru')
                       ->whereNull('school_id')
                       ->update(['school_id' => $school->id]);

        $this->info("Updated {$updated} guru(s) with school_id: {$school->id} ({$school->school_name})");
        return 0;
    }
}

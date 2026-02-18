<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat sekolah contoh jika belum ada
        if (User::where('role', 'school')->count() == 0) {
            User::create([
                'name' => 'Admin SMAN 1 Jakarta',
                'email' => 'admin@sman1jakarta.sch.id',
                'password' => Hash::make('password'),
                'school_name' => 'SMAN 1 Jakarta',
                'position' => 'Kepala Sekolah',
                'whatsapp_number' => '081234567890',
                'school_address' => 'Jl. Pendidikan No. 1, Jakarta Pusat',
                'role' => 'school',
                'secure' => 'password'
            ]);

            User::create([
                'name' => 'Admin SMPN 5 Bandung',
                'email' => 'admin@smpn5bandung.sch.id',
                'password' => Hash::make('password'),
                'school_name' => 'SMPN 5 Bandung',
                'position' => 'Wakil Kepala Sekolah',
                'whatsapp_number' => '082345678901',
                'school_address' => 'Jl. Persada No. 15, Bandung',
                'role' => 'school',
                'secure' => 'password'
            ]);

            $this->command->info('Sample sekolah berhasil dibuat.');
        } else {
            $this->command->info('Sekolah sudah ada, skip seeding.');
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cari sekolah yang sudah ada untuk dijadikan contoh
        $school = \App\Models\User::where('role', 'school')->first();
        
        if (!$school) {
            $this->command->info('Tidak ada sekolah yang ditemukan. Buat sekolah terlebih dahulu.');
            return;
        }

        // Create sample teachers untuk sekolah tersebut
        Teacher::create([
            'name' => 'Ahmad Guru',
            'email' => 'guru@sekolah.com',
            'password' => Hash::make('password'),
            'subject' => 'Matematika',
            'nip' => '123456789',
            'whatsapp_number' => '081234567890',
            'school_id' => $school->id,
            'role' => 'guru',
        ]);

        Teacher::create([
            'name' => 'Siti Guru',
            'email' => 'siti@sekolah.com',
            'password' => Hash::make('password'),
            'subject' => 'Bahasa Indonesia',
            'nip' => '987654321',
            'whatsapp_number' => '082345678901',
            'school_id' => $school->id,
            'role' => 'guru',
        ]);

        Teacher::create([
            'name' => 'Budi Guru',
            'email' => 'budi@sekolah.com',
            'password' => Hash::make('password'),
            'subject' => 'Fisika',
            'nip' => '567890123',
            'whatsapp_number' => '083456789012',
            'school_id' => $school->id,
            'role' => 'guru',
        ]);

        $this->command->info('Sample guru berhasil dibuat untuk sekolah: ' . $school->school_name);
    }
}

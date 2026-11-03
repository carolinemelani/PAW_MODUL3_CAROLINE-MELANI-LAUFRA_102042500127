<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
        User::updateOrCreate(
            ['email' => 'dosen@example.com'],
            [
                'name' => 'Dosen Telkom',
                'password' => Hash::make('password123'), 
                'role' => 'dosen',
                'nomor_induk' => '1987654321', 
            ]
        );

        // 2. Akun Mahasiswa (Sebagai tambahan agar sesuai dengan deskripsi "1 Dosen & 1 Mahasiswa")
        User::updateOrCreate(
            ['email' => 'mahasiswa@example.com'],
            [
                'name' => 'Mahasiswa Telkom',
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
                'nomor_induk' => '2023123456', 
            ],
        );
    }
}

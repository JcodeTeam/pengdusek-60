<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'created_at' => now(),
            ],
            [
                'name' => 'Admin 2',
                'email' => 'admin2@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'created_at' => now(),
            ],
            [
                'name' => 'Siswa',
                'email' => 'siswa@example.com',
                'password' => Hash::make('password'),
                'role' => 'siswa',
                'created_at' => now(),
            ],
            [
                'name' => 'Siswa 2',
                'email' => 'siswa2@example.com',
                'password' => Hash::make('password'),
                'role' => 'siswa',
                'created_at' => now(),
            ]
        ]);

        DB::table('admins')->insert([
            [
                'user_id' => 1,
                'nip' => 123456789,
                'created_at' => now(),
            ],
            [
                'user_id' => 2,
                'nip' => 987654321,
                'created_at' => now(),
            ]
        ]);

        DB::table('siswas')->insert([
            [
                'user_id' => 3,
                'nisn' => 1111111111,
                'kelas' => '10 RPL 1',
                'created_at' => now(),
            ],
            [
                'user_id' => 4,
                'nisn' => 1111111112,
                'kelas' => '10 RPL 2',
                'created_at' => now(),
            ]
        ]);

        DB::table('kategoris')->insert([
            [
                'nama_kategori' => 'Internet',
                'created_at' => now(),
            ],
            [
                'nama_kategori' => 'Kamar Mandi',
                'created_at' => now(),
            ],
        ]);
    }
}

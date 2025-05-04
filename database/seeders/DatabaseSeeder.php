<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama' => 'lukmanhaq'
            'email' => 'lukman@test.com
            'jabatan' => 'Karyawan',
            'password' => Hash::make('12341234'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'lukman'
            'email' => 'lukmanhaq@test.com'
            'jabatan' => 'Karyawan',
            'password' => Hash::make('12341234'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'Muhammad Lukmanul Hakim'
            'email' => 'muhammadlukman@test.com
            'jabatan' => 'Admin',
            'password' => Hash::make('12341234'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama' => 'Lukman'
            'email' => 'lukman@test.com'
            'jabatan' => 'Admin',
            'password' => Hash::make('12341234'),
            'is_tugas' => false,
        ]);
    }
}

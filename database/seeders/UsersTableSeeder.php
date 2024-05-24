<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'role' => 1,
                'email' => 'admin@example.com',
                'name' => 'Admin User',
                'password' => 'password',
                'photo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 2,
                'email' => 'user@example.com',
                'name' => 'Regular User',
                'password' => 'password',
                'photo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 3,
                'email' => 'psikolog@example.com',
                'name' => 'Psikolog User',
                'password' => 'password',
                'photo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

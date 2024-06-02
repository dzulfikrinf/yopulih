<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'user' => 1,
                'content' => 'This is a post by Admin.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user' => 2,
                'content' => 'This is a post by a regular user.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

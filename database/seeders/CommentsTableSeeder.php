<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            [
                'user' => 1,
                'post' => 1,
                'content' => 'This is a comment by Admin.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user' => 2,
                'post' => 2,
                'content' => 'This is a comment by a regular user.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

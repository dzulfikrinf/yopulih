<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'slug' => 'first-article',
                'title' => 'First Article',
                'description' => 'Description of the first article.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videos')->insert([
            [
                'url' => 'http://example.com/video1',
                'title' => 'First Video',
                'description' => 'Description of the first video.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

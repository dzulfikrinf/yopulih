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
                'url' => 'https://www.youtube.com/embed/OO2kPK5-qno?si=3VrKCh1A0epr4PCH',
                'title' => 'First Video',
                'description' => 'Description of the first video.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

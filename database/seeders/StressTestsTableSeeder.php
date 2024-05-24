<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StressTestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stress_tests')->insert([
            [
                'user' => 2,
                'question' => 1,
                'answer' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client_list')->insert([
            [
                'user' => 2,
                'psikolog' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

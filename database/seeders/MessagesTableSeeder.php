<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('messages')->insert([
            [
                'sender' => 1,
                'receiver' => 2,
                'message' => 'Hello from Admin.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sender' => 2,
                'receiver' => 1,
                'message' => 'Hello from User.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notifications')->insert([
            [
                'user' => 1,
                'content' => "Hai, kamu baru saja mendapatkan pesan baru",
                'is_read' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user' => 2,
                'content' => "kamu berhasil menamatkan youtube",
                'is_read' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

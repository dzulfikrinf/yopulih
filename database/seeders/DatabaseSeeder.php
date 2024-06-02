<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            PostsTableSeeder::class,
            CommentsTableSeeder::class,
            NotificationsTableSeeder::class,
            PsikologTableSeeder::class,
            ClientListTableSeeder::class,
            QuestionsTableSeeder::class,
            StressTestsTableSeeder::class,
            MessagesTableSeeder::class,
            VideosTableSeeder::class,
            ArticlesTableSeeder::class,
        ]);
    }
}

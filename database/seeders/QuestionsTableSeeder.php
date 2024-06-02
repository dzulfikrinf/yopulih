<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            ['question' => 'Apakah kamu pernah merasa cemas sebelum presentasi?'],
            ['question' => 'Apakah kamu selalu tertarik untuk belajar teori-teori psikologi baru?'],
            ['question' => 'Apakah kamu merasa sulit untuk memahami perasaan orang lain?'],
            ['question' => 'Apakah kamu merasa iri dengan kesuksesan orang lain?'],
            ['question' => 'Apakah kamu merasa bahwa tidak ada yang mengerti kamu?'],
            ['question' => 'Apakah kamu merasa termotivasi untuk mencapai tujuanmu?'],
            ['question' => 'Apakah kamu memiliki rasa ingin tahu tentang bagaimana manusia berpikir dan bertindak?'],
            ['question' => 'Apakah kamu kadang-kadang merasa tidak yakin dengan keputusan yang kamu buat?'],
            ['question' => 'Apakah kamu menghindari situasi sosial yang membuatmu tidak nyaman?'],
            ['question' => 'Apakah kamu mengalami mimpi yang sangat nyata sehingga sulit membedakan antara mimpi dan kenyataan?'],
            ['question' => 'Apakah kamu mencoba untuk memahami latar belakang emosional teman-temanmu?'],
            ['question' => 'Apakah kamu merasa kelelahan emosional setelah menghabiskan waktu banyak dengan orang banyak?'],
            ['question' => 'Apakah kamu berbohong untuk menghindari konflik?'],
            ['question' => 'Apakah kamu merasa bahwa kehidupan ini terlalu rumit untuk dimengerti sepenuhnya?'],
            ['question' => 'Apakah kamu merasa bahwa kamu bisa mengubah moodmu dengan mengubah cara berpikir?'],
            ['question' => 'Apakah kamu mencari cara untuk meningkatkan kesehatan mentalmu?'],
            ['question' => 'Apakah kamu merasa sulit untuk tidur karena pikiranmu terus berpikir tentang banyak hal?'],
            ['question' => 'Apakah kamu merasa lepas dari tekanan sosial?']
        ]);
    }
}
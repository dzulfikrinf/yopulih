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
                'text' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit fugiat placeat rem, harum debitis consequuntur molestiae expedita ut necessitatibus adipisci quia voluptatibus, facilis cum distinctio nostrum cupiditate hic aperiam eos qui accusantium ipsa est ad! A quos quod molestias modi minus quae explicabo dolorum maxime. Aliquam consequuntur saepe tenetur commodi odit sit, cum explicabo nostrum nulla sunt obcaecati nesciunt asperiores blanditiis fugiat quas consequatur minus quisquam praesentium et, sint porro fuga accusamus. Aliquid velit doloribus, aperiam molestiae accusamus animi deleniti doloremque perferendis nam, amet ab hic minus officiis. Quaerat sunt dolorem non asperiores cumque iure molestias et eaque in ducimus.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit fugiat placeat rem, harum debitis consequuntur molestiae expedita ut necessitatibus adipisci quia voluptatibus, facilis cum distinctio nostrum cupiditate hic aperiam eos qui accusantium ipsa est ad! A quos quod molestias modi minus quae explicabo dolorum maxime. Aliquam consequuntur saepe tenetur commodi odit sit, cum explicabo nostrum nulla sunt obcaecati nesciunt asperiores blanditiis fugiat quas consequatur minus quisquam praesentium et, sint porro fuga accusamus. Aliquid velit doloribus, aperiam molestiae accusamus animi deleniti doloremque perferendis nam, amet ab hic minus officiis. Quaerat sunt dolorem non asperiores cumque iure molestias et eaque in ducimus.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

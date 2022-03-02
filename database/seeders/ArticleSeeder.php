<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for($i = 0; $i < 100; $i++) {

        Article::factory(100)->create();

            DB::table('articles')->insert([
                'title' => Str::random(1000),
                'expert' => Str::random(10000),
                'body' => Str::random(1000000),
                ''
            ]);
//        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i < 200; $i++) {
            $article = new Article();
            $article->title = 'baiviet ' . $i;
            $article->content = 'noi dung' .$i;
            $article->save();
        }
    }
}

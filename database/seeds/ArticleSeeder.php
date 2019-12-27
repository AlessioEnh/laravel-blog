<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create(
            [
                'title'=>'Заголовок',
                'description' => 'Описание статьи максимум 1024 символа',
                'author' => 'автор',
                'text'=>'Hello world',
            ]
        );
    }
}

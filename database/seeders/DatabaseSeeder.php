<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Tag::factory(20)->create();

        Article::factory(20)->create()->each(function ($article) {
            $article->tags()->attach([rand(1, 20), rand(1, 20)]);
        });
    }
}

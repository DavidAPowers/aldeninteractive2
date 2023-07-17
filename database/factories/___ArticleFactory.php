<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'category' => 'blog',
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'author' => $faker->name,
        'description' => $faker->paragraph,
        'fulltext' => $faker->paragraph        
    ];
});

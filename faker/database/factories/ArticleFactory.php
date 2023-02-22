<?php

use App\Models\Article;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'user_id' => User::factory()->create(),
        'slug' => $faker->slug,
        'keywords' => $faker->text,
        'description' => $faker->text,
        'content' => $faker->paragraph,
    ];
});
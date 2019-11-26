<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'content' => $faker->paragraph,
        'author_id'=> $faker->numberBetween(1,50),
        'post_type'=>$faker->randomElement(['video', 'text']),
        'category_id'=> $faker->numberBetween(1,10)
    ];
});

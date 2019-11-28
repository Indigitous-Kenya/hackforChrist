<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\model\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->sentence,
        'author_id'=> $faker->numberBetween(1, 120),
        'post_id'=> $faker->numberBetween(1, 300),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\model\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'url'=> $faker->youtubeUri(),
        'post_id'=> $faker->numberBetween(1,1000),
    ];
});

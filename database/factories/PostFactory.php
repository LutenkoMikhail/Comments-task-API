<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $userId = User::all()->random()->id;
    return [
        'text' => $faker->realText(100),
        'views' => $faker->numberBetween(10, 1000),
        'user_id' => $userId,
    ];
});

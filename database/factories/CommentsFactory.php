<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Model;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $postId = Post::all()->random()->id;
    $userId = User::all()->random()->id;
    return [
        'post_id' => $postId,
        'user_id' => $userId,
        'text' => $faker->realText(25)
    ];
});

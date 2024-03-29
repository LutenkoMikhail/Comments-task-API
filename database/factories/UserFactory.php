<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'gender' => $faker->randomElement([
            Config::get('constants.user.user_gender _male'),
            Config::get('constants.user.user_gender _female')
        ]),
        'birthday' => $faker->dateTimeBetween('-119 years', '-18 years')->format('Y-m-d'),
        'email' => $faker->unique()->freeEmail,
        'email_verified_at' => now(),
        'password' => $faker->password(8, 20),
        'remember_token' => Str::random(10),
        'api_token' => Str::random(60)
    ];
});

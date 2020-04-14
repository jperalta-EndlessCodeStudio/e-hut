<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'sons' => $faker->numberBetween(1, 8),
        'is_deleted' => $faker->randomElement(['0', '1', '2', '3']),
        'created_at' => $faker->dateTime,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Feature;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Feature::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'is_deleted' => $faker->randomElement(['0', '1', '2', '3']),
        'created_at'=>$faker->dateTime
    ];

});

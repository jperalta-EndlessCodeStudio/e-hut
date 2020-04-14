<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cabin;
use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Cabin::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'min_capacity' => 1,
        'max_capacity' => 6,
        'location' => 'Las Estancias, Aconquija, Catamarca',
        'description' => $faker->realText(),
        'is_deleted' => $faker->randomElement(['0', '1', '2', '3']),
        'created_at'=>$faker->dateTime
    ];
});

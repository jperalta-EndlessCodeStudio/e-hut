<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cabin;
use App\Client;
use App\Model;
use App\Rental;
use Faker\Generator as Faker;

$factory->define(Rental::class, function (Faker $faker) {
    $startDate = $faker->dateTimeBetween('-2 years');
    $endDate = $faker->dateTimeBetween($startDate, '+' . $faker->numberBetween(2, 30) . ' days');
    $firstCabinId = Cabin::orderBy('id')->first()->id;
    $lastCabinId = Cabin::orderBy('id', 'desc')->first()->id;
    $firstClientId = Client::orderBy('id')->first()->id;
    $lastClientId = Client::orderBy('id', 'desc')->first()->id;

    return [
        'cabin_id' => $faker->numberBetween($firstCabinId, $lastCabinId),
        'client_id' => $faker->numberBetween($firstClientId, $lastClientId),
        'start_date' => $startDate,
        'end_date' => $endDate,
        'agreed_payment' => $faker->randomFloat(2, 3000, 10000),
        'real_pay' => $faker->randomFloat(2, 3000, 10000),
        'is_deleted' => $faker->randomElement(['0', '1', '2', '3']),
    ];
});

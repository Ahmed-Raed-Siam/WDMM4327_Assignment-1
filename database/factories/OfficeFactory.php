<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Office;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Office::class, function (Faker $faker) {
    return [
        //
        'Code' => $faker->unique()->randomNumber(4),
        'City' => $faker->city,
        'Phone' => $faker->unique()->phoneNumber,
        'Address1' => $faker->address,
        'Address2' => $faker->secondaryAddress,
        'State' => $faker->state,
        'Country' => $faker->country,
        'PostalCode' => $faker->randomNumber(8),
        'Territory' => Str::random(20),
    ];
});

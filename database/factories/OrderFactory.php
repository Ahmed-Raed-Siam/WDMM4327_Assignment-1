<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Order::class, function (Faker $faker) {
    return [
        //
        'Customer_id' => factory(\App\Customer::class),
        'OrderDate' => $faker->dateTime,
        'RequiredDate' => $faker->dateTime,
        'ShippedDate' => $faker->dateTime,
        'Status' => $faker->randomDigit,
        'Comments' => Str::random(20),
    ];
});

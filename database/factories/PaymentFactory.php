<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        //
        'CheckNum' => Str::random(20),
        'Customer_id' => factory(\App\Customer::class),
        'PaymentDate' => $faker->dateTime,
        'Amount' => $faker->numberBetween(),
    ];
});

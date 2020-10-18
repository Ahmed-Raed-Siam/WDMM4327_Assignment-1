<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Customer::class, function (Faker $faker) {
    $employee_IDs = DB::table('employees')->pluck('id');

    return [
        //
        'SalesRepEmployee_number' => $faker->randomElement($employee_IDs),
        'Name' => $faker->name,
        'FirstName' => $faker->firstName,
        'LastName' => $faker->lastName,
        'Phone' => $faker->unique()->phoneNumber,
        'Address1' => $faker->address,
        'Address2' => $faker->secondaryAddress,
        'City' => $faker->city,
        'State' => $faker->state,
        'PostalCode' => $faker->randomNumber(8),
        'Country' => $faker->country,
        'CreditLimit' => $faker->randomFloat(2, 1, 100),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    $office_IDs = DB::table('offices')->pluck('Code');
//    $employee_IDs = DB::table('employees')->pluck('Code');
    return [
        //
//        'Office_code' => $faker->unique()->numberBetween(1,20),
        'OfficeCode' => $faker->randomElement($office_IDs),
//        'Reports_to' => factory(App\Employee::class),
        'Reports_to' => 1,
        'FirstName' => $faker->firstName,
        'LastName' => $faker->lastName,
        'Extension' => $faker->fileExtension,
        'Email' => $faker->unique()->safeEmail,
        'JobTitle' => $faker->title,
    ];
});

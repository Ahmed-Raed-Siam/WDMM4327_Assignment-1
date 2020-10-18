<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Productline;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Productline::class, function (Faker $faker) {
    return [
        //
        'DescInText' => Str::random(20),
        'DescInHTML' =>Str::random(20),
        'Image' => Str::random(10),
    ];
});

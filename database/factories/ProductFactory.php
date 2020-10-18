<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $productline_IDs = DB::table('productlines')->pluck('id');

    return [
        //
        'Code' => $faker->unique()->numberBetween(1,1000),
        'ProductLine_id' => $faker->randomElement($productline_IDs),
        'Name' => $faker->name,
        'Scale' => $faker->numberBetween(0,999999),
        'Vendor' => $faker->word(),
        'PdtDescription' => Str::random(20),
        'QtyInStock' => $faker->randomNumber(5),
        'BuyPrice' => $faker->randomFloat(19),
        'MSRP' => Str::random(12),
    ];
});

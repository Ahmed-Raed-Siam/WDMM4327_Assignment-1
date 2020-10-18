<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order_Product;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$order_IDs = DB::table('orders')->pluck('id');
$factory->define(Order_Product::class, function (Faker $faker) {
//    $product_codes = DB::table('products')->pluck('Code');

    return [
        //
        'Order_id' => $faker->numberBetween(1),
        'ProductCode' => $faker->randomDigit,
        'Qty' => $faker->randomNumber(8),
        'PriceEach' => $faker->randomFloat(2, 1, 100),

    ];
});



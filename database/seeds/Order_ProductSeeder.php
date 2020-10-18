<?php

use Illuminate\Database\Seeder;

class Order_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(\App\Order_Product::class,20)->create();

        $product_codes = DB::table('products')->pluck('Code');
        for ($i = 0; $i < 20; $i++) {
            \Illuminate\Support\Facades\DB::table('order_products')->insert([
                'Order_id' => $i + 1,
                'ProductCode' => $product_codes[$i],
                'Qty' => 2 * ($i + 5),
                'PriceEach' => 2 * ($i + 5),
            ]);
        }

    }
}

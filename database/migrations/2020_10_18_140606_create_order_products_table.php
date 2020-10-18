<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Order_id');
            $table->bigInteger('ProductCode');
            $table->integer('Qty');
            $table->decimal('PriceEach', 19, 0);
            $table->timestamps();

            $table->foreign('Order_id')->references('id')->on('orders');
            $table->foreign('ProductCode')->references('Code')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_products');
    }
}

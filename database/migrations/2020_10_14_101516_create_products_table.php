<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
//            $table->id();
            $table->bigInteger('Code')->primary();
            $table->unsignedBigInteger('ProductLine_id');
            $table->string('Name');
            $table->integer('Scale');
            $table->string('Vendor');
            $table->longText('PdtDescription');
            $table->integer('QtyInStock');
            $table->decimal('BuyPrice',19,0);
            $table->string('MSRP');
            $table->timestamps();

            $table->foreign('ProductLine_id')->references('id')->on('productlines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

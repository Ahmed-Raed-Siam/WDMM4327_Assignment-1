<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
//            $table->id();
            $table->bigInteger('Code')->primary();
            $table->string('City');
            $table->string('Phone');
            $table->longText('Address1');
            $table->longText('Address2');
            $table->string('State');
            $table->string('Country');
            $table->integer('PostalCode');
            $table->string('Territory');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');

    }
}

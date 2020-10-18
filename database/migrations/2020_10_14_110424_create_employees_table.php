<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('OfficeCode');
            $table->unsignedBigInteger('Reports_to')->nullable();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Extension');
            $table->string('Email')->unique();
            $table->string('JobTitle');
            $table->timestamps();
            $table->foreign('OfficeCode')->references('Code')->on('offices');
            $table->foreign('Reports_to')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

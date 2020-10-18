<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('SalesRepEmployee_number');
            $table->string('Name');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Phone');
            $table->longText('Address1');
            $table->longText('Address2');
            $table->string('City');
            $table->string('State');
            $table->integer('PostalCode');
            $table->string('Country');
            $table->decimal('CreditLimit');
            $table->timestamps();
            $table->foreign('SalesRepEmployee_number')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}

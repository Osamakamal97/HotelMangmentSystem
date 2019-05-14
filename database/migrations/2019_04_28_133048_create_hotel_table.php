<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Schema::create('hotel', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('name');
        //     $table->integer('hotel_stars');//enum
        //     $table->integer('phone_number');
        //     $table->string('address');
        //     $table->integer('number_of_rooms');
        //     $table->integer('number_of_employees');
        //     $table->integer('number_of_customers');
        //     $table->text('hotel_services');//for every serves true or false -should be in independent table
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('hotel');
    }
}

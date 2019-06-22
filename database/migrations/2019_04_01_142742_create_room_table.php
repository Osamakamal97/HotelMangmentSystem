<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('room_number');
            $table->enum('type', ['single','double','king','twin','cabana', 'superior', 'junior_suite']);//open website to show what there like booking.com
            $table->integer('price');
            $table->enum('book_type',['daily','monthly']);
            $table->boolean('is_booked');
            $table->text('image');
            $table->text('services');
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
        Schema::dropIfExists('rooms');
    }
}

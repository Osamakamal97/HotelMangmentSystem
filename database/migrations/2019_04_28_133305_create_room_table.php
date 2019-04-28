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
        Schema::create('room', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('room_number');
            $table->integer('floor');
            $table->enum('type', ['Standard', 'Superior', 'Junior Suite']);//open website to show what there like booking.com
            $table->integer('price');
            $table->enum('book_type', ['daily', 'monthly']);
            $table->boolean('is_booked');
            $table->text('room_services');
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
        Schema::dropIfExists('room');
    }
}

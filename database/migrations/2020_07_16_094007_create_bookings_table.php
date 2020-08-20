<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hotel_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('room_id');
            $table->integer('num_of_rooms');
            $table->datetime('date_from');
            $table->datetime('date_to');
            $table->unsignedInteger('booking_status_id');
            $table->integer('total_price');
            $table->integer('rate');
            $table->integer('status');
            $table->string('cmt');
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
        Schema::dropIfExists('booking');
    }
}

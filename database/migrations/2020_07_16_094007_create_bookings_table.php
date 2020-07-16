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
            $table->integer('count_rooms');
            $table->datetime('date_from');
            $table->unsignedInteger('booking_status_id');
            $table->datetime('date_to');
            $table->integer('total_price');
            $table->integer('rate');
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();
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

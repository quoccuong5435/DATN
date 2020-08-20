<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('booking_service', function (Blueprint $table) {
            $table->foreign('id_service')->references('id')->on('service_room');
            $table->foreign('id_booking_room')->references('id')->on('booking_room');
        });
          Schema::table('booking_room', function (Blueprint $table) {
            $table->foreign('booking_id')->references('id')->on('booking');
            $table->foreign('room_id')->references('id')->on('room');
        });
          Schema::table('booking', function (Blueprint $table) {
            $table->foreign('hotel_id')->references('id')->on('hotel');
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('room_id')->references('id')->on('room');
            $table->foreign('booking_status_id')->references('id')->on('booking_status');
        });
           Schema::table('service_room', function (Blueprint $table) {
            $table->foreign('hotel_id')->references('id')->on('hotel');
        });
            Schema::table('hotel_image', function (Blueprint $table) {
            $table->foreign('hotel_id')->references('id')->on('hotel');
        });
        Schema::table('hotel', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('place_id')->references('id')->on('places');
        });
            Schema::table('hotel_info_detail', function (Blueprint $table) {
            $table->foreign('hotel_id')->references('id')->on('hotel');
            $table->foreign('hotel_info_id')->references('id')->on('hotel_info');
        });
            Schema::table('room', function (Blueprint $table) {
            $table->foreign('hotel_id')->references('id')->on('hotel');
            $table->foreign('room_type_id')->references('id')->on('room_type');
            $table->foreign('room_status_id')->references('id')->on('room_status');
        });
              Schema::table('room_image', function (Blueprint $table) {
            $table->foreign('room_id')->references('id')->on('room');
        });
            Schema::table('payment', function (Blueprint $table) {
            $table->foreign('room_id')->references('id')->on('room');
            $table->foreign('payment_status_id')->references('id')->on('payment_status');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

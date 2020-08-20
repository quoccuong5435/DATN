<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hotel_id');
            $table->unsignedInteger('room_type_id');
            $table->unsignedInteger('room_status_id');
            $table->integer('num_of_rooms');
            $table->integer('empty_room');
            $table->integer('room_booked');
            $table->integer('num_of_people');
            $table->string('avatar_room');
            $table->string('description_room');
            $table->string('type_bed');
            $table->string('room_name');
            $table->integer('price_room');
            $table->integer('status');
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

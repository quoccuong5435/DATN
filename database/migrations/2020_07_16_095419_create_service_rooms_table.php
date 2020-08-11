<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_room', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_service');
            $table->integer('service_price');
            $table->unsignedInteger('service_type_id');
            $table->unsignedInteger('hotel_id');
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
        Schema::dropIfExists('service_room');
    }
}

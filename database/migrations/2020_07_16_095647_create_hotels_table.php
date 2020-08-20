<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('name_hotel');
            $table->string('avatar_hotel');
            $table->string('phone_hotel');
            $table->string('email_hotel');
            $table->string('address_hotel');
            $table->integer('rate_hotel');
            $table->float('score_hotel');
            $table->integer('status');
            $table->unsignedInteger('place_id');
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
        Schema::dropIfExists('hotel');
    }
}

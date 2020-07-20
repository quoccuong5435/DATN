<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelInfoDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_info_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hotel_id');
            $table->unsignedInteger('hotel_info_id');
            $table->string('description');
            $table->string('tinh');
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
        Schema::dropIfExists('hotel_info_detail');
    }
}

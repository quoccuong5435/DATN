<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname_user')->nullable();
            $table->string('avatar_user')->default('images/user/user.png');
            $table->string('gender_user');
            $table->string('address_user')->nullable();
            $table->integer('phone_user');
            $table->string('username');
            $table->string('email_user');
            $table->string('password');
            $table->integer('status')->default(0);
            $table->integer('role_user')->default(1);
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
        Schema::dropIfExists('user');
    }
}

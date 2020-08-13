<?php

use Illuminate\Database\Seeder;

class AddRoomStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_status')->insert([
        	['id'=>1,'room_status'=>'Còn trống','status'=>1],
        	['id'=>2,'room_status'=>'Đã được đặt','status'=>1],

         ]);
    }
}

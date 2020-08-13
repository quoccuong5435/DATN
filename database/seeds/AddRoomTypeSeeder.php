<?php

use Illuminate\Database\Seeder;

class AddRoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('room_type')->insert([
         	['room_type'=>'Standard Room','room_type_description'=>'Phòng tiêu chuẩn','status'=>1],
         	['room_type'=>'Superior Room','room_type_description'=>'Phòng cao cấp','status'=>1],
         	['room_type'=>'Deluxe Room','room_type_description'=>'Phòng sang trọng','status'=>1],
         	['room_type'=>'Suite Room','room_type_description'=>'Phòng hoàng gia','status'=>1],
         	['room_type'=>'Connecting Room','room_type_description'=>'Phòng gia đình','status'=>1]

         ]);
    }
}

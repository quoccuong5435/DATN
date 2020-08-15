<?php

use Illuminate\Database\Seeder;

class AddRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('room')->insert([
       	['hotel_id'=>1,'room_type_id'=>1,'room_status_id'=>1,'num_of_rooms'=>2,'num_of_people'=>2,'avatar_room'=>'01-1.jpg','description_room'=>'Hướng biển, 28m vuông','type_bed'=>'Giường đôi','room_name'=>'Superior Giường king, Quang cảnh Một góc biển','price_room'=>900000,'status'=>1],

       	['hotel_id'=>1,'room_type_id'=>2,'room_status_id'=>1,'num_of_rooms'=>3,'num_of_people'=>2,'avatar_room'=>'01-2.jpg','description_room'=>'Hướng phố, 32m vuông','type_bed'=>'Giường đôi','room_name'=>'Superior Giường king, Quang cảnh Thành Phố','price_room'=>910000,'status'=>1],

       	['hotel_id'=>1,'room_type_id'=>3,'room_status_id'=>1,'num_of_rooms'=>3,'num_of_people'=>3,'avatar_room'=>'01-3.jpg','description_room'=>'Hướng phố, 45m vuông','type_bed'=>'Giường đôi','room_name'=>'Deluxe 02 Giường đơn, ban công, trực diện biển','price_room'=>1100000,'status'=>1],

       	['hotel_id'=>1,'room_type_id'=>4,'room_status_id'=>1,'num_of_rooms'=>3,'num_of_people'=>3,'avatar_room'=>'01-4.jpg','description_room'=>'Hướng biển, 48m vuông','type_bed'=>'Giường đôi','room_name'=>'SALA Suite, ban Công, trực diện biển','price_room'=>1200000,'status'=>1],

       	['hotel_id'=>1,'room_type_id'=>5,'room_status_id'=>1,'num_of_rooms'=>2,'num_of_people'=>5,'avatar_room'=>'01-5.jpg','description_room'=>'Hướng biển, 52m vuông','type_bed'=>'2 Giường đơn + 1 Giường đôi','room_name'=>'Suite gia đình, 02 phòng ngủ, hướng biển và phố','price_room'=>2000000,'status'=>1],



        ]);
    }
}

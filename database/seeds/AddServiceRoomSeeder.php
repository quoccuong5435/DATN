<?php

use Illuminate\Database\Seeder;

class AddServiceRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('service_room')->insert([
         	['name_service'=>'Hồ bơi ngoài trời', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Bãi đỗ xe', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Thang máy', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Wifi miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Nhà hàng', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Lễ tân 24/24', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Massage', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Đưa đó sân bay tính phí', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Cho thuê xe máy', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Xe đưa đón tham quan', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Taxi/Cho thuê xe hơi', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Cho thuê xe đạp', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Phòng gym', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Tiện nghi BBQ', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Dọn phòng hàng ngày', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Đặt vé xe/máy bay', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Giữ hành lý miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>1,'status'=>1],


         	['name_service'=>'Hồ bơi ngoài trời', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Bãi đỗ xe', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Thang máy', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Wifi miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Nhà hàng', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Lễ tân 24/24', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Massage', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Đưa đó sân bay tính phí', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Cho thuê xe máy', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Xe đưa đón tham quan', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Taxi/Cho thuê xe hơi', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>1,'status'=>1],
         	['name_service'=>'Cho thuê xe đạp', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Phòng gym', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Tiện nghi BBQ', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Dọn phòng hàng ngày', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Đặt vé xe/máy bay', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>2,'status'=>1],
         	['name_service'=>'Giữ hành lý miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>2,'status'=>1],



         	['name_service'=>'Hồ bơi ngoài trời', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Bãi đỗ xe', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Thang máy', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Wifi miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Nhà hàng', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Lễ tân 24/24', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Massage', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Đưa đó sân bay tính phí', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Cho thuê xe máy', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Xe đưa đón tham quan', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Taxi/Cho thuê xe hơi', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Cho thuê xe đạp', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Phòng gym', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Tiện nghi BBQ', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Dọn phòng hàng ngày', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Đặt vé xe/máy bay', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>3,'status'=>1],
         	['name_service'=>'Giữ hành lý miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>3,'status'=>1],



         	['name_service'=>'Hồ bơi ngoài trời', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Bãi đỗ xe', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Thang máy', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Wifi miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Nhà hàng', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Lễ tân 24/24', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Massage', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Đưa đó sân bay tính phí', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Cho thuê xe máy', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Xe đưa đón tham quan', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Taxi/Cho thuê xe hơi', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Cho thuê xe đạp', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Phòng gym', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Tiện nghi BBQ', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Dọn phòng hàng ngày', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Đặt vé xe/máy bay', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>4,'status'=>1],
         	['name_service'=>'Giữ hành lý miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>4,'status'=>1],



         	['name_service'=>'Hồ bơi ngoài trời', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Bãi đỗ xe', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Thang máy', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Wifi miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Nhà hàng', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Lễ tân 24/24', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Massage', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Đưa đó sân bay tính phí', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Cho thuê xe máy', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Xe đưa đón tham quan', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Taxi/Cho thuê xe hơi', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Cho thuê xe đạp', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Phòng gym', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Tiện nghi BBQ', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Dọn phòng hàng ngày', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Đặt vé xe/máy bay', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>5,'status'=>1],
         	['name_service'=>'Giữ hành lý miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>5,'status'=>1],


         	['name_service'=>'Hồ bơi ngoài trời', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>6,'status'=>1],
         	['name_service'=>'Bãi đỗ xe', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>6,'status'=>1],
         	['name_service'=>'Thang máy', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>6,'status'=>1],
         	['name_service'=>'Wifi miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>6,'status'=>1],
         	['name_service'=>'Nhà hàng', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>6,'status'=>1],
         	['name_service'=>'Lễ tân 24/24', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>6,'status'=>1],
         	['name_service'=>'Massage', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>6,'status'=>1],
         	['name_service'=>'Đưa đó sân bay tính phí', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>6,'status'=>1],
         	



         	['name_service'=>'Cho thuê xe máy', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>7,'status'=>1],
         	['name_service'=>'Xe đưa đón tham quan', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>7,'status'=>1],
         	['name_service'=>'Taxi/Cho thuê xe hơi', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>7,'status'=>1],
         	['name_service'=>'Cho thuê xe đạp', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>7,'status'=>1],
         	['name_service'=>'Phòng gym', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>7,'status'=>1],
         	['name_service'=>'Tiện nghi BBQ', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>7,'status'=>1],
         	['name_service'=>'Dọn phòng hàng ngày', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>7,'status'=>1],
         	['name_service'=>'Đặt vé xe/máy bay', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>7,'status'=>1],
         	['name_service'=>'Giữ hành lý miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>7,'status'=>1],



         	['name_service'=>'Hồ bơi ngoài trời', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>8,'status'=>1],
         	['name_service'=>'Bãi đỗ xe', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>8,'status'=>1],
         	['name_service'=>'Thang máy', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>8,'status'=>1],
         	['name_service'=>'Wifi miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>8,'status'=>1],
         	['name_service'=>'Nhà hàng', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>8,'status'=>1],
         	['name_service'=>'Lễ tân 24/24', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>8,'status'=>1],
         	['name_service'=>'Massage', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>8,'status'=>1],
         	['name_service'=>'Đưa đó sân bay tính phí', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>8,'status'=>1],



         	['name_service'=>'Hồ bơi ngoài trời', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>9,'status'=>1],
         	['name_service'=>'Bãi đỗ xe', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>9,'status'=>1],
         	['name_service'=>'Thang máy', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>9,'status'=>1],
         	['name_service'=>'Wifi miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>9,'status'=>1],
         	['name_service'=>'Nhà hàng', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>9,'status'=>1],
         	['name_service'=>'Lễ tân 24/24', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>9,'status'=>1],
         	['name_service'=>'Massage', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>9,'status'=>1],
         	['name_service'=>'Đưa đó sân bay tính phí', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>9,'status'=>1],



         	['name_service'=>'Hồ bơi ngoài trời', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>10,'status'=>1],
         	['name_service'=>'Bãi đỗ xe', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>10,'status'=>1],
         	['name_service'=>'Thang máy', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>10,'status'=>1],
         	['name_service'=>'Wifi miễn phí', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>10,'status'=>1],
         	['name_service'=>'Nhà hàng', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>10,'status'=>1],
         	['name_service'=>'Lễ tân 24/24', 'service_price'=>'0', 'service_type'=>'Miễn phí','hotel_id'=>10,'status'=>1],
         	['name_service'=>'Massage', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>10,'status'=>1],
         	['name_service'=>'Đưa đó sân bay tính phí', 'service_price'=>'0', 'service_type'=>'Tính phí','hotel_id'=>10,'status'=>1],


         ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class AddPlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
         	['id'=>1,'name_place'=>'Đà Nẵng','avatar_place'=>'Da Nang/DaNang.jpg','description_place'=>'Nha Trang là một thành phố ven biển và là trung tâm của tỉnh Khánh Hòa, Nha Trang được mệnh danh là hòn ngọc của biển Đông'],
         	['id'=>2,'name_place'=>'Hồ Chí Minh','avatar_place'=>'HCM/HCM.jpg','description_place'=>'Hồ Chí Minh là thành phố đông dân nhất, đồng thời là trung tâm kinh tế, văn hóa'],
         	['id'=>3,'name_place'=>'Bắc Kạn','avatar_place'=>'Bac Kan/BacKan.jpg','description_place'=>'Hồ Chí Minh là thành phố đông dân nhất, đồng thời là trung tâm kinh tế '],
         	['id'=>4,'name_place'=>'An Giang','avatar_place'=>'An Giang/AnGiang.jpg','description_place'=>'Hồ Chí Minh là thành phố đông dân nhất, đồng thời là trung tâm kinh tế, văn hóa, giáo dục của Việt Nam. Hồ Chí Minh có nhiều điểm du lịch như chợ Bến Thành, nhà thờ Đức Bà, suối Tiên, địa đạo Củ Chi. Hãy để Mytour hỗ trợ bạn để có 1 chuyến đi thú vị, tiết kiệm bằng cách đặt phòng khách sạn Hồ Chí Minh ngay bây giờ với giá từ 110,000 VND đến 8,006,000 VND, với hơn 15836 đánh giá thật từ khách hàng.'],
         	['id'=>5,'name_place'=>'Vũng Tàu','avatar_place'=>'Vung Tau/VungTau.jpg','description_place'=>'Hồ Chí Minh là thành phố đông dân nhất, đồng thời là trung tâm kinh tế, văn hóa, giáo dục của Việt Nam.'],
         	['id'=>6,'name_place'=>'Hà Nội','avatar_place'=>'Ha Noi/HaNoi.jpg','description_place'=>'Hà Nội là trung tâm văn hóa, kinh tế, giáo dục của cả miền Bắc']
         ]);

    }
}

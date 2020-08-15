<?php

use Illuminate\Database\Seeder;

class AddHotelInfoDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('hotel_info_detail')->insert([ 
         	['hotel_id'=>1,'hotel_info_id'=>3,'description'=>' Nằm tại thành phố Đà Nẵng, cách Bãi biển Mỹ Khê 100 m, Sala Danang Beach Hotel có nhà hàng, chỗ đỗ xe riêng miễn phí, xe đạp cho khách sử dụng miễn phí và hồ bơi ngoài trời. Các tiện nghi của chỗ nghỉ bao gồm trung tâm thể dục, quán bar và phòng khách chung. Chỗ nghỉ cũng cung cấp dịch vụ lễ tân 24 giờ, dịch vụ phòng và dịch vụ thu đổi ngoại tệ cho khách.
         		Phòng nghỉ tại khách sạn được trang bị máy điều hòa, TV màn hình phẳng với truyền hình cáp, ấm đun nước, chậu rửa vệ sinh (bidet), máy sấy tóc và bàn làm việc. Ngoài ra, phòng còn có WiFi miễn phí, phòng tắm riêng với vòi sen và đồ vệ sinh cá nhân miễn phí cùng khu vực ghế ngồi.
         			Chỗ nghỉ phục vụ bữa sáng tự chọn.Sala Danang Beach Hotel có sân hiên.
         			Khách sạn cách Cầu tàu Tình Yêu 2 km và Bãi biển Bắc Mỹ An 2,5 km. Sân bay gần nhất là sân bay quốc tế Đà Nẵng, cách Sala Danang Beach Hotel 6 km. Chỗ nghỉ cung cấp dịch vụ đưa đón sân bay miễn phí.</br>
         			Các cặp đôi đặc biệt thích địa điểm này', 'status'=>1],

         	['hotel_id'=>2,'hotel_info_id'=>3,'description'=>'Chicland mở cửa vào ngày 01/6/2019, là khách sạn 4 sao về vật chất, 5 sao về chất lượng dịch vụ bao gồm 133 phòng và 17 căn hộ.  Phần lớn tất cả các dịch vụ đều sử dụng các nguyên vật liệu có thể  tái sử dụng, dễ phân hủy và thân thiện với môi trường.
         	Với sứ mệnh mang thiên nhiên đến gần hơn với con người, thiết kế tinh tế tạo nên không gian thoải mái cho khách hàng như đang ở nhà, từ mỗi một phòng của Chicland khách hàng đều có thể nhìn thấy cây xanh và tận hưởng ánh sáng tự nhiên. Chúng tôi với mong muốn mang đến cho khách hàng kì nghỉ đáng nhớ nhất khi đến với khách sạn. ', 'status'=>1],


         	['hotel_id'=>3,'hotel_info_id'=>2,'description'=>'Kỳ nghỉ sang trọng tại Furama Resort Danang sẽ mở đầu hành trình của du khách tới các di sản được UNESCO công nhận như Kinh thành Huế, cách resort 2 giờ lái xe. Các tiện nghi đẳng cấp thế giới như hồ bơi nước ngọt, spa và 4 lựa chọn ăn uống đang chờ đón du khách tại resort này.</br>
         	Furama Resort Danang tọa lạc ở phường Bắc Mỹ An. Từ đây đến thương cảng “Con đường Tơ lụa” cổ kính của Hội An mất 30 phút lái xe và Thánh Địa Mỹ Sơn cách đó chưa đến 2 giờ.
         	Tất cả các phòng gắn máy điều hòa rộng rãi tại đây đều được thiết kế trang nhã và có ban công riêng nhìn ra quang cảnh nhiệt đới. Trong phòng có sàn gỗ và thảm thanh lịch cùng tủ quần áo không cửa ngăn, không gian tiếp khách rộng rãi cùng phòng tắm lớn lát đá cẩm thạch.
         	Furama cung cấp các liệu pháp làm đẹp và spa sang trọng bao gồm nhiều phong cách mát-xa và chăm sóc da mặt. Khách có thể thư giãn với phòng xông hơi ướt và xông hơi khô hoặc tận hưởng dịch vụ mát-xa bên hồ bơi.
         	Water Sport House ngay trong khuôn viên cung cấp các thiết bị lướt ván, chèo thuyền kayak trên biển và trượt nước. Resort cũng cung cấp các lớp học yoga và Thái Cực Quyền trên bãi biển. Những vị khách trẻ tuổi hơn có thể tận hưởng phòng chiếu phim và phòng trò chơi được trang bị máy Play Station 3.','status'=>1],

         	['hotel_id'=>4,'hotel_info_id'=>1,'description'=>'Nằm dọc theo Bãi biển Non Nước, Melia Danang cách Sân bay Quốc tế Đà Nẵng chỉ 15 phút lái xe. Resort này có khu vực bãi biển riêng dài 415 m, hồ bơi lớn ngoài trời, spa và vườn cảnh tuyệt đẹp. Nơi đây cung cấp chỗ đỗ xe miễn phí ngay tại khuôn viên và Wi-Fi miễn phí trong tất cả các khu vực.
         	Melia Danang nằm cách Ngũ Hành Sơn vài phút lái xe trong khi Phố Cổ Hội An, Di sản Thế giới được UNESCO công nhận, cách đó 20 phút lái xe. Chợ Đà Nẵng nằm trong bán kính 15 phút lái xe từ resort.
         	Với thiết kế nội thất hiện đại, các phòng nghỉ gắn máy điều hòa tại đây có tủ quần áo, két an toàn (trong phòng), ghế sofa, TV truyền hình cáp/vệ tinh màn hình phẳng, ấm đun nước điện và minibar. Phòng tắm riêng được trang bị tiện nghi vòi sen, máy sấy tóc, áo choàng tắm và đồ vệ sinh cá nhân sang trọng. Du khách có thể ngắm nhìn quang cảnh biển, núi non hoặc khu vườn từ phòng nghỉ.
         	Nhân viên thân thiện ở quầy lễ tân 24 giờ có thể trợ giúp khách với dịch vụ đặt vé, giặt là và sắp xếp tiệc/hội họp. Dịch vụ đưa/đón sân bay và dịch vụ hỗ trợ doanh nhân cũng có thể được cung cấp với một khoản phụ phí. YHI Spa có đủ loại dịch vụ mát-xa thư giãn.','status'=>1],

         	['hotel_id'=>5,'hotel_info_id'=>3,'description'=>'Nằm tại thành phố Đà Nẵng, cách Bãi biển Mỹ Khê vài bước chân, Rosamia Da Nang Hotel có nhà hàng, chỗ đỗ xe riêng miễn phí, trung tâm thể dục và quán bar. Khách sạn 5 sao này cung cấp dịch vụ phòng, CLB trẻ em và WiFi miễn phí. Khách sạn còn có hồ bơi trong nhà, phòng xông hơi khô, chương trình giải trí buổi tối và lễ tân 24 giờ.
         	Tất cả phòng nghỉ tại đây đều được trang bị máy điều hòa, TV màn hình phẳng với truyền hình cáp, ấm đun nước, vòi sen, máy sấy tóc và bàn làm việc. Ngoài ra, phòng còn có tủ để quần áo và phòng tắm riêng.
         	Rosamia Da Nang Hotel phục vụ bữa sáng kiểu lục địa.
         	Khách sạn cách Bãi biển Bắc Mỹ An 1,5 km và Cầu tàu Tình Yêu 3,2 km. Sân bay gần nhất là sân bay quốc tế Đà Nẵng, cách Rosamia Da Nang Hotel 6 km. Chỗ nghỉ cung cấp dịch vụ đưa đón sân bay miễn phí.','status'=>1],

            ['hotel_id'=>6,'hotel_info_id'=>3,'description'=>'Kỳ nghỉ sang trọng tại Furama Resort Danang sẽ mở đầu hành trình của du khách tới các di sản được UNESCO công nhận như Kinh thành Huế, cách resort 2 giờ lái xe. Các tiện nghi đẳng cấp thế giới như hồ bơi nước ngọt, spa và 4 lựa chọn ăn uống đang chờ đón du khách tại resort này.</br>
            Furama Resort Danang tọa lạc ở phường Bắc Mỹ An. Từ đây đến thương cảng “Con đường Tơ lụa” cổ kính của Hội An mất 30 phút lái xe và Thánh Địa Mỹ Sơn cách đó chưa đến 2 giờ.
            Tất cả các phòng gắn máy điều hòa rộng rãi tại đây đều được thiết kế trang nhã và có ban công riêng nhìn ra quang cảnh nhiệt đới. Trong phòng có sàn gỗ và thảm thanh lịch cùng tủ quần áo không cửa ngăn, không gian tiếp khách rộng rãi cùng phòng tắm lớn lát đá cẩm thạch.
            Furama cung cấp các liệu pháp làm đẹp và spa sang trọng bao gồm nhiều phong cách mát-xa và chăm sóc da mặt. Khách có thể thư giãn với phòng xông hơi ướt và xông hơi khô hoặc tận hưởng dịch vụ mát-xa bên hồ bơi.
            Water Sport House ngay trong khuôn viên cung cấp các thiết bị lướt ván, chèo thuyền kayak trên biển và trượt nước. Resort cũng cung cấp các lớp học yoga và Thái Cực Quyền trên bãi biển. Những vị khách trẻ tuổi hơn có thể tận hưởng phòng chiếu phim và phòng trò chơi được trang bị máy Play Station 3.','status'=>1],

            ['hotel_id'=>7,'hotel_info_id'=>3,'description'=>'Kỳ nghỉ sang trọng tại Furama Resort Danang sẽ mở đầu hành trình của du khách tới các di sản được UNESCO công nhận như Kinh thành Huế, cách resort 2 giờ lái xe. Các tiện nghi đẳng cấp thế giới như hồ bơi nước ngọt, spa và 4 lựa chọn ăn uống đang chờ đón du khách tại resort này.</br>
            Furama Resort Danang tọa lạc ở phường Bắc Mỹ An. Từ đây đến thương cảng “Con đường Tơ lụa” cổ kính của Hội An mất 30 phút lái xe và Thánh Địa Mỹ Sơn cách đó chưa đến 2 giờ.
            Tất cả các phòng gắn máy điều hòa rộng rãi tại đây đều được thiết kế trang nhã và có ban công riêng nhìn ra quang cảnh nhiệt đới. Trong phòng có sàn gỗ và thảm thanh lịch cùng tủ quần áo không cửa ngăn, không gian tiếp khách rộng rãi cùng phòng tắm lớn lát đá cẩm thạch.
            Furama cung cấp các liệu pháp làm đẹp và spa sang trọng bao gồm nhiều phong cách mát-xa và chăm sóc da mặt. Khách có thể thư giãn với phòng xông hơi ướt và xông hơi khô hoặc tận hưởng dịch vụ mát-xa bên hồ bơi.
            Water Sport House ngay trong khuôn viên cung cấp các thiết bị lướt ván, chèo thuyền kayak trên biển và trượt nước. Resort cũng cung cấp các lớp học yoga và Thái Cực Quyền trên bãi biển. Những vị khách trẻ tuổi hơn có thể tận hưởng phòng chiếu phim và phòng trò chơi được trang bị máy Play Station 3.','status'=>1],

            ['hotel_id'=>8,'hotel_info_id'=>3,'description'=>'Kỳ nghỉ sang trọng tại Furama Resort Danang sẽ mở đầu hành trình của du khách tới các di sản được UNESCO công nhận như Kinh thành Huế, cách resort 2 giờ lái xe. Các tiện nghi đẳng cấp thế giới như hồ bơi nước ngọt, spa và 4 lựa chọn ăn uống đang chờ đón du khách tại resort này.</br>
            Furama Resort Danang tọa lạc ở phường Bắc Mỹ An. Từ đây đến thương cảng “Con đường Tơ lụa” cổ kính của Hội An mất 30 phút lái xe và Thánh Địa Mỹ Sơn cách đó chưa đến 2 giờ.
            Tất cả các phòng gắn máy điều hòa rộng rãi tại đây đều được thiết kế trang nhã và có ban công riêng nhìn ra quang cảnh nhiệt đới. Trong phòng có sàn gỗ và thảm thanh lịch cùng tủ quần áo không cửa ngăn, không gian tiếp khách rộng rãi cùng phòng tắm lớn lát đá cẩm thạch.
            Furama cung cấp các liệu pháp làm đẹp và spa sang trọng bao gồm nhiều phong cách mát-xa và chăm sóc da mặt. Khách có thể thư giãn với phòng xông hơi ướt và xông hơi khô hoặc tận hưởng dịch vụ mát-xa bên hồ bơi.
            Water Sport House ngay trong khuôn viên cung cấp các thiết bị lướt ván, chèo thuyền kayak trên biển và trượt nước. Resort cũng cung cấp các lớp học yoga và Thái Cực Quyền trên bãi biển. Những vị khách trẻ tuổi hơn có thể tận hưởng phòng chiếu phim và phòng trò chơi được trang bị máy Play Station 3.','status'=>1],

            ['hotel_id'=>9,'hotel_info_id'=>3,'description'=>'Kỳ nghỉ sang trọng tại Furama Resort Danang sẽ mở đầu hành trình của du khách tới các di sản được UNESCO công nhận như Kinh thành Huế, cách resort 2 giờ lái xe. Các tiện nghi đẳng cấp thế giới như hồ bơi nước ngọt, spa và 4 lựa chọn ăn uống đang chờ đón du khách tại resort này.</br>
            Furama Resort Danang tọa lạc ở phường Bắc Mỹ An. Từ đây đến thương cảng “Con đường Tơ lụa” cổ kính của Hội An mất 30 phút lái xe và Thánh Địa Mỹ Sơn cách đó chưa đến 2 giờ.
            Tất cả các phòng gắn máy điều hòa rộng rãi tại đây đều được thiết kế trang nhã và có ban công riêng nhìn ra quang cảnh nhiệt đới. Trong phòng có sàn gỗ và thảm thanh lịch cùng tủ quần áo không cửa ngăn, không gian tiếp khách rộng rãi cùng phòng tắm lớn lát đá cẩm thạch.
            Furama cung cấp các liệu pháp làm đẹp và spa sang trọng bao gồm nhiều phong cách mát-xa và chăm sóc da mặt. Khách có thể thư giãn với phòng xông hơi ướt và xông hơi khô hoặc tận hưởng dịch vụ mát-xa bên hồ bơi.
            Water Sport House ngay trong khuôn viên cung cấp các thiết bị lướt ván, chèo thuyền kayak trên biển và trượt nước. Resort cũng cung cấp các lớp học yoga và Thái Cực Quyền trên bãi biển. Những vị khách trẻ tuổi hơn có thể tận hưởng phòng chiếu phim và phòng trò chơi được trang bị máy Play Station 3.','status'=>1],

            ['hotel_id'=>10,'hotel_info_id'=>3,'description'=>'Kỳ nghỉ sang trọng tại Furama Resort Danang sẽ mở đầu hành trình của du khách tới các di sản được UNESCO công nhận như Kinh thành Huế, cách resort 2 giờ lái xe. Các tiện nghi đẳng cấp thế giới như hồ bơi nước ngọt, spa và 4 lựa chọn ăn uống đang chờ đón du khách tại resort này.</br>
            Furama Resort Danang tọa lạc ở phường Bắc Mỹ An. Từ đây đến thương cảng “Con đường Tơ lụa” cổ kính của Hội An mất 30 phút lái xe và Thánh Địa Mỹ Sơn cách đó chưa đến 2 giờ.
            Tất cả các phòng gắn máy điều hòa rộng rãi tại đây đều được thiết kế trang nhã và có ban công riêng nhìn ra quang cảnh nhiệt đới. Trong phòng có sàn gỗ và thảm thanh lịch cùng tủ quần áo không cửa ngăn, không gian tiếp khách rộng rãi cùng phòng tắm lớn lát đá cẩm thạch.
            Furama cung cấp các liệu pháp làm đẹp và spa sang trọng bao gồm nhiều phong cách mát-xa và chăm sóc da mặt. Khách có thể thư giãn với phòng xông hơi ướt và xông hơi khô hoặc tận hưởng dịch vụ mát-xa bên hồ bơi.
            Water Sport House ngay trong khuôn viên cung cấp các thiết bị lướt ván, chèo thuyền kayak trên biển và trượt nước. Resort cũng cung cấp các lớp học yoga và Thái Cực Quyền trên bãi biển. Những vị khách trẻ tuổi hơn có thể tận hưởng phòng chiếu phim và phòng trò chơi được trang bị máy Play Station 3.','status'=>1],

            ['hotel_id'=>11,'hotel_info_id'=>3,'description'=>'Kỳ nghỉ sang trọng tại Furama Resort Danang sẽ mở đầu hành trình của du khách tới các di sản được UNESCO công nhận như Kinh thành Huế, cách resort 2 giờ lái xe. Các tiện nghi đẳng cấp thế giới như hồ bơi nước ngọt, spa và 4 lựa chọn ăn uống đang chờ đón du khách tại resort này.</br>
            Furama Resort Danang tọa lạc ở phường Bắc Mỹ An. Từ đây đến thương cảng “Con đường Tơ lụa” cổ kính của Hội An mất 30 phút lái xe và Thánh Địa Mỹ Sơn cách đó chưa đến 2 giờ.
            Tất cả các phòng gắn máy điều hòa rộng rãi tại đây đều được thiết kế trang nhã và có ban công riêng nhìn ra quang cảnh nhiệt đới. Trong phòng có sàn gỗ và thảm thanh lịch cùng tủ quần áo không cửa ngăn, không gian tiếp khách rộng rãi cùng phòng tắm lớn lát đá cẩm thạch.
            Furama cung cấp các liệu pháp làm đẹp và spa sang trọng bao gồm nhiều phong cách mát-xa và chăm sóc da mặt. Khách có thể thư giãn với phòng xông hơi ướt và xông hơi khô hoặc tận hưởng dịch vụ mát-xa bên hồ bơi.
            Water Sport House ngay trong khuôn viên cung cấp các thiết bị lướt ván, chèo thuyền kayak trên biển và trượt nước. Resort cũng cung cấp các lớp học yoga và Thái Cực Quyền trên bãi biển. Những vị khách trẻ tuổi hơn có thể tận hưởng phòng chiếu phim và phòng trò chơi được trang bị máy Play Station 3.','status'=>1],

            ['hotel_id'=>12,'hotel_info_id'=>3,'description'=>'Kỳ nghỉ sang trọng tại Furama Resort Danang sẽ mở đầu hành trình của du khách tới các di sản được UNESCO công nhận như Kinh thành Huế, cách resort 2 giờ lái xe. Các tiện nghi đẳng cấp thế giới như hồ bơi nước ngọt, spa và 4 lựa chọn ăn uống đang chờ đón du khách tại resort này.</br>
            Furama Resort Danang tọa lạc ở phường Bắc Mỹ An. Từ đây đến thương cảng “Con đường Tơ lụa” cổ kính của Hội An mất 30 phút lái xe và Thánh Địa Mỹ Sơn cách đó chưa đến 2 giờ.
            Tất cả các phòng gắn máy điều hòa rộng rãi tại đây đều được thiết kế trang nhã và có ban công riêng nhìn ra quang cảnh nhiệt đới. Trong phòng có sàn gỗ và thảm thanh lịch cùng tủ quần áo không cửa ngăn, không gian tiếp khách rộng rãi cùng phòng tắm lớn lát đá cẩm thạch.
            Furama cung cấp các liệu pháp làm đẹp và spa sang trọng bao gồm nhiều phong cách mát-xa và chăm sóc da mặt. Khách có thể thư giãn với phòng xông hơi ướt và xông hơi khô hoặc tận hưởng dịch vụ mát-xa bên hồ bơi.
            Water Sport House ngay trong khuôn viên cung cấp các thiết bị lướt ván, chèo thuyền kayak trên biển và trượt nước. Resort cũng cung cấp các lớp học yoga và Thái Cực Quyền trên bãi biển. Những vị khách trẻ tuổi hơn có thể tận hưởng phòng chiếu phim và phòng trò chơi được trang bị máy Play Station 3.','status'=>1],

            ['hotel_id'=>13,'hotel_info_id'=>3,'description'=>'Kỳ nghỉ sang trọng tại Furama Resort Danang sẽ mở đầu hành trình của du khách tới các di sản được UNESCO công nhận như Kinh thành Huế, cách resort 2 giờ lái xe. Các tiện nghi đẳng cấp thế giới như hồ bơi nước ngọt, spa và 4 lựa chọn ăn uống đang chờ đón du khách tại resort này.</br>
            Furama Resort Danang tọa lạc ở phường Bắc Mỹ An. Từ đây đến thương cảng “Con đường Tơ lụa” cổ kính của Hội An mất 30 phút lái xe và Thánh Địa Mỹ Sơn cách đó chưa đến 2 giờ.
            Tất cả các phòng gắn máy điều hòa rộng rãi tại đây đều được thiết kế trang nhã và có ban công riêng nhìn ra quang cảnh nhiệt đới. Trong phòng có sàn gỗ và thảm thanh lịch cùng tủ quần áo không cửa ngăn, không gian tiếp khách rộng rãi cùng phòng tắm lớn lát đá cẩm thạch.
            Furama cung cấp các liệu pháp làm đẹp và spa sang trọng bao gồm nhiều phong cách mát-xa và chăm sóc da mặt. Khách có thể thư giãn với phòng xông hơi ướt và xông hơi khô hoặc tận hưởng dịch vụ mát-xa bên hồ bơi.
            Water Sport House ngay trong khuôn viên cung cấp các thiết bị lướt ván, chèo thuyền kayak trên biển và trượt nước. Resort cũng cung cấp các lớp học yoga và Thái Cực Quyền trên bãi biển. Những vị khách trẻ tuổi hơn có thể tận hưởng phòng chiếu phim và phòng trò chơi được trang bị máy Play Station 3.','status'=>1],

            ['hotel_id'=>14,'hotel_info_id'=>3,'description'=>'Kỳ nghỉ sang trọng tại Furama Resort Danang sẽ mở đầu hành trình của du khách tới các di sản được UNESCO công nhận như Kinh thành Huế, cách resort 2 giờ lái xe. Các tiện nghi đẳng cấp thế giới như hồ bơi nước ngọt, spa và 4 lựa chọn ăn uống đang chờ đón du khách tại resort này.</br>
            Furama Resort Danang tọa lạc ở phường Bắc Mỹ An. Từ đây đến thương cảng “Con đường Tơ lụa” cổ kính của Hội An mất 30 phút lái xe và Thánh Địa Mỹ Sơn cách đó chưa đến 2 giờ.
            Tất cả các phòng gắn máy điều hòa rộng rãi tại đây đều được thiết kế trang nhã và có ban công riêng nhìn ra quang cảnh nhiệt đới. Trong phòng có sàn gỗ và thảm thanh lịch cùng tủ quần áo không cửa ngăn, không gian tiếp khách rộng rãi cùng phòng tắm lớn lát đá cẩm thạch.
            Furama cung cấp các liệu pháp làm đẹp và spa sang trọng bao gồm nhiều phong cách mát-xa và chăm sóc da mặt. Khách có thể thư giãn với phòng xông hơi ướt và xông hơi khô hoặc tận hưởng dịch vụ mát-xa bên hồ bơi.
            Water Sport House ngay trong khuôn viên cung cấp các thiết bị lướt ván, chèo thuyền kayak trên biển và trượt nước. Resort cũng cung cấp các lớp học yoga và Thái Cực Quyền trên bãi biển. Những vị khách trẻ tuổi hơn có thể tận hưởng phòng chiếu phim và phòng trò chơi được trang bị máy Play Station 3.','status'=>1],

            ['hotel_id'=>15,'hotel_info_id'=>3,'description'=>'Kỳ nghỉ sang trọng tại Furama Resort Danang sẽ mở đầu hành trình của du khách tới các di sản được UNESCO công nhận như Kinh thành Huế, cách resort 2 giờ lái xe. Các tiện nghi đẳng cấp thế giới như hồ bơi nước ngọt, spa và 4 lựa chọn ăn uống đang chờ đón du khách tại resort này.</br>
            Furama Resort Danang tọa lạc ở phường Bắc Mỹ An. Từ đây đến thương cảng “Con đường Tơ lụa” cổ kính của Hội An mất 30 phút lái xe và Thánh Địa Mỹ Sơn cách đó chưa đến 2 giờ.
            Tất cả các phòng gắn máy điều hòa rộng rãi tại đây đều được thiết kế trang nhã và có ban công riêng nhìn ra quang cảnh nhiệt đới. Trong phòng có sàn gỗ và thảm thanh lịch cùng tủ quần áo không cửa ngăn, không gian tiếp khách rộng rãi cùng phòng tắm lớn lát đá cẩm thạch.
            Furama cung cấp các liệu pháp làm đẹp và spa sang trọng bao gồm nhiều phong cách mát-xa và chăm sóc da mặt. Khách có thể thư giãn với phòng xông hơi ướt và xông hơi khô hoặc tận hưởng dịch vụ mát-xa bên hồ bơi.
            Water Sport House ngay trong khuôn viên cung cấp các thiết bị lướt ván, chèo thuyền kayak trên biển và trượt nước. Resort cũng cung cấp các lớp học yoga và Thái Cực Quyền trên bãi biển. Những vị khách trẻ tuổi hơn có thể tận hưởng phòng chiếu phim và phòng trò chơi được trang bị máy Play Station 3.','status'=>1],

            ['hotel_id'=>16,'hotel_info_id'=>3,'description'=>'Kỳ nghỉ sang trọng tại Furama Resort Danang sẽ mở đầu hành trình của du khách tới các di sản được UNESCO công nhận như Kinh thành Huế, cách resort 2 giờ lái xe. Các tiện nghi đẳng cấp thế giới như hồ bơi nước ngọt, spa và 4 lựa chọn ăn uống đang chờ đón du khách tại resort này.</br>
            Furama Resort Danang tọa lạc ở phường Bắc Mỹ An. Từ đây đến thương cảng “Con đường Tơ lụa” cổ kính của Hội An mất 30 phút lái xe và Thánh Địa Mỹ Sơn cách đó chưa đến 2 giờ.
            Tất cả các phòng gắn máy điều hòa rộng rãi tại đây đều được thiết kế trang nhã và có ban công riêng nhìn ra quang cảnh nhiệt đới. Trong phòng có sàn gỗ và thảm thanh lịch cùng tủ quần áo không cửa ngăn, không gian tiếp khách rộng rãi cùng phòng tắm lớn lát đá cẩm thạch.
            Furama cung cấp các liệu pháp làm đẹp và spa sang trọng bao gồm nhiều phong cách mát-xa và chăm sóc da mặt. Khách có thể thư giãn với phòng xông hơi ướt và xông hơi khô hoặc tận hưởng dịch vụ mát-xa bên hồ bơi.
            Water Sport House ngay trong khuôn viên cung cấp các thiết bị lướt ván, chèo thuyền kayak trên biển và trượt nước. Resort cũng cung cấp các lớp học yoga và Thái Cực Quyền trên bãi biển. Những vị khách trẻ tuổi hơn có thể tận hưởng phòng chiếu phim và phòng trò chơi được trang bị máy Play Station 3.','status'=>1],

            ['hotel_id'=>17,'hotel_info_id'=>3,'description'=>'Kỳ nghỉ sang trọng tại Furama Resort Danang sẽ mở đầu hành trình của du khách tới các di sản được UNESCO công nhận như Kinh thành Huế, cách resort 2 giờ lái xe. Các tiện nghi đẳng cấp thế giới như hồ bơi nước ngọt, spa và 4 lựa chọn ăn uống đang chờ đón du khách tại resort này.</br>
            Furama Resort Danang tọa lạc ở phường Bắc Mỹ An. Từ đây đến thương cảng “Con đường Tơ lụa” cổ kính của Hội An mất 30 phút lái xe và Thánh Địa Mỹ Sơn cách đó chưa đến 2 giờ.
            Tất cả các phòng gắn máy điều hòa rộng rãi tại đây đều được thiết kế trang nhã và có ban công riêng nhìn ra quang cảnh nhiệt đới. Trong phòng có sàn gỗ và thảm thanh lịch cùng tủ quần áo không cửa ngăn, không gian tiếp khách rộng rãi cùng phòng tắm lớn lát đá cẩm thạch.
            Furama cung cấp các liệu pháp làm đẹp và spa sang trọng bao gồm nhiều phong cách mát-xa và chăm sóc da mặt. Khách có thể thư giãn với phòng xông hơi ướt và xông hơi khô hoặc tận hưởng dịch vụ mát-xa bên hồ bơi.
            Water Sport House ngay trong khuôn viên cung cấp các thiết bị lướt ván, chèo thuyền kayak trên biển và trượt nước. Resort cũng cung cấp các lớp học yoga và Thái Cực Quyền trên bãi biển. Những vị khách trẻ tuổi hơn có thể tận hưởng phòng chiếu phim và phòng trò chơi được trang bị máy Play Station 3.','status'=>1],



         ]);
    }
}

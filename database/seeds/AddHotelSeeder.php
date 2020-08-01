<?php

use Illuminate\Database\Seeder;

class AddHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('hotel')->insert([

    		//Đà Nẵng
    		['name_hotel'=>'Khách Sạn Sala Đà Nẵng Beach','avatar_hotel'=>'01.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'36 - 38 Lâm Hoành, Phước Mỹ, Sơn Trà, Đà Nẵng','rate_hotel'=>4,'score_hotel'=>8.5,'status'=>1],
    		['name_hotel'=>'Khách Sạn Chicland Đà Nẵng Beach','avatar_hotel'=>'02.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'210 Võ Nguyên Giáp, Phước Mỹ, Sơn Trà, Đà Nẵng','rate_hotel'=>4,'score_hotel'=>8.2,'status'=>1],
    		['name_hotel'=>'Furama Resort Đà Nẵng','avatar_hotel'=>'03.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'Đường Võ Nguyên Giáp, Phường Khuê Mỹ, Thanh Khê, Đà Nẵng','rate_hotel'=>5,'score_hotel'=>8.2,'status'=>1],
    		['name_hotel'=>'Melia Đà Nẵng Beach Resort ','avatar_hotel'=>'04.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'19 Trường Sa, Phường Hòa Hải, Ngũ Hành Sơn, Đà Nẵng','rate_hotel'=>5,'score_hotel'=>8.7,'status'=>1],
    		['name_hotel'=>'Khách Sạn Rosamia Đà Nẵng','avatar_hotel'=>'05.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'282 Võ Nguyên Giáp, Ngũ Hành Sơn, Đà Nẵng','rate_hotel'=>5,'score_hotel'=>8.7,'status'=>1],
    		['name_hotel'=>'Khách Sạn Samdi Đà Nẵng','avatar_hotel'=>'06.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'331 Nguyễn Văn Linh, Thanh Khê, Đà Nẵng ','rate_hotel'=>4,'score_hotel'=>8.6,'status'=>1],
    		['name_hotel'=>'Khách Sạn Connect Đà Nẵng','avatar_hotel'=>'07.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'32 Hà Chương , Phường Phước Mỹ, Sơn Trà, Đà Nẵng','rate_hotel'=>3,'score_hotel'=>8.1,'status'=>1],
    		['name_hotel'=>'Đà Nẵng Golden Bay','avatar_hotel'=>'08.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'01 Lê Văn Duyệt, Nại Hiên Đông, Sơn Trà, Đà Nẵng','rate_hotel'=>5,'score_hotel'=>9.1,'status'=>1],
    		['name_hotel'=>'Khách Sạn Dana Marina','avatar_hotel'=>'09.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'47-49 Đường Võ Văn Kiệt, Phường Phước Mỹ, Sơn Trà, Đà Nẵng','rate_hotel'=>4,'score_hotel'=>8.5,'status'=>1],
    		['name_hotel'=>'Khách Sạn Balcona Đà Nẵng','avatar_hotel'=>'10.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'288 Võ Nguyên Giáp, Mỹ An, Ngũ Hành Sơn, Đà Nẵng ','rate_hotel'=>4,'score_hotel'=>9.2,'status'=>1],

    		//HCM
    		['name_hotel'=>'Khách Sạn Mường Thanh Grand Sài Gòn Centre','avatar_hotel'=>'11.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'8A Mạc Đĩnh Chi, Phường Bến Nghé, Quận 1, Hồ Chí Minh ','rate_hotel'=>4,'score_hotel'=>8.5,'status'=>1],
    		['name_hotel'=>'Khách Sạn Palace Sài Gòn','avatar_hotel'=>'12.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'56 - 66 Nguyễn Huệ, Quận 1, Hồ Chí Minh','rate_hotel'=>4,'score_hotel'=>8.1,'status'=>1],
    		['name_hotel'=>'Khách Sạn Oscar Sài Gòn','avatar_hotel'=>'13.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'68A Nguyễn Huệ, Quận 1, Hồ Chí Minh','rate_hotel'=>3,'score_hotel'=>7.9,'status'=>1],
    		['name_hotel'=>'Khách Sạn The Odys Boutique','avatar_hotel'=>'14.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'65 - 67 - 69 Nguyễn Thái Bình, Phường Nguyễn Thái Bình, Quận 1, Hồ Chí Minh ','rate_hotel'=>4,'score_hotel'=>8.2,'status'=>1],
    		['name_hotel'=>'Khách Sạn Bông Sen Sài Gòn','avatar_hotel'=>'15.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'117-123 Đồng Khởi, Quận 1, Hồ Chí Minh','rate_hotel'=>3,'score_hotel'=>8.1,'status'=>1],
    		['name_hotel'=>'Silverland Central Hotel & Spa','avatar_hotel'=>'16.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'14 - 16 Lê Lai, Quận 1, Hồ Chí Minh','rate_hotel'=>3,'score_hotel'=>8.3,'status'=>1],
    		['name_hotel'=>'Lucky Star Hotel 146 Nguyễn Trãi','avatar_hotel'=>'17.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'146 Nguyễn Trãi, Phường Bến Thành, Quận 1, Hồ Chí Minh','rate_hotel'=>3,'score_hotel'=>8.1,'status'=>1],
    		['name_hotel'=>'Khách Sạn Âu Lạc Legend','avatar_hotel'=>'18.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'90 Nguyễn Thị Minh Khai, Phường 6, Quận 3, Hồ Chí Minh','rate_hotel'=>4,'score_hotel'=>8.0,'status'=>1],
    		['name_hotel'=>'Khách Sạn The Myst Đồng Khởi','avatar_hotel'=>'19.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'6-8 Hồ Huấn Nghiệp, Quận 1, Hồ Chí Minh ','rate_hotel'=>5,'score_hotel'=>8.2,'status'=>1],
    		['name_hotel'=>'Khách Sạn Vinpearl Luxury Landmark 81 ','avatar_hotel'=>'20.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'Vinhomes Central Park, 208 Nguyễn Hữu Cảnh, Phường 22, Bình Thạnh, Hồ Chí Minh','rate_hotel'=>5,'score_hotel'=>9.7,'status'=>1],

    		//Hà Nội
    		['name_hotel'=>'Khu Nghỉ Dưỡng Baara Land - Khách Sạn La Paz Hà Nội','avatar_hotel'=>'21.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' Thôn Đa Phúc, Quốc Oai, Hà Nội','rate_hotel'=>4,'score_hotel'=>8.8,'status'=>1],
    		['name_hotel'=>'Khách Sạn Melia Hà Nội','avatar_hotel'=>'22.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 44B Lý Thường Kiệt, Hoàn Kiếm, Hà Nội','rate_hotel'=>5,'score_hotel'=>8.3,'status'=>1],
    		['name_hotel'=>'Khách Sạn Movenpick Hà Nội','avatar_hotel'=>'23.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 83 A Lý Thường Kiệt, Hoàn Kiếm, Hà Nội','rate_hotel'=>5,'score_hotel'=>8.4,'status'=>1],
    		['name_hotel'=>'Khách Sạn Hilton Hanoi Opera','avatar_hotel'=>'24.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 01 Lê Thánh Tông, Hoàn Kiếm, Hà Nội ','rate_hotel'=>5,'score_hotel'=>8.7,'status'=>1],
    		['name_hotel'=>'Khách Sạn Grand Plaza Hà Nội','avatar_hotel'=>'25.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 117 Trần Duy Hưng, Cầu Giấy, Hà Nội','rate_hotel'=>5,'score_hotel'=>8.3,'status'=>1],
    		['name_hotel'=>'Khách Sạn Golden Silk Boutique','avatar_hotel'=>'26.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 109-111 Phố Hàng Gai, Hoàn Kiếm, Hà Nội ','rate_hotel'=>4,'score_hotel'=>8.7,'status'=>1],
    		['name_hotel'=>'Khách Sạn Golden Lotus Boutique','avatar_hotel'=>'27.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 39 Hàng Trống, Hoàn Kiếm, Hà Nội ','rate_hotel'=>3,'score_hotel'=>8.2,'status'=>1],
    		['name_hotel'=>'Khách Sạn Thăng Long Opera','avatar_hotel'=>'28.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 1C Tông Đản, Hoàn Kiếm, Hà Nội ','rate_hotel'=>4,'score_hotel'=>8.4,'status'=>1],
    		['name_hotel'=>'The Palmy Hotel & Spa','avatar_hotel'=>'29.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 4A-4B Bảo Khánh, Hoàn Kiếm, Hà Nội','rate_hotel'=>4,'score_hotel'=>8.4,'status'=>1],
    		['name_hotel'=>'Khách Sạn Esplendor & Spa ','avatar_hotel'=>'30.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 78 phố Hàng Gà, Hoàn Kiếm, Hà Nội','rate_hotel'=>3,'score_hotel'=>9.0,'status'=>1],

    		//An Giang
    		['name_hotel'=>'Khách Sạn Bến Đá Núi Sam','avatar_hotel'=>'31.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' Tân Lộ, Kiều Lương, Phường Núi Sam, Châu Đốc, An Giang','rate_hotel'=>2,'score_hotel'=>8.3,'status'=>1],
    		['name_hotel'=>'Khách Sạn Hoà Bình 2 An Giang','avatar_hotel'=>'32.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'8 Lê Hồng Phong, phường Mỹ Bình, Long Xuyên , An Giang','rate_hotel'=>2,'score_hotel'=>8.0,'status'=>1],
    		['name_hotel'=>'Khách Sạn Đông Nam','avatar_hotel'=>'33.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' Tân Lộ Kiều Lương, Khóm 8, Phường Châu Phú A, Châu Đốc, An Giang','rate_hotel'=>2,'score_hotel'=>8.0,'status'=>1],
    		['name_hotel'=>'Khách Sạn Châu Phố','avatar_hotel'=>'34.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 88 Trưng Nữ Vương nối dài Phường B, Châu Đốc, An Giang','rate_hotel'=>3,'score_hotel'=>8.1,'status'=>1],
    		['name_hotel'=>'Khách Sạn Hòa Bình 1 An Giang','avatar_hotel'=>'35.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' Số 130, Đường Trần Hưng Đạo, Phường Mỹ Bình, Long Xuyên , An Giang','rate_hotel'=>3,'score_hotel'=>8.1,'status'=>1],
    		['name_hotel'=>'Sang Như Ngọc Resort','avatar_hotel'=>'36.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' tổ 3, ấp An Hòa, xã An Hảo, Tịnh Biên, An Giang','rate_hotel'=>2,'score_hotel'=>9.3,'status'=>1],
    		['name_hotel'=>'Khách Sạn Hạ Long Châu Đốc','avatar_hotel'=>'37.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' Số 1 Núi Sam, Châu Đốc, An Giang','rate_hotel'=>3,'score_hotel'=>7.5,'status'=>1],
    		['name_hotel'=>'Khách Sạn Ngọc Lĩnh Châu Đốc','avatar_hotel'=>'38.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 162 Mai Văn Tạo, Khóm Vĩnh Đông, Phường Núi Sam TP. Châu Đốc, Châu Đốc, An Giang','rate_hotel'=>2,'score_hotel'=>5,'status'=>1],
    		['name_hotel'=>'Khách Sạn Victoria Châu Đốc','avatar_hotel'=>'39.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' Số 1 Phố Lê Lợi, Châu Đốc, An Giang','rate_hotel'=>4,'score_hotel'=>8.8,'status'=>1],

    		#Bà Rịa-Vũng Tàu

    		['name_hotel'=>'Khách Sạn Mermaid Seaside','avatar_hotel'=>'40.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 164 Trần Phú, Phường 5, Vũng Tàu, Bà Rịa - Vũng Tàu','rate_hotel'=>4,'score_hotel'=>8.6,'status'=>1],
    		['name_hotel'=>'Melia Hồ Tràm Beach Resort','avatar_hotel'=>'41.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' Biển Hồ Tràm, Xã Phước Thuận, Xuyên Mộc, Bà Rịa - Vũng Tàu','rate_hotel'=>5,'score_hotel'=>9.2,'status'=>1],
    		['name_hotel'=>'Marina Bay Vung Tau Resort & Spa','avatar_hotel'=>'42.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 115 Trần Phú, Phường 5, Vũng Tàu, Bà Rịa - Vũng Tàu','rate_hotel'=>4,'score_hotel'=>9.2,'status'=>1],
    		['name_hotel'=>'Khách Sạn Mercure Vũng Tàu','avatar_hotel'=>'43.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' 03 Hạ Long, Phường 2, Vũng Tàu, Bà Rịa - Vũng Tàu','rate_hotel'=>4,'score_hotel'=>9.3,'status'=>1],
    		['name_hotel'=>'Lan Rừng Resort & Spa Phước Hải Condotel','avatar_hotel'=>'44.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'Tỉnh lộ 44A, thị trấn Phước Hải, Đất Đỏ, Bà Rịa - Vũng Tàu','rate_hotel'=>3,'score_hotel'=>9.2,'status'=>1],
    		['name_hotel'=>'Khách Sạn La Castle','avatar_hotel'=>'45.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'81/9 Thùy Vân, Phường 2, Vũng Tàu, Bà Rịa - Vũng Tàu','rate_hotel'=>2,'score_hotel'=>8.2,'status'=>1],
    		['name_hotel'=>'Khách Sạn Cao Vũng Tàu','avatar_hotel'=>'46.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'179 Thùy Vân, Phường 8, Vũng Tàu, Bà Rịa - Vũng Tàu','rate_hotel'=>4,'score_hotel'=>8.9,'status'=>1],
    		['name_hotel'=>'Sanctuary Hồ Tràm Resort','avatar_hotel'=>'47.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'Hồ Tràm, Phước Thuận, Xuyên Mộc, Bà Rịa - Vũng Tàu','rate_hotel'=>5,'score_hotel'=>7.8,'status'=>1],
    		['name_hotel'=>'Six Senses Côn Đảo Resort','avatar_hotel'=>'48.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' Bãi Đất Dốc, Côn Đảo, Bà Rịa - Vũng Tàu','rate_hotel'=>5,'score_hotel'=>8.7,'status'=>1],
    		['name_hotel'=>'Khách Sạn Nemo Vũng Tàu','avatar_hotel'=>'49.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'Số 1 Nguyễn Văn Linh, Thị Trấn Phú Mỹ, Tân Thành, Bà Rịa - Vũng Tàu','rate_hotel'=>4,'score_hotel'=>7.2,'status'=>1],

    		#Bắc Giang
    		['name_hotel'=>'Khách Sạn Mường Thanh Grand Bắc Giang','avatar_hotel'=>'50.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' Quảng trường 3/2, Hoàng Văn Thụ, Phường Ngô Quyền, Thành Phố Bắc Giang, Bắc Giang','rate_hotel'=>4,'score_hotel'=>8.6,'status'=>1],
			['name_hotel'=>'Khách sạn Ravatel Home','avatar_hotel'=>'51.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'1A, Thanh Niên, phường Lê Lợi, Bắc Giang','rate_hotel'=>3,'score_hotel'=>7.4,'status'=>1],
			['name_hotel'=>'Khách sạn Ravatel Inn','avatar_hotel'=>'52.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>'Số 1 đường Hùng Vương 1, phường Lê Lợi, TP Bắc Giang','rate_hotel'=>4,'score_hotel'=>8.7,'status'=>1],

			#Bắc Kạn 
			['name_hotel'=>'Sài Gòn Ba Bể Resort','avatar_hotel'=>'53.jpg','phone_hotel'=>'012345678','email_hotel'=>'sample@gmail.com','address_hotel'=>' Khu Hành Chính Vườn quốc Gia Ba Bể, Khang Ninh, Ba Bể, Bắc Kạn','rate_hotel'=>3,'score_hotel'=>8,'status'=>1],



    	]);

    }
}

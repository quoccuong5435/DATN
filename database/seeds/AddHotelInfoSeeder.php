<?php

use Illuminate\Database\Seeder;

class AddHotelInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('hotel_info')->insert([ 
         	['id'=>1,'policy'=>'Chính sách phụ thu','policy_description'=>'Trẻ em dưới 12 tuổi được miễn phí.</br>Người lớn và trẻ trên 12 tuổi phụ thu 150.000 VNĐ.','status'=>1],
         	['id'=>2,'policy'=>'Chính sách hủy','policy_description'=>'Đây là giá đặc biệt nên không được hoàn huỷ. Bạn sẽ không được hoàn trả tiền khi thay đổi hay huỷ đơn đặt phòng này.','status'=>1],
         	['id'=>3,'policy'=>'Chính sách phụ thu và Chính sách hủy.','policy_description'=>'</br>Chính sách phụ thu.</br>Trẻ em dưới 12 tuổi được miễn phí.</br>Người lớn và trẻ trên 12 tuổi phụ thu 150.000 VNĐ.</br>Chính sách hủy.</br>Đây là giá đặc biệt nên không được hoàn huỷ. Bạn sẽ không được hoàn trả tiền khi thay đổi hay huỷ đơn đặt phòng này.','status'=>1],

         ]);
    }
}

@extends('admin.master')
@section('main-content')

	<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Danh sách đặt phòng khách sạn</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Danh sách đặt phòng khách sạn</h4>
                                    

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Avatar</th>
                                                    <th>Tên khách hàng</th>
                                                    <th>Khách sạn</th>
                                                    <th>Ngày nhận phòng</th>
                                                    <th>Ngày trả phòng</th>
                                                    <th>Di động</th>
                                                    <th>Email</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Bình luận</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img src="{{asset('images/user/user.png')}}" alt=""></span>
                                                    </td>
                                                    <td>Huy</td>
                                                    <td><a href="#"><span class="list-enq-name">Khách sạn Sala Đà Nẵng Beach</span><span class="list-enq-city">Đà Nẵng</span></a>
                                                    </td>
                                                    <td>18-08-2020</td>
                                                    <td>19-08-2020</td>
                                                    <td>+32111 65412</td>
                                                    <td>quochuylu95@gmail.com</td>
                                                    <td>TP.HCM</td>
                                                    <td>Phòng tiện nghi, giá rẻ</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="{{asset('images/user/user.png')}}" alt=""></span>
                                                    </td>
                                                    <td>Huy</td>
                                                    <td><a href="#"><span class="list-enq-name">Khách sạn Sala Đà Nẵng Beach</span><span class="list-enq-city">Đà Nẵng</span></a>
                                                    </td>
                                                    <td>18-08-2020</td>
                                                    <td>19-08-2020</td>
                                                    <td>+32111 65412</td>
                                                    <td>quochuylu95@gmail.com</td>
                                                    <td>TP.HCM</td>
                                                    <td>Phòng tiện nghi, giá rẻ</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="{{asset('images/user/user.png')}}" alt=""></span>
                                                    </td>
                                                    <td>Huy</td>
                                                    <td><a href="#"><span class="list-enq-name">Khách sạn Sala Đà Nẵng Beach</span><span class="list-enq-city">Đà Nẵng</span></a>
                                                    </td>
                                                    <td>18-08-2020</td>
                                                    <td>19-08-2020</td>
                                                    <td>+32111 65412</td>
                                                    <td>quochuylu95@gmail.com</td>
                                                    <td>TP.HCM</td>
                                                    <td>Phòng tiện nghi, giá rẻ</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="{{asset('images/user/user.png')}}" alt=""></span>
                                                    </td>
                                                    <td>Huy</td>
                                                    <td><a href="#"><span class="list-enq-name">Khách sạn Sala Đà Nẵng Beach</span><span class="list-enq-city">Đà Nẵng</span></a>
                                                    </td>
                                                    <td>18-08-2020</td>
                                                    <td>19-08-2020</td>
                                                    <td>+32111 65412</td>
                                                    <td>quochuylu95@gmail.com</td>
                                                    <td>TP.HCM</td>
                                                    <td>Phòng tiện nghi, giá rẻ</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
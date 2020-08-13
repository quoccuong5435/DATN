@extends('admin.master')
@section('main-content')

	<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Danh sách người dùng</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Danh sách thông tin chi tiết người dùng</h4>
                                    
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Tên</th>
                                                    <th>Di động</th>
                                                    <th>Email</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Xem</th>
                                                    <th>Sửa</th>
                                                    <th>Xóa </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($user as $info)
                                                <tr>
                                                    <td><span class="list-img"><img src="{{asset('images/user/user.png')}}" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">{{$info->fullname_user}}</span><span class="list-enq-city">{{$info->address_user}}</span></a>
                                                    </td>

                                                    <td>{{$info->phone_user}} </td>
                                                    <td>{{$info->email_user}}</td>
                                                    <td>Australia</td>
                                                    
                                                    <td>
                                                        <a href="{{ route('view-user') }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('edit-user') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-lock" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                
                                                @endforeach
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

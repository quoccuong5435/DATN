@extends('admin.master')
@section('main-content')

	<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Danh sách loại phòng</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-1">
                    <h2>Danh sách tất cả loại phòng</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên loại phòng</th>
                                <th>Ngày</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_room_type as $lroom_type)
                            <tr>
                                <td>{{$lroom_type->id}}</td>
                                <td>{{$lroom_type->room_type}}</td>
                                <td>{{$lroom_type->created_at}}</td>
                                <td><a href="{{ route('edit-roomtype') }}" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <td><a href="#" class="sb2-2-1-edit"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
     
@endsection
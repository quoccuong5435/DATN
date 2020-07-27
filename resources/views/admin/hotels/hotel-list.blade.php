@extends('admin.master')
@section('main-content')

	<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Danh sách khách sạn</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Danh sách khách sạn</h4>
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="{{route('hotel-add')}}">Thêm mới</a>
                                        </li>
                                        <li><a href="#!">Sửa</a>
                                        </li>
                                        <li><a href="#!">Cập nhật</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Xóa</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">subject</i>Xem tất cả</a>
                                        </li>
                                    </ul>

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Khách sạn</th>
                                                    <th>Di động</th>
                                                    <th>Email</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Xem</th>
                                                    <th>Sửa</th>
                                                    <th>Khóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($list_hotel as $dshotel)
                                                @csrf
                                                <tr>
                                                    <td><span class="list-img">quoccuong5435</span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">{{$dshotel->name_hotel}}</span>
                                                        @for( $i=0; $i<$dshotel->rate_hotel;$i++)<span style="color: #feba02;" class="fa fa-star"></span>
                                                        @endfor
                                                        @if($dshotel->score_hotel >=8)
                                                            &emsp;&emsp;&emsp;
                                                        <span> Xuất sắc:{{$dshotel->score_hotel}}</span></a>
                                                        @elseif($dshotel->score_hotel >=7)
                                                         &emsp;&emsp;&emsp;
                                                        <span> Rất tốt:{{$dshotel->score_hotel}}</span></a>
                                                        @else
                                                         &emsp;&emsp;&emsp;
                                                        <span> Tốt:{{$dshotel->score_hotel}}</span></a>
                                                    @endif
                                                   
                                                    </td>
                                                    <td>{{$dshotel->phone_hotel}}</td>
                                                    <td>{{$dshotel->email_hotel}}</td>
                                                    <td>{{$dshotel->address_hotel}}</td>
                                                    <td>
                                                        <a href="hotel-edit.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="hotel-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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
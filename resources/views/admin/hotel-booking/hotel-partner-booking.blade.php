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
                                    <h4>Danh sách đặt phòng khách sạn đã thanh toán</h4>
                                    <a href="{{route('partner-booking-acp')}}" title=""><button style="float: right;" type="" class="btn-secondary">Danh sách đặt phòng cần duyệt</button></a>

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên khách hàng</th>
                                                    <th>Khách sạn</th>
                                                    <th>Ngày nhận phòng</th>
                                                    <th>Ngày trả phòng</th>
                                                    <th>Di động</th>
                                                    <th>Email</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Trạng thái</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <span hidden="">{{$i=1}}</span>
                                                @foreach($list_booking as $list)
                                                <tr>
                                                    <td>{{$i++}}</span>
                                                    </td>
                                                    <td>{{$list->fullname_user}}</span>
                                                    </td>
                                                    <td>{{$list->name_hotel}}
                                                    </td>
                                                    <td>{{date('d-m-Y',strtotime($list->date_to))}}</td>
                                                    <td>{{date('d-m-Y',strtotime($list->date_from))}}</td>
                                                    <td>{{$list->phone_user}}</td>
                                                    <td>{{$list->email_user}}</td>
                                                   <td>{{$list->address_user}}</td>
                                                  @if($list->booking_status_id==1)
                                    <td>
                                        Đang xử lí
                                    </td>
                                    <form action="{{route('cancel-hotel',($list->id))}}" method="post" accept-charset="utf-8">
                                        @csrf
                                        <td><a href=""><button class="btn-warning "></button></a>
                                    </td>
                                    </form>
                                    
                                    @elseif($list->booking_status_id==2)
                                    <td>
                                        Đã thanh toán 
                                    </td>
                                    
                                    @else
                                    <td>
                                        Đã hủy phòng
                                    </td>
                                    @endif
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                        {{$list_booking->links()}}
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
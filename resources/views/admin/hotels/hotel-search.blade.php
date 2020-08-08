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
                                     <div class="">
                                            <form action="{{route('hotel-search')}}" method="POST"  accept-charset="utf-8">
                                                <div class="form-group">
                                                    @csrf
                                                    <span class="form-group-btn">
                                                         <button style="float: right;" type="">Search</button>
                                                     </span>

                                                     <input style="float: right;width: 35%" name="search" type="search" name="">
                                                     <h3><span>Kết quả tìm kiếm: {{$search}}</span></h3>
                                                     </div> 

                                            </form>
                                    </div>
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
                                                    <th>STT</th>
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
                                                 <?php $i=1 ?>
                                                @foreach($list_hotel as $dshotel)
                                                
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td> 
                                                        <span class="list-imgs"><img src="{{asset('images/avatar_hotel')}}/{{$dshotel->avatar_hotel}}"   style="height: 400px, width:400px; "></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">{{$dshotel->name_hotel}}</span>
                                                        @for( $i=0; $i<$dshotel->rate_hotel;$i++)<span style="color: #feba02;" class="fa fa-star"></span>
                                                        @endfor
                                                        @if($dshotel->score_hotel >=8)
                                                          <br>  
                                                        <span> Xuất sắc: {{$dshotel->score_hotel}}</span></a>
                                                        @elseif($dshotel->score_hotel >=7)
                                                         <br>
                                                        <span> Rất tốt: {{$dshotel->score_hotel}}</span></a>
                                                        @else
                                                         <br>
                                                        <span> Tốt: {{$dshotel->score_hotel}}</span></a>
                                                    @endif
                                                           
                                                    </td>

                                                    <td>{{$dshotel->phone_hotel}}</td>
                                                    <td>{{$dshotel->email_hotel}}</td>
                                                    <td>{{$dshotel->address_hotel}}</td>
                                                    <td>
                                                        <a href="{{ route('edit_hotel',($dshotel->id)) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('edit_hotel',($dshotel->id)) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-lock" aria-hidden="true"></i></a>
                                                    </td>
                                                {{-- </tr> --}}
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
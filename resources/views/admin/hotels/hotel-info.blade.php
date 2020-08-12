@extends('admin.master')
@section('main-content')

	<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Thông tin khách sạn</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Thông tin chi tiết khách sạn</h2> </br>
                    

                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> <span>Chi tiết</span></a>
                        </li>
                        <li><a data-toggle="tab" href="#menu1"><i class="fa fa-bed" aria-hidden="true"></i> <span>Danh sách phòng</span></a>
                        </li>
                        <li><a data-toggle="tab" href="#menu2"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Thư viện ảnh</span></a>
                        </li>
                       
                        
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Danh sách thông tin</h4></br>
                                </div>
                                <div class="bor">
                                    
                                    <form action="{{route('edit_hotel_send',($list_hotel->id))}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <lable>Tên</lable>
                                                <input id="name_hotel" readonly name="name_hotel" type="text" class="validate" value="{{$list_hotel->name_hotel }}" >
                                                
                                            </div>
                                            <div class="input-field col s12">
                                                <lable>Địa chỉ</lable>
                                                <input id="address_hotel" readonly name="address_hotel" type="text" class="validate" value="{{$list_hotel->address_hotel }}" >
                                                
                                            </div>
                                            <div class="input-field col s12">
                                                <lable>Email</lable>
                                                <input id="email_hotel" readonly name="email_hotel" type="email" class="validate" value="{{$list_hotel->email_hotel }}">
                                                
                                            </div>
                                            <div class="input-field col s12">
                                                <lable>Số điện thoại</lable>
                                                <input id="phone_hotel" readonly name="phone_hotel" type="number" class="validate" value="{{$list_hotel->phone_hotel }}">
                                                
                                            </div>
                                            <div class="input-field col s12" >

                                                <lable>Hạng sao</lable>
                                                <input id="rate_hotel" readonly name="rate_hotel" type="number" class="validate" value="{{$list_hotel->rate_hotel }}"> 
                                            </div>
                                           
                                             <div class="input-field col s12" >

                                                <lable>Điểm đánh giá</lable>
                                                <input id="rate_hotel" readonly name="rate_hotel" type="number" class="validate" value="{{$list_hotel->score_hotel }}"> 
                                            </div>
                                        </div>
                                         
                                      
                                    
                                    </form>
                                   
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Chi tiết phòng</h4>
                                
                            </div>
                            <div class="bor">
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                           
                                            <thead>
                                                <tr>    
                                                    <th>STT</th>
                                                    <th>Avatar</th>
                                                    <th>Tên Phòng</th>
                                                    <th>Loại giường</th>
                                                    <th>Giá phòng</th>
                                                    <th>Số lượng phòng</th>
                                                    <th>Xem</th>
                                                    <th>Sửa</th>
                                                    <th>Khóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php $i=1 ?>
                                                
                                                @csrf
                                                @foreach($list_room as $dsroom)
                                                <tr>
                                                    <td>{{$dsroom->id}}</td>
                                                    <td> 
                                                        <span class="list-imgs"><img src="{{asset('images/avatar_room')}}/{{$dsroom->avatar_room}}"   style="height: 400px, width:400px; "></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">{{$dsroom->room_name}}</span>
                                                       {{--  @for( $i=0; $i<$list_hotel->rate_hotel;$i++)<span style="color: #feba02;" class="fa fa-star"></span>
                                                        @endfor
                                                        @if($list_hotel->score_hotel >=8)
                                                          <br>  
                                                        <span> Xuất sắc: {{$list_hotel->score_hotel}}</span></a>
                                                        @elseif($list_hotel->score_hotel >=7)
                                                         <br>
                                                        <span> Rất tốt: {{$list_hotel->score_hotel}}</span></a>
                                                        @else
                                                         <br>
                                                        <span> Tốt: {{$list_hotel->score_hotel}}</span></a>
                                                    @endif --}}
                                                           
                                                    </td>

                                                    <td>{{$dsroom->type_bed}}</td>
                                                    <td>{{$dsroom->price_room}}</td>
                                                    <td>{{$dsroom->num_of_rooms}}</td>
                                                    <td>
                                                        <a href="{{ route('info_hotel',($list_hotel->id)) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('edit_hotel',($list_hotel->id)) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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
                        <div id="menu2" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Thư viện ảnh</h4>
                            </div>
                         {{--    <style>
                                .grid-container {
                                  display: grid;
                                  
                                  grid-gap: 10px;
                                  
                                  padding: 10px;
                                }

                                .grid-container > div {
                                  text-align: center;
                                  padding: 20px 0;
                                  font-size: 30px;
                                }
                            </style> --}}
                            <div class="bor">
                               <div class="grid-container">
                                @foreach($list_img as $list_img)
                                  <img style="width: 320px;height: 250px;padding: 20px;" src="{{asset('images/gallery')}}/{{$list_img->url}}" alt="">
                                @endforeach
                                </div>
                            </div>
                        </div>
                      
                     
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
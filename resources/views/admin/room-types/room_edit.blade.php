@extends('admin.master')
@section('main-content')

    <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Thêm phòng</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
<<<<<<< HEAD
                    <h2>Thông tin phòng</h2></br>
                        <span><a href="{{-- {{route('info_hotel',($list_hotel->id))}} --}}" style="float: right;"><button type="" class="btn-success">Trở về</button></a></span>
=======
                    <h2>Thêm thông tin phòng</h2></br>
                        <span><a href="{{route('info_hotel',($list_hotel->id))}}" style="float: right;"><button type="" class="btn-success">Trở về</button></a></span>
>>>>>>> 8fea159c2cf921af25444d720717b2dfc209a465
                        <br>
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $fail)
                               {{$fail}} <br>
                               
                                @endforeach
                            </div>
                                
                                @endif
                        <div id="" class="">
                            <div class="bor">
<<<<<<< HEAD
                                
                                <form action="{{route('add_rooms')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @foreach($lroom  as $dsroom)
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" name="room_name" readonly="" id="room_name" value="{{$dsroom->room_name}}">
                                            <label>Tên phòng</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" name="room_name" readonly="" id="room_name" value="{{$dsroom->room_type}}">
                                            <label>Loại phòng</label>
                                        </div>
                                        <div class="input-field col s12">
                                            
                                                <input type="number" min="1" readonly="" name="num_of_rooms" id="num_of_rooms" value="{{$dsroom->num_of_rooms}}">
                                                <label>Số lượng phòng</label>
                                            
                                            </div>
                                            <div class="input-field col s12">
                                            
                                                <input type="number" min="1" readonly="" name="num_of_rooms" id="num_of_rooms" value="{{$dsroom->empty_room}}">
                                                <label>Số lượng phòng trống</label>
                                            
                                            </div>
                                        <div class="input-field col s12">
                                            <input type="number" min="1" name="num_of_rooms" readonly="" id="num_of_rooms" value="{{$dsroom->num_of_people}}">
                                                <label>Số lượng người tối đa</label>
                                        </div>
                                        <div  class="input-field col s12" >
                                            <input type="number" name="price_room" readonly="" min="1000" value="{{$dsroom->price_room}}">
=======
                                @foreach($list_room as $dsroom)
                                <form action="{{route('add_rooms')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" name="room_name" id="room_name" value="{{$dsroom->room_name}}">
                                            <label>Tên phòng</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" name="room_name" id="room_name" value="{{$dsroom->room_type}}">
                                            <label>Tên phòng</label>
                                        </div>
                                        <div class="input-field col s12">
                                            
                                                <input type="number" min="1" name="num_of_rooms" id="num_of_rooms" value="{{$dsroom->num_of_rooms}}">
                                                <label>Số lượng phòng</label>
                                            
                                            
                                        <div class="input-field col s12">
                                            <input type="number" min="1" name="num_of_rooms" id="num_of_rooms" value="{{$dsroom->num_of_people}}">
                                                <label>Số lượng người tối đa</label>
                                        </div>
                                        <div  class="input-field col s12" >
                                            <input type="number" name="price_room"  min="1000" value="{{$dsroom->price_room}}">
>>>>>>> 8fea159c2cf921af25444d720717b2dfc209a465
                                            <label>Giá phòng</label>
                                        </div>
                                    
                                   
<<<<<<< HEAD
                                    
                                    
                                    @endforeach
=======
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="description_room"  name="description_room" placeholder="Mô tả" class="materialize-textarea"></textarea>
                                            
                                        </div>
                                    </div>
                                    
                                    <
>>>>>>> 8fea159c2cf921af25444d720717b2dfc209a465

                                </form>
                            </div>

                            
                        </div>
                        
                      
                       
                    
                </div>
            </div>
        </div>
    </div>

@endsection
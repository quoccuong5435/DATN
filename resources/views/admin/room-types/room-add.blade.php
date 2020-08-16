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
                    <h2>Thêm thông tin phòng</h2></br>
                        <span><a href="{{route('info_hotel',($list_hotel->id))}}" style="float: right;"><button type="" class="btn-success">Trở về</button></a></span>
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
                                <form action="{{route('add_rooms')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" name="room_name" id="room_name" value="">
                                            <label>Tên phòng</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <select name="room_type_id" id="room_type_id">
                                                <option value="" disabled selected>Loại phòng</option>
                                                @foreach($list_room_type as $list)
                                                <option value="{{$list->id}}">{{$list->room_type}}</option>  
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                        <div class="input-field col s12">
                                            
                                                
                                                <input name="hotel_id" value="{{$list_hotel->id}}" class="hidden"></input>  
                                                
                                            
                                            
                                        </div>
                                        <div class="input-field col s12">
                                            
                                                <input type="number" min="1" name="num_of_rooms" id="num_of_rooms">
                                                <label>Số lượng phòng</label>
                                            
                                            <div class="input-field col s12">
                                                <select name="type_bed" id="type_bed">
                                                    <option value="" disabled selected>Loại giường</option>
                                                    <option value="Gường đôi">Gường đôi</option>
                                                    <option value="Giường đơn">Giường đơn</option>
                                                    <option value="2 Gường đơn">2 Gường đơn</option>
                                                </select>
                                                
                                        </div>
                                        <div class="input-field col s12">
                                            <select name="num_of_people" id="num_of_people" >
                                                <option value="" disabled selected>Số lượng người ở tối đa</a></option>
                                                <option value="1">1 Người</option>
                                                <option value="2">2 Người</option>
                                                <option value="3">3 Người</option>
                                                <option value="4">4 Người</option>
                                                <option value="5">5 Người</option>
                                            </select>
                                        </div>
                                        <div  class="input-field col s12" >
                                            <input type="number" name="price_room"  min="1000" value="">
                                            <label>Giá phòng</label>
                                        </div>
                                    
                                   
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="description_room"  name="description_room" placeholder="Mô tả" class="materialize-textarea"></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>File</span>
                                                    <input type="file" name="avatar_room" id="avatar_room">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate"  type="text" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Gửi">
                                        </div>
                                    </div>

                                </form>
                            </div>

                            
                        </div>
                        
                      
                       
                    
                </div>
            </div>
        </div>
    </div>

@endsection
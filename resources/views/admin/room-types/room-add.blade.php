@extends('admin.master')
@section('main-content')

    <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Thêm khách sạn</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Thêm thông tin chi tiết khách sạn</h2></br>

                    
                            
                        <div id="" class="">
                            <div class="inn-title">
                                <h4>Thông tin chi tiết khách sạn</h4>
                            </div>
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
                                            <label>Chọn loại phòng</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <select name="hotel_id" id="hotel_id">
                                                <option value="" disabled selected>Thuộc khách sạn</option>
                                                @foreach($list_hotel as $list_hotels)
                                                <option value="{{$list_hotels->id}}">{{$list_hotels->name_hotel}}</option>  
                                                @endforeach
                                            </select>
                                            <label>Thuộc khách sạn</label>
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
                                            <textarea id="description_room"  name="description_room" class="materialize-textarea"></textarea>
                                            <label for="textarea3">Mô tả</label>
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
                                                    <input class="file-path validate" name="avatar_room" type="text" placeholder="Tải ảnh lên">
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
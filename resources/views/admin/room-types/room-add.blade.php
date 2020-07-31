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
                                <form action="{{-- {{route('room_add')}} --}}" method="" enctype="multipart/form-data">
                                    <div class="row">
                                        
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Loại phòng</option>
                                                @foreach($list_room_type as $list)
                                                <option value="{{$list->room_type}}">{{$list->room_type}}</option>  
                                                @endforeach
                                            </select>
                                            <label>Chọn loại</label>
                                        </div>
                                        
                                    </div>
                                   
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea3" class="materialize-textarea"></textarea>
                                            <label for="textarea3">Mô tả</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>File</span>
                                                    <input type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" placeholder="Tải ảnh lên">
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
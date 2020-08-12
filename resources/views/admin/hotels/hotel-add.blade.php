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

                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> <span>Chi tiết</span></a>
                        </li>
                       
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Thông tin</h4>
                                    
                                </div>
                                <div class="bor">
                                    <form action="{{route('hotel-add-send')}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="name_hotel" name="name_hotel" type="text" class="validate" required>
                                                <label for="list-title">Tên</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="address_hotel" name="address_hotel" type="text" class="validate" required>
                                                <label for="list-name">Address</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="email_hotel" name="email_hotel" type="email" class="validate" required>
                                                <label for="list-name">Email</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="phone_hotel" name="phone_hotel" type="number" class="validate" required>
                                                <label for="list-name">Phone</label>
                                            </div>
                                            
                                            <div class="input-field col s12" >
                                                <select id="place_id" name="place_id" required>
                                                    <option value="" disabled selected>Địa danh</option>
                                                    @foreach($place as $list)
                                                    <option value="{{$list->id}}">{{$list->name_place}}</option>
                                                    @endforeach
                                                </select>
                                                <label>Loại khách sạn</label>
                                            </div>
                                        </div>
                                       
                                        

                                        {{-- <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                <label for="textarea1">Mô tả</label>
                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            <div class="input-field col s6" >
                                                <select id="rate_hotel" name="rate_hotel" required>
                                                    <option value="" disabled selected>Hạng sao</option>
                                                    <option value="1">Khách sạn 1 sao</option>
                                                    <option value="2">Khách sạn 2 sao</option>
                                                    <option value="3">Khách sạn 3 sao</option>
                                                    <option value="4">Khách sạn 4 sao</option>
                                                    <option value="5">Khách sạn 5 sao</option>
                                                </select>
                                                <label>Loại khách sạn</label>
                                            </div>
                                            <div class="input-field col s6" >
                                                 <input id="list-name" type="number" min="1" max="10"  class="validate" id="score_hotel" name="score_hotel" step="0.1" required>
                                                <label>Điểm đánh giá</label>
                                            </div>
                                        </div>
                                         <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input type="file" id="avatar_hotel" name="avatar_hotel" required >
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" id="avatar_hotel" name="avatar_hotel" type="text" placeholder="Tải lên một hoặc nhiểu file">
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
        </div>
    </div>

@endsection
@extends('admin.master')
@section('main-content')

	<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Sửa thông tin khách sạn</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Sửa thông tin chi tiết khách sạn</h2> </br>
                    

                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> <span>Chi tiết</span></a>
                        </li>
                        <li><a data-toggle="tab" href="#menu1"><i class="fa fa-bed" aria-hidden="true"></i> <span>Loại phòng</span></a>
                        </li>
                        <li><a data-toggle="tab" href="#menu2"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Thư viện ảnh</span></a>
                        </li>
                        <li><a data-toggle="tab" href="#menu3"><i class="fa fa-facebook" aria-hidden="true"></i> <span></span>Mạng xã hội</a>
                        </li>
                        <li><a data-toggle="tab" href="#menu4"><i class="fa fa-phone" aria-hidden="true"></i> <span>Thông tin liên hệ</span></a>
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
                                                <input id="name_hotel" name="name_hotel" type="text" class="validate" value="{{$list_hotel->name_hotel }}" >
                                                <label for="list-title"></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="address_hotel" name="address_hotel" type="text" class="validate" value="{{$list_hotel->address_hotel }}" >
                                                <label for="list-name">Address</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="email_hotel" name="email_hotel" type="email" class="validate" value="{{$list_hotel->email_hotel }}">
                                                <label for="list-name">Email</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="phone_hotel" name="phone_hotel" type="number" class="validate" value="{{$list_hotel->phone_hotel }}">
                                                <label for="list-name">Phone</label>
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
                                                <select id="rate_hotel" name="rate_hotel" >
                                                    <option value="" disabled selected>Hạng sao</option>
                                                    <option  @if($list_hotel->rate_hotel==1) selected @endif  value="1">Khách sạn 1 sao</option>
                                                    <option @if($list_hotel->rate_hotel==2) selected @endif value="2">Khách sạn 2 sao</option>
                                                    <option @if($list_hotel->rate_hotel==3) selected @endif value="3">Khách sạn 3 sao</option>
                                                    <option @if($list_hotel->rate_hotel==4) selected @endif value="4">Khách sạn 4 sao</option>
                                                    <option @if($list_hotel->rate_hotel==5) selected @endif value="5">Khách sạn 5 sao</option>
                                                </select>
                                                <label>Loại khách sạn</label>
                                            </div>
                                            <div class="input-field col s6" >
                                                 <input id="list-name" type="number" min="1" max="10"  class="validate" id="score_hotel" name="score_hotel" value="{{$list_hotel->score_hotel }}">
                                                <label>Điểm đánh giá</label>
                                            </div>
                                        </div>
                                         <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input type="file" id="avatar_hotel" name="avatar_hotel"  >
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input value="{{$list_hotel->avatar_hotel }}"  class="file-path validate" id="avatar_hotel" name="avatar_hotel" type="text" placeholder="Tải lên một hoặc nhiểu file">
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
                        <div id="menu1" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Chi tiết phòng</h4>
                                
                            </div>
                            <div class="bor">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select multiple>
                                                <option value="" disabled selected>Loại phòng</option>
                                                <option value="1">Deluxe</option>
                                                <option value="2">Premium</option>
                                                <option value="3">Premium Plus</option>
                                                <option value="3">Non-Deluxe</option>
                                                <option value="3">Normal</option>
                                            </select>
                                            <label>Chọn loại</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="number" class="validate">
                                            <label for="t2-price">Giá</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div class="chips chips-placeholder"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" class="materialize-textarea"></textarea>
                                            <label for="textarea4">Mô tả</label>
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

                            <div class="bor">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select multiple>
                                                <option value="" disabled selected>Room Type</option>
                                                <option value="1">Deluxe</option>
                                                <option value="2">Premium</option>
                                                <option value="3">Premium Plus</option>
                                                <option value="3">Non-Deluxe</option>
                                                <option value="3">Normal</option>
                                            </select>
                                            <label>Select Category</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="t2-price1" type="number" class="validate">
                                            <label for="t2-price1">Giá</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div class="chips chips-placeholder"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea2" class="materialize-textarea"></textarea>
                                            <label for="textarea2">Mô tả</label>
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
                        <div id="menu2" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Thư viện ảnh</h4>
                            </div>
                            <div class="bor">
                                <form action="#">
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Tải lên một hay nhiều file">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Tải lên">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Mạng xã hội</h4>
                            </div>
                            <div class="bor">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t4-soc1" type="text" value="http://facebook.com/" class="validate">
                                            <label for="t4-soc1">Facebook Url</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t4-soc2" type="text" value="http://google.com/gplus" class="validate">
                                            <label for="t4-soc2">Google Plus Url</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t4-soc3" type="text" value="http://twitter.com/" class="validate">
                                            <label for="t4-soc3">Twitter Url</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t4-soc4" type="text" value="http://Linkedin.com/" class="validate">
                                            <label for="t4-soc4">Linkedin Url</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t4-soc5" type="text" class="validate">
                                            <label for="t4-soc5">WhatsApp Number</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Tải lên">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="menu4" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Thông tin liên hệ</h4>

                            </div>
                            <div class="bor">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="t5-n1" type="text" class="validate">
                                            <label for="t5-n1">Tên liên lạc</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="t5-n2" type="text" class="validate">
                                            <label for="t5-n2">Tên thay thế</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="t5-n3" type="number" class="validate">
                                            <label for="t5-n3">Di động</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="t5-n4" type="number" class="validate">
                                            <label for="t5-n4">Số điện thoại</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t5-n5" type="email" class="validate">
                                            <label for="t5-n5">Email</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="t5-n6" class="materialize-textarea"></textarea>
                                            <label for="t5-n6">Mô tả</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Tải lên">
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

@endsection
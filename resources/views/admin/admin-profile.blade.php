    @extends('admin.master')
@section('main-content')

	<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Hồ sơ</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Cập nhật thông tin</h4>
                                    @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $fail)
                               {{$fail}} <br>
                               
                                @endforeach
                            </div>
                                
                                @endif
                                 @if(Session::has('thongbao'))
                            <div class="alert alert-success">
                                {{Session::get('thongbao')}}
                            </div>
                                   

                            
                        @endif
                                </div>
                                <div class="tab-inn">
                                    <form method="POST" action="{{route('ads-profile')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <span for="name">Tên người dùng</span>
                                                <input name="fullname_user" type="text" value="{{Auth::User()->fullname_user}}" class="validate">
                                                
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                             <div class="input-field col s12">
                                                <span for="phone">Số điện thoại</span>
                                                <input name="phone_user" type="text" value="{{Auth::User()->phone_user}}" class="validate">
                                                
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <span for="">Địa chỉ</span>
                                                <input  name="address_user" type="text" value="{{Auth::User()->address_user}}" class="validate">
                                            </div>
                                            
                                        </div>
                                      
                                           <div class="row db-file-upload">
                                            <div class="file-field input-field">
                                                <div class="db-up-btn"> <span>File</span>
                                                <input type="file" name="avatar_user"> </div>
                                                <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text"> </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" class="waves-effect waves-light btn-large">
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
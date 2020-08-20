@extends('admin.master')
@section('main-content')

    <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Sửa thông chi tiết người dùng</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Sửa thông chi tiết người dùng</h4>
                                </div>
                                <div class="tab-inn">
                                    <form action="" method="POST">
                                        @csrf
                                         @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $fail)
                               {{$fail}} <br>
                               
                                @endforeach
                            </div>
                                
                                @endif
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="fullname_user" type="text" value="{{$list_user->fullname_user}}" class="validate">
                                                <label for="first_name">Tên</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input name="username" type="text" hidden="" value="{{$list_user->username}}" class="validate">
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="input-field col s6">
                                                <input name="phone_user" type="text" value="{{$list_user->phone_user}}" class="validate">
                                                <label for="cphone">Di động</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input name="address_user" type="text" value="{{$list_user->address_user}}" class="validate">
                                                <label for="country">Địa chỉ</label>
                                            </div>
                                        </div>
                                       
                                       

                                          <div class="input-field col s6">
                                            <select>
                                                <option value="" disabled selected>Chọn</option>
                                                <option @if($list_user->gender_user=='Nam') selected="" @endif value="1">Nam</option>
                                                <option @if($list_user->gender_user=='Nữ') selected="" @endif value="2">Nữ</option>
                                            </select>
                                            <label>Giới tính</label>
                                        </div>
                                            <!-- <div class="row">
                                            <div class="input-field col s6">
                                                <input name="gender_user" type="text" value="{{$list_user->gender_user}}" class="validate">
                                                <label for="country">Giới tính</label>
                                            </div>
                                        </div> -->
                                        
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
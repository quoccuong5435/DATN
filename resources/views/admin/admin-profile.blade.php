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
                                    
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="name" type="text" value="" class="validate">
                                                <label for="name">Tên người dùng</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="phone" type="text" value="" class="validate">
                                                <label for="phone">Số điện thoại</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="email" type="text" value="" class="validate">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="user_name" type="text" value="" class="validate">
                                                <label for="user_name">Username</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="password" type="password" value="aksdjfhasdf" class="validate">
                                                <label for="password">Mật khẩu</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="password1" type="password" value="asdfaefrerfg" class="validate">
                                                <label for="password1">Xác nhận mật khẩu</label>
                                            </div>
                                        </div>

                                           <div class="row db-file-upload">
                                            <div class="file-field input-field">
                                                <div class="db-up-btn"> <span>File</span>
                                                <input type="file"> </div>
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
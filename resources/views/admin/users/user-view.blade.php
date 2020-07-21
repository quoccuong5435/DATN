@extends('admin.master')
@section('main-content')

	<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Xem thông chi tiết người dùng</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Xem thông chi tiết người dùng</h4>
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text" value="Marsha" class="validate">
                                                <label for="first_name">Tên</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="last_name" type="text" value="Hogen" class="validate">
                                                <label for="last_name">Họ</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="phone" type="text" value="+01 1234 4654" class="validate">
                                                <label for="phone">Điện thoại</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="cphone" type="text" value="+01 6541 32145" class="validate">
                                                <label for="cphone">Di động</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="city" type="text" value="Illunois" class="validate">
                                                <label for="city">Quận/Huyện</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="country" type="text" value="United States" class="validate">
                                                <label for="country">Tỉnh/Thành phố</label>
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
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" value="marshahi@mail.com" class="validate">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="email1" type="email" value="marshahi@mail.com" class="validate">
                                                <label for="email1">Email thay thế</label>
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
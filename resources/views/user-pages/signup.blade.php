@extends('master')

@section('main-content')
 
    <!--DASHBOARD-->
    <section>
        <div class="tr-register">
            <div class="tr-regi-form">
                <h4>Tạo Tài Khoản</h4>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col m6 s12">
                            <input type="text" class="validate">
                            <label>Tên</label>
                        </div>
                        <div class="input-field col m6 s12">
                            <input type="text" class="validate">
                            <label>Họ</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="number" class="validate">
                            <label>Số điện thoại</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="email" class="validate">
                            <label>Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="password" class="validate">
                            <label>Mật khẩu</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="password" class="validate">
                            <label>Xác nhận mật khẩu</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" value="Tạo tài khoản" class="waves-effect waves-light btn-large full-btn"> </div>
                    </div>
                </form>
                <p>Bạn đã có tài khoản ? <a href="login.html">Đăng nhập</a>
                </p>
            </div>
        </div>
    </section>
    <!--END DASHBOARD-->
@endsection
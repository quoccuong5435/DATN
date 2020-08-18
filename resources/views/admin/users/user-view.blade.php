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
                                                <input id="first_name" type="text" value="Huy" class="validate">
                                                <label for="first_name">Tên</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="last_name" type="text" value="henrylu489" class="validate">
                                                <label for="last_name">Username</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="phone" type="text" value="947345421" class="validate">
                                                <label for="email">Điện thoại</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="cphone" type="text" value="quochuylu98@gmail.com" class="validate">
                                                <label for="cphone">Email</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="add" type="text" value="1017/25 Trần Thị Liền" class="validate">
                                                <label for="email">Địa chỉ</label>
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
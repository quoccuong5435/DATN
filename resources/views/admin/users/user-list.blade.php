@extends('admin.master')
@section('main-content')

	<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Danh sách người dùng</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Danh sách thông tin chi tiết người dùng</h4>
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="user-add.html">Thêm mới</a>
                                        </li>
                                        <li><a href="user-edit.html">Sửa</a>
                                        </li>
                                        <li><a href="#!">Cập nhật</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Xóa</a>
                                        </li>
                                        <li><a href="user-view.html"><i class="material-icons">subject</i>Xem tất cả</a>
                                        </li>
                                    </ul>

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Tên</th>
                                                    <th>Di động</th>
                                                    <th>Email</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Danh sách</th>
                                                    <th>Xem</th>
                                                    <th>Sửa</th>
                                                    <th>Xóa </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/3.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/6.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/3.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

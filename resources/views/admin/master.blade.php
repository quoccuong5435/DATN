<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Jul 2020 02:52:48 GMT -->
<head>
    <title>The Travel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="{{ asset('source/admin/images/fav.ico') }}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset('source/admin/css/font-awesome.min.css') }}">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{ asset('source/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('source/admin/css/mob.css') }}">
    <link rel="stylesheet" href="{{ asset('source/admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('source/admin/css/materialize.css') }}" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="index.html" class="logo"><img src="{{ asset('source/admin/images/logo1.png') }}" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="{{ asset('source/admin/images/user/6.png') }} " alt="" />Tài khoản của tôi <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Cài đặt</a>
                    </li>
                    <li><a href="hotel-all.html" class="waves-effect"><i class="fa fa-building-o" aria-hidden="true"></i> Quản lý khách sạn</a>
                    </li>
                    <li><a href="user-add.html" class="waves-effect"><i class="fa fa-user-plus" aria-hidden="true"></i> Thêm tài khoản</a>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="fa fa-undo" aria-hidden="true"></i> Backup Data</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="{{ asset('source/admin/images/placeholder.jpg') }}" alt="">
                        </li>
                        <li>
                            <h5>Victoria Baker <span> Santa Ana, CA</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="index.html" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Thống kê</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Quản lý người dùng</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="user-all.html">Danh sách người dùng</a>
                                    </li>
                                    <li><a href="user-add.html">Thêm người dùng</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> Quản lý khách sạn</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="hotel-all.html">Danh sách khách sạn</a>
                                    </li>
                                    <li><a href="hotel-add.html">Thêm khách sạn</a>
                                    </li>
                                    <li><a href="hotel-room-type-all.html">Danh sách loại phòng</a>
                                    </li>
                                    <li><a href="hotel-room-type-add.html">Thêm loại phòng</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="hotel-booking-all.html" class="collapsible-header"><i class="fa fa-ticket" aria-hidden="true"></i> Danh sách đặt phòng khách sạn</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i> Blog</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="blog-all.html">Danh sách Blog</a>
                                    </li>
                                    <li><a href="blog-add.html">Thêm Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="login.html" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</a>
                        </li>
                    </ul>
                </div>
            </div>

            @yield('main-content')


    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="{{ asset('source/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('source/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('source/admin/js/materialize.min.js') }}"></script>
    <script src="{{ asset('source/admin/js/custom.js') }}"></script>
</body>
</html>
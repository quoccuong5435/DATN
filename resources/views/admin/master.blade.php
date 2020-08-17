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

    <title>Load More Data in Laravel using Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('source/admin/css/bootstrap.min.css') }}"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

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
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="{{ asset('source/admin/images/user/6.png') }} " alt="" />Tài khoản của tôi <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="{{route('ad-profile')}}" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Cài đặt</a>
                    </li>

                    <li><a href="{{route('hotel')}}" class="waves-effect"><i class="fa fa-building-o" aria-hidden="true"></i> Quản lý khách sạn</a>
                    </li>
                    <li><a href="{{route('add-user')}}" class="waves-effect"><i class="fa fa-user-plus" aria-hidden="true"></i> Thêm người dùng</a>
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
                        <li><img src="{{ asset(Auth::User()->avatar_user) }}" alt="">
                        </li>
                        <li>
                            <h5>{{Auth::User()->fullname_user}}<span> Loại tài khoản: 
                               @if(Auth::User()->role_user==0)
                                Admin
                                @else
                                Partner
                                @endif
                             </span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Thống kê</a>
                        </li>
                        @if(Auth::User()->role_user==0)
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Quản lý người dùng</a>
                            @else
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Thông tin tài khoản</a>
                            @endif
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    @if(Auth::User()->role_user==0)
                                    <li><a href="{{route('user')}}">Danh sách người dùng</a>
                                    </li>
                                    @else
                                    <li><a href="{{route('user')}}">Xem tài khoản</a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> Quản lý khách sạn</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    
                                    <li><a href="{{route('hotel')}}">Danh sách khách sạn</a>
                                        
                                    </li>
                                    @if(Auth::User()->role_user==2)
                                    <li><a href="{{route('hotel-add')}}">Thêm khách sạn</a>
                                    </li>
                                    @else
                                    <li ><a href="{{route('hotel_acp')}}">Duyệt khách sạn</a></li>
                                    @endif
                                    <li><a href="{{route('roomtypes')}}">Danh sách loại phòng</a>
                                    </li>
                                    <li><a href="{{route('add-roomtype')}}">Thêm loại phòng</a>
                                    </li>
                                   {{--  @if(Auth::User()->role_user==0)
                                    <li><a href="{{route('add-roomtype')}}">Test</a>
                                    </li>
                                    @else
                                    <li><a href="{{route('add-roomtype')}}">Test1</a>
                                    </li>
                                    @endif --}}
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{route('hotel-booking')}}" class="collapsible-header"><i class="fa fa-ticket" aria-hidden="true"></i> Danh sách đặt phòng khách sạn</a>
                        </li>
                        <li><a href="{{route('dangxuat')}}" ><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng xuất</a>
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
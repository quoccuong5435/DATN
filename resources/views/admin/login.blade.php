<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Jul 2020 02:51:38 GMT -->
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
    <div class="blog-login">
        <div class="blog-login-in">
            @if (count($errors) >0)
            <ul>
                 @foreach($errors->all() as $error)
                     <li class="text-danger"> {{ $error }}</li>
                 @endforeach
            </ul>
        @endif
         @if(Session::has('thongbao'))
                            <div class="alert alert-success">
                                {{Session::get('thongbao')}}
                            </div>
                                   

                            
                        @endif
         @if (session('status'))
             <ul>
                 <li class="text-danger"> {{ session('status') }}</li>
             </ul>
         @endif
 
            <form action="{{route('signin-admin')}}" method="POST">
                @csrf
                <img src="{{ asset('source/admin/images/logo.png') }}" alt="" />
                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name1" name="email_user" type="text" class="validate">
                        <label for="first_name1">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" name="password" type="password" class="validate">
                        <label for="last_name">Mật khẩu</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" value="Đăng nhập" class="waves-effect waves-light btn-large full-btn"> </div>
                    </div>
                      <a href="forgot.html" class="for-pass">Quên mật khẩu?</a>
                </div>
              
            </form>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="{{ asset('source/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('source/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('source/admin/js/materialize.min.js') }}"></script>
    <script src="{{ asset('source/admin/js/custom.js') }}"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Jul 2020 02:51:50 GMT -->
</html>
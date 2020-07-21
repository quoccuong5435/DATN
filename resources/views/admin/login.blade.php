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
            <form>
                <img src="{{ asset('source/admin/images/logo.png') }}" alt="" />
                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name1" type="text" class="validate">
                        <label for="first_name1">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" type="password" class="validate">
                        <label for="last_name">Mật khẩu</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <a class="waves-effect waves-light btn-large btn-log-in" href="index.html">Đăng nhập</a>
                    </div>
                </div>
                <a href="forgot.html" class="for-pass">Quên mật khẩu?</a>
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
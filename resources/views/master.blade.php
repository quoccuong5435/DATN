<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/booking-hotel.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 01:48:00 GMT -->
<head>
    <title>The Travel - Tour Travel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="{{ asset('source/images/fav.ico') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset('source/css/font-awesome.min.css') }}">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{ asset('source/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('source/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('source/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('source/css/mob.css') }}">
    <link rel="stylesheet" href="{{ asset('source/css/animate.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="{{ asset('source/js/html5shiv.js') }}"></script>
	<script src="{{ asset('source/js/respond.min.js') }}"></script>
	<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- MOBILE MENU -->
   
    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                

                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                            	@if(Auth::check())
                        
                                
                                <li><a href="{{ route('dang_xuat') }}">Đăng xuất</a>&nbsp
                                <li><a href="{{ route('dangky-partner') }}" style="background-color: #189ecf;">Đăng ký chỗ nghỉ của bạn</a>&nbsp
                                </li>

                                @else
                                <li><a href="{{ route('dangky') }}">Đăng ký</a>&nbsp
                                </li>
                                <li><a href="{{ route('dangnhap') }}">Đăng nhập</a>&nbsp
                                </li>

                                <li><a href="{{ route('dangky-partner') }}" style="background-color: #189ecf;">Đăng ký chỗ nghỉ của bạn</a>
                                </li>
                                @endif

                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="{{ route('trang-chu') }}"><img src="{{ asset('source/images/logo.png') }}" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ route('trang-chu') }}">Trang chủ</a>
                                </li>
                                <li><a href="{{ route('dashboard') }}">Thông tin</a>
                                </li>
                                <li><a href="{{ route('contact') }}">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- TOP SEARCH BOX -->
       {{--  <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
						<form class="tourz-search-form">
							<div class="input-field">
								<input type="text" id="select-city" class="autocomplete">
								<label for="select-city">Nhập thành phố</label>
							</div>
							<div class="input-field">
								<input type="text" id="select-search" class="autocomplete">
								<label for="select-search" class="search-hotel-type">Tìm kiếm khách sạn giá tốt</label>
							</div>
							<div class="input-field">
								<input type="submit" value="Tìm" class="waves-effect waves-light tourz-sear-btn"> </div>
						</form>
						
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
		<!-- END TOP SEARCH BOX -->
    </section>
    <!--END HEADER SECTION-->

	@yield('main-content')
	
	<!--====== TIPS BEFORE TRAVEL ==========-->
	<section>
		<div class="rows tips tips-home tb-space home_title">
			<div class="container tips_1">
				<!-- TIPS BEFORE TRAVEL -->
				<div class="col-md-4 col-sm-6 col-xs-12">
					<h3>Tips Du Lịch</h3>
					<div class="tips_left tips_left_1"></br>
						<h5>Mang theo bản sao hộ chiếu</h5>
					</div>
					<div class="tips_left tips_left_2"></br>
						<h5>Đăng ký với đại sứ quán</h5>
					</div>
					<div class="tips_left tips_left_3"></br>
						<h5>Luôn có tiền mặt địa phương</h5></br>
					</div>
				</div>
				<!-- CUSTOMER TESTIMONIALS -->
				<div class="col-md-8 col-sm-6 col-xs-12 testi-2">
					<!-- TESTIMONIAL TITLE -->
					<h3>Đánh giá của khách hàng</h3>
					<div class="testi">
						<h4>John William</h4>
						<p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p> <address>Illinois, United States of America</address> </div>
					<div class="testi">
						<h4>John William</h4>
						<p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p> <address>Illinois, United States of America</address> </div>
				</div>
			</div>
		</div>
	</section>

	<!--====== FOOTER 2 ==========-->
	<section>
		<div class="rows">
			<div class="footer">
				<div class="container">
					<div class="foot-sec2">
						<div>
							<div class="row">
								<div class="col-sm-3 foot-spec foot-com">
									<h4><span>Khách sạn</span> & Du lịch</h4>
									<p> Đại lý đặt phòng khách sạn hàng đầu Việt Nam với hơn 200.000 khách sạn đối tác</p>
								</div>
								<div class="col-sm-3 foot-spec foot-com">
									<h4><span>Địa chỉ</span> & Thông tin liên hệ</h4>
									<p>65 Huỳnh Thúc Kháng, P.Bến Nghé, Q.1. TP.HCM</p>
									<p> <span class="strong">Điện thoại: </span> <span class="highlighted">032145678</span> </p>
								</div>
								<div class="col-sm-3 col-md-3 foot-spec foot-com">
									<h4>Hỗ trợ</h4>
									<ul class="two-columns">
										<li> <a href="{{route('about')}}">Về chúng tôi</a> </li>
										<li> <a href="#">Câu hỏi thường gặp</a> </li>
										<li> <a href="#">Blog </a> </li>
										<li> <a href="{{ route('contact') }}">Liên hệ</a> </li>
									</ul>
								</div>
								<div class="col-sm-3 foot-social foot-spec foot-com">
									<h4><span>Theo dõi chúng tôi trên</h4>
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
										<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== FOOTER - COPYRIGHT ==========-->
	<section>
		<div class="rows copy">
			<div class="container">
				<p>Copyrights © 2020 The Travel. All Rights Reserved</p>
			</div>
		</div>
	</section>

	<!--========= Scripts ===========-->
	<script src="{{ asset('source/js/jquery-latest.min.js') }}"></script>
	<script src="{{ asset('source/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('source/js/bootstrap.js') }}"></script>
	<script src="{{ asset('source/js/wow.min.js') }}"></script>
	<script src="{{ asset('source/js/materialize.min.js') }}"></script>
	<script src="{{ asset('source/js/mail.js') }}"></script>
	<script src="{{ asset('source/js/custom.js') }}"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/booking-hotel.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 01:48:00 GMT -->
</html>
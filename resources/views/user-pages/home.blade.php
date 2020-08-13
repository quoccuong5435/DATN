@extends('master')

@section('main-content')
		<!--HEADER SECTION-->
	<section>
		<div class="v2-hom-search">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					<div class="v2-ho-se-ri">
						<h5>Tour du lịch và du lịch hàng đầu thế giới</h5>
						<h1><b>Booking Now</b>!</h1>
						<p>Trải nghiệm chuyến du lịch thú vị và đặt phòng khách sạn, tận hưởng kỳ nghỉ, tìm kiếm các khách sạn giá rẻ.</p>
						
					</div>						
					</div>	
					<div class="col-md-6">
					<div class="">

						<form class="contact__form v2-search-form" method="post" action="http://rn53themes.net/themes/demo/travelz/mail/hotelbooking.php">
							

							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="" name="search" class="" name="city">
									<label for="select-city">Nhập địa điểm du lịch  hoặc khách sạn </label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="text" id="from" name="checkin" readonly>
									<label for="from">Ngày nhận phòng </label>
								</div>
								<div class="input-field col s6">
									<input type="text" id="to" name="checkout" readonly>
									<label for="to">Ngày trả phòng</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<select name="noofrooms">
										<option value="" disabled selected>Số lượng phòng</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
									</select></div>
								
									<div class="input-field col s6">
									<select name="noofadults">
										<option value="" disabled selected>Số người</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										
									</select>
								</div>
								
							</div>
															

											
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" value="Tìm kiếm phòng" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
								</div>
							</div>
						</form>
					</div>						
					</div>				
				</div>
			</div>
		</div>
	</section>
	<!--END HEADER SECTION-->
	<!--====== HOME PLACES ==========-->
	<section>
		<div class="rows pad-bot-redu tb-space">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h3 style="color: #727070;">ĐIỂM ĐẾN PHỔ BIẾN VIỆT NAM</h3>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p style="color: #727070;">Khám phá và trải nghiệm những danh lam thắng cảnh.</p>
				</div>
				<div>
				
					<!-- TOUR PLACE 3 -->
					
					
						@foreach($place as $list)
						<div class="col-md-4 col-sm-6 col-xs-12 b_packages">
						<div class="v_place_img"><img src="{{ asset('/images/gallery/') }}/{{$list->avatar_place}}" alt="Tour Booking" title="Tour Booking" /> </div>
						<div class="b_pack rows">
							<div class="col-md-12 col-sm-12">
								@csrf
								<a style="text-align: center;" href="{{ route('hotel_list',($list->id)) }}">
									<h4 style="color: #727070;" >{{$list->name_place}}<span class="v_pl_name" ></span>
									</h4>
								</a>
									
						</div>
					</div>
				</div>
					@endforeach
					
					<div>
						
						
			
					</div>
					
					
	</section>
	<!--====== HOME HOTELS ==========-->

	<!--====== HOME HOTELS ==========-->
	{{-- <section>
		<div class="rows tb-space pad-top-o pad-bot-redu">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2><span>Đặt phòng</span> ngay nào! </h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>Trang web đặt phòng khách sạn hàng đầu thế giới, hơn 30.000 phòng khách sạn trên toàn thế giới. Đặt phòng khách sạn và tận hưởng kỳ nghỉ của bạn với trải nghiệm đặc biệt</p>
				</div>
				<!-- HOTEL GRID -->
				<div class="to-ho-hotel">
					<!-- HOTEL GRID -->
					<div class="col-md-4">
						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="{{ asset('source/images/hci1.png') }}" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Tickets: 42 </div> <img src="{{ asset('source/images/hotels/1.jpg') }}" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="{{ route('rlist') }}"><h4>GTC Grand Chola</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>
										<li>City: illunois,united states
											<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										</li>
										<li><span class="ho-hot-pri-dis">$720</span><span class="ho-hot-pri">$420</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- HOTEL GRID -->
					<div class="col-md-4">
						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="{{ asset('source/images/hci1.png') }}" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Tickets: 520 </div> <img src="{{ asset('source/images/hotels/2.jpg') }}" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>Taaj Grand Resorts</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>
										<li>City: illunois,united states
											<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										</li>
										<li><span class="ho-hot-pri-dis">$840</span><span class="ho-hot-pri">$540</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- HOTEL GRID -->
					<div class="col-md-4">
						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="{{ asset('source/images/hci1.png') }}" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Tickets: 92 </div> <img src="{{ asset('source/images/hotels/3.jpg') }}" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="{{ route('rlist') }}"><h4>Keep Grand Hotels</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>
										<li>City: illunois,united states
											<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										</li>
										<li><span class="ho-hot-pri-dis">$680</span><span class="ho-hot-pri">$380</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!--====== SECTION: FREE CONSULTANT ==========-->
	<section>
		<div class="tb-space tour-consul">
			<div class="container">
				<div class="col-md-6"> <span class="to-con-1">Liên lạc với chúng tôi</span>
					<h2>Nhận ưu đãi du lịch tốt nhất</h2>
					<p>Dù bạn là ai, đang tìm kiếm điều gì, chúng tôi luôn có chỗ nghỉ hoàn hảo dành cho bạn</p> <span class="to-con-2">Help line: +001 21745 12345</span>
					<div class="ho-con-cont"> <a href="" class="to-con-3 link-btn">Đặt phòng</a> <a href="contact.html" class="to-con-4 link-btn">Liên hệ</a> </div>
				</div>
				<div class="col-md-6 ho-vid"> <img src="{{ asset('source/images/video.png') }}" alt=""> </div>
			</div>
		</div>
	</section>
	<!--====== EVENTS ==========-->

	<!--====== POPULAR TOUR PLACES ==========-->
	

	<!--<section>
        <div class="form tb-space">
            <div class="rows container">
                <div class="spe-title">
                    <h2>Book your <span>favourite Package</span> Now!</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form_1">
                    <div class="succ_mess">Thank you for contacting us we will get back to you soon.</div>
                    <form id="home_form" name="home_form" action="mail/send.php">
                        <ul>
                            <li>
                                <input type="text" name="ename" value="" id="ename" placeholder="Name" required>
                            </li>
                            <li>
                                <input type="tel" name="emobile" value="" id="emobile" placeholder="Mobile" required>
                            </li>
                            <li>
                                <input type="email" name="eemail" value="" id="eemail" placeholder="Email id" required>
                            </li>
                            <li>
                                <input type="text" name="esubject" value="" id="esubject" placeholder="Subject" required>
                            </li>
                            <li>
                                <input type="text" name="ecity" value="" id="ecity" placeholder="City" required>
                            </li>
                            <li>
                                <input type="text" name="ecount" value="" id="ecount" placeholder="Country" required>
                            </li>
                            <li>
                                <textarea name="emess" cols="40" rows="3" id="text-comment" placeholder="Enter your message"></textarea>
                            </li>
                            <li>
                                <input type="submit" value="Submit" id="send_button">
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 family">
                    <img src="{{ asset('source/images/family.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>-->
	
@endsection
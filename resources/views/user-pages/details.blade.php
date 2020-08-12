@extends('master')
@section('main-content')
<!--====== BANNER ==========-->
	<section>
		<div class="rows inner_banner inner_banner_2" style="background: url('../images/avatar_hotel/{{$list_hotels->avatar_hotel}}') no-repeat center center;background-size: cover;">
			<div class="container">
				<h2><span>{{$list_hotels->name_hotel}}</span></h2>
				<ul>
					<li><a href="#inner-page-title">Home</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
					<li><a href="#inner-page-title" class="bread-acti">Hotel Booking</a>
					</li>
				</ul>
				<p>{{$list_hotels->address_hotel}}</p>
			</div>
		</div>
	</section>
	<!--====== TOUR DETAILS - BOOKING ==========-->
	<section>
		<div class="rows banner_book" id="inner-page-title">
			<div class="container">
				<div class="banner_book_1">
					<ul>
						@foreach ($place as  $s)
						@if($s->id == $list_hotels->place_id)
						<li class="dl1">Vị trí : {{$s->name_place}}</li>
						@endif
						@endforeach
						<li class="dl3">Liên hệ : {{$list_hotels->phone_hotel}}</li>
						<li class="dl4"><a href="booking.html">Đặt ngay</a> </li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--====== TOUR DETAILS ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space">
				<div class="col-md-9">
					<!--====== TOUR TITLE ==========-->
					<div class="tour_head">
						<h2>{{$list_hotels->name_hotel}}
						
						 <span class="tour_star">
						 	@for($i=1;$i <=$list_hotels->rate_hotel;$i++ )
							<i class="fa fa-star" aria-hidden="true"></i>
							@endfor
						</span><span class="tour_rat">{{$list_hotels->rate_hotel}}</span></h2> </div>
					<!--====== TOUR DESCRIPTION ==========-->
					<div class="tour_head1 hotel-com-color">
						<h3>Về {{$list_hotels->name_hotel}}</h3>
						<p>Discover two of South America’s greatest cities, Rio de Janeiro and Buenos Aires, at a leisurely pace. A major highlight on this journey is a visit to Iguassu Falls in between your two city stays. It truly is one of the most spectacular sights on Earth. See the impressive falls from both the Brazilian and Argentine sides.</p>
						<p>Brazil’s view takes you through clouds of mist and the opportunity to see these 275 falls, spanning nearly two miles! Argentina’s side allows you to walk along the boardwalk network and embark on a jungle train through the forest for unforgettable views. Hear the deafening roar and admire the brilliant rainbows created by the clouds of spray, and take in the majesty of this wonder of the world. From vibrant cities to scenic beauty, this vacation to Rio de Janeiro, Iguassu Falls, and Buenos Aires will leave you with vacation memories you’ll cherish for life.</p>
					</div>
					<!--====== ROOMS: HOTEL BOOKING ==========-->
					<div class="tour_head1 hotel-book-room">
						<h3>Hình ảnh</h3>
						
						<div id="myCarousel1" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators carousel-indicators-1">
								@foreach($list_img as $img)
								<li data-target="#myCarousel1" data-slide-to="0"><img src="{{ asset('images/gallery') }}/{{$img->url}}" alt="Chania">
								</li>
								@endforeach
							</ol>
							<!-- Wrapper for slides -->
							<div class="carousel-inner carousel-inner1" role="listbox">
								<div class="item active"> <img src="{{ asset('source/images/gallery/s2.jpg') }}" alt="Chania" width="460" height="345"> </div>
								@foreach($list_img as $img)<div class="item"> <img src="{{ asset('images/gallery') }}/{{$img->url}}" alt="Chania" width="460" height="345"> 
									
								 </div>@endforeach
								
								

							</div>
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
							<a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> </a>
						</div>
					</div>
					
					<!--====== ABOUT THE TOUR ==========-->
				
					<!--====== HOTEL ROOM TYPES ==========-->
					
					<div class="tour_head1">
						<h3>Tiện ích phòng</h3>
						<div class="tr-room-type">
							<ul>
								@foreach($list_room as $dsroom)
								<li>
									<div class="tr-room-type-list">
										<div class="col-md-3 tr-room-type-list-1"><img src="{{ asset('images/avatar_room') }}/{{$dsroom->avatar_room}}" alt="" />
										</div>
										<div class="col-md-6 tr-room-type-list-2">
											<h4>{{$dsroom->room_name}}</h4>
											<p><b>Số phòng còn: </b>{{$dsroom->num_of_rooms}}</p> <span><b>Tiện ích phòng</b> : Free Parking, Breakfast, VAT</span> <span><b>Số người tối đa </b> :{{$dsroom->num_of_people}}</span> </div>
										<div class="col-md-3 tr-room-type-list-3"> <span class="hot-list-p3-1">Giá mỗi đêm</span> <span class="hot-list-p3-2">{{$dsroom->price_room}}</span> <a href="" class="hot-page2-alp-quot-btn spec-btn-text">Đặt ngay</a> </div>
									</div>
								</li>
								@endforeach
								
							</ul>
						</div>
					</div>
					
					<!--====== AMENITIES ==========-->
					<div class="tour_head1 hot-ameni">
						<h3>Tiện ích khách sạn</h3>
						<ul>
							<li><i class="fa fa-check" aria-hidden="true"></i> Airport transportation (surcharge)</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Number of floors - 9 </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Coffee shop or café </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Dry cleaning/laundry service</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Health club </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Billiards or pool table</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Total number of rooms - 108</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Bar/lounge </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Air Conditioner </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Mini Bar (with liquor) </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Separate Bedroom </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Living Room Space </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Smoking Rooms Available </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Internet </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Transport to / from Hotel </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Concierge </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Rental Car Service Desk On Site </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Room Service </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Beauty Salon </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Business Centre </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Fitness Centre </li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Spa and Pool </li>
						</ul>
					</div>
					<!--====== TOUR LOCATION ==========-->
				{{-- 	<div class="tour_head1 tout-map map-container">
						<h3>Vị trí</h3>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290415.157581651!2d-93.99661009218904!3d39.661150926343694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1467884030780" allowfullscreen></iframe>
					</div>
					<div> --}}
						<div class="dir-rat">
							<div class="dir-rat-inn dir-rat-title">
								<h3>Viết đánh giá</h3>
								<fieldset class="rating">
									<input type="radio" id="star5" name="rating" value="5" />
									<label class="full" for="star5" title="Awesome - 5 stars"></label>
									<input type="radio" id="star4half" name="rating" value="4 and a half" />
									<label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
									<input type="radio" id="star4" name="rating" value="4" />
									<label class="full" for="star4" title="Pretty good - 4 stars"></label>
									<input type="radio" id="star3half" name="rating" value="3 and a half" />
									<label class="half" for="star3half" title="Meh - 3.5 stars"></label>
									<input type="radio" id="star3" name="rating" value="3" />
									<label class="full" for="star3" title="Meh - 3 stars"></label>
									<input type="radio" id="star2half" name="rating" value="2 and a half" />
									<label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
									<input type="radio" id="star2" name="rating" value="2" />
									<label class="full" for="star2" title="Kinda bad - 2 stars"></label>
									<input type="radio" id="star1half" name="rating" value="1 and a half" />
									<label class="half" for="star1half" title="Meh - 1.5 stars"></label>
									<input type="radio" id="star1" name="rating" value="1" />
									<label class="full" for="star1" title="Sucks big time - 1 star"></label>
									<input type="radio" id="starhalf" name="rating" value="half" />
									<label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
								</fieldset>
							</div>
							<div class="dir-rat-inn">
								<form class="dir-rat-form">
									<div class="form-group col-md-6 pad-left-o">
										<input type="text" class="form-control" id="email11" placeholder="Nhập tên"> </div>
									<div class="form-group col-md-6 pad-left-o">
										<input type="number" class="form-control" id="email12" placeholder="Nhập số điện thoại"> </div>
									<div class="form-group col-md-6 pad-left-o">
										<input type="email" class="form-control" id="email13" placeholder="Nhập địa chỉ email"> </div>
									<div class="form-group col-md-6 pad-left-o">
										<input type="text" class="form-control" id="email14" placeholder="Nhập địa chỉ"> </div>
									<div class="form-group col-md-12 pad-left-o">
										<textarea placeholder="Nhập tin nhắn"></textarea>
									</div>
									<div class="form-group col-md-12 pad-left-o">
										<input type="submit" value="Gửi" class="link-btn"> </div>
								</form>
							</div>
							<!--COMMENT RATING-->
							<div class="dir-rat-inn dir-rat-review">
								<div class="row">
									<div class="col-md-3 dir-rat-left"> <img src="{{ asset('source/images/reviewer/4.jpg') }}" alt="">
										<p>Orange Fab & Weld <span>19th January, 2017</span> </p>
									</div>
									<div class="col-md-9 dir-rat-right">
										<div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										<p>Michael & his team have been helping us with our eqiupment finance for the past 5 years - I think that says a quite a lot.. Michael is always ready to go the extra mile, always available, always helpfull that goes the same for his team that work with him - definatley our first phone call.</p>
										<ul>
											<li><a href="#"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
											<li><a href="#"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
										</ul>
									</div>
								</div>
							</div>
							
						</div>
					{{-- </div> --}}
				</div>
				<div class="col-md-3 tour_r">
					<!--====== SPECIAL OFFERS ==========-->
					<div class="tour_right tour_offer">
						<div class="band1"><img src="{{ asset('source/images/offer.png') }}" alt="" /> </div>
						<p>Special Offer</p>
						<h4>$500<span class="n-td">
								<span class="n-td-1">$800</span>
								</span>
							</h4> <a href="booking.html" class="link-btn">Book Now</a> </div>
					<!--====== TRIP INFORMATION ==========-->
					<div class="tour_right tour_incl tour-ri-com">
						<h3>Trip Information</h3>
						<ul>
							<li>Location : Rio,Brazil</li>
							<li>Arrival Date: Nov 12, 2017</li>
							<li>Departure Date: Nov 21, 2017</li>
							<li>Free Sightseeing & Hotel</li>
						</ul>
					</div>
					<!--====== PACKAGE SHARE ==========-->
					<div class="tour_right head_right tour_social tour-ri-com">
						<h3>Chia sẻ khách sạn</h3>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
							<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
						</ul>
					</div>
					====== HELP PACKAGE ==========
					<div class="tour_right head_right tour_help tour-ri-com">
						<h3>Hỗ trợ</h3>
						<div class="tour_help_1">
							<h4 class="tour_help_1_call">Call Us Now</h4>
							<h4><i class="fa fa-phone" aria-hidden="true"></i> 10-800-123-000</h4> </div>
					</div>
					<!--====== PUPULAR TOUR PACKAGES ==========-->
					<div class="tour_right tour_rela tour-ri-com">
						<h3>Popular Packages</h3>
						<div class="tour_rela_1"> <img src="{{ asset('source/images/related1.png') }}" alt="" />
							<h4>Dubai 7Days / 6Nights</h4>
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">View this Package</a> </div>
						<div class="tour_rela_1"> <img src="{{ asset('source/images/related2.png') }}" alt="" />
							<h4>Mauritius 4Days / 3Nights</h4>
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">View this Package</a> </div>
						<div class="tour_rela_1"> <img src="{{ asset('source/images/related3.png') }}" alt="" />
							<h4>India 14Days / 13Nights</h4>
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p> <a href="#" class="link-btn">View this Package</a> </div>
					</div>
				</div>
			</div></div>
			</div>
		</div>
	</section>

@endsection
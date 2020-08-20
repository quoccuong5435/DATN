@extends('master')
@section('main-content')
<!--====== BANNER ==========-->
	<section>
		<div class="rows inner_banner inner_banner_2" style="background: url('../images/avatar_hotel/{{$list_hotels->avatar_hotel}}') no-repeat center center;background-size: cover;">
			<div class="container">
				<h2><span>{{$list_hotels->name_hotel}}</span></h2>
				<ul>
					<li><a href="#inner-page-title">Khách sạn</a>
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
					
				</div>
			</div>
		</div>
	</section>
	<!--====== TOUR DETAILS ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space">
				<div class="col-md-12">
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
						<p style="white-space: pre-line;">{{$list_hotel_detail->description}}</p>
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
					
					<div id="room-list" class="tour_head1">
						<h3>Danh sách phòng</h3>
						<div class="tr-room-type">
							<ul>
								@foreach($list_room as $dsroom)
								<li>
									<div class="tr-room-type-list">
										<div class="col-md-3 tr-room-type-list-1"><img src="{{ asset('images/avatar_room') }}/{{$dsroom->avatar_room}}" alt="" />
										</div>
										<div class="col-md-6 tr-room-type-list-2">
											<h4>{{$dsroom->room_name}}</h4>
											<span><b>Số phòng còn: {{$dsroom->empty_room}} </b></span> <span><b>Tiện ích phòng</b> : Free Parking, Breakfast, VAT</span> <span><b>Thông tin phòng </b> : {{$dsroom->description_room}}</span> <span><b>Số người tối đa  mỗi phòng </b> : {{$dsroom->num_of_people}}</span> </div>
										<div class="col-md-3 tr-room-type-list-3"> <span class="hot-list-p3-1">Giá mỗi đêm</span> 
											<span class="hot-list-p3-2">{{$dsroom->price_room}} VNĐ</span>
											<form action="{{ route('hotel_booking',($dsroom->hotel_id)) }}" method="GET" accept-charset="utf-8">
												@csrf
												<input type="" name="room_id" value="{{$dsroom->id}}" hidden="">
												<input type="" name="check_in" value="{{$check_in}}" hidden="">
												<input type="" name="check_out" value="{{$check_out}}" hidden="">
												 <a href="" target="blank" ><button  class="hot-page2-alp-quot-btn spec-btn-text" type="">Đặt ngay</button></a>
											</form>
											 </div>
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
							@foreach($service_room as $service)
							<li><i class="fa fa-check" aria-hidden="true"></i> {{$service->name_service}}</li>
							@endforeach
							<li></li>
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
				
			</div></div>
			</div>
		</div>
	</section>

@endsection
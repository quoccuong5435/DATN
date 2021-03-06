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
						<h1><b>ĐẶT NGAY </b>!</h1>
						<p>Trải nghiệm chuyến du lịch thú vị và đặt phòng khách sạn, tận hưởng kỳ nghỉ, tìm kiếm các khách sạn giá rẻ.</p>
						
					</div>						
					</div>	
					<div class="col-md-6">
					<div class="">

						<form class=" v2-search-form" method="get" action="{{route('hotellist_search')}}">
							
							@csrf
							<div class="row">
								<div class="input-field col s12">
									<select name="search" required="">
										<option value="" disabled selected>Địa danh</option>
										@foreach($place as $list)
										<option value="{{$list->name_place}}">{{$list->name_place}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="text" id="from" name="checkin" required="" >
									<label for="from">Ngày nhận phòng </label>
								</div>
								<div class="input-field col s6">
									<input type="text" id="to" name="checkout" required="" >
									<label for="to">Ngày trả phòng</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<select name="people" required="">
										<option value="" disabled selected>Số lượng phòng</option>
										@for($i=1;$i<=10;$i++)
										<option value="{{$i}}">{{$i}}</option>
										@endfor
									</select></div>
								
									<div class="input-field col s6" required>
									<select name="room">
										<option value="" disabled selected>Số người tối đa</option>
										@for($i=1;$i<=10;$i++)
										<option value="{{$i}}">{{$i}}</option>
										@endfor
									</select>
								</div>
								
							</div>
															

											
							<div class="row">
								<div class="input-field col s12">
									<a><input type="submit" value="Tìm kiếm phòng" class="waves-effect waves-light tourz-sear-btn v2-ser-btn"></a>
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
					
					
						@foreach($places as $list)
						<div class="col-md-4 col-sm-6 col-xs-12 b_packages">
						<div class="v_place_img"><img src="{{ asset('/images/gallery/') }}/{{$list->avatar_place}}" alt="Tour Booking" title="Tour Booking" /> </div>
						<div class="b_pack rows">
							<div class="col-md-12 col-sm-12">
								
								<a style="text-align: center;" href="{{ route('hotel_list',($list->id)) }}">
									<h4 style="color: #727070;" >{{$list->name_place}}<span class="v_pl_name" ></span>
									</h4>
								</a>
									
						</div>
					</div>
				</div>
					@endforeach
					{{$places->links()}}
					<div>
						
						
			
					</div>
					
					
	</section>
	<!--====== HOME HOTELS ==========-->

	<section>
		<div class="tb-space tour-consul">
			<div class="container">
				<div class="col-md-6"> <span class="to-con-1">Liên lạc với chúng tôi</span>
					<h2>Nhận ưu đãi du lịch tốt nhất</h2>
					<p>Dù bạn là ai, đang tìm kiếm điều gì, chúng tôi luôn có chỗ nghỉ hoàn hảo dành cho bạn</p> <span class="to-con-2">Help line: +0321 456 789</span>
					<div class="ho-con-cont"> <a href="" class="to-con-3 link-btn">Đặt phòng</a> <a href="{{route('contact')}}" class="to-con-4 link-btn">Liên hệ</a> </div>
				</div>
				<div class="col-md-6 ho-vid"> <img  style="width:540px;height:480px; border-radius: 10px 10px;" src="{{ asset('source/images/landmark.jpg') }}" alt=""> </div>
			</div>
		</div>
	</section>
	<!--====== EVENTS ==========-->

	
	
@endsection
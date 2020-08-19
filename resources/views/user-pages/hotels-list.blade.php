@extends('master')
@section('main-content')
<!--====== HOTELS LIST ==========-->
	<section class="hot-page2-alp hot-page2-pa-sp-top all-hot-bg">
		<div class="container">
			<div class="row inner_banner inner_banner_3 bg-none">
				<div class="hot-page2-alp-tit">
					<h1>Khách sạn ở {{$place->name_place}} </h1>

					<ul>
						<li><a href="#inner-page-title">Khách sạn</a> </li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
						<li><a href="#inner-page-title" class="bread-acti">Khách sạn {{$place->name_place}}</a> </li>
					</ul>
					
				</div>
			</div>
			<div class="row">
				<div class="hot-page2-alp-con">
					<!--LEFT LISTINGS-->
					<div class="col-md-3 hot-page2-alp-con-left">
						
						<!--PART 7 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Kiểm tra còn phòng</h4>
							<div class="hot-page2-alp-l-com1 hot-room-ava-check">
								<form>
									<ul>
										<li>
											<label>Nhập tên thành phố</label>
											<input type="text" placeholder="Nhập thành phố	"> </li>
										<li>
											<label>Ngày nhận phòng</label>
											<input type="date"> </li>
										<li>
											<label>Ngày trả phòng</label>
											<input type="date"> </li>
										<li>
											<input type="submit" value="Kiểm tra"> </li>
									</ul>
								</form>
							</div>
						</div>
						<!--PART 4 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-map-marker" aria-hidden="true"></i> Các bộ lọc phổ biến</h4>
							<div class="hot-page2-alp-l-com1 hot-page2-alp-p4">
								<form>
									<ul>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp41" class="styled" type="checkbox" checked="">
												<label for="chp41"> Đà Nẵng </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp42" class="styled" type="checkbox">
												<label for="chp42"> Bà Rịa - Vũng Tàu </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp43" class="styled" type="checkbox">
												<label for="chp43"> Hồ Chí Minh </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp44" class="styled" type="checkbox">
												<label for="chp44"> Hà Nội </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp45" class="styled" type="checkbox">
												<label for="chp45"> An Giang </label>
											</div>
										</li>
									</ul>
								</form> <a href="javascript:void(0);" class="hot-page2-alp-p4-btn-s">xem thêm</a> </div>
						</div>
						<!--END PART 4 : LEFT LISTINGS-->
						<!--PART 5 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-dollar" aria-hidden="true"></i> Giá phòng</h4>
							<div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
								<form>
									<ul>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp51" class="styled" type="checkbox" checked="">
												<label for="chp51"> $5000 - Above </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp52" class="styled" type="checkbox">
												<label for="chp52"> $4000 - $5000 </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp53" class="styled" type="checkbox">
												<label for="chp53"> $3000 - $4000 </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp54" class="styled" type="checkbox">
												<label for="chp54"> $2000 - $3000 </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp55" class="styled" type="checkbox">
												<label for="chp55"> $2000 - Below </label>
											</div>
										</li>
									</ul>
								</form> <a href="javascript:void(0);" class="hot-page2-alp-p5-btn-s">xem thêm</a> </div>
						</div>
						<!--END PART 5 : LEFT LISTINGS-->
						<!--PART 6 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-star-o" aria-hidden="true"></i> Xếp hạng sao</h4>
							<div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
								<form>
									<ul>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp61" class="styled" type="checkbox" checked="">
												<label for="chp61"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">5.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> </span>
												</label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp62" class="styled" type="checkbox">
												<label for="chp62"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">4.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </span>
												</label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp63" class="styled" type="checkbox">
												<label for="chp63"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">3.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </span>
												</label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp64" class="styled" type="checkbox">
												<label for="chp64"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">2.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </span>
												</label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp65" class="styled" type="checkbox">
												<label for="chp65"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">1.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </span>
												</label>
											</div>
										</li>
									</ul>
								</form> <a href="javascript:void(0);" class="hot-page2-alp-p5-btn-s">xem thêm</a> </div>
						</div>
						<!--END PART 5 : LEFT LISTINGS-->
						<!--PART 6 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-heart-o" aria-hidden="true"></i> Tiện ích </h4>
							<div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
								<form>
									<ul>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp71" class="styled" type="checkbox" checked="">
												<label for="chp71"> Hồ bơi </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp72" class="styled" type="checkbox">
												<label for="chp72"> Wi-Fi </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp73" class="styled" type="checkbox">
												<label for="chp73"> Khu vực bếp</label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp74" class="styled" type="checkbox">
												<label for="chp74"> Phòng GYM </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp75" class="styled" type="checkbox">
												<label for="chp75"> Bể bơi </label>
											</div>
										</li>
									</ul>
								</form> <a href="javascript:void(0);" class="hot-page2-alp-p5-btn-s">xem thêm</a> </div>
						</div>
						<!--END PART 7 : LEFT LISTINGS-->
					</div>
					<!--END LEFT LISTINGS-->
					<!--RIGHT LISTINGS-->
					
					<div class="col-md-9 hot-page2-alp-con-right">
						<div class="hot-page2-alp-con-right-1">
							<!--LISTINGS-->
							<div class="row">
								<!--LISTINGS START-->
								@foreach($list_hotel as $dshotel)
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">{{$dshotel->score_hotel}}</div>
											<div class="hot-page2-hli-1"> <img src="{{asset('images/avatar_hotel')}}/{{$dshotel->avatar_hotel}}" alt=""> </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="{{ route('chitiet',($dshotel->id)) }}"><h3>{{$dshotel->name_hotel}}</h3></a>
											<ul>
												<li>{{$dshotel->address_hotel}}</li>

												<li>{{$dshotel->phone_hotel}}</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
												<br><br><br>
												<a href="{{ route('chitiet',($dshotel->id)) }}" class="hot-page2-alp-quot-btn">Xem Phòng</a>
											 </div>
									</div>
									
								</div>
								@endforeach
								{{$list_hotel->links()}}							
							</div>
						</div>
					</div>
					<!--END RIGHT LISTINGS-->	
				</div>
			</div>
		</div>
	</section>
	
@endsection
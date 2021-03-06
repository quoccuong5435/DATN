@extends('master')
@section('main-content')
<!--====== HOTELS LIST ==========-->
	<section class="hot-page2-alp hot-page2-pa-sp-top all-hot-bg">
		<div class="container">
			<div class="row inner_banner inner_banner_3 bg-none">
				<div class="hot-page2-alp-tit">
					<h1>Hotel & Restaurants in Vancouver </h1>
					<ul>
						<li><a href="#inner-page-title">Home</a> </li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
						<li><a href="#inner-page-title" class="bread-acti">Hotels & Restaurants</a> </li>
					</ul>
					<p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. </p>
				</div>
			</div>
			<div class="row">
				<div class="hot-page2-alp-con">
					<!--LEFT LISTINGS-->
					<div class="col-md-3 hot-page2-alp-con-left">
						<!--PART 1 : LEFT LISTINGS-->
						<div class="hot-page2-alp-con-left-1">
							<h3>Gợi Ý Dành Cho Bạn</h3> </div>
						<!--PART 2 : LEFT LISTINGS-->
						<div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
							<ul>
								<!--LISTINGS-->
								<li>
									<a href="#">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="{{ asset('source/images/hotels/1.jpg') }}" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5>Taaj Club House</h5> <span>City: illunois, United States</span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.2</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="#">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="{{ asset('source/images/hotels/2.jpg') }}" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5>Lake Palace view Hotel</h5> <span>City: Beijing,China</span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.4</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="#">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="{{ asset('source/images/hotels/3.jpg') }}" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5>First Class Grandd Hotel</h5> <span>City: Berlin,Germany</span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>5.0</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="#">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="{{ asset('source/images/hotels/4.jpg') }}" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5>Barcelona Grand Pales</h5> <span>City: Chennai,India</span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>3.0</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="#">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="{{ asset('source/images/hotels/8.jpg') }}" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5>Universal luxury Grand Hotel</h5> <span>City: Rio,Brazil</span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>3.4</span> </div>
									</a>
								</li>
							</ul>
						</div>
						<!--PART 7 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Kiểm tra còn phòng</h4>
							<div class="hot-page2-alp-l-com1 hot-room-ava-check">
								<form>
									<ul>
										<li>
											<label>Nhập tên thành phố</label>
											<input type="text" placeholder="Enter City"> </li>
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
												<label for="chp41"> Nashville, USA </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp42" class="styled" type="checkbox">
												<label for="chp42"> Hull, England </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp43" class="styled" type="checkbox">
												<label for="chp43"> Seoul, South Korea </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp44" class="styled" type="checkbox">
												<label for="chp44"> Ljubljana, Slovenia </label>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-info checkbox-circle">
												<input id="chp45" class="styled" type="checkbox">
												<label for="chp45"> Wroclaw, Poland </label>
											</div>
										</li>
									</ul>
								</form> <a href="javascript:void(0);" class="hot-page2-alp-p4-btn-s">view more</a> </div>
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
							@foreach($list_hotel as $dshotel)
							<!--LISTINGS-->
							<div class="row">
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">{{$dshotel->score_hotel}}</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l1.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Phòng còn: 42 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>{{$dshotel->name_hotel}}</h3></a>
											<ul>
												<li>{{$dshotel->address_hotel}}</li>

												<li>{{$dshotel->phone_hotel}}</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Giá mỗi đêm</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="{{ route('chitiet',($dshotel->id)) }}" class="hot-page2-alp-quot-btn">Xem Phòng</a>
											</span> </div>
									</div>
								</div>
								@endforeach
								<!--END LISTINGS-->
					{{-- 			<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.0</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l3.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 18 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Taaj Club House</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">5.0</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l4.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 53 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Barcelona Grand Pales</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.5</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l5.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Universal luxury Grand Hotel</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.0</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l6.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 18 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Taaj Club House</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">5.0</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l9.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 53 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Barcelona Grand Pales</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.5</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l8.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Universal luxury Grand Hotel</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.5</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l1.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Universal luxury Grand Hotel</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.0</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l3.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 18 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Taaj Club House</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">5.0</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l4.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 53 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Barcelona Grand Pales</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.5</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l5.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Universal luxury Grand Hotel</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.0</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l6.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 18 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Taaj Club House</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">5.0</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l9.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 53 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Barcelona Grand Pales</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.5</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l8.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Universal luxury Grand Hotel</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->	
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.5</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l1.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Universal luxury Grand Hotel</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.0</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l3.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 18 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Taaj Club House</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">5.0</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l4.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 53 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Barcelona Grand Pales</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.5</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l5.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Universal luxury Grand Hotel</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.0</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l6.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 18 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Taaj Club House</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">5.0</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l9.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 53 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Barcelona Grand Pales</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->
								<!--LISTINGS START-->
								<div class="hot-page2-alp-r-list">
									<div class="col-md-3 hot-page2-alp-r-list-re-sp">
										<a href="javascript:void(0);">
											<div class="hotel-list-score">4.5</div>
											<div class="hot-page2-hli-1"> <img src="{{ asset('source/images/hotels/l8.jpg') }}" alt=""> </div>
											<div class="hom-hot-av-tic hom-hot-av-tic-list"> Available Rooms: 42 </div>
										</a>
									</div>
									<div class="col-md-6">
										<div class="hot-page2-alp-ri-p2"> <a href="hotel-details.html"><h3>Universal luxury Grand Hotel</h3></a>
											<ul>
												<li>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</li>
												<li>+101-1231-1231, +61 6541-4561-12</li>
											</ul>
										</div>
									</div>
									<div class="col-md-3">
										<div class="hot-page2-alp-ri-p3">
											<div class="hot-page2-alp-r-hot-page-rat">25%Off</div> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
												<a href="hotel-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
									</div>
								</div>
								<!--END LISTINGS-->								
							</div>
						</div>
					</div>
					<!--END RIGHT LISTINGS--> --}}
				</div>
			</div>
		</div>
	</section>
	
@endsection
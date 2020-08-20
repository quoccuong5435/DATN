@extends('master')
@section('main-content')
<!--====== HOTELS LIST ==========-->
	<section class="hot-page2-alp hot-page2-pa-sp-top all-hot-bg">
		<div class="container">
			<div class="row inner_banner inner_banner_3 bg-none">
				<div class="hot-page2-alp-tit">
					{{-- <h1>Khách sạn ở {{$place->name_place}} </h1>

					<ul>
						<li><a href="#inner-page-title">Khách sạn</a> </li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
						<li><a href="#inner-page-title" class="bread-acti">Khách sạn {{$place->name_place}}</a> </li>
					</ul> --}}
					
				</div>
			</div>
			<div class="row">
				<div class="hot-page2-alp-con">
					<!--LEFT LISTINGS-->
					<div class="col-md-3 hot-page2-alp-con-left">
						
						<!--PART 7 : LEFT LISTINGS-->
					
						<!--PART 4 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-star-o" aria-hidden="true"></i> Xếp hạng điểm đánh giá</h4>
							
								
											
												
												<form action="{{route('hotels_lists',($id))}}" method="get" accept-charset="utf-8">
													@csrf
													<input type="" name="search" hidden="" value="{{$search}}">
													<input type="" name="check_in" hidden  value="{{$check_in}}">
													<input type="" name="check-out" hidden="" value="{{$check_out}}">
													<input type="" name="room" hidden="" value="{{$room}}">
													<input type="" name="people" hidden="" value="{{$people}}">
													<br>
													<br>
													<span>Nhập min</span>
													<input type="number" style="width: 100%" min="1" max="10" step="0.1" name="min" value="">
													<br>
													<br>
													<span>Nhập max</span>
													<input type="number" style="width: 100%" min="1" max="10" step="0.1" name="max" value="">
													<br>
													<br>
													<br>
													<a href="" style="padding-left: 65px" title=""><button class="btn-light">Lọc điều kiện</button></a>
												</form>
												
												
												
												
											<br>
													<br>
									
						</div>
						<!--END PART 4 : LEFT LISTINGS-->
						
						<!--PART 6 : LEFT LISTINGS-->
						<div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-star-o" aria-hidden="true"></i> Xếp hạng sao</h4>
							
								
											
												
												<form action="{{route('hotel_lists',($id))}}" method="get" accept-charset="utf-8">
													@csrf
													<input type="" name="search" hidden="" value="{{$search}}">
													<input type="" name="check_in" hidden  value="{{$check_in}}">
													<input type="" name="check-out" hidden="" value="{{$check_out}}">
													<input type="" name="room" hidden="" value="{{$room}}">
													<input type="" name="people" hidden="" value="{{$people}}">
													<select name="rate_hotel" >
														<option value="1">Khách sạn 1 sao</option>
														<option value="2">Khách sạn 2 sao</option>
														<option value="3">Khách sạn 3 sao</option>
														<option value="4">Khách sạn 4 sao</option>
														<option value="5">Khách sạn 5 sao</option>
														
													</select>
													<br>
													<a href="" style="padding-left: 65px" title=""><button class="btn-light">Lọc điều kiện</button></a>
												</form>
												
												
												
												
											
									
						</div>
						<!--END PART 5 : LEFT LISTINGS-->
						<!--PART 6 : LEFT LISTINGS-->
					
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
										<div class="hot-page2-alp-ri-p2"> <a href=""><h3>{{$dshotel->name_hotel}}</h3></a>
											<ul>
												<li>{{$dshotel->address_hotel}}</li>

												<li>{{$dshotel->phone_hotel}}</li>
											</ul>
										</div>
									</div>
									
									<form action="{{ route('detail',($dshotel->id)) }}" method="POST" accept-charset="utf-8">
										@csrf
										<div class="col-md-3">
										<input type="" name="check_in" value="{{$check_in}}" hidden="">
										<input type="" name="check_out" value="{{$check_out}}" hidden="">
										<input type="" name="people" value="{{$people}}" hidden="">
										<input type="" name="room" value="{{$room}}" hidden="">
										<div class="hot-page2-alp-ri-p3">
												<br><br><br>
												<a href=""><button type="submit">Xem Phòng</button></a>
											 </div>
									</div>
									</form>
									
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
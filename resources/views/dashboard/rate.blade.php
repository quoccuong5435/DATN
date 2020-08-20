@extends('master')

@section('main-content')

	@include('partials.left-section')

	<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>Hồ Sơ Của Tôi</h4>

					 @if(Session::has('thongbao'))
                            <div class="alert alert-success">
                                {{Session::get('thongbao')}}
                            </div>
                                   

                            
                        @endif
				@foreach($rate_booking as $rate)
					<form action="{{route('rate_booking-send',($rate->id))}}" method="post" accept-charset="utf-8">
					@endforeach
					@csrf
					<div class="db-2-main-com db-2-main-com-table">
						<table style="color: #000; " class="responsive-table">
							<tbody>
								<tr>
									<td>Số điểm</td>
									<td><select name="rate" >
										@for($i=1 ; $i<= 10;$i++)
										<option value="{{$i}}">{{$i}} điểm</option>
										@endfor
									</select></td>
									
								</tr>
								<tr>
									<td>Ý kiến khách hàng</td>
									
									<td><textarea style="height: 200px" name="cmt"></textarea></td>
								</tr>
							</tbody>
						</table>
						<div class="db-mak-pay-bot">
							<a><button class="waves-effect waves-light btn-large">Đánh giá</button></a> </div>
					</div>
					</form>
	
				</div>
			</div>

	@include('partials.right-section')
@endsection
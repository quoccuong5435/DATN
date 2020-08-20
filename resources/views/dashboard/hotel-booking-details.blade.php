@extends('master')

@section('main-content')

	@include('partials.left-section')

	<!--CENTER SECTION-->
			<div style="color: #333;" class="db-2">
				<div class="db-2-com db-2-main">
					 @if(Session::has('thongbao'))
                            <div class="alert alert-success">
                                {{Session::get('thongbao')}}
                            </div>
                                   

                            
                        @endif
					<h4>Chi tiết đặt phòng khách sạn</h4>
					<div class="db-2-main-com db-2-main-com-table">
						<form action="" method="POST" accept-charset="utf-8">
							
							
						
						<table class="responsive-table">
							<tbody>
								<tr>
									<td>Tên khách sạn</td>
									<td>:</td>
									<td><input type="" name="hotel_id" hidden="" value="{{$list_hotels->id}}">
										<input type="" name="name_hotel" hidden="" value="{{$list_hotels->name_hotel}}">
										{{$list_hotels->name_hotel}}</td>
								</tr>
								<tr>
									<td>Tên khách hàng</td>
									<td>:</td>
									<input type="" name="user_id" hidden="" value="{{Auth::User()->id}}">
									<input type="" name="name_user" hidden="" value="{{Auth::User()->fullname_user}}">
									<td>{{Auth::User()->fullname_user}}</td>
								</tr>
								<tr>
									<td>Số lượng phòng</td>
									<td>:</td>
									<td><select name="sl" >
										@foreach($list_room as $ds)
										@for($i=1;$i<=$ds->empty_room ;$i++)
										<option value="{{$i}}">{{$i}}</option>
										@endfor
										@endforeach
									</select></td>
								</tr>
									<tr>
									<td>Phòng</td>
									<td>:</td>
									@foreach($list_room as $list)
									<input type="" name="room_id"hidden value="{{$list->id}}">
									<input type="" name="name_room"hidden value="{{$list->room_name}}">
									<td>{{$list->room_name}}</td>
									@endforeach
								</tr>
								<tr>
									<td>Ngày nhận phòng</td>
									<td>:</td>
									<input type="" name="date_to" hidden="" value="{{date('d-m-Y',strtotime($check_in))}}">
									<td>{{$check_in}}</td>
								</tr>
								<tr>
									<td>Ngày trả phòng</td>
									<td>:</td>
									<input type="" name="date_from" hidden="" value="{{date('d-m-Y',strtotime($check_out))}}">
									<td>{{$check_out}}</td>
								</tr>
								<tr>
									<td>Giá mỗi phòng</td>
									<td>:</td>
									@foreach($list_room as $list)
									<input type="" name="price_room"hidden value="{{$list->price_room}}">
									<td>{{$list->price_room}}</td>
								@endforeach
								</tr>
							</tbody>
						</table>
						<div class="db-mak-pay-bot">
							<a href="" {{-- class="waves-effect waves-light btn-large" --}}><button type="">Đặt phòng</button</a> </div>
							</form>
					</div>
				</div>
			</div>

	@include('partials.right-section')
@endsection
@extends('master')

@section('main-content')

	@include('partials.left-section')

	<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>Danh sách phòng đã đặt</h4>
					<div class="db-2-main-com db-2-main-com-table">
						 @if(Session::has('thongbao'))
                            <div class="alert alert-success">
                                {{Session::get('thongbao')}}
                            </div>
                                   

                            
                        @endif
						<table style="color: #333;" class="responsive-table">
							<thead>
								<tr>
									<th>STT</th>
									<th>Khách sạn</th>
									<th>Check in</th>
									<th>Check out</th>
									<th>Giá</th>
									<th>Trạng thái</th>
									<th>Hành động</th>
								</tr>
							</thead>
							<tbody>
								<span hidden="">{{$i=1}}/span
								@foreach($list_booking as $list)
								<tr>
									<td>{{$i++}}</td>
									<td>{{$list->name_hotel}}</td>
									<td>{{$list->date_to}}</td>
									<td>{{$list->date_from}}</td>
									<td>{{$list->total_price}}</td>
									@if($list->booking_status_id==1)
									<td>
										Đang đặt đặt thành công
									</td>
									<form action="{{route('cancel-hotel',($list->id))}}" method="post" accept-charset="utf-8">
										@csrf
										<input type="" hidden="" name="num_of_rooms" value="{{$list->num_of_rooms}}">
										<input type="" hidden="" name="room_id" value="{{$list->room_id}}">
										<td><a href=""><button class="btn-warning ">Hủy phòng</button></a>
									</td>
									</form>
									
									@elseif($list->booking_status_id==2)
									<td>
										Đã thanh toán 
									</td>
									<td><a href="{{route('rate_booking',($list->id))}}" ><button class="btn-success">Đánh giá</button></a>
									</td>
									@else
									<td>
										Đã hủy phòng
									</td>
									@endif
									
								</tr>
								@endforeach
							</tbody>

						</table>
						
					</div>
					{{$list_booking->links()}}
				</div>
			</div>

	@include('partials.right-section')
@endsection
@extends('master')

@section('main-content')

	@include('partials.left-section')

	<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>Chi tiết đặt phòng khách sạn</h4>
					<div class="db-2-main-com db-2-main-com-table">
						<table class="responsive-table">
							<tbody>
								<tr>
									<td>Tên khách sạn</td>
									<td>:</td>
									<td>GTC Grand Chola</td>
								</tr>
								<tr>
									<td>Thời gian</td>
									<td>:</td>
									<td>12Days / 11Nights</td>
								</tr>
								<tr>
									<td>Giá</td>
									<td>:</td>
									<td>$1280</td>
								</tr>
								<tr>
									<td>Ngày nhận phòng</td>
									<td>:</td>
									<td>21 May 2017</td>
								</tr>
								<tr>
									<td>Ngày trả phòng</td>
									<td>:</td>
									<td>03 Jun 2017</td>
								</tr>
								<tr>
									<td>Tổng thành viên</td>
									<td>:</td>
									<td>7(Adult:5, Children:2)</td>
								</tr>
								<tr>
									<td>Tiện ích khách sạn</td>
									<td>:</td>
									<td>Plush Bedding, Bathrooms, Wi-Fi, King & Queen sized rooms, Courtyard Suites etc</td>
								</tr>
								<tr>
									<td>Trạng thái thanh toán</td>
									<td>:</td>
									<td><span class="db-not-done">Pending</span>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="db-mak-pay-bot">
							<a href="{{ route('db-makepayment') }}" class="waves-effect waves-light btn-large">Thanh Toán</a> </div>
					</div>
				</div>
			</div>

	@include('partials.right-section')
@endsection
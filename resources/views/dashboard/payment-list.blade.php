@extends('master')

@section('main-content')

	@include('partials.left-section')

	<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>Tất cả các giao dịch</h4>
					<div class="db-2-main-com db-2-main-com-table">
						<table class="responsive-table">
							<thead>
								<tr>
									<th>STT</th>
									<th>Khách sạn</th>
									<th>Ngày bắt đầu</th>
									<th>Giá</th>
									<th>Thanh toán</th>
									<th>Hóa đơn</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Australia</td>
									<td>12 Aug 2017</td>
									<td>$784</td>
									<td><span class="db-done">Done</span>
									</td>
									<td><a href="#" class="db-down-pdf"><i class="fa fa-download" aria-hidden="true"></i> Download PDF</a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Dubai</td>
									<td>28 Feb 2018</td>
									<td>$654</td>
									<td><span class="db-not-done">Not-Done</span>
									</td>
									<td><a href="db-payment.html" class="db-make-pay"><i class="fa fa-usd" aria-hidden="true"></i> Make Payment</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

	@include('partials.right-section')
@endsection
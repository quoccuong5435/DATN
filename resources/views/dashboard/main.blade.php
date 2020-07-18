@extends('master')

@section('main-content')

	@include('partials.left-section')

			<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>Manage Booking</h4>
					<div class="db-2-main-com">
						<div class="db-2-main-1">
							<div class="db-2-main-2"> <img src="{{ asset('source/images/icon/db3.png') }}" alt="" /><span>Hotel Bookings</span>
								<ul>
									<li><a href="db-hotel-details.html">GTC Grand Chola</a>
									</li>
									<li><a href="db-payment.html">Payment Status <span class="db-not-done">not-Done</span></a>
									</li>
									<li><a href="db-hotel-details.html">Remaining Days - 14</a>
									</li>
									<li><a href="db-hotel-details.html">Travel Date - 16 may 2018</a>
									</li>
									<li><a href="db-refund.html">Cancel this booking</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

	@include('partials.right-section')
@endsection
<!--DASHBOARD-->
	<section>
		<div class="db">
			<!--LEFT SECTION-->
			<div class="db-l">
				<div class="db-l-1">
					<ul>
						<li><img src="{{ asset('source/images/db-profile.jpg') }}" alt="" />
						</li>
						<li><span>80%</span> hoàn thành hồ sơ</li>
						<li><span>18</span> Thông báo</li>
					</ul>
				</div>
				<div class="db-l-2">
					<ul>
						<li>
							<a href="{{ route('db-hotelbooking') }}"><img src="{{ asset('source/images/icon/dbl3.png') }}" alt="" /> Hotel Bookings</a>
						</li>
						</li>
						<li>
							<a href="{{ route('db-profile') }}"><img src="{{ asset('source/images/icon/dbl6.png') }}" alt="" /> Hồ sơ của tôi</a>
						</li>
						<li>
							<a href="{{ route('db-payment') }}"><img src="{{ asset('source/images/icon/dbl9.png') }}" alt="" /> Thanh toán</a>
						</li>
					</ul>
				</div>
			</div>
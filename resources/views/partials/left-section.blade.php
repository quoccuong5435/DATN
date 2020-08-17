<!--DASHBOARD-->
	<section>
		<div class="db">
			<!--LEFT SECTION-->
			<div class="db-l">
				<div class="db-l-1">
					<ul>
						<li><img src="{{ asset(Auth::User()->avatar_user) }}" alt="" />
						</li>
						
						<span><b>Phone: {{Auth::User()->phone_user}}</b> </span>
						<br>
						<span><b>Email: {{Auth::User()->email_user}}</b>  </span>
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
					</ul>
				</div>
			</div>
<!--DASHBOARD-->
	<section>
		<div class="db">
			<!--LEFT SECTION-->
			<div class="db-l">
				<div class="db-l-1">
					<ul>
						<li><img style="width: 200px;height: 200px;padding: 10px" src="{{ asset('images/user') }}/{{Auth::User()->avatar_user}}" alt="" />
						</li>
						
						
					</ul>
				</div>
				<div class="db-l-2">
					<ul>
						<li>
							<a href="{{ route('db-hotelbooking') }}"><img src="{{ asset('source/images/icon/dbl3.png') }}" alt="" /> Hotel Bookings</a>
						</li>
						</li>
						<li>
							<a href="{{route('dashboard')}}"><img src="{{ asset('source/images/icon/dbl6.png') }}" alt="" /> Hồ sơ của tôi</a>
						</li>
					</ul>
				</div>
			</div>
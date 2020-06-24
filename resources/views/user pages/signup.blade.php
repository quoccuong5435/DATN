@extends('master')
@section('main-content')

<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="faqs-top-grids">
				<div class="book-grids">
					<div class="col-md-6 book-left">
						<div class="book-left-info">
							<h3>Create Your Govihar Account</h3>
						</div>
						<div class="book-left-form">
							<form>
								<p>First Name</p>
								<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								<p>Last Name</p>
								<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								<p>Phone Number</p>
								<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								<p>Email Address</p>
								<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
								<p>Password</p>
								<input type="password" name="password" id="password">
								<p>Confirm Password</p>
								<input type="password" name="password" id="password">
								<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
								<input type="submit" id="login" value="Register">
							</form>
						</div>
					</div>
					<div class="col-md-6 book-left book-right">
						<div class="book-left-info">
							<h3>Recommended</h3>
						</div>
						<div class="book-left-bottom">
							<div class="book-left-facebook">
								<a href="#">Connect with Facebook</a>
							</div>
							<div class="book-left-chrome">
								<a href="#">Connect with Google</a>
							</div>
						</div>
						<ul>
							<li>Access booking history with upcoming trips</li>
							<li>Print tickets and invoices</li>
							<li>Make checkouts simpler</li>
							<li>Enter your contact details only once</li>
							<li>Get alerts for low fares</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->

@endsection
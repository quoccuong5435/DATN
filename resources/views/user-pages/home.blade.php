@extends('master')

@section('main-content')
		<!--HEADER SECTION-->
	<section>
		<div class="v2-hom-search">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					<div class="v2-ho-se-ri">
						<h5>World's leading tour and travels template</h5>
						<h1>Hotel booking now!</h1>
						<p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p>
						
					</div>						
					</div>	
					<div class="col-md-6">
					<div class="">
						<form class="contact__form v2-search-form" method="post" action="http://rn53themes.net/themes/demo/travelz/mail/hotelbooking.php">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Thank you message
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text"  class="validate" name="name" required>
									<label>Enter your name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="number"  class="validate" name="phone" required>
									<label>Enter your phone</label>
								</div>
								<div class="input-field col s6">
									<input type="email"  class="validate" name="email" required>
									<label>Enter your email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="select-city" class="autocomplete" name="city">
									<label for="select-city">City, Destination and Hotel Name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="text" id="from" name="checkin" readonly>
									<label for="from">Check In</label>
								</div>
								<div class="input-field col s6">
									<input type="text" id="to" name="checkout" readonly>
									<label for="to">Check Out</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<select name="noofrooms">
										<option value="" disabled selected>No of Rooms</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="roomtype">
										<option value="" disabled selected>Room Type</option>
										<option value="Ultra Premium">Ultra Premium</option>
										<option value="Ultra Deluxe">Ultra Deluxe</option>
										<option value="Premium">Premium</option>
										<option value="Deluxe">Deluxe</option>
										<option value="Normal">Normal</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<select name="noofadults">
										<option value="" disabled selected>No of adults</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="noofchildrens">
										<option value="" disabled selected>No of childrens</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>											
									</select>
								</div>
							</div>								

							<div class="row">
								<div class="input-field col s6">
									<select name="minprice">
										<option value="" disabled selected>Min Price</option>
										<option value="$200">$200</option>
										<option value="$500">$500</option>
										<option value="$1000">$1000</option>
										<option value="$5000">$5000</option>
										<option value="$10,000">$10,000</option>
										<option value="$50,000">$50,000</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="maxprice">
										<option value="" disabled selected>Max Price</option>
										<option value="$200">$200</option>
										<option value="$500">$500</option>
										<option value="$1000">$1000</option>
										<option value="$5000">$5000</option>
										<option value="$10,000">$10,000</option>
										<option value="$50,000">$50,000</option>
									</select>
								</div>								
							</div>								
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" value="Book Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
								</div>
							</div>
						</form>
					</div>						
					</div>				
				</div>
			</div>
		</div>
	</section>
	<!--END HEADER SECTION-->
	<!--====== HOME PLACES ==========-->
	<section>
		<div class="rows pad-bot-redu tb-space">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2>Top <span>Tour Packages</span></h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
				</div>
				<div>
					<!-- TOUR PLACE 1 -->
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages">
						<!-- OFFER BRAND -->
						<div class="band"> <img src="{{ asset('source/images/band.png') }}" alt="" /> </div>
						<!-- IMAGE -->
						<div class="v_place_img"> <img src="{{ asset('source/images/t5.png') }}" alt="Tour Booking" title="Tour Booking" /> </div>
						<!-- TOUR TITLE & ICONS -->
						<div class="b_pack rows">
							<!-- TOUR TITLE -->
							<div class="col-md-8 col-sm-8">
								<h4><a href="tour-details.html">Rio de Janeiro<span class="v_pl_name">(Brazil)</span></a></h4> </div>
							<!-- TOUR ICONS -->
							<div class="col-md-4 col-sm-4 pack_icon">
								<ul>
									<li>
										<a href="#"><img src="{{ asset('source/images/clock.png') }}" alt="Date" title="Tour Timing" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/info.png') }}" alt="Details" title="View more details" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/price.png') }}" alt="Price" title="Price" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/map.png') }}" alt="Location" title="Location" /> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- TOUR PLACE 2 -->
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages">
						<!-- OFFER BRAND -->
						<div class="band"> <img src="{{ asset('source/images/band1.png') }}" alt="" /> </div>
						<!-- IMAGE -->
						<div class="v_place_img"> <img src="{{ asset('source/images/t1.png') }}" alt="Tour Booking" title="Tour Booking" /> </div>
						<!-- TOUR TITLE & ICONS -->
						<div class="b_pack rows">
							<!-- TOUR TITLE -->
							<div class="col-md-8 col-sm-8">
								<h4><a href="tour-details.html">Paris<span class="v_pl_name">(England)</span></a></h4> </div>
							<!-- TOUR ICONS -->
							<div class="col-md-4 col-sm-4 pack_icon">
								<ul>
									<li>
										<a href="#"><img src="{{ asset('source/images/clock.png') }}" alt="Date" title="Tour Timing" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/info.png') }}" alt="Details" title="View more details" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/price.png') }}" alt="Price" title="Price" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/map.png') }}" alt="Location" title="Location" /> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- TOUR PLACE 3 -->
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages">
						<div class="v_place_img"><img src="{{ asset('source/images/t2.png') }}" alt="Tour Booking" title="Tour Booking" /> </div>
						<div class="b_pack rows">
							<div class="col-md-8 col-sm-8">
								<h4><a href="tour-details.html">South India<span class="v_pl_name">(India)</span></a></h4> </div>
							<div class="col-md-4 col-sm-4 pack_icon">
								<ul>
									<li>
										<a href="#"><img src="{{ asset('source/images/clock.png') }}" alt="Date" title="Tour Timing" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/info.png') }}" alt="Details" title="View more details" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/price.png') }}" alt="Price" title="Price" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/map.png') }}" alt="Location" title="Location" /> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- TOUR PLACE 4 -->
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages">
						<div class="v_place_img"><img src="{{ asset('source/images/t3.png') }}" alt="Tour Booking" title="Tour Booking" /> </div>
						<div class="b_pack rows">
							<div class="col-md-8 col-sm-8">
								<h4><a href="tour-details.html">The Great Wall<span class="v_pl_name">(China)</span></a></h4> </div>
							<div class="col-md-4 col-sm-4 pack_icon">
								<ul>
									<li>
										<a href="#"><img src="{{ asset('source/images/clock.png') }}" alt="Date" title="Tour Timing" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/info.png') }}" alt="Details" title="View more details" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/price.png') }}" alt="Price" title="Price" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/map.png') }}" alt="Location" title="Location" /> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- TOUR PLACE 5 -->
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages">
						<div class="v_place_img"><img src="{{ asset('source/images/t4.png') }}" alt="Tour Booking" title="Tour Booking" /> </div>
						<div class="b_pack rows">
							<div class="col-md-8 col-sm-8">
								<h4><a href="tour-details.html">Nail Island<span class="v_pl_name">(Andaman)</span></a></h4> </div>
							<div class="col-md-4 col-sm-4 pack_icon">
								<ul>
									<li>
										<a href="#"><img src="{{ asset('source/images/clock.png') }}" alt="Date" title="Tour Timing" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/info.png') }}" alt="Details" title="View more details" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/price.png') }}" alt="Price" title="Price" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/map.png') }}" alt="Location" title="Location" /> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- TOUR PLACE 6 -->
					<div class="col-md-4 col-sm-6 col-xs-12 b_packages">
						<div class="v_place_img"><img src="{{ asset('source/images/t6.png') }}" alt="Tour Booking" title="Tour Booking" /> </div>
						<div class="b_pack rows">
							<div class="col-md-8 col-sm-8">
								<h4><a href="tour-details.html">Mauritius<span class="v_pl_name">(Indiana)</span></a></h4> </div>
							<div class="col-md-4 col-sm-4 pack_icon">
								<ul>
									<li>
										<a href="#"><img src="{{ asset('source/images/clock.png') }}" alt="Date" title="Tour Timing" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/info.png') }}" alt="Details" title="View more details" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/price.png') }}" alt="Price" title="Price" /> </a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('source/images/map.png') }}" alt="Location" title="Location" /> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== HOME HOTELS ==========-->

	<!--====== HOME HOTELS ==========-->
	<section>
		<div class="rows tb-space pad-top-o pad-bot-redu">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2>Hotels <span>booking open now! </span> </h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
				</div>
				<!-- HOTEL GRID -->
				<div class="to-ho-hotel">
					<!-- HOTEL GRID -->
					<div class="col-md-4">
						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="{{ asset('source/images/hci1.png') }}" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Tickets: 42 </div> <img src="{{ asset('source/images/hotels/1.jpg') }}" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>GTC Grand Chola</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>
										<li>City: illunois,united states
											<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										</li>
										<li><span class="ho-hot-pri-dis">$720</span><span class="ho-hot-pri">$420</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- HOTEL GRID -->
					<div class="col-md-4">
						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="{{ asset('source/images/hci1.png') }}" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Tickets: 520 </div> <img src="{{ asset('source/images/hotels/2.jpg') }}" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>Taaj Grand Resorts</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>
										<li>City: illunois,united states
											<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										</li>
										<li><span class="ho-hot-pri-dis">$840</span><span class="ho-hot-pri">$540</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- HOTEL GRID -->
					<div class="col-md-4">
						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="{{ asset('source/images/hci1.png') }}" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Tickets: 92 </div> <img src="{{ asset('source/images/hotels/3.jpg') }}" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>Keep Grand Hotels</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>
										<li>City: illunois,united states
											<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										</li>
										<li><span class="ho-hot-pri-dis">$680</span><span class="ho-hot-pri">$380</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== SECTION: FREE CONSULTANT ==========-->
	<section>
		<div class="tb-space tour-consul">
			<div class="container">
				<div class="col-md-6"> <span class="to-con-1">Get in touch with us</span>
					<h2>Get best travel deals</h2>
					<p>Get best travel deals for hotels, holidays, trains.Donec eget odio a nunc lacinia rhoncus. Vivamus dignissim magna quis nisl fermentum porttitor. Maecenas venenatis mattis dui at pharetra.Nullam rutrum odio eu viverra accumsan. Nam orci elit, scelerisque eget dui non, sagittis tristique metus. Fusce nec nulla dapibus, fringilla nulla eu, vehicula odio. </p> <span class="to-con-2">Help line: +001 21745 12345</span>
					<div class="ho-con-cont"> <a href="hotels-list.html" class="to-con-3 link-btn">Book Now</a> <a href="contact.html" class="to-con-4 link-btn">Contact Now</a> </div>
				</div>
				<div class="col-md-6 ho-vid"> <img src="{{ asset('source/images/video.png') }}" alt=""> </div>
			</div>
		</div>
	</section>
	<!--====== EVENTS ==========-->

	<!--====== POPULAR TOUR PLACES ==========-->
	

	<!--<section>
        <div class="form tb-space">
            <div class="rows container">
                <div class="spe-title">
                    <h2>Book your <span>favourite Package</span> Now!</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form_1">
                    <div class="succ_mess">Thank you for contacting us we will get back to you soon.</div>
                    <form id="home_form" name="home_form" action="mail/send.php">
                        <ul>
                            <li>
                                <input type="text" name="ename" value="" id="ename" placeholder="Name" required>
                            </li>
                            <li>
                                <input type="tel" name="emobile" value="" id="emobile" placeholder="Mobile" required>
                            </li>
                            <li>
                                <input type="email" name="eemail" value="" id="eemail" placeholder="Email id" required>
                            </li>
                            <li>
                                <input type="text" name="esubject" value="" id="esubject" placeholder="Subject" required>
                            </li>
                            <li>
                                <input type="text" name="ecity" value="" id="ecity" placeholder="City" required>
                            </li>
                            <li>
                                <input type="text" name="ecount" value="" id="ecount" placeholder="Country" required>
                            </li>
                            <li>
                                <textarea name="emess" cols="40" rows="3" id="text-comment" placeholder="Enter your message"></textarea>
                            </li>
                            <li>
                                <input type="submit" value="Submit" id="send_button">
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 family">
                    <img src="{{ asset('source/images/family.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>-->
	
@endsection
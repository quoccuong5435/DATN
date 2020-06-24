@extends('master')

@section('main-content')
	<!-- banner -->
	<div class="banner hotels-banner">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 banner-left">
				<section class="slider2">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slider-info">
									<img src="{{ asset('source/images/5.jpg') }}" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="{{ asset('source/images/6.jpg') }}" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="{{ asset('source/images/7.jpg') }}" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="{{ asset('source/images/8.jpg') }}" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="{{ asset('source/images/6.jpg') }}" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
			</div>
			<div class="col-md-8 banner-right">
				<div class="sap_tabs">	
					<div class="booking-info about-booking-info">
						<h2>Book Domestic & International Hotels</h2>
					</div>
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">	
						  <!---->		  	 
									<div class="facts about-facts train-facts">
										<div class="booking-form train-form">
										<link rel="stylesheet" href="css/jquery-ui.css') }}" />
											<!---strat-date-piker---->
											<script>
												$(function() {
													$( "#datepicker,#datepicker1" ).datepicker();
												});
											</script>
											<!---/End-date-piker---->
											<!-- Set here the key for your domain in order to hide the watermark on the web server -->
											
											<div class="online_reservation">
													<div class="b_room">
														<div class="booking_room">
															<div class="reservation">
																<ul>		
																	<li  class="span1_of_1 desti about-desti">
																		 <h5>Going to</h5>
																		 <div class="book_date">
																			 <form>
																				<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																				<input type="text" placeholder="City, Area or Hotel Name" class="typeahead1 input-md form-control tt-input" required="">
																			 </form>
																		 </div>					
																	 </li>
																</ul>
															</div>
															<div class="reservation">
																<ul>	
																	 <li  class="span1_of_1">
																		 <h5>Check in</h5>
																		 <div class="book_date">
																		 <form>
																			<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																			<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
																		</form>
																		 </div>		
																	 </li>
																	 <li  class="span1_of_1 left">
																		 <h5>Check out</h5>
																		 <div class="book_date">
																			 <form>
																				<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																				<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
																			</form>
																		 </div>					
																	 </li>
																	 <li class="span1_of_1 left adult">
																		 <h5>Adults (18+)</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">1</option>
																					<option value="null">2</option>         
																					<option value="AX">3</option>
																					<option value="AX">4</option>
																					<option value="AX">5</option>
																					<option value="AX">6</option>
																			  </select>
																		 </div>	
																	</li>
																	<li class="span1_of_1 left h-child">
																		 <h5>Children (0-17)</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">1</option>
																					<option value="null">2</option>         
																					<option value="AX">3</option>
																					<option value="AX">4</option>
																					<option value="AX">5</option>
																					<option value="AX">6</option>
																			  </select>
																		 </div>	
																	</li>
																	<li class="span1_of_1 h-rooms">
																		 <h5>Rooms</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">1</option>
																					<option value="null">2</option>         
																					<option value="AX">3</option>
																					<option value="AX">4</option>
																					<option value="AX">5</option>
																					<option value="AX">6</option>
																			  </select>
																		 </div>	
																	</li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
															<div class="reservation">
																<ul>
																	
																	<div class="clearfix"></div>
																</ul>
															</div>
															<div class="reservation">
																<ul>	
																	 <li class="span1_of_3">
																			<div class="date_btn">
																				<form>
																					<input type="submit" value="Search" />
																				</form>
																			</div>
																	 </li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
											</div>
											<!---->
										</div>	
									</div>
					</div>	
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	<div class="move-text">
		<div class="marquee">Register your hotel with us free of cost.<a href="signup.html">Here</a></div>
		<script type="text/javascript" src="{{ asset('source/js/jquery.marquee.min.js') }}"></script>
        <script>
		  $('.marquee').marquee({ pauseOnHover: true });
		  //@ sourceURL=pen.js
		</script>
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-info">
				<h3>Today's Top Deals</h3>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-right">
						<a href="products.html">
							<img src="{{ asset('source/images/a3.jpg') }}" alt="" />
							<div class="destinations-grid-info tours">
									<h5>New Hotel Experiences at Your Favourite Destinations</h5>
									<p>Integer eget aliquam nibh. Donec blandit volutpat libero id lacinia</p>
									<p class="b-period">Book Period: Now - 7 September 2015 | Travel Period: Now - 31 October 2015 </p>
							</div>
						</a>
					</div>
					<div class="choose">
						<div class="choose-info">
							<h4>Why Choose Us</h4>
						</div>
						<div class="choose-grids">
							<div class="choose-grids-info">
								<div class="choose-left">
									<h5>09</h5>
									<span>Million</span>
								</div>
								<div class="choose-right">
									<a href="single.html">Aliquam faucibus vehicula vulputate</a>
									<p>Maecenas euismod tortor a tristique convallis diam eros aliquam.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
									<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
								</div>
								<div class="choose-right">
									<a href="single.html">Sed tincidunt consectetur augue</a>
									<p>Nulla bibendum libero in nunc eleifend tincidunt. Aliquam quis molestie lectus</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="choose-grids-info">
								<div class="choose-left">
									<h6>$</h6>
								</div>
								<div class="choose-right">
									<a href="single.html">Nullam et arcu interdum, accumsan justo</a>
									<p>Maecenas dapibus eu purus vel imperdiet. Maecenas cursus, arcu sed tempus </p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-middle">
						<a href="products.html">
							<img src="{{ asset('source/images/a2.jpg') }}" alt="" />
							<div class="destinations-grid-info tours">
								<h5>Book your next Malaysia holiday!</h5>
								<p>Integer eget aliquam nibh. Donec blandit volutpat libero id lacinia</p>
								<p class="b-period">Book Period: Now - 7 September 2015 | Travel Period: Now - 31 October 2015 </p>
							</div>
						</a>
					</div>
					<div class="news-grids">
						<div class="news-grids-info">
							<h4>Latest News</h4>
						</div>
						<div class="news-grids-bottom">
							<!-- date -->
							<div id="design" class="date">
								<div id="cycler">   
									<div class="date-text">
										<a href="single.html">August 15,2015</a>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
									<div class="date-text">
										<a href="single.html">July 08,2015</a>
										<p>Nullam non turpis sit amet metus tristique egestas et et orci.</p>
									</div>
									<div class="date-text">
										<a href="single.html">February 15,2015</a>
										<p>Duis venenatis ac ipsum vel ultricies in placerat quam</p>
									</div>
									<div class="date-text">
										<a href="single.html">January 15,2015</a>
										<p>Pellentesque ullamcorper fringilla ipsum, ornare dapibus velit volutpat sit amet.</p>
									</div>
									<div class="date-text">
										<a href="single.html">September 24,2014</a>
										<p>In lobortis ipsum mi, ac imperdiet elit pellentesque at.</p>
									</div>
								</div>
								<script>
									function cycle($item, $cycler){
										setTimeout(cycle, 2000, $item.next(), $cycler);
										
										$item.slideUp(1000,function(){
											$item.appendTo($cycler).show();        
										});
						
										}
									cycle($('#cycler div:first'),  $('#cycler'));
								</script>
							</div>
							<!-- //date -->
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="destinations">
						 <ul>
							<li class="button"><a href="#">Goa Popular Hotels</a>
								<li class="dropdown active">
									<a href="products.html">
										<div class="destinations-grid">
											<img src="{{ asset('source/images/a1.jpg') }}" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Goa</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$100</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>
							<li class="button"><a href="#">Bangalore Popular Hotels</a>
								<li class="dropdown">
									<a href="products.html">
										<div class="destinations-grid">
											<img src="{{ asset('source/images/a4.jpg') }}" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Bangalore</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$100</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>							
							<li class="button"><a href="#">Bangkok Popular Hotels</a>
								 <li class="dropdown">
									<a href="products.html">
										<div class="destinations-grid">
											<img src="{{ asset('source/images/a3.jpg') }}" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Bangkok</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$240</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							</li>
							<li class="button"><a href="#">Malaysia Popular Hotels</a>
								 <li class="dropdown">
									<a href="products.html">
										<div class="destinations-grid">
											<img src="{{ asset('source/images/a1.jpg') }}" alt="" />
										</div>
										<div class="destinations-grid-info">
											<div class="destinations-hotel">Lorem ipsum dolor sit amet , Malaysia</div>
											<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
											<div class="destinations-price">$320</div>
											<div class="clearfix"> </div>
										</div>
									</a>
								 </li>
							 </li>							 
						 </ul>
					</div>
					<div class="top-destinations-grids">
						<div class="top-destinations-info">
							<h4>Top Destinations</h4>
						</div>
						<div class="top-destinations-bottom">
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="{{ asset('source/images/t1.jpg') }}" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="single.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$190</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="{{ asset('source/images/t2.jpg') }}" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="single.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$213</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="{{ asset('source/images/t3.jpg') }}" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="single.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$176</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<div class="col-xs-3 td-left">
									<img src="{{ asset('source/images/t4.jpg') }}" alt="" />
								</div>
								<div class="col-xs-7 td-middle">
									<a href="single.html">Donec libero id lacinia</a>
									<p>Dapibus eu purus vel libero in nunc</p>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<div class="col-xs-2 td-right">
									<p>$490</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- popular-grids -->
	<div class="popular-grids">
		<!-- container -->
		<div class="container">
			<div class="popular-info">
				<h3>Popular Places</h3>
			</div>
			<!-- slider -->
			<div class="slider">
				<div class="arrival-grids">			 
					 <ul id="flexiselDemo1">
						 <li>
							 <a href="products.html"><img src="{{ asset('source/images/a3.jpg') }}" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="{{ asset('source/images/a2.jpg') }}" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="{{ asset('source/images/a4.jpg') }}" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.html"><img src="{{ asset('source/images/a1.jpg') }}" alt=""/>
							 </a>
						 </li>
						</ul>
						<script type="text/javascript">
						 $(window).load(function() {			
						  $("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover:true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						});
						</script>
						<script type="text/javascript" src="{{ asset('source/js/jquery.flexisel.js') }}"></script>			 
				</div>
			</div>
			<!-- //slider -->
		</div>
		<!-- //container -->
	</div>
	<!-- popular-grids -->
@endsection
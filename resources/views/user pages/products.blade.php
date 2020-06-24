@extends('master')
@section('main-content')
<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="faqs-top-grids">
				<div class="product-grids">
					<div class="col-md-3 product-left">
						<div class="h-class">
							<h5>Hotel Class</h5>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="starTextLabel">5 Stars (18)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox" checked="checked" data-track="HOT:SR:StarRating:5Star">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="starTextLabel">4 Stars (30)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="starTextLabel">3 Stars (106)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="starTextLabel">2 Stars (78)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="starTextLabel">1 Stars (10)</span>
								</label>
							</div>
						</div>
						<div class="h-class p-day">
							<h5>Price per day</h5>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox" checked="checked" data-track="HOT:SR:StarRating:5Star">
									<span class="p-day-grid">Less than $100 (76)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="p-day-grid">$100 to $200 (132)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="p-day-grid">$300 to $300 (223)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="p-day-grid">$300 to $400 (84)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="p-day-grid">$500 to $600 (23)</span>
								</label>
							</div>
						</div>
						<div class="h-class">
							<h5>Area</h5>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId" checked="checked" data-track="HOT:SR:Area">
									<span class="p-day-grid">London</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Newyork</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">New Zealand</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Los Angeles</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Sydney</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Agra</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Greece</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Singapore</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="radio" name="hideRegionId"  data-track="HOT:SR:Area">
									<span class="p-day-grid">Paris</span>
								</label>
							</div>
						</div>
						<div class="h-class p-day">
							<h5>Accommodation Type</h5>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox" checked="checked" data-track="HOT:SR:StarRating:5Star">
									<span class="p-day-grid">Hotel resort (67)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="p-day-grid">Hotel (84)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="p-day-grid">Guest house (24)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="p-day-grid">Apartment (34)</span>
								</label>
							</div>
							<div class="hotel-price">
								<label class="check">
									<input type="checkbox">
									<span class="p-day-grid">Country House (32)</span>
								</label>
							</div>
						</div>
					</div>
					<div class="col-md-9 product-right">
						<div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
									<div class="p-right-img">
										<a href="p-single.html"> </a>
									</div>
								</div>
								<div class="p-right">
									<div class="col-md-6 p-right-left">
										<a href="p-single.html">Lorem ipsum dolor sit amet</a>
										<div class="p-right-price">
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
										</div>
										<p>Vestibulum molestie id orci eget vulputate</p>
										<p class="p-call">+1 234 567 890</p>
									</div>
									<div class="col-md-6 p-right-right">
										<h6>Rating : 4.1/5</h6>
										<p>(123) Views</p>
										<span class="p-offer">$140</span><span class="p-last-price">$230</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div><div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
									<div class="p-right-img p-right-img1">
										<a href="p-single.html"> </a>
									</div>
								</div>
								<div class="p-right">
									<div class="col-md-6 p-right-left">
										<a href="p-single.html">Lorem ipsum dolor sit amet</a>
										<div class="p-right-price">
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
										</div>
										<p>Vestibulum molestie id orci eget vulputate</p>
										<p class="p-call">+1 234 567 890</p>
									</div>
									<div class="col-md-6 p-right-right">
										<h6>Rating : 4.1/5</h6>
										<p>(123) Views</p>
										<span class="p-offer">$240</span><span class="p-last-price">$430</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
									<div class="p-right-img p-right-img2">
										<a href="p-single.html"> </a>
									</div>
								</div>
								<div class="p-right">
									<div class="col-md-6 p-right-left">
										<a href="p-single.html">Lorem ipsum dolor sit amet</a>
										<div class="p-right-price">
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
										</div>
										<p>Vestibulum molestie id orci eget vulputate</p>
										<p class="p-call">+1 234 567 890</p>
									</div>
									<div class="col-md-6 p-right-right">
										<h6>Rating : 4.1/5</h6>
										<p>(123) Views</p>
										<span class="p-offer">$120</span><span class="p-last-price">$310</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
									<div class="p-right-img p-right-img3">
										<a href="p-single.html"> </a>
									</div>
								</div>
								<div class="p-right">
									<div class="col-md-6 p-right-left">
										<a href="p-single.html">Lorem ipsum dolor sit amet</a>
										<div class="p-right-price">
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
										</div>
										<p>Vestibulum molestie id orci eget vulputate</p>
										<p class="p-call">+1 234 567 890</p>
									</div>
									<div class="col-md-6 p-right-right">
										<h6>Rating : 4.1/5</h6>
										<p>(123) Views</p>
										<span class="p-offer">$140</span><span class="p-last-price">$230</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
									<div class="p-right-img p-right-img1">
										<a href="p-single.html"> </a>
									</div>
								</div>
								<div class="p-right">
									<div class="col-md-6 p-right-left">
										<a href="p-single.html">Lorem ipsum dolor sit amet</a>
										<div class="p-right-price">
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
										</div>
										<p>Vestibulum molestie id orci eget vulputate</p>
										<p class="p-call">+1 234 567 890</p>
									</div>
									<div class="col-md-6 p-right-right">
										<h6>Rating : 4.1/5</h6>
										<p>(123) Views</p>
										<span class="p-offer">$380</span><span class="p-last-price">$540</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="product-right-grids">
							<div class="product-right-top">
								<div class="p-left">
									<div class="p-right-img p-right-img2">
										<a href="p-single.html"> </a>
									</div>
								</div>
								<div class="p-right">
									<div class="col-md-6 p-right-left">
										<a href="p-single.html">Lorem ipsum dolor sit amet</a>
										<div class="p-right-price">
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
											<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
										</div>
										<p>Vestibulum molestie id orci eget vulputate</p>
										<p class="p-call">+1 234 567 890</p>
									</div>
									<div class="col-md-6 p-right-right">
										<h6>Rating : 4.1/5</h6>
										<p>(123) Views</p>
										<span class="p-offer">$360</span><span class="p-last-price">$750</span>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
@endsection
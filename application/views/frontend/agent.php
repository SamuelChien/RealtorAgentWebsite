<?php $this->load->view('i/header'); ?>
			<div id="main" class="wrapper">
				<div id="primary">
					<aside class="widget">
						<div class="textwidget">
							<div class="home_wrapper agent_wrapper">
								<div class="search_options">
									<form action="agent.html">
										<div class="search_results">
											<span>8</span> results from <span>19</span> total
										</div>
										<div>
											<input placeholder="Location" type="text" > 
											<select class="property">
												<option value="" disabled="disabled" selected="selected">Property Type</option>
												<option>Appartment</option>
												<option>House</option>
												<option>Villa</option>
											</select>
											<div class="separator"></div>
											<select>
												<option value="" disabled="disabled" selected="selected">Min. Price</option>
												<option>$100</option>
												<option>$400</option>
												<option>$700</option>
											</select>
											<select>
												<option value="" disabled="disabled" selected="selected">Max. Price</option>
												<option>$1000</option>
												<option>$3000</option>
												<option>$5000</option>
											</select>
											<div class="separator"></div>
											<div class="bedrooms">
												Bedrooms: <input type="text" class="min" value="1" disabled="disabled" > - <input type="text" class="max" value="5" disabled="disabled" >
												<div class="scroller">
													<div class="scroller_path">
														<div class="scroller_body">
															<div class="scroller_start">
															</div>
															<div class="scroller_end">
															</div>
														</div>
													</div>
												</div>
											</div>
											<input type="submit" value="update filters">
										</div>
									</form>
								</div><!--end of .search_options-->
								<div id="home_preview" class="agent">
									<div class="agent_info_full">
										<img src="images/templates/200x150.png" alt="agent">
										<div class="agent_name">
											<h3>Joe Doe</h3>
											<a href="mailto:mail@example.com">Email me</a>
										</div>
										<div class="personal">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
										<div class="home_info agent_info">
											<ul>
												<li>Bellerose, NY</li>
												<li>IMG Group Real Estate</li>
												<li>(555) 366-00-00</li>
												<li>JD@bestwebsoft.com</li>
											</ul>
										</div>
									</div>
									<div class="agent_description">
										<h3>Text area</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
									</div>
									<div class="listings">
										<h3>Listings by <a href="#">Joe Doe</a></h3>
										<div class="home_preview">
											<img src="images/templates/200x110.png" alt="agent">
											<div class="home_info">
												<h4>Title Example</h4>
												<ul>
													<li>Los Angeles, CA</li>
													<li>2 bedrooms, 1 bathroom</li>
													<li>90 sqft</li>
												</ul>
											</div>
											<div class="home_footer"><a class="rent" href="listing.html">for rent</a><span class="home_cost">$1,000<sup>/mo</sup></span></div>
										</div>
										<div class="home_preview">
											<img src="images/templates/200x110.png" alt="agent">
											<div class="home_info">
												<h4>Title Example</h4>
												<ul>
													<li>Los Angeles, CA</li>
													<li>2 bedrooms, 1 bathroom</li>
													<li>90 sqft</li>
												</ul>
											</div>
											<div class="home_footer"><a class="rent" href="listing.html">for rent</a><a href="listing.html" class="add">&#160;</a><span class="home_cost">$1,000<sup>/mo</sup></span></div>
										</div>
										<div class="home_preview">
											<img src="images/templates/200x110.png" alt="agent">
											<div class="home_info">
												<h4>Title Example</h4>
												<ul>
													<li>Los Angeles, CA</li>
													<li>2 bedrooms, 1 bathroom</li>
													<li>90 sqft</li>
												</ul>
											</div>
											<div class="home_footer"><a class="rent" href="listing.html">for rent</a><a href="listing.html" class="add">&#160;</a><span class="home_cost">$1,000<sup>/mo</sup></span></div>
										</div>
										<div class="more_rooms"><a href="#" class="more">Load more</a></div>
									</div><!--end of .listings-->
								</div><!--end of #home_preview-->
							</div><!--end of #home_wrapper-->
						</div>
					</aside>
					<div id="content">
						<aside class="widget widget_text">
							<div class="textwidget">
								<div class="widget_content">
									<h4>Pellentesque habitant morbi tristique senectus et ac turpis egestas?</h4>
									<p>Quisque gravida bibendum massa non vulputate. Ut in diam sem, nec venenatis lacus. Proin faucibus urna in mi faucibus commodo.</p>
								</div>
								<a href="index.html" class="more">Learn more</a>
							</div>
						</aside>
					</div><!--end of #content-->
					<aside class="widget widget_text">
						<div class="textwidget">
							<div class="widget_info">
								<div class="first">
									<h4><a href="index.html">Real Estate</a></h4>
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="listing.html">Services</a></li>
										<li><a href="contact.html">About</a></li>
									</ul>
								</div>
								<div class="second">
									<h4><a href="listing.html">About</a></h4>
									<p>Cras placerat bibendum quam sed facilisis. Suspendisse dapibus eros eget tellus tempor lacinia. Cras ornare lorem sit amet arcu accumsan ut tristique est fringilla.</p>
								</div>
								<div class="third">
									<h4><a href="contact.html">Contact Info</a></h4>
									<p>Fusce nec gravida risus. Pellentesq eros magna, lobortis elementum.</p>
									<p><b>P.:</b> (555) 366 - 00 - 00<br>
									<b>E.:</b> sales@bestwebsoft.com</p>
								</div>
								<div class="fourth">
									<h4><a href="search-results.html">Newsletter</a></h4>
									<p>Donec hendrerit consequat elit, condimentum mollis augue tempor.</p>
									<form action="index.html">
										<div>
											<input type="email" placeholder="Email Address" >
											<input type="submit" value=" " >
										</div>
									</form>
								</div>
							</div>
						</div>
					</aside>
				</div><!--end of #primary-->
			</div><!--end of #main-->
<?php $this->load->view('i/footer'); ?>
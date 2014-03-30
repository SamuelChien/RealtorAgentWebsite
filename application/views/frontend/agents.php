<?php $this->load->view('i/header'); ?>
			<div id="main" class="wrapper">
				<div id="primary">
					<aside class="widget">
						<div class="textwidget">
							<div class="home_wrapper">
								<div class="search_options">
									<form action="agents.html">
										<div class="search_results">
											<span>6</span> results from <span>23</span> total
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
								<div id="home_preview" class="agents">
									<div class="view_more sort_by"><span>sort by:</span><a href="#">relevance</a> | <a href="#">popular</a></div>
									<div class="home_preview agent_preview">
										<img src="images/templates/200x150.png" alt="agent">
										<div class="home_info agent_info">
											<h4>Joe Doe</h4>
											<ul>
												<li>Bellerose, NY</li>
												<li>IMG Group Real Estate</li>
												<li>(555) 366-00-00</li>
												<li>JD@bestwebsoft.com</li>
											</ul>
										</div>
										<div class="home_footer"><a class="sale" href="agent.html">Available</a><span class="home_cost">17 items</span></div>
									</div>
									<div class="home_preview agent_preview">
										<img src="images/templates/200x150.png" alt="agent">
										<div class="home_info agent_info">
											<h4>Joe Doe</h4>
											<ul>
												<li>Bellerose, NY</li>
												<li>IMG Group Real Estate</li>
												<li>(555) 366-00-00</li>
												<li>JD@bestwebsoft.com</li>
											</ul>
										</div>
										<div class="home_footer"><a class="rent" href="agent.html">Busy</a><span class="home_cost">24 items</span></div>
									</div>
									<div class="home_preview agent_preview">
										<img src="images/templates/200x150.png" alt="agent">
										<div class="home_info agent_info">
											<h4>Joe Doe</h4>
											<ul>
												<li>Bellerose, NY</li>
												<li>IMG Group Real Estate</li>
												<li>(555) 366-00-00</li>
												<li>JD@bestwebsoft.com</li>
											</ul>
										</div>
										<div class="home_footer"><a class="sale" href="agent.html">For Request</a><span class="home_cost">71 items</span></div>
									</div>
									<div class="home_preview agent_preview">
										<img src="images/templates/200x150.png" alt="agent">
										<div class="home_info agent_info">
											<h4>Joe Doe</h4>
											<ul>
												<li>Bellerose, NY</li>
												<li>IMG Group Real Estate</li>
												<li>(555) 366-00-00</li>
												<li>JD@bestwebsoft.com</li>
											</ul>
										</div>
										<div class="home_footer"><a class="sale" href="agent.html">Available</a><span class="home_cost">12 items</span></div>
									</div>
									<div class="home_preview agent_preview">
										<img src="images/templates/200x150.png" alt="agent">
										<div class="home_info agent_info">
											<h4>Joe Doe</h4>
											<ul>
												<li>Bellerose, NY</li>
												<li>IMG Group Real Estate</li>
												<li>(555) 366-00-00</li>
												<li>JD@bestwebsoft.com</li>
											</ul>
										</div>
										<div class="home_footer"><a class="sale" href="agent.html">Busy</a><span class="home_cost">62 items</span></div>
									</div>
									<div class="home_preview agent_preview">
										<img src="images/templates/200x150.png" alt="agent">
										<div class="home_info agent_info">
											<h4>Joe Doe</h4>
											<ul>
												<li>Bellerose, NY</li>
												<li>IMG Group Real Estate</li>
												<li>(555) 366-00-00</li>
												<li>JD@bestwebsoft.com</li>
											</ul>
										</div>
										<div class="home_footer"><a class="rent" href="agent.html">For Request</a><span class="home_cost">10 items</span></div>
									</div>
									<div class="more_rooms"><a href="#" class="more">Load more</a></div>
								</div><!--end of #home_preview-->
							</div><!--end of #home_wrapper-->
						</div>
					</aside>
					<div id="content">
						<div class="content_widget_wrapper agent_wrapper">
							<aside class="widget widget_text">
								<div class="textwidget">
									<div class="widget_content">
										<h4>Pellentesque habitant morbi tristique senectus et ac turpis egestas?</h4>
										<p>Quisque gravida bibendum massa non vulputate. Ut in diam sem, nec venenatis lacus. Proin faucibus urna in mi faucibus commodo.</p>
									</div>
									<a href="index.html" class="more">Learn more</a>
								</div>
							</aside>
						</div>
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
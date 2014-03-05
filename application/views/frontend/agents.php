<!DOCTYPE html>
<html>
	<head>
	<meta charset='utf-8'>
	<title>real estate</title>
	<link rel="stylesheet" href="./css/style.css" >
	<link href="css/select2.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->
	<!--[if IE 7]>
	<link href="css/ie7.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 8]>
	<link href="css/ie8.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 9]>
	<link href="css/ie9.css" rel="stylesheet">
	<![endif]-->
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/select2.min.js"></script>
	<script>
		(function($){
			$(document).ready(function() {
				$('body').addClass('search search-results');/*tmp script for emulation wordpress body classes*/
			});
		})(jQuery);
	</script>
	</head>
	<body>
		<div id="page">
			<header>
				<div id="header_wrapper">
					<h1><a href="index.html">real estate</a></h1>
					<nav id="site-navigation" class="main-navigation">
						<div class="nav-menu">
							<ul>
								<li class="page_item">
									<a href="listing.html">services</a>
									<ul class="children">
										<li class="page_item"><a href="listing.html">Menu Example 1</a></li>
										<li class="current_page_item"><a href="listing.html">Menu Example 2</a></li>
										<li class="page_item"><a href="listing.html">Menu Example 3</a></li>
										<li class="page_item"><a href="listing.html">Menu Example 4</a></li>
									</ul>
								</li>
								<li class="current_page_item">
									<a href="agents.html">agents</a>
									<ul class="children">
										<li class="page_item"><a href="agent.html">Menu Example 1</a></li>
										<li class="current_page_item"><a href="agent.html">Menu Example 2</a></li>
										<li class="page_item"><a href="agent.html">Menu Example 3</a></li>
										<li class="page_item"><a href="agent.html">Menu Example 4</a></li>
									</ul>
								</li>
								<li class="page_item"><a href="blog.html">advice</a></li>
								<li class="page_item"><a href="post.html">mortgage</a></li>
								<li class="page_item"><a href="contact.html">contact</a></li>
							</ul>
						</div>
					</nav><!--end of #site-navigation-->
					<div id="header_widget">
						<aside class="widget">
							<div class="login_buttons">
								<a class="register" href="login.html">Login</a>
								<a class="login" href="login.html">Register</a>
							</div>
						</aside>
					</div><!--end of #header_widget-->
				</div><!--end of #header_wrapper-->
			</header>
			<div id="main" class="wrapper">
				<div id="primary">
					<div id="heading">
						<div class="heading_text">
							<h2>Agents</h2>
							<span>Home - Agents</span>
							<div class="search">
								<form action="search-results.html">
									<div>
										<input placeholder="Location" type="text" >
										<input type="submit" value="">
									</div>
								</form>
							</div>
						</div>
					</div><!--end of #heading-->
					<aside class="widget widget_text">
						<div class="textwidget">
							<div class="widget_content">
								<h4>Pellentesque habitant morbi tristique senectus et ac turpis egestas?</h4>
								<p>Quisque gravida bibendum massa non vulputate. Ut in diam sem, nec venenatis lacus. Proin<br>
								faucibus urna in mi faucibus commodo.</p>
								<a href="search-results.html" class="back">back to search</a>
							</div>
						</div>
					</aside>
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
			<footer>
				<div class="site-info">
					<span>Designeg with love by <a href="http://bestwebsoft.com/">BestWebSoft</a></span>
				</div>
				<div class="contacts"><a class="tw" href="http://twitter.com/#!/bestwebsoft/"></a><a class="in" href="http://www.linkedin.com/company/bestwebsoft"></a><a class="fb" href="https://www.facebook.com/"></a></div>
			</footer>
		</div><!--end of #page-->
	</body>
</html>
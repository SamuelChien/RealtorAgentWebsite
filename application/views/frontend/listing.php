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
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxsP4TrA0Ml09ml9gS6cMDCpncwX5qWqc&sensor=true"></script>
	<script>
		(function($){
			$(document).ready(function() {
				$('body').addClass('search search-results page');/*tmp script for emulation wordpress body classes*/
			});
		})(jQuery);
		/*Google sitemap*/
		function initialize() {
			var myLatlng = new google.maps.LatLng(35.126081, -106.536806);
			var mapOptions = {
				center: myLatlng,
				zoom: 16,
				streetViewControl: true,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
			};
			var map = new google.maps.Map(document.getElementById("map-canvas2"),mapOptions);

			var panoramaOptions = {
			position: myLatlng,
			pov: {
				heading: 100,
				pitch: 0
				}
			};
			var panorama = new  google.maps.StreetViewPanorama(document.getElementById('map-canvas'),panoramaOptions);
			map.setStreetView(panorama);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		/*end of Google sitemap*/
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
							<h2>Search Results</h2>
							<span>Home - Search Results - <b>Title Example</b></span>
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
					<aside class="widget">
						<div class="textwidget">
							<div class="home_full_wrapper">
								<div class="back_to_results"><a class="more" href="search-results.html">back to search results</a></div>
								<div class="search_options">
									<form action="listing.html">
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

								<div id="home_info_full">
									<div class="home_content_full">
										<div class="tabs">
											<div class="tab tab_1 active">photos<span>(1 of 8)</span></div>
											<div class="tab tab_2">view street</div>
											<div class="tab tab_3">map</div>
										</div>
										<div class="home_content_tab home_content_1 active">
											<div class="home_image">
												<img src="images/templates/420x320.png" alt="home">
											</div>
											<div class="home_slides">
												<div class="prev"></div>
												<div class="thumbnails">
													<div id="thumbnails_holder">
														<img src="images/templates/110x80.png" alt="home">
														<img src="images/templates/110x80.png" alt="home">
														<img src="images/templates/110x80.png" alt="home">
														<img src="images/templates/110x80.png" alt="home">
														<img src="images/templates/110x80.png" alt="home">
														<img src="images/templates/110x80.png" alt="home">
														<img src="images/templates/110x80.png" alt="home">
													</div>
												</div>
												<div class="next"></div>
											</div><!--end of .home_slides-->
										</div><!--end of #home_content_1-->
										<div class="home_content_tab home_content_2">
											<div style="width:420px; height:420px;">
												<div id="map-canvas"></div>
											</div>
										</div>
										<div class="home_content_tab home_content_3">
											<div style="width:420px; height:420px;">
												<div id="map-canvas2"></div>
											</div>
										</div>
									</div>
									<div class="home_description">
										<h3>General Information</h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										<h3>Features</h3>
										<div class="features">
											<ul>
												<li>Garage</li>
												<li>Internet</li>
												<li>Guest house</li>
											</ul>
											<ul>
												<li>Kitchen goods</li>
												<li>TV</li>
												<li>Garden</li>
											</ul>
											<ul>
												<li>Pool</li>
												<li class="not_available"></li>
												<li class="not_available"></li>
											</ul>
										</div>
									</div>
								</div><!--end of #home_preview-->

								<div class="search_options home_info_full">
									<div class="home_preview">
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
									<h3>Agent Details</h3>
									<div class="separator"></div>
									<div class="agent_details">
										<img src="images/templates/60x60.png" alt="home">
										<div class="profile">
											<h4>Joe Doe</h4>
											<p><b>P.:</b> (555) 366 - 00 - 00<br>
											<b>E.:</b> joe@bdoe.com</p>
											<a href="#">View profile</a>
										</div>
									</div>
									<h3>Get more information</h3>
									<div class="separator"></div>
									<form action="listing.html">
										<div>
											<input type="text" placeholder="Name" > 
											<input type="email" placeholder="Email" > 
											<input type="submit" value="request more details" class="request" >
										</div>
									</form>
								</div><!--end of .search_options-->
							</div><!--end of #home_wrapper-->
						</div>
					</aside>
					<div id="content">
						<div class="content_widget_wrapper">
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
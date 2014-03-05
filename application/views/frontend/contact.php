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
				$('body').addClass('single single-post');/*tmp script for emulation wordpress body classes*/
				$("select").select2({width: "resolve"});
			});
		})(jQuery);
		/*Google sitemap*/
		function initialize() {
			var myLatlng = new google.maps.LatLng(35.126081, -106.536806);
			var mapOptions = {
				center: myLatlng,
				zoom: 16,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
			};
			var map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
			var markerOptions = {
				position: myLatlng,
				title: "Our Company",
				map: map
			};
			var marker = new google.maps.Marker(markerOptions);
			var contentString = '<div class="tooltip">Lorem Ipsum</div>';
			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});
			google.maps.event.addListener(marker, 'click', function() { infowindow.open(map,marker); });
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
					<div id="heading" class="contact_page">
						<div id="map-canvas"></div>
					</div><!--end of #heading-->
					<div id="contact_form">
						<div class="contact_form_wrapper">
							<form action="index.html">
								<div>
									<textarea placeholder="Message" cols="5" rows="5"></textarea>
									<input type="text" placeholder="Name" >
									<input type="email" placeholder="Email" >
									<input type="text" placeholder="Website" >
									<div class="right"><input id="submit" type="submit" value=" " ></div>
								</div>
							</form>
						</div>
					</div><!--end of #contact_form-->
					<div id="content" class="contact_page">
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
			<footer>
				<div class="site-info">
					<span>Designeg with love by <a href="http://bestwebsoft.com/">BestWebSoft</a></span>
				</div>
				<div class="contacts"><a class="tw" href="http://twitter.com/#!/bestwebsoft/"></a><a class="in" href="http://www.linkedin.com/company/bestwebsoft"></a><a class="fb" href="https://www.facebook.com/"></a></div>
			</footer>
		</div><!--end of #page-->
	</body>
</html>
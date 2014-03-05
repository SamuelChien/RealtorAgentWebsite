<!DOCTYPE html>
<html>
	<head>
	<meta charset='utf-8'>
	<title>147House - Main</title>
	<link rel="stylesheet" href="/asset/css/style.css" >
	<link href="/asset/css/select2.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="/asset/js/html5.js"></script>
	<![endif]-->
	<!--[if IE 7]>
	<link href="/asset/css/ie7.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 8]>
	<link href="/asset/css/ie8.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 9]>
	<link href="/asset/css/ie9.css" rel="stylesheet">
	<![endif]-->
	<script src="/asset/js/jquery-1.7.2.min.js"></script>
	<script src="/asset/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="/asset/js/script.js"></script>
	<script src="/asset/js/select2.min.js"></script>
	<script src="/asset/js/house.js"></script>
	<script>
		(function($){
			$(document).ready(function() { 
				$('body').addClass('home');/*tmp script for emulation wordpress body classes*/
			});
		})(jQuery);
	</script>
	</head>
	<body>
		<div id="page">
			<header>
				<div id="header_wrapper">
					<img id="logoImg" src="/asset/images/logo.png"><h1><a href="/">147House.com</a></h1>
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
						<div id="heading_text_holder">
							<div class="heading_text slide_1">
								<div class="slide_holder">
									<h2>Find a place to live.</h2>
									<span>Life long commitment to your love ones</span>
								</div>
							</div>
							<div class="heading_text slide_2">
								<div class="slide_holder">
									<h2>Grow Your Root.</h2>
									<span>Provide stablability for your family</span>
								</div>
							</div>
							<div class="heading_text slide_3">
								<div class="slide_holder">
									<h2>Care for the future</h2>
									<span>Build home for families across nation</span>
								</div>
							</div>
							<div class="heading_text slide_4">
								<div class="slide_holder">
									<h2>Home Sweet Home</h2>
									<span>Best investment you will make</span>
								</div>
							</div>
						</div><!--#heading_text_holder-->
						<div class="indicators">
							<a href="#" id="slide_1" class="current"></a>
							<a href="#" id="slide_2"></a>
							<a href="#" id="slide_3"></a>
							<a href="#" id="slide_4"></a>
						</div>
					</div><!--end of #heading-->
					<div class="tab_wrapper">
						<div id="main_tabs">
							<div class="tabs">
								<div class="tab tab_1 active">For Sale</div>
								<div class="tab tab_2">For Rent</div>
								<div class="tab_add"></div>
							</div>
							<div class="for_sale tab_block tab_block_1 active">	
								<form action="search-results.html">
									<div>
										<table class="inputs">
											<tr>
												<td>
													<input placeholder="Location" type="text" >
												</td>
												<td>
													<select class="property">
														<option value="" disabled="disabled" selected="selected">Property Type</option>
														<option>Appartment</option>
														<option>House</option>
														<option>Villa</option>
													</select>
												</td>
											</tr>
										</table>
										<table class="inputs">
											<tr>
												<td>
													<select>
														<option value="" disabled="disabled" selected="selected">Min. Price</option>
														<option>$100</option>
														<option>$400</option>
														<option>$700</option>
													</select>
												</td>
												<td>
													<span class="input_separator">-</span>
												</td>
												<td>
													<select>
														<option value="" disabled="disabled" selected="selected">Max. Price</option>
														<option>$1000</option>
														<option>$3000</option>
														<option>$5000</option>
													</select>
												</td>
												<td>
													<select>
														<option value="" disabled="disabled" selected="selected">Bathrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
												</td>
												<td>
													<select>
														<option value="" disabled="disabled" selected="selected">Bedrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
													</select>
												</td>
												<td>
													<input type="submit" value="">
												</td>
											</tr>
										</table>
									</div>
								</form>
							</div><!--end of .for_sale-->
							<div class="for_rent tab_block tab_block_2">
								<form action="search-results.html">
									<div>
										<input placeholder="Location" style="width: 830px" type="text" >
										<select style="width: 390px" class="property">
											<option value="" disabled="disabled" selected="selected">Property Type</option>
											<option>Appartment</option>
											<option>House</option>
											<option>Villa</option>
										</select>
										<select>
											<option value="" disabled="disabled" selected="selected">Bathrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<select>
											<option value="" disabled="disabled" selected="selected">Bedrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<input type="submit" value="">
									</div>
								</form>
							</div>
						</div>
					</div><!--end of #tab_wrapper-->

					<aside class="widget widget_text">
						<div class="textwidget">
							<div class="widget_content">
								<h4>Pellentesque habitant morbi tristique senectus et ac turpis egestas?</h4>
								<p>Quisque gravida bibendum massa non vulputate. Ut in diam sem, nec venenatis lacus. Proin<br>
								faucibus urna in mi faucibus commodo.</p>
								<a href="index.html" class="more">Learn more</a>
							</div>
						</div>
					</aside>
					<aside class="widget widget_text">
						<div class="textwidget">
							<h3 class="widget-title">Recent items</h3>
							<div id="home_preview">
								<div class="view_more"><a href="listing.html">view all</a></div>
								<div class="home_preview">
									<img src="/asset/images/templates/200x110.png" alt="home photo">
									<div class="home_info">
										<h4>Title Example</h4>
										<ul>
											<li>Miami, FL</li>
											<li>2 bedrooms, 1 bathroom</li>
											<li>250 sqft</li>
										</ul>
									</div>
									<div class="home_footer"><a class="sale" href="listing.html">for sale</a><a href="listing.html" class="add">&#160;</a><span class="home_cost">$248,000</span></div>
								</div>
								<div class="home_preview">
									<img src="/asset/images/templates/200x110.png" alt="home photo">
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
									<img src="/asset/images/templates/200x110.png" alt="home photo">
									<div class="home_info">
										<h4>Title Example</h4>
										<ul>
											<li>New Yourk, 5th Ave.</li>
											<li>1 bedrooms, 1 bathroom</li>
											<li>140 sqft</li>
										</ul>
									</div>
									<div class="home_footer"><a class="sale" href="listing.html">for sale</a><span class="home_cost">$98,000</span></div>
								</div>
								<div class="home_preview">
									<img src="/asset/images/templates/200x110.png" alt="home photo">
									<div class="home_info">
										<h4>Title Example</h4>
										<ul>
											<li>London, Baker st.</li>
											<li>3 bedrooms, 2 bathrooms</li>
											<li>210 sqft</li>
										</ul>
									</div>
									<div class="home_footer"><a class="sale" href="listing.html">for sale</a><a href="listing.html" class="add">&#160;</a><span class="home_cost">$125,600</span></div>
								</div>
							</div><!--end of #home_preview-->
						</div><!--end of .textwidget-->
					</aside>
					<div id="content">
						<div class="posts_wrapper">
							<div class="posts">
								<h2 class="posts_title">Latest posts</h2>
								<a href="blog.html" class="view_more">go to blog</a>
								<article class="post type-post format-standard">
									<header class="entry-header">
										<h1><a href="post.html">Post Title Example</a></h1>
										<div class="entry-meta">
											Posted on <a href="post.html"><span class="entry-date">April 7th, 2013</span></a><span class="by-author"> by <span class="author vcard"><a class="url fn n" rel="author" href="post.html">admin</a></span></span>
										</div>
									</header>
									<div class="entry-content">
										<img class="wp-post-image" src="/asset/images/templates/60x60.png" width="60" height="60" alt="post thumb" >
										<p>Morbi iaculis, libero et feugiat ultricies, nibh libero rutrum ante, ut euismod nunc ipsum sit amet enim. Suspendisse potenti. Aliquam sagittis ultrices pulvinar. Duis sem nibh, facilisis vitae pulvinar ac, mattis sed turpis. In vel leo lorem.</p>
									</div>
									<footer>
										<div class="comments-link">
											<a href="post.html">25 comments / 349 views</a>
										</div>
									</footer>
								</article>
								<article class="post type-post format-standard">
									<header class="entry-header">
										<h1><a href="post.html">Post Title Example</a></h1>
										<div class="entry-meta">
											Posted on <a href="post.html"><span class="entry-date">April 7th, 2013</span></a><span class="by-author"> by <span class="author vcard"><a class="url fn n" rel="author" href="post.html">admin</a></span></span>
										</div>
									</header>
									<div class="entry-content">
										<img class="wp-post-image" src="/asset/images/templates/60x60.png" width="60" height="60" alt="post thumb">
										<p>Morbi iaculis, libero et feugiat ultricies, nibh libero rutrum ante, ut euismod nunc ipsum sit amet enim. Suspendisse potenti. Aliquam sagittis ultrices pulvinar. Duis sem nibh, facilisis vitae pulvinar ac, mattis sed turpis. In vel leo lorem.</p>
									</div>
									<footer>
										<div class="comments-link">
											<a href="post.html">25 comments / 349 views</a>
										</div>
									</footer>
								</article>
							</div><!--end of .posts-->
							<div class="testimonials"><!--mb widget?-->
								<h2 class="posts_title">Testimonials</h2>
								<div class="testimonials_quote">
									<blockquote>Morbi iaculis, libero et feugiat ultricies, nibh libero rutrum ante, ut euismod nunc ipsum sit amet enim. Suspendisse potenti.</blockquote>
									<div class="quote_footer">
										<div class="quote_author">John Smith</div>
										<span>Company Name</span>
									</div>
								</div>
								<div class="testimonials_quote">
									<blockquote>Morbi iaculis, libero et feugiat ultricies, nibh libero rutrum ante, ut euismod nunc ipsum sit amet enim. Suspendisse potenti.</blockquote>
									<div class="quote_footer">
										<div class="quote_author">Jane Doe</div>
										<span>Company Name</span>
									</div>
								</div>
							</div><!--end of .testimonials-->
						</div>
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
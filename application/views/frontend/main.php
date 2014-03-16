<?php $this->load->view('i/header'); ?>
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
								<h4>Do you want to find out how much your house worth?</h4>
								<p>contact us now to get an instant quote</p>
								<a href="index.html" class="more">Learn more</a>
							</div>
						</div>
					</aside>
					<aside class="widget widget_text">
						<div class="textwidget">
							<h3 class="widget-title">Hotest Items</h3>
							<div id="home_preview">
								<div class="view_more"><a href="listing.html">view all</a></div>
								<div class="home_preview">
									<img src="/asset/images/housing/1.jpg" alt="home photo">
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
									<img src="/asset/images/housing/2.jpg" alt="home photo">
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
									<img src="/asset/images/housing/3.jpg" alt="home photo">
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
									<img src="/asset/images/housing/4.jpg" alt="home photo">
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
								<h2 class="posts_title">Hot Q&A Topics</h2>
								<a href="blog.html" class="view_more">GO TO Q&A</a>
								<article class="post type-post format-standard">
									<header class="entry-header">
										<h1><a href="post.html">Does the seller keep the 10% deposit if I change my mind on buying a property?</a></h1>
										<div class="entry-meta">
											Posted on <a href="post.html"><span class="entry-date">April 7th, 2013</span></a><span class="by-author"> by <span class="author vcard"><a class="url fn n" rel="author" href="post.html">Roger</a></span></span>
										</div>
									</header>
									<div class="entry-content">
										<img class="wp-post-image" src="/asset/images/person.jpg" width="60" height="60" alt="post thumb" >
										<p>
										Is the 10% deposit you're talking about your earnest money deposit? 10% is typically higher than the average earnest money deposit.
										... <a href="post.html">Read More</a>
										</p>
									</div>
									<footer>
										<div class="comments-link">
											<a href="post.html">25 comments / 349 views</a>
										</div>
									</footer>
								</article>
								<article class="post type-post format-standard">
									<header class="entry-header">
										<h1><a href="post.html">Lottery Schools - odds of getting in?</a></h1>
										<div class="entry-meta">
											Posted on <a href="post.html"><span class="entry-date">April 7th, 2013</span></a><span class="by-author"> by <span class="author vcard"><a class="url fn n" rel="author" href="post.html">John Smith</a></span></span>
										</div>
									</header>
									<div class="entry-content">
										<img class="wp-post-image" src="/asset/images/person.jpg" width="60" height="60" alt="post thumb">
										<p>
											What are the odds of getting into lottery schools like Millikin? I tried searching but they do not seem to disclose that information. Is there a place to find how many applications were received and accepted from past?
										</p>
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
									<blockquote>The most trust worthy realtor that will changes 21st century</blockquote>
									<div class="quote_footer">
										<div class="quote_author">Samuel Chien</div>
										<span>Tech Crunch</span>
									</div>
								</div>
								<div class="testimonials_quote">
									<blockquote>Once in a while you will find yourself dealing with a company that will change the world. And 147House is that kind of company</blockquote>
									<div class="quote_footer">
										<div class="quote_author">Jane Doe</div>
										<span>CNN News</span>
									</div>
								</div>
							</div><!--end of .testimonials-->
						</div>
						<aside class="widget widget_text">
							<div class="textwidget">
								<div class="widget_content">
									<h4>147House also manage properties for house owner. We can provide legal services as well as finding tenants for you.</h4>
									<p>
											The lowest rate of professional preoperty management guaranteed
									</p>
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
										<li><a href="index.html">Our Agents</a></li>
										<li><a href="listing.html">Our History</a></li>
										<li><a href="contact.html">Our Services</a></li>
									</ul>
								</div>
								<div class="second">
									<h4><a href="listing.html">About</a></h4>
									<p>
										147House is an online real estate database that was founded in 2005 and created by Rich Barton and Lloyd Frink, former Microsoft executives and founders of Microsoft spin-off Expedia. 
									</p>
								</div>
								<div class="third">
									<h4><a href="contact.html">Contact Info</a></h4>
									<p>147House International Inc.</p>
									<p><b>Phone:</b> (408)821-2207<br>
									<b>Email:</b> info@147house.com</p>
								</div>
								<div class="fourth">
									<h4><a href="search-results.html">Newsletter</a></h4>
									<p>Subscribe to our monthly newspaper for the best deal you will find in your life</p>
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
			
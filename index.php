<!DOCTYPE HTML>
<!--
	Slate by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('./wordpress/wp-blog-header.php');
?>

<html>
	<head>
		<title>Untitled</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.html">Slate <span>by Pixelarity</span></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>
							<a href="#" class="submenu fa-angle-down">Page Layouts</a>
							<ul>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="no-sidebar.html">No Sidebar</a></li>
								<li>
									<a href="#">Submenu</a>
									<ul>
										<li><a href="#">Option One</a></li>
										<li><a href="#">Option Two</a></li>
										<li><a href="#">Option Three</a></li>
										<li><a href="#">Option Four</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="elements.html">Elements</a></li>
						<li><a href="#" class="button">Sign Up</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<article>
					<img src="images/slide01.jpg" alt="" />
					<div class="inner">
						<h2><a href="#">Magna tempus. Sed feugiat.</a></h2>
					</div>
				</article>
				<article>
					<img src="images/slide02.jpg" alt="" />
					<div class="inner">
						<h2><a href="#">Aliquam veroeros nullam.</a></h2>
					</div>
				</article>
				<article>
					<img src="images/slide03.jpg"  alt="" />
					<div class="inner">
						<h2><a href="#">Consequat dolore adipiscing.</a></h2>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper major-pad">
				<div class="inner">
					<section class="spotlight">
						<div class="content">
							<h2>Libero bibendum nullam vitae magna sed veroeros</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id interdum magna, ultricies aliquet curabitur sed metus pellentesque, ornare sapien quis.</p>
						</div>
						<span class="image"><img src="images/pic07.jpg" alt="" /></span>
					</section>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper content-pad">
				<div class="inner">
					<div class="features">
						<section class="content">
							<span class="icon-wrapper major"><span class="icon fa-pencil"></span></span>
							<h3>Praesent sed donec</h3>
							<p>Proin consequat luctus elit, nec blandit tellus ut volutpat magna. mi euismod elementum lectus et consequat etiam lorem etiam sed tempus. Feugiat veroeros lorem ipsum dolor.</p>
						</section>
						<section class="content">
							<span class="icon-wrapper major"><span class="icon fa-paper-plane"></span></span>
							<h3>Commodo mollis</h3>
							<p>Pellentesque, ornare sapien quis, tristique ante. Proin nec facilisis odio. Integer elementum nunc nec leo interdum, non tristique eros laoreet. Integer vitae erat suscipit commodo.</p>
						</section>
						<section class="content">
							<span class="icon-wrapper major"><span class="icon fa-cloud"></span></span>
							<h3>Magnis curabitur</h3>
							<p>Duis vulputate sit amet metus quis facilisis. Sed dapibus neque erat fringilla tincidunt. Nullam sapien et sapien, iaculis ac varius ultrices nec metus. Aenean ultricies magna.</p>
						</section>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<h2>Etiam sed tellus</h2>
					<div class="posts">
						<section class="post">
							<span class="image"><img src="images/pic01.jpg" alt="" /></span>
							<div class="content">
								<h3>Congue portitor</h3>
								<p>Aenean ultricies magna non sapien rhoncus, ac ullamcorper lorem convallis. Quisque at venenatis nisi, amet finibus mauris. Sed sodales ultricies eros, sit amet sodales sapien.</p>
								<ul class="actions">
									<li><a href="#" class="button">More</a></li>
								</ul>
							</div>
						</section>
						<section class="post">
							<span class="image"><img src="images/pic02.jpg" alt="" /></span>
							<div class="content">
								<h3>Duis nisl euismod</h3>
								<p>Ultrices nec metus. Aenean ultricies magna et sapien rhoncus ac ullamcorper lorem convallis. Quisque at venenatis nisi amet finibus mauris. Sed sodales ultricies magna etiam.</p>
								<ul class="actions">
									<li><a href="#" class="button">More</a></li>
								</ul>
							</div>
						</section>
						<section class="post">
							<span class="image"><img src="images/pic03.jpg" alt="" /></span>
							<div class="content">
								<h3>Elementum auctor</h3>
								<p>Quis interdum. Lorem quis lacus justo. Sed libero condimentum vehicula sem vel, mattis amet mauris. Nullam lacinia sit amet felis vel vestibulum. Morbi aliquam aenean.</p>
								<ul class="actions">
									<li><a href="#" class="button">More</a></li>
								</ul>
							</div>
						</section>
						<section class="post">
							<span class="image"><img src="images/pic04.jpg" alt="" /></span>
							<div class="content">
								<h3>Urna vel lacinia</h3>
								<p>Integer vel tincidunt lacus. Nulla augue nunc, eleifend quis leo ac, maximus interdum tellus. Etiam at vestibulum felis, id efficitur risus. Praesent ac nulla ex. Duis elementum.</p>
								<ul class="actions">
									<li><a href="#" class="button">More</a></li>
								</ul>
							</div>
						</section>
						<section class="post">
							<span class="image"><img src="images/pic05.jpg" alt="" /></span>
							<div class="content">
								<h3>Neque et suscipit</h3>
								<p>Libero condimentum, vehicula sem vel, mattis mauris. Nullam lacinia sit amet felis vel vestibulum. Morbi in aliquam est. Aenean dapibus porttitor nulla ultrices venenatis.</p>
								<ul class="actions">
									<li><a href="#" class="button">More</a></li>
								</ul>
							</div>
						</section>
						<section class="post">
							<span class="image"><img src="images/pic06.jpg" alt="" /></span>
							<div class="content">
								<h3>Vestibulum placerat</h3>
								<p>Tristique tellus et ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent mauris risus, pellentesque eu leo non, tincidunt.</p>
								<ul class="actions">
									<li><a href="#" class="button">More</a></li>
								</ul>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- Contact -->
			<section id="contact" class="wrapper split">
				<div class="inner">
					<section>
						<h2>Send us a message</h2>
						<form method="post" action="#">
							<div class="row uniform">
								<div class="6u 12u$(large) 6u(medium) 12u$(xsmall)">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" />
								</div>
								<div class="6u$ 12u$(large) 6u$(medium) 12u$(xsmall)">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" />
								</div>
								<div class="12u$">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="5"></textarea>
								</div>
								<div class="12u$">
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
					<section>
						<h2>Other ways to reach us</h2>
						<ul class="bulleted-icons">
							<li>
								<span class="icon-wrapper"><span class="icon fa-envelope"></span></span>
								<h3>Email</h3>
								<p><a href="#">information@untitled.tld</a></p>
							</li>
							<li>
								<span class="icon-wrapper"><span class="icon fa-twitter"></span></span>
								<h3>Twitter</h3>
								<p><a href="#">twitter.com/untitled-tld</a></p>
							</li>
							<li>
								<span class="icon-wrapper"><span class="icon fa-phone"></span></span>
								<h3>Phone</h3>
								<p>(800) 555-0000</p>
							</li>
							<li>
								<span class="icon-wrapper"><span class="icon fa-facebook"></span></span>
								<h3>Facebook</h3>
								<p><a href="#">facebook.com/untitled-tld</a></p>
							</li>
							<li>
								<span class="icon-wrapper"><span class="icon fa-home"></span></span>
								<h3>Mailing Address</h3>
								<p>1234 Fictional Avenue<br />
								Nashville, TN 00000<br />
								United States
								</p>
							</li>
							<li>
								<span class="icon-wrapper"><span class="icon fa-linkedin"></span></span>
								<h3>LinkedIn</h3>
								<p><a href="#">linkedin.com/untitled-tld</a></p>
							</li>
						</ul>
					</section>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<p class="copyright">&copy; Untitled Corp. All rights reserved. Lorem ipsum dolor sit amet feugiat tempus aliquam.</p>
					<ul class="menu">
						<li><a href="#">Terms<span> of Use</span></a></li>
						<li><a href="#">Privacy<span> Policy</span></a></li>
						<li><a href="#">Legal<span> Information</span></a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
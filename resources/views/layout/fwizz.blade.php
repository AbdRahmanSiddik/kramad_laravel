
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.awaikenthemes.com/html-preview/fwizz/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 May 2024 11:06:08 GMT -->
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
	<title>Fwizz - Restaurant Cafe And Food HTML Template</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<!-- Google Fonts css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&amp;family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap css -->
	<link href="{{ asset('fwizz') }}/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav css -->
	<link href="{{ asset('fwizz') }}/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper css -->
	<link rel="stylesheet" href="{{ asset('fwizz') }}/css/swiper-bundle.min.css">
	<!-- Font Awesome icon css-->
	<link href="{{ asset('fwizz') }}/css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated css -->
	<link href="{{ asset('fwizz') }}/css/animate.css" rel="stylesheet">
	<!-- Magnific css -->
	<link href="{{ asset('fwizz') }}/css/magnific-popup.css" rel="stylesheet">
	<!-- Main custom css -->
	<link href="{{ asset('fwizz') }}/css/custom.css" rel="stylesheet" media="screen">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="tt-magic-cursor goto-top">

	<!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="{{ asset('fwizz') }}/images/loader.svg" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

	<!-- Magic Cursor Start -->
	<div id="magic-cursor">
		<div id="ball"></div>
	</div>
	<!-- Magic Cursor End -->

	<!-- Header Start -->
	<header class="main-header" id="hero-section">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="/">
						<img src="{{ asset('itsbrain/images/logo_kramad.png') }}" alt="Logo">
					</a>
					<!-- Logo End -->

					<!-- Main Menu start -->
					<div class="collapse navbar-collapse main-menu">
						<ul class="navbar-nav mr-auto" id="menu">
							<li class="nav-item first-menu"><a class="nav-link" href="index.html">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
							<li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
							<li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>
							<li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
								<ul>
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
									<li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
									<li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
							<li class="nav-item highlighted-menu"><a class="btn-default" href="booking.html">Book Now</a></li>
						</ul>
					</div>
					<!-- Main Menu End -->

					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->

    @yield('content')

	<!-- Footer Start -->
	<footer class="footer">

		<!-- Scrolling Ticker Section Start -->
        <div class="scrolling-ticker">
            <div class="scrolling-ticker-box">
                <div class="scrolling-content">
					<span><i class="fa-solid fa-circle"></i>Vegetables Burger</span>
					<span><i class="fa-solid fa-circle"></i>Lemon Tea</span>
					<span><i class="fa-solid fa-circle"></i>Noodles</span>
					<span><i class="fa-solid fa-circle"></i>Fried Potatoes</span>
					<span><i class="fa-solid fa-circle"></i>Bone Steak</span>
					<span><i class="fa-solid fa-circle"></i>Aloo Gobi</span>
					<span><i class="fa-solid fa-circle"></i>Black Cold Coffee</span>
					<span><i class="fa-solid fa-circle"></i>Delicious Dosas</span>
					<span><i class="fa-solid fa-circle"></i>Lemon Tea</span>
					<span><i class="fa-solid fa-circle"></i>Black Cold Coffee</span>
                </div>

                <div class="scrolling-content">
					<span><i class="fa-solid fa-circle"></i>Vegetables Burger</span>
					<span><i class="fa-solid fa-circle"></i>Lemon Tea</span>
					<span><i class="fa-solid fa-circle"></i>Noodles</span>
					<span><i class="fa-solid fa-circle"></i>Fried Potatoes</span>
					<span><i class="fa-solid fa-circle"></i>Bone Steak</span>
					<span><i class="fa-solid fa-circle"></i>Aloo Gobi</span>
					<span><i class="fa-solid fa-circle"></i>Black Cold Coffee</span>
					<span><i class="fa-solid fa-circle"></i>Delicious Dosas</span>
					<span><i class="fa-solid fa-circle"></i>Lemon Tea</span>
					<span><i class="fa-solid fa-circle"></i>Black Cold Coffee</span>
                </div>
            </div>
        </div>
        <!-- Scrolling Ticker Section End -->

		<!-- Mega Footer Start -->
		<div class="footer-mega">
			<div class="container">
				<!-- Footer Start -->
				<div class="row">
					<!-- Footer About start -->
					<div class="col-lg-4 col-md-12">
						<div class="footer-about">
							<!-- Footer Logo start -->
							<div class="footer-logo">
								<img src="{{ asset('fwizz') }}/images/footer-logo.svg" alt="Logo">
							</div>
							<!-- Footer Logo end -->

							<!-- Footer Content start -->
							<div class="footer-content">
								<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has standard text ever since the when.</p>

								<div class="footer-social-link">
									<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
									<a href="#"><i class="fa-brands fa-instagram"></i></a>
									<a href="#"><i class="fa-brands fa-twitter"></i></a>
									<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
								</div>
							</div>
							<!-- Footer Content end -->
						</div>
					</div>
					<!-- Footer About end -->

					<!-- Footer Menu start -->
					<div class="col-lg-5 col-md-7">
						<div class="row no-gutters">
							<div class="col-md-6 col-12">
								<div class="footer-links">
									<h2>Our Menu</h2>
									<ul>
										<li><a href="#"><i class="fa-solid fa-arrow-right"></i>Breakfast</a></li>
										<li><a href="#"><i class="fa-solid fa-arrow-right"></i>Lunches</a></li>
										<li><a href="#"><i class="fa-solid fa-arrow-right"></i>Dinner</a></li>
										<li><a href="#"><i class="fa-solid fa-arrow-right"></i>Fast Foods</a></li>
										<li><a href="#"><i class="fa-solid fa-arrow-right"></i>Drinks</a></li>
										<li><a href="#"><i class="fa-solid fa-arrow-right"></i>Dessert</a></li>
									</ul>
								</div>
							</div>

							<div class="col-md-6 col-12">
								<div class="footer-links">
									<h2>Quick Links</h2>
									<ul>
										<li><a href="#"><i class="fa-solid fa-arrow-right"></i>Home</a></li>
										<li><a href="#"><i class="fa-solid fa-arrow-right"></i>About Us</a></li>
										<li><a href="#"><i class="fa-solid fa-arrow-right"></i>Menu</a></li>
										<li><a href="#"><i class="fa-solid fa-arrow-right"></i>Testimonials</a></li>
										<li><a href="#"><i class="fa-solid fa-arrow-right"></i>Events</a></li>
										<li><a href="#"><i class="fa-solid fa-arrow-right"></i>Contact Us</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<!-- Footer Menu end -->

					<!-- Footer Contact start -->
					<div class="col-lg-3 col-md-5">
						<div class="footer-contact">
							<h2>Contact Now</h2>
							<ul>
								<li>
									<span class="icon-list-icon"><i class="fa-solid fa-location-dot"></i></span>
									<span class="icon-list-text">123, Lorem Ipsum Street No, City name country 123456</span>
								</li>
								<li>
									<span class="icon-list-icon"><i class="fa-solid fa-phone"></i></span>
									<span class="icon-list-text"><a href="#">(+0) 123 456 789</a></span>
								</li>
								<li>
									<span class="icon-list-icon"><i class="fa-solid fa-envelope"></i></span>
									<span class="icon-list-text"><a href="#">info@domain.com</a></span>
								</li>
							</ul>
						</div>
					</div>
					<!-- Footer Contact end -->
				</div>
				<!-- Footer End -->

				<!-- Footer Subscribe Form Start -->
				<div class="row footer-subscribe-section align-items-center">
					<div class="col-lg-6 col-md-12">
						<div class="footer-subscribe-title">
							<h2>Subscribe & Join Our Channel</h2>
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="footer-subscribe-form">
							<form id="footer_subscribeForm" action="#" method="POST" data-toggle="validator">
								<div class="row align-items-center no-gutters">
									<div class="form-group col-md-9 text-end">
										<input type="email" name ="email" class="form-control" id="nemail" placeholder="Enter Email Address" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="col-md-3 text-end">
										<button type="submit" class="form-btn">Subscribe</button>
										<div id="nmsgSubmit" class="h3 text-left hidden"></div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Footer Subscribe Form End -->

				<!-- Footer Copyright Start -->
				<div class="footer-copyright">
					<div class="row">
						<div class="col-md-6">
							<p>Copyright © 2024 <strong>Fwizz.</strong> All rights reserved.</p>
						</div>
						<div class="col-md-6 text-end">
							<a href="#hero-section" class="footer-btn"><span>Go to Top</span><i class="fa-solid fa-arrow-up"></i></a>
						</div>
					</div>
				</div>
				<!-- Footer Copyright End -->
			</div>
		</div>
		<!-- Mega Footer End -->
	</footer>
	<!-- Footer End -->

	<!-- Jquery Library File -->
	<script src="{{ asset('fwizz') }}/js/jquery-3.7.1.min.js"></script>
	<!-- Bootstrap js file -->
	<script src="{{ asset('fwizz') }}/js/bootstrap.min.js"></script>
	<!-- Validator js file -->
	<script src="{{ asset('fwizz') }}/js/validator.min.js"></script>
	<!-- SlickNav js file -->
	<script src="{{ asset('fwizz') }}/js/jquery.slicknav.js"></script>
	<!-- Swiper js file -->
	<script src="{{ asset('fwizz') }}/js/swiper-bundle.min.js"></script>
	<!-- Counter js file -->
	<script src="{{ asset('fwizz') }}/js/jquery.waypoints.min.js"></script>
	<script src="{{ asset('fwizz') }}/js/jquery.counterup.min.js"></script>
	<!-- WayPoints js file -->
	<script src="{{ asset('fwizz') }}/js/jquery.waypoints.min.js"></script>
	<!-- Isotop js file -->
	<script src="{{ asset('fwizz') }}/js/isotope.min.js"></script>
	<!-- Magnific js file -->
	<script src="{{ asset('fwizz') }}/js/jquery.magnific-popup.min.js"></script>
	<!-- Parallax js file -->
	<script src="{{ asset('fwizz') }}/js/parallaxie.js"></script>
	<!-- SmoothScroll -->
	<script src="{{ asset('fwizz') }}/js/SmoothScroll.js"></script>
	<!-- MagicCursor js file -->
	<script src="{{ asset('fwizz') }}/js/gsap.min.js"></script>
	<script src="{{ asset('fwizz') }}/js/magiccursor.js"></script>
	<!-- Text Effect js file -->
	<script src="{{ asset('fwizz') }}/js/splitType.js"></script>
	<script src="{{ asset('fwizz') }}/js/ScrollTrigger.min.js"></script>
	<!-- Wow js file -->
	<script src="{{ asset('fwizz') }}/js/wow.js"></script>
	<!-- Main Custom js file -->
	<script src="{{ asset('fwizz') }}/js/function.js"></script>
</body>

<!-- Mirrored from demo.awaikenthemes.com/html-preview/fwizz/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 May 2024 11:06:35 GMT -->
</html>

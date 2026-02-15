<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- favicon -->
	<title>@yield('title', 'Twoet')</title>
	<link rel="icon" type="image/x-icon" href="{{ asset('assets/images/resources/banner-icon.ico') }}">
	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
		rel="stylesheet">
	<!-- stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/twoet-icons/flaticon_twoet.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/icomoon/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/swiper/swiper-bundle.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-select-main/bootstrap-select.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/youtube-popup/youtube-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
	@stack('styles')
</head>
<!-- custom-cursor -->

<body class="custom-cursor">
	<div class="custom-cursor-one"></div>
	<div class="custom-cursor-two"></div>
	<!-- preloader -->
	<div class="preloader">
		<div class="preloader-circle"></div>
		<div class="preloader-circle-2"></div>
	</div>
	<!-- page-wrapper -->
	<div class="page-wrapper">
		<!-- main-header -->
		<header class="main-header">
			<div class="header-menu">
				<!-- header-logo -->
				<div class="logo-box">
					<a href="{{ route('home') }}">
						<img src="{{ asset('assets/images/resources/logo.png') }}" alt="header-logo">
					</a>
				</div>
				<nav class="navbar-expand-lg">
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto">
							<li class="dropdown">
								<a class="nav-link dropdown-toggle" href="#">Home </a>
								<ul>
									<li><a href="{{ route('home') }}">Home One</a></li>
									<li><a href="{{ route('home2') }}">Home Two</a></li>
									<li><a href="{{ route('home3') }}">Home Three</a></li>
									<li><a href="{{ route('home4') }}">Home Four</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="nav-link dropdown-toggle" href="#">Pages</a>
								<ul>
									<li><a href="{{ route('about') }}">About Us</a></li>
									<li><a class="dropdown-sub-toggle" href="{{ route('movies.list') }}">Movies</a>
										<ul class="sub-menu-inner">
											<li><a href="{{ route('movies.list') }}">Movies List</a></li>
											<li><a href="{{ route('movies.details') }}">Movies Details</a></li>
										</ul>
									</li>
									<li><a class="dropdown-sub-toggle" href="#">Team</a>
										<ul class="sub-menu-inner">
											<li><a href="{{ route('team.member') }}">Team Member</a></li>
											<li><a href="{{ route('team.details') }}">Team Details</a></li>
										</ul>
									</li>
									<li><a href="{{ route('package') }}">Package</a></li>
									<li><a href="{{ route('career') }}">Career</a></li>
									<li><a href="{{ route('faq') }}">FAQs</a></li>
									<li><a href="{{ route('testimonial') }}">Testimonial</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="nav-link dropdown-toggle" href="#">Services</a>
								<ul>
									<li><a href="{{ route('services.list') }}">Services List</a></li>
									<li><a href="{{ route('services.details') }}">Services Details</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="nav-link dropdown-toggle" href="#">Shop</a>
								<ul>
									<li><a href="{{ route('shop.page') }}">Shop Page</a></li>
									<li><a href="{{ route('shop.details') }}">Shop Details</a></li>
									<li><a href="{{ route('checkout') }}">Checkout</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="nav-link dropdown-toggle" href="#">Blog</a>
								<ul>
									<li><a href="{{ route('blog.list') }}">Blog List</a></li>
									<li><a href="{{ route('blog.details') }}">Blog Details</a></li>
								</ul>
							</li>
							<li>
								<a class="text-decoration-none" href="{{ route('contact') }}">Contact</a>
							</li>
							<li>
								<div class="menu-search-box">
									<a href="#" class="search-toggler">
										<i class="icon-search"></i>
									</a>
								</div>
							</li>
							<li>
								<div class="shopping-cart-box">
									<a href="{{ route('checkout') }}">
										<i class="icon-shopping-basket"></i>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
				<!-- header-right -->
				<div class="header-right align-items-center">
					<div class="menu-call">
						<i class="icon-uniE90D"></i>
						<h4>+222 (345) 88 99</h4>
					</div>
					<div class="menu-btn">
						<a href="{{ route('contact') }}" class="btn btn-small-primary">Contact Us<i class="icon-1"></i></a>
					</div>
					<div class="side-drawer-toggler-btn">
						<span class="line-1"></span>
						<span class="line-2"></span>
					</div>
					<div class="header-right-end">
						<span class="line-1"></span>
						<span class="line-2"></span>
						<span class="line-3"></span>
					</div>
				</div>
			</div>
		</header>
		<!-- site-main -->
		<main class="site-main">
			@yield('content')
		</main>
		<footer>
			<!-- footer-main -->
			<div class="footer-main">
				<!-- footer-main-shape-1 -->
				<div class="footer-main-shape-1"></div>
				<!-- footer-main-shape-2 -->
				<div class="footer-main-shape-2"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight animated" data-wow-duration="1500ms"
							data-wow-delay="00ms">
							<!-- footer-widget-about -->
							<div class="footer-widget footer-widget-about">
								<!-- footer-widget-logo -->
								<a href="{{ route('home') }}" class="footer-widget-logo">
									<img src="{{ asset('assets/images/resources/logo-two.png') }}" alt="twoet-logo-two">
								</a>
								<!-- footer-widget-text -->
								<p class="footer-widget-text">Sorem ipsum dolor sit amet consectetur. Conse laoreesy
									condimentum sit vitae.
								</p>
								<!-- footer-widget-social -->
								<ul class="footer-widget-social">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight animated" data-wow-duration="1500ms"
							data-wow-delay="150ms">
							<!-- footer-widget-links -->
							<div class="footer-widget footer-widget-links">
								<!-- footer-widget-title -->
								<h3 class="footer-widget-title">Links</h3><!-- /.footer-widget-title -->
								<!-- footer-widget-links-details -->
								<ul class="footer-widget-links-details">
									<li>
										<a href="{{ route('about') }}">About</a>
									</li>
									<li>
										<a href="{{ route('services.list') }}">Our Services</a>
									</li>
									<li>
										<a href="#">Clients Say</a>
									</li>
									<li>
										<a href="#">Company History</a>
									</li>
									<li>
										<a href="{{ route('blog.list') }}">Latest News</a>
									</li>
									<li>
										<a href="{{ route('contact') }}">Contact Us</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight animated" data-wow-duration="1500ms"
							data-wow-delay="300ms">
							<!-- footer-widget-contact -->
							<div class="footer-widget footer-widget-contact">
								<!-- footer-widget-title -->
								<h3 class="footer-widget-title">Contact</h3>
								<!-- footer-widget-contact-details -->
								<ul class="footer-widget-contact-details">
									<li>
										<i class="icon-map"></i>
										<p>55 main street, 2nd block Melbourne, Australia</p>
									</li>
									<li>
										<i class="icon-mail"></i>
										<a href="mailto:support@gmail.com">support@gmail.com</a>
									</li>
									<li>
										<i class="icon-uniE90D"></i>
										<a href="tel:+000(123)45688">+000 (123) 456 88</a>

									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight animated" data-wow-duration="1500ms"
							data-wow-delay="450ms">
							<!-- footer-widget-newsletter -->
							<div class="footer-widget footer-widget-newsletter">
								<!-- footer-widget-title -->
								<h3 class="footer-widget-title">Newsletter</h3>
								<form action="#">
									<input type="email" name="EMAIL" placeholder="Email Address">
									<button class="btn btn-bg-white"><span>Subscribe<i
												class="icon-1"></i></span></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom -->
			<div class="footer-bottom">
				<div class="container">
					<!-- footer-bottom-inner -->
					<div class="footer-bottom-inner">
						<!-- scroll-to-top -->
						<a href="#" class="scroll-to-target scroll-to-top" id="scroll" style="display: none;">
							<i class="icon-angle-double-up"></i>
						</a>
						<!-- copyright -->
						<div class="copyright">
							<p>Copyright @{{ date('Y') }},
								<a href="#">Twoet</a> All Rights Reserved
							</p>
						</div>
						<!-- footer-widget-one-menu-two -->
						<ul class="footer-widget-one-menu-two list-unstyled">
							<li>
								<a href="#">Terms Of Use</a>
							</li>
							<li>
								<a href="#">Privacy Policy</a>
							</li>
							<li>
								<a href="{{ route('faq') }}">FAQs</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- mobile-nav-wrapper -->
		<div class="mobile-nav-wrapper">
			<!-- mobile-nav-overlay -->
			<div class="mobile-nav-overlay mobile-nav-toggler"></div>
			<!-- mobile-nav-content -->
			<div class="mobile-nav-content">
				<span class="mobile-nav-close mobile-nav-toggler"><i class="fa fa-times"></i></span>
				<!-- logo-box -->
				<div class="logo-box">
					<a href="{{ route('home') }}" aria-label="logo image"><img src="{{ asset('assets/images/resources/logo-two.png') }}"
							alt="logo"></a>
				</div>
				<!-- mobile-nav-container -->
				<div class="mobile-nav-container">
					<!-- main-menu-list -->
					<ul class="main-menu-list">
						<li class="dropdown">
							<a href="#">Home </a>
							<ul>
								<li><a href="{{ route('home') }}">Home One</a></li>
								<li><a href="{{ route('home2') }}">Home Two</a></li>
								<li><a href="{{ route('home3') }}">Home Three</a></li>
								<li><a href="{{ route('home4') }}">Home Four</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#">Pages</a>
							<ul>
								<li><a href="{{ route('about') }}">About Us</a></li>
								<li class="dropdown"><a href="{{ route('movies.list') }}">Movies</a>
									<ul class="sub-menu-inner">
										<li><a href="{{ route('movies.list') }}">Movies List</a></li>
										<li><a href="{{ route('movies.details') }}">Movies Details</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#">Team</a>
									<ul class="sub-menu-inner">
										<li><a href="{{ route('team.member') }}">Team Member</a></li>
										<li><a href="{{ route('team.details') }}">Team Details</a></li>
									</ul>
								</li>
								<li><a href="{{ route('package') }}">Package</a></li>
								<li><a href="{{ route('career') }}">Career</a></li>
								<li><a href="{{ route('faq') }}">FAQs</a></li>
								<li><a href="{{ route('testimonial') }}">Testimonial</a></li>
							</ul>
						</li>
						<li class="dropdown current">
							<a href="#">Services</a>
							<ul>
								<li><a href="{{ route('services.list') }}">Services List</a></li>
								<li><a href="{{ route('services.details') }}">Services Details</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#">shop</a>
							<ul>
								<li><a href="{{ route('shop.page') }}">Shop Page</a></li>
								<li><a href="{{ route('shop.details') }}">Shop Details</a></li>
								<li><a href="{{ route('checkout') }}">Checkout</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#">Blog</a>
							<ul>
								<li><a href="{{ route('blog.list') }}">Blog List</a></li>
								<li><a href="{{ route('blog.details') }}">Blog Details</a></li>
							</ul>
						</li>
						<li>
							<a href="{{ route('contact') }}">Contact</a>
						</li>
					</ul>
				</div>
				<!-- mobile-nav-contact -->
				<ul class="mobile-nav-contact list-unstyled">
					<li>
						<!-- mobile-menu-call -->
						<div class="mobile-menu-call">
							<i class="icon-uniE90D"></i>
							<a href="#">+222 (345) 88 99</a>
						</div>
					</li>
					<li>
						<!-- mobile-menu-btn -->
						<div class="theme-btn">
							<a href="{{ route('contact') }}" class="btn btn-bg-primary">Contact Us<i class="icon-1"></i></a>
						</div>
					</li>
				</ul>
				<!-- mobile-nav-top -->
				<div class="mobile-nav-top">
					<!-- mobile-nav-social -->
					<ul class="mobile-nav-social">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- side-drawer-wrapper -->
		<div class="side-drawer-wrapper">
			<!-- side-drawer-overlay -->
			<div class="side-drawer-overlay side-drawer-toggler"></div>
			<!-- side-drawer-content -->
			<div class="side-drawer-content">
				<a href="#" class="side-drawer-close side-drawer-toggler">
					<i class="fa fa-times"></i>
				</a>
				<!-- logo-box -->
				<div class="logo-box">
					<a href="{{ route('home') }}" aria-label="logo image"><img src="{{ asset('assets/images/resources/logo-two.png') }}"
							alt="Insuco"></a>
				</div>
				<!-- side-drawer-widget -->
				<div class="side-drawer-widget">
					<h3 class="side-drawer-widget-title">About</h3>
					<p class="side-drawer-widget-text">We denounce with righteous indignation and dislike men who
						beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that
						they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to
						those fail in their duty</p>
				</div>
				<!-- mobile-nav-top -->
				<div class="mobile-nav-top">
					<!-- mobile-nav-social -->
					<ul class="mobile-nav-social">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
				<!-- side-drawer-gallery -->
				<div class="side-drawer-gallery">
					<!-- side-drawer-gallery-title -->
					<h3 class="side-drawer-gallery-title">Gallery</h3>
					<ul class="list-unstyled side-drawer-gallery-details">
						<li>
							<a href="{{ asset('assets/images/resources/popular-movie-four-img-1.jpg') }}" class="img-popup">
								<img src="{{ asset('assets/images/resources/popular-movie-four-img-1.jpg') }}"
									alt="popular-movie-four-img-1">
							</a>
						</li>
						<li>
							<a href="{{ asset('assets/images/resources/popular-movie-six-img-4.jpg') }}" class="img-popup">
								<img src="{{ asset('assets/images/resources/popular-movie-six-img-4.jpg') }}"
									alt="popular-movie-six-img-4">
							</a>
						</li>
						<li>
							<a href="{{ asset('assets/images/resources/popular-movie-six-img-3.jpg') }}" class="img-popup">
								<img src="{{ asset('assets/images/resources/popular-movie-six-img-3.jpg') }}"
									alt="popular-movie-six-img-3">
							</a>
						</li>
						<li>
							<a href="{{ asset('assets/images/resources/popular-movie-six-img-1.jpg') }}" class="img-popup">
								<img src="{{ asset('assets/images/resources/popular-movie-six-img-1.jpg') }}"
									alt="popular-movie-six-img-1">
							</a>
						</li>
						<li>
							<a href="{{ asset('assets/images/resources/popular-movie-four-img-2.jpg') }}" class="img-popup">
								<img src="{{ asset('assets/images/resources/popular-movie-four-img-2.jpg') }}"
									alt="popular-movie-four-img-2">
							</a>
						</li>
						<li>
							<a href="{{ asset('assets/images/resources/popular-movie-four-img-3.jpg') }}" class="img-popup">
								<img src="{{ asset('assets/images/resources/popular-movie-four-img-3.jpg') }}"
									alt="popular-movie-four-img-3">
							</a>
						</li>
					</ul>
				</div>
				<!-- mobile-nav-contact -->
				<ul class="mobile-nav-contact list-unstyled">
					<li>
						<!-- mobile-menu-call -->
						<div class="mobile-menu-call">
							<i class="icon-uniE90D"></i>
							<a href="#">+222 (345) 88 99</a>
						</div>
					</li>
					<li>
						<!-- mobile-menu-btn -->
						<div class="theme-btn">
							<a href="{{ route('about') }}" class="btn btn-bg-primary">Learn More Us<i class="icon-1"></i></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- search-popup -->
		<div class="search-popup">
			<!-- search-popup-overlay -->
			<div class="search-popup-overlay search-toggler"></div>
			<!-- search-popup-content -->
			<div class="search-popup-content">
				<span class="search-popup-close search-toggler"><i class="fa fa-times"></i></span>
				<form action="#">
					<label for="search" class="sr-only">search here</label>
					<input type="text" id="search" placeholder="Search Here.....">
					<button type="submit" aria-label="search submit" class="thm-btn">
						<span><i class="icon-search"></i></span>
					</button>
				</form>
			</div>
		</div>
	</div>
	<!-- script -->
	<script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/fontawesome/attribution.js') }}"></script>
	<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/swiper/swiper-bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
	<script src="{{ asset('assets/vendors/bootstrap-select-main/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/youtube-popup/youtube-popup.jquery.js') }}"></script>
	<script src="{{ asset('assets/js/script.js') }}"></script>
	@stack('scripts')
</body>

</html>

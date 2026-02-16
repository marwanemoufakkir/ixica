<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- favicon -->
	<title>@yield('title', 'Ixica — SIP Trunking Canada')</title>
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
			<div class="header-menu header-menu-ixica">
				<!-- header-logo -->
				<div class="logo-box">
					<a href="{{ route('home') }}" aria-label="Ixica Home">
						<img src="https://www.ixica.com/assets/img/logo/logo-animated.gif" alt="Ixica — SIP Trunking Canada">
					</a>
				</div>
				<nav class="navbar-expand-lg">
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav navbar-nav-ixica mx-auto">
							{{-- Solutions (4-column mega, like Industries) --}}
							<li class="dropdown dropdown-mega">
								<a class="nav-link dropdown-toggle" href="{{ route('services.list') }}">Solutions</a>
								<div class="mega-menu mega-menu-solutions">
									<div class="mega-menu-inner">
										<div class="mega-menu-grid mega-menu-cols-4">
											<div class="mega-menu-column">
												<h4 class="mega-menu-title">Wholesale Infrastructure</h4>
												<ul class="mega-menu-links">
													<li><a href="{{ route('services.list') }}#wholesale-sip">Wholesale SIP Trunking</a><span class="mega-menu-desc">Carrier-grade routing for telecom providers and ITSPs.</span></li>
													<li><a href="{{ route('services.list') }}#carrier-interconnect">Carrier Interconnect</a><span class="mega-menu-desc">Direct interconnection and high-volume voice routing.</span></li>
													<li><a href="{{ route('services.list') }}#network">Network &amp; Infrastructure</a><span class="mega-menu-desc">Architecture, redundancy, and Canadian routing overview.</span></li>
													<li><a href="{{ route('services.list') }}#sla">SLA &amp; Reliability</a><span class="mega-menu-desc">Uptime guarantees and performance standards.</span></li>
												</ul>
											</div>
											<div class="mega-menu-column">
												<h4 class="mega-menu-title">Partner Programs</h4>
												<ul class="mega-menu-links">
													<li><a href="{{ route('contact') }}?subject=reseller">SIP Reseller Program</a><span class="mega-menu-desc">Recurring revenue opportunities for MSPs.</span></li>
													<li><a href="{{ route('services.list') }}#partner-benefits">Partner Benefits</a><span class="mega-menu-desc">Volume pricing, provisioning, and support.</span></li>
													<li><a href="{{ route('contact') }}?subject=partner">Become a Partner</a><span class="mega-menu-desc">Application and onboarding process.</span></li>
												</ul>
											</div>
											<div class="mega-menu-column">
												<h4 class="mega-menu-title">Enterprise Solutions</h4>
												<ul class="mega-menu-links">
													<li><a href="{{ route('services.list') }}#enterprise">Enterprise SIP Trunking</a><span class="mega-menu-desc">Scalable voice solutions for businesses.</span></li>
													<li><a href="{{ route('services.list') }}#3cx">SIP for 3CX</a><span class="mega-menu-desc">Optimized routing for 3CX deployments.</span></li>
													<li><a href="{{ route('services.list') }}#yeastar">SIP for Yeastar</a><span class="mega-menu-desc">Certified compatibility and configuration.</span></li>
												</ul>
											</div>
											<div class="mega-menu-column mega-menu-cta-col">
												<h4 class="mega-menu-title">Why Choose Ixica?</h4>
												<p class="mega-menu-trust">Canadian infrastructure. Redundant routing. Dedicated telecom engineers.</p>
												<a href="{{ route('contact') }}?subject=specialist" class="btn btn-mega-cta">Talk to a Specialist<i class="icon-1"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							{{-- Industries (4-column mega, like Solutions) --}}
							<li class="dropdown dropdown-mega">
								<a class="nav-link dropdown-toggle" href="{{ route('services.list') }}#industries">Industries</a>
								<div class="mega-menu mega-menu-industries">
									<div class="mega-menu-inner">
										<div class="mega-menu-grid mega-menu-cols-4">
											<div class="mega-menu-column">
												<h4 class="mega-menu-title">Professional Services</h4>
												<ul class="mega-menu-links">
													<li><a href="{{ route('services.list') }}#law">Law Firms</a><span class="mega-menu-desc">Secure and reliable client communications.</span></li>
													<li><a href="{{ route('services.list') }}#transportation">Transportation</a><span class="mega-menu-desc">Stable dispatch and logistics routing.</span></li>
												</ul>
											</div>
											<div class="mega-menu-column">
												<h4 class="mega-menu-title">Healthcare &amp; Education</h4>
												<ul class="mega-menu-links">
													<li><a href="{{ route('services.list') }}#healthcare">Healthcare</a><span class="mega-menu-desc">Reliable voice infrastructure for critical services.</span></li>
													<li><a href="{{ route('services.list') }}#education">Education</a><span class="mega-menu-desc">Scalable voice for institutions and campuses.</span></li>
												</ul>
											</div>
											<div class="mega-menu-column">
												<h4 class="mega-menu-title">Government &amp; Public</h4>
												<ul class="mega-menu-links">
													<li><a href="{{ route('services.list') }}#government">Government</a><span class="mega-menu-desc">Carrier-grade routing with compliance focus.</span></li>
												</ul>
											</div>
											<div class="mega-menu-column mega-menu-cta-col">
												<h4 class="mega-menu-title">Industry Solutions</h4>
												<p class="mega-menu-trust">Voice infrastructure tailored to your sector. Canadian routing and compliance built in.</p>
												<a href="{{ route('services.list') }}#industries" class="btn btn-mega-cta">Explore All Industries<i class="icon-1"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							{{-- Resources (4-column mega, like Solutions) --}}
							<li class="dropdown dropdown-mega">
								<a class="nav-link dropdown-toggle" href="{{ route('blog.list') }}">Resources</a>
								<div class="mega-menu mega-menu-resources">
									<div class="mega-menu-inner">
										<div class="mega-menu-grid mega-menu-cols-4">
											<div class="mega-menu-column">
												<h4 class="mega-menu-title">Education</h4>
												<ul class="mega-menu-links">
													<li><a href="{{ route('blog.list') }}">What is SIP Trunking?</a><span class="mega-menu-desc">Understanding Canadian SIP infrastructure.</span></li>
													<li><a href="{{ route('blog.list') }}">Wholesale vs Resale Guide</a><span class="mega-menu-desc">Choosing the right partnership model.</span></li>
												</ul>
											</div>
											<div class="mega-menu-column">
												<h4 class="mega-menu-title">Technical</h4>
												<ul class="mega-menu-links">
													<li><a href="{{ route('blog.list') }}">3CX Configuration Guide</a><span class="mega-menu-desc">Step-by-step setup documentation.</span></li>
													<li><a href="{{ route('about') }}">Network &amp; SLA Details</a><span class="mega-menu-desc">Infrastructure transparency.</span></li>
												</ul>
											</div>
											<div class="mega-menu-column">
												<h4 class="mega-menu-title">Authority</h4>
												<ul class="mega-menu-links">
													<li><a href="{{ route('blog.list') }}">Blog &amp; Insights</a><span class="mega-menu-desc">Industry updates and telecom analysis.</span></li>
													<li><a href="{{ route('faq') }}">FAQ</a><span class="mega-menu-desc">Common technical and billing questions.</span></li>
												</ul>
											</div>
											<div class="mega-menu-column mega-menu-cta-col">
												<h4 class="mega-menu-title">Need Help?</h4>
												<p class="mega-menu-trust">Technical docs, guides, and dedicated support for your deployment.</p>
												<a href="{{ route('contact') }}?subject=technical" class="btn btn-mega-cta">Talk to a Specialist<i class="icon-1"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							{{-- Company (4-column mega, like Solutions) --}}
							<li class="dropdown dropdown-mega">
								<a class="nav-link dropdown-toggle" href="{{ route('about') }}">Company</a>
								<div class="mega-menu mega-menu-company">
									<div class="mega-menu-inner">
										<div class="mega-menu-grid mega-menu-cols-4">
											<div class="mega-menu-column">
												<h4 class="mega-menu-title">About Ixica</h4>
												<ul class="mega-menu-links">
													<li><a href="{{ route('about') }}">Company Overview</a><span class="mega-menu-desc">Mission and Canadian telecom focus.</span></li>
													<li><a href="{{ route('about') }}#network">Network Overview</a><span class="mega-menu-desc">Infrastructure transparency.</span></li>
												</ul>
											</div>
											<div class="mega-menu-column">
												<h4 class="mega-menu-title">Contact</h4>
												<ul class="mega-menu-links">
													<li><a href="{{ route('contact') }}">Sales &amp; Inquiries</a><span class="mega-menu-desc">Wholesale and enterprise sales.</span></li>
													<li><a href="{{ route('contact') }}?subject=technical">Technical Support</a><span class="mega-menu-desc">Implementation and provisioning.</span></li>
												</ul>
											</div>
											<div class="mega-menu-column">
												<h4 class="mega-menu-title">Careers</h4>
												<ul class="mega-menu-links">
													<li><a href="{{ route('career') }}">Join the Team</a><span class="mega-menu-desc">Open roles and culture.</span></li>
												</ul>
											</div>
											<div class="mega-menu-column mega-menu-cta-col">
												<h4 class="mega-menu-title">Get in Touch</h4>
												<p class="mega-menu-trust">Canadian infrastructure. Dedicated engineers. Long-term partnerships.</p>
												<a href="{{ route('contact') }}" class="btn btn-mega-cta">Contact Us<i class="icon-1"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</nav>
				<!-- header-right: CTA -->
				<div class="header-right header-right-ixica align-items-center">
					
					<a href="{{ route('contact') }}?subject=wholesale" class="btn btn-small-primary btn-wholesale-cta">Request Wholesale Pricing<i class="icon-1"></i></a>
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
						<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
							<!-- footer-widget -->
							<div class="footer-widget">
								<h3 class="footer-widget-title">Solutions</h3>
								<ul class="footer-widget-links-details">
									<li><a href="{{ route('services.list') }}#wholesale-sip">Wholesale SIP Trunking</a></li>
									<li><a href="{{ route('services.list') }}#carrier-interconnect">Carrier Interconnect</a></li>
									<li><a href="{{ route('services.list') }}#network">Network &amp; Infrastructure</a></li>
									<li><a href="{{ route('services.list') }}#sla">SLA &amp; Reliability</a></li>
									<li><a href="{{ route('contact') }}?subject=reseller">SIP Reseller Program</a></li>
									<li><a href="{{ route('services.list') }}#partner-benefits">Partner Benefits</a></li>
									<li><a href="{{ route('services.list') }}#enterprise">Enterprise SIP Trunking</a></li>
									<li><a href="{{ route('services.list') }}#3cx">SIP for 3CX</a></li>
									<li><a href="{{ route('services.list') }}#yeastar">SIP for Yeastar</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
							<!-- footer-widget -->
							<div class="footer-widget">
								<h3 class="footer-widget-title">Industries</h3>
								<ul class="footer-widget-links-details">
									<li><a href="{{ route('services.list') }}#law">Law Firms</a></li>
									<li><a href="{{ route('services.list') }}#transportation">Transportation</a></li>
									<li><a href="{{ route('services.list') }}#healthcare">Healthcare</a></li>
									<li><a href="{{ route('services.list') }}#education">Education</a></li>
									<li><a href="{{ route('services.list') }}#government">Government</a></li>
									<li><a href="{{ route('services.list') }}#industries">Explore All Industries</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
							<!-- footer-widget -->
							<div class="footer-widget">
								<h3 class="footer-widget-title">Resources</h3>
								<ul class="footer-widget-links-details">
									<li><a href="{{ route('blog.list') }}">What is SIP Trunking?</a></li>
									<li><a href="{{ route('blog.list') }}">Wholesale vs Resale Guide</a></li>
									<li><a href="{{ route('blog.list') }}">3CX Configuration Guide</a></li>
									<li><a href="{{ route('about') }}">Network &amp; SLA Details</a></li>
									<li><a href="{{ route('blog.list') }}">Blog &amp; Insights</a></li>
									<li><a href="{{ route('faq') }}">FAQ</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
							<!-- footer-widget -->
							<div class="footer-widget">
								<h3 class="footer-widget-title">Company</h3>
								<ul class="footer-widget-links-details">
									<li><a href="{{ route('about') }}">Company Overview</a></li>
									<li><a href="{{ route('about') }}#network">Network Overview</a></li>
									<li><a href="{{ route('contact') }}">Sales &amp; Inquiries</a></li>
									<li><a href="{{ route('contact') }}?subject=technical">Technical Support</a></li>
									<li><a href="{{ route('career') }}">Join the Team</a></li>
									<li><a href="{{ route('contact') }}">Contact Us</a></li>
								</ul>
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
							<p>Copyright {{ date('Y') }}
								<a href="{{ route('home') }}">Ixica</a>. All Rights Reserved.
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
							<a href="{{ route('services.list') }}">Solutions</a>
							<ul>
								<li><a href="{{ route('services.list') }}">Wholesale SIP Trunking</a></li>
								<li><a href="{{ route('services.list') }}">Partner Programs</a></li>
								<li><a href="{{ route('services.list') }}">Enterprise Solutions</a></li>
								<li><a href="{{ route('contact') }}?subject=specialist">Talk to a Specialist</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="{{ route('services.list') }}#industries">Industries</a>
							<ul>
								<li><a href="{{ route('services.list') }}#law">Law Firms</a></li>
								<li><a href="{{ route('services.list') }}#healthcare">Healthcare</a></li>
								<li><a href="{{ route('services.list') }}#government">Government</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="{{ route('blog.list') }}">Resources</a>
							<ul>
								<li><a href="{{ route('blog.list') }}">Blog &amp; Insights</a></li>
								<li><a href="{{ route('faq') }}">FAQ</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="{{ route('about') }}">Company</a>
							<ul>
								<li><a href="{{ route('about') }}">About Ixica</a></li>
								<li><a href="{{ route('contact') }}">Contact</a></li>
								<li><a href="{{ route('career') }}">Careers</a></li>
							</ul>
						</li>
						<li>
							<div class="theme-btn">
								<a href="{{ route('contact') }}?subject=wholesale" class="btn btn-bg-primary">Request Wholesale Pricing<i class="icon-1"></i></a>
							</div>
						</li>
					</ul>
				</div>
				<!-- mobile-nav-contact -->
				<ul class="mobile-nav-contact list-unstyled">
					<li>
						<div class="mobile-menu-call">
							<i class="icon-uniE90D"></i>
							<a href="tel:+12223458899">+222 (345) 88 99</a>
						</div>
					</li>
					<li>
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

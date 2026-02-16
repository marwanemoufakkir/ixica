@extends('layouts.app')

@section('title', 'Ixica — Carrier-Grade SIP Trunking Across Canada')

@section('content')
<!-- Hero Section -->
<section class="banner-two">
	<div class="banner-two-shape"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 col-md-9 col-sm-12 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="00ms">
				<div class="banner-two-info">
					<ul class="banner-two-info-top">
						<li class="pg-14">Canadian Infrastructure</li>
						<li class="imdb">99.99% Uptime</li>
						<li class="reat">Enterprise SLA</li>
					</ul>
					<h1>Carrier-Grade SIP Trunking Across Canada</h1>
					<p class="banner-two-info-detail">Wholesale and enterprise SIP infrastructure built for reliability, scalability, and long-term telecom partnerships.</p>
					<ul class="banner-two-info-bottom">
						<li><i class="flaticon-24-hours"></i> Redundant routing</li>
						<li><i class="flaticon-secure-shield"></i> SLA protection</li>
					</ul>
					<div class="theme-btn">
						<a href="{{ route('contact') }}?subject=wholesale" class="btn btn-small-primary btn-wholesale-cta">Request Wholesale Pricing<i class="icon-1"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-3 col-sm-12 wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="00ms">
				<div class="banner-two-video-btn">
					<div class="video-btn">
						<a href="{{ route('contact') }}" class="video-popup">
							<i class="fas fa-play"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Credibility Strip -->
{{-- <section class="plan-four">
	<div class="container">
		<div class="plan-four-inner">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms">
					<div class="plan-four-details">
						<div class="plan-four-details-title">
							<i class="flaticon-global-network"></i>
							<h3>Canadian Network Infrastructure</h3>
						</div>
						<div class="plan-four-details-text">
							<p>Nationwide carrier-grade voice</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="100ms">
					<div class="plan-four-details">
						<div class="plan-four-details-title">
							<i class="flaticon-network"></i>
							<h3>Redundant Carrier Routing</h3>
						</div>
						<div class="plan-four-details-text">
							<p>Multiple paths, automatic failover</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="200ms">
					<div class="plan-four-details">
						<div class="plan-four-details-title">
							<i class="flaticon-24-hours"></i>
							<h3>99.99% Uptime</h3>
						</div>
						<div class="plan-four-details-text">
							<p>SLA-backed availability</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="300ms">
					<div class="plan-four-details">
						<div class="plan-four-details-title">
							<i class="flaticon-secure-shield"></i>
							<h3>Enterprise SLA Protection</h3>
						</div>
						<div class="plan-four-details-text">
							<p>Contract-backed guarantees</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}

<!-- Telecom Solutions Built for Growth -->
<section class="services-one">
    <div class="services-one-shape-1"></div>
    <div class="services-one-shape-2"></div>
    <div class="services-one-shape-3"></div>
    <div class="services-one-shape-4"></div>
	<div class="container">
		<div class="section-main-title text-center">
			<h2 class="mx-auto">Telecom Solutions Built for Growth</h2>
		</div>
		<p class="text-center mx-auto mb-5" style="max-width: 640px;">Ixica delivers scalable SIP trunking solutions designed for telecom providers, MSPs, and Canadian enterprises that demand performance, reliability, and long-term stability.</p>
		<div class="row g-4">
			<div class="col-lg-4 col-md-6">
				<div class="services-one-box h-100">
					<div class="services-one-icon">
						<i class="flaticon-fiber"></i>
					</div>
					<h3>Wholesale SIP Trunking</h3>
					<p>Carrier-grade SIP routing for ITSPs, telecom operators, and high-volume voice providers. Built for scale, redundancy, and competitive wholesale margins.</p>
					<div class="services-one-btn">
						<a href="{{ route('services.list') }}" class="btn-arrow-right">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="services-one-box h-100">
					<div class="services-one-icon">
						<i class="flaticon-tv"></i>
					</div>
					<h3>SIP Reseller Program</h3>
					<p>Partner with Ixica to expand your voice services with flexible pricing, dedicated support, and recurring revenue opportunities.</p>
					<div class="services-one-btn">
						<a href="{{ route('contact') }}?subject=partner" class="btn-arrow-right">Become a Partner</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="services-one-box h-100">
					<div class="services-one-icon">
						<i class="flaticon-energy-management"></i>
					</div>
					<h3>Enterprise SIP Solutions</h3>
					<p>Reliable SIP trunking for Canadian businesses operating mission-critical communications environments.</p>
					<div class="services-one-btn">
						<a href="{{ route('services.list') }}" class="btn-arrow-right">View Solutions</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Built on Reliable Canadian Infrastructure -->
<section class="services-faq">
	<div class="services-faq-shape-1"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="100ms">
				<div class="services-faq-left">
					<div class="section-main-title">
						<h2>Built on Reliable Canadian Infrastructure</h2>
					</div>
					<p class="mb-4">Ixica's voice network is engineered for performance and resilience. Our infrastructure is designed to support high-volume traffic, ensure call quality, and protect against service disruption.</p>
					<ul class="list-item">
						<li>
							<i class="icon-right-arrow"></i>
							<p>Multi-carrier interconnects</p>
						</li>
						<li>
							<i class="icon-right-arrow"></i>
							<p>Redundant routing architecture</p>
						</li>
						<li>
							<i class="icon-right-arrow"></i>
							<p>Automatic failover protection</p>
						</li>
						<li>
							<i class="icon-right-arrow"></i>
							<p>Scalable channel capacity</p>
						</li>
						<li>
							<i class="icon-right-arrow"></i>
							<p>Regulatory-compliant Canadian routing</p>
						</li>
					</ul>
					<p class="mb-0">We prioritize uptime, stability, and long-term telecom partnerships.</p>
					<div class="services-faq-left-btn mt-4">
						<a href="{{ route('contact') }}" class="btn btn-bg-primary">Learn More<i class="icon-1"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="100ms">
				<div class="services-faq-inner">
					<div class="accordion accordion-flush" id="accordionInfrastructure">
						<div class="accordion-item">
							<h6 class="accordion-header" id="infra-headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#infra-collapseOne" aria-expanded="true" aria-controls="infra-collapseOne">
									Multi-carrier interconnects
								</button>
							</h6>
							<div id="infra-collapseOne" class="accordion-collapse collapse show" aria-labelledby="infra-headingOne" data-bs-parent="#accordionInfrastructure">
								<div class="accordion-body">
									<p>Direct connections to multiple carriers for optimal call paths and resilience.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h6 class="accordion-header" id="infra-headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#infra-collapseTwo" aria-expanded="false" aria-controls="infra-collapseTwo">
									Redundant routing architecture
								</button>
							</h6>
							<div id="infra-collapseTwo" class="accordion-collapse collapse" aria-labelledby="infra-headingTwo" data-bs-parent="#accordionInfrastructure">
								<div class="accordion-body">
									<p>Multiple paths ensure traffic keeps flowing even if one route is affected.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h6 class="accordion-header" id="infra-headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#infra-collapseThree" aria-expanded="false" aria-controls="infra-collapseThree">
									Automatic failover protection
								</button>
							</h6>
							<div id="infra-collapseThree" class="accordion-collapse collapse" aria-labelledby="infra-headingThree" data-bs-parent="#accordionInfrastructure">
								<div class="accordion-body">
									<p>Systems automatically switch to backup routes to maintain service continuity.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h6 class="accordion-header" id="infra-headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#infra-collapseFour" aria-expanded="false" aria-controls="infra-collapseFour">
									Scalable channel capacity
								</button>
							</h6>
							<div id="infra-collapseFour" class="accordion-collapse collapse" aria-labelledby="infra-headingFour" data-bs-parent="#accordionInfrastructure">
								<div class="accordion-body">
									<p>Grow your channels as your traffic grows without re-architecting.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h6 class="accordion-header" id="infra-headingFive">
								<button class="accordion-button collapsed last" type="button" data-bs-toggle="collapse" data-bs-target="#infra-collapseFive" aria-expanded="false" aria-controls="infra-collapseFive">
									Regulatory-compliant Canadian routing
								</button>
							</h6>
							<div id="infra-collapseFive" class="accordion-collapse collapse" aria-labelledby="infra-headingFive" data-bs-parent="#accordionInfrastructure">
								<div class="accordion-body">
									<p>Voice traffic stays on Canadian infrastructure in line with regulatory requirements.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Serving High-Performance Industries -->
<section class="services-six">
	<div class="services-six-shape-1"></div>
	<div class="services-six-shape-2"></div>
	<div class="container">
		<div class="section-main-title text-center">
			<h2 class="mx-auto">Serving High-Performance Industries</h2>
		</div>
		<p class="text-center mx-auto mb-5" style="max-width: 640px;">Our SIP infrastructure supports organizations where communication reliability is critical to daily operations.</p>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 text-center wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="100ms">
				<div class="services-six-box">
					<h3>Law Firms</h3>
					<i class="flaticon-secure-shield"></i>
					<p>Secure and dependable voice routing for client communications.</p>
					<div class="services-six-btn">
						<a href="{{ route('services.list') }}" class="btn-read-more">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="200ms">
				<div class="services-six-box">
					<h3>Transportation</h3>
					<i class="flaticon-network"></i>
					<p>Reliable connectivity for dispatch and operational coordination.</p>
					<div class="services-six-btn">
						<a href="{{ route('services.list') }}" class="btn-read-more">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="300ms">
				<div class="services-six-box">
					<h3>Healthcare</h3>
					<i class="flaticon-heart"></i>
					<p>Stable voice infrastructure supporting essential services.</p>
					<div class="services-six-btn">
						<a href="{{ route('services.list') }}" class="btn-read-more">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="400ms">
				<div class="services-six-box">
					<h3>Education</h3>
					<i class="flaticon-efficiency"></i>
					<p>Scalable solutions for campuses and institutions.</p>
					<div class="services-six-btn">
						<a href="{{ route('services.list') }}" class="btn-read-more">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 text-center wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="500ms">
				<div class="services-six-box">
					<h3>Government</h3>
					<i class="flaticon-global-network"></i>
					<p>Carrier-grade routing built for regulatory and operational demands.</p>
					<div class="services-six-btn">
						<a href="{{ route('services.list') }}" class="btn-read-more">Learn More</a>
					</div>
				</div>
			</div>
		</div>
		<div class="services-six-bottom text-center">
			<p>Need industry-specific SIP solutions?
				<a href="{{ route('services.list') }}">Explore Industry Solutions</a>
			</p>
		</div>
	</div>
</section>

<!-- Why Telecom Providers Choose Ixica (deep charcoal for visual rhythm) -->
<section class="whychoose-one whychoose-one--charcoal">
    
	<div class="container">
		<div class="section-main-title text-center">
			<h2 class="mx-auto">Why Telecom Providers Choose Ixica</h2>
		</div>
		<div class="row">
			<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="100ms">
				<div class="whychoose-one-box">
					<i class="flaticon-global-network"></i>
					<div class="text">
						<h4>Canadian-based voice infrastructure</h4>
						<div>
							<a href="{{ route('services.list') }}" class="btn-read-more">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="200ms">
				<div class="whychoose-one-box">
					<i class="flaticon-price-tag"></i>
					<div class="text">
						<h4>Competitive wholesale pricing</h4>
						<div>
							<a href="{{ route('contact') }}?subject=wholesale" class="btn-read-more">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="300ms">
				<div class="whychoose-one-box">
					<i class="flaticon-efficiency"></i>
					<div class="text">
						<h4>Direct support from telecom engineers</h4>
						<div>
							<a href="{{ route('contact') }}" class="btn-read-more">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="400ms">
				<div class="whychoose-one-box">
					<i class="flaticon-rocket"></i>
					<div class="text">
						<h4>Fast provisioning and deployment</h4>
						<div>
							<a href="{{ route('contact') }}" class="btn-read-more">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="500ms">
				<div class="whychoose-one-box">
					<i class="flaticon-heart"></i>
					<div class="text">
						<h4>Long-term partnership model</h4>
						<div>
							<a href="{{ route('contact') }}" class="btn-read-more">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="600ms">
				<div class="whychoose-one-box">
					<i class="flaticon-secure-shield"></i>
					<div class="text">
						<h4>Infrastructure-focused reliability</h4>
						<div>
							<a href="{{ route('services.list') }}" class="btn-read-more">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p class="text-center lead whychoose-one__tagline mt-5 mb-0">We don't just provide SIP trunks — we build dependable telecom relationships.</p>
	</div>
</section>

@push('styles')
<style>
/* Deep charcoal section for stronger visual rhythm */
.whychoose-one--charcoal {
	background-color: #1a1a1a;
	padding-top: 130px;
	padding-bottom: 130px;
}
.whychoose-one--charcoal .section-main-title h2 {
	color: #fff;
	width: 100%;
	max-width: 720px;
}
.whychoose-one--charcoal .whychoose-one-box {
	background-color: #252525;
	border: 1px solid #333;
}
.whychoose-one--charcoal .whychoose-one-box:hover {
	border-color: var(--twonet-primery);
	background-color: #2a2a2a;
	box-shadow: 0 10px 40px rgba(0,0,0,0.3);
}
.whychoose-one--charcoal .whychoose-one-box .text h4 {
	color: #f5f5f5;
}
.whychoose-one--charcoal .whychoose-one-box .btn-read-more {
	color: #ccc;
}
.whychoose-one--charcoal .whychoose-one-box .btn-read-more:hover {
	color: var(--twonet-primery);
}
.whychoose-one--charcoal .whychoose-one-box .btn-read-more:hover::after {
	border-top-color: var(--twonet-primery);
	border-right-color: var(--twonet-primery);
}
.whychoose-one--charcoal .whychoose-one__tagline {
	color: #b0b0b0;
}

/* Brand/Partner Logo Section Styling */
.brand-one-inner-img {
	padding: 15px;
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100px;
	transition: opacity 0.3s ease;
}

.brand-one-inner-img a {
	display: block;
	width: 100%;
	text-align: center;
}

.brand-one-inner-img img {
	max-width: 100%;
	height: auto;
	max-height: 80px;
	width: auto;
	object-fit: contain;
	filter: grayscale(100%);
	opacity: 0.7;
	transition: all 0.3s ease;
}

.brand-one-inner-img:hover img {
	filter: grayscale(0%);
	opacity: 1;
	transform: scale(1.05);
}

@media (max-width: 991px) {
	.brand-one-inner-img {
		min-height: 80px;
		padding: 10px;
	}
	
	.brand-one-inner-img img {
		max-height: 60px;
	}
}

@media (max-width: 575px) {
	.brand-one-inner-img {
		min-height: 70px;
		padding: 8px;
	}
	
	.brand-one-inner-img img {
		max-height: 50px;
	}
}
</style>
@endpush

<!-- testimonial-one -->
<section class="testimonial-one">
	<div class="testimonial-one-shape"></div>
	<div class="container">
		<div class="testimonial-slider">
			<div class="testimonial-thumb">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="{{ asset('assets/images/resources/testimonial-one-img-1.png') }}" alt="Testimonial">
					</div>
					<div class="swiper-slide">
						<img src="{{ asset('assets/images/resources/testimonial-one-img-2.png') }}" alt="Testimonial">
					</div>
					<div class="swiper-slide">
						<img src="{{ asset('assets/images/resources/testimonial-one-img-3.png') }}" alt="Testimonial">
					</div>
				</div>
			</div>
			<div class="swiper testimonial-reviews">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="testimonial-one-info">
							<div class="star">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="testimonial-one-detais">
								<p>Ixica’s SIP trunking has been rock-solid for our ITSP. We switched for better Canadian routing and support — no regrets. Provisioning was fast and their team actually understands telecom.</p>
							</div>
							<ul class="testimonial-one-name">
								<li><i class="flaticon-quote"></i></li>
								<li>
									<h4>Telecom Partner</h4>
									<p>ITSP, Ontario</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-one-info">
							<div class="star">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="testimonial-one-detais">
								<p>We needed a carrier that could scale with our growth and keep voice quality high. Ixica delivered on both. Their redundant routing gives us the uptime our enterprise clients expect.</p>
							</div>
							<ul class="testimonial-one-name">
								<li><i class="flaticon-quote"></i></li>
								<li>
									<h4>Enterprise Customer</h4>
									<p>MSP, Western Canada</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-one-info">
							<div class="star">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="testimonial-one-detais">
								<p>Partnering with Ixica for our reseller program was the right move. Competitive wholesale pricing, clear SLAs, and engineers who respond. It’s a real partnership, not just a supplier.</p>
							</div>
							<ul class="testimonial-one-name">
								<li><i class="flaticon-quote"></i></li>
								<li>
									<h4>Reseller Partner</h4>
									<p>SIP Reseller</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</section>

<!-- Final CTA -->
<section class="cta-one">
	<div class="container">
		<div class="cta-one-shape"></div>
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="200ms">
				<div class="cta-one-img">
					<img src="{{ asset('assets/images/resources/cta-one-img.jpg') }}" alt="Ixica SIP infrastructure">
					<div class="cta-one-shape-2">
						<img src="{{ asset('assets/images/shapes/contact-one-shape-2.png') }}" alt="">
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="200ms">
				<div class="cta-one-info">
					<div class="section-title">
						<span>Get Started</span>
					</div>
					<div class="section-main-title">
						<h2>Ready to Scale Your <span class="section-main-title-primery">Voice Infrastructure?</span></h2>
					</div>
					<p class="mb-4">Partner with a Canadian carrier-focused SIP provider built for reliability, growth, and long-term performance.</p>
					<div class="theme-btn d-flex flex-wrap gap-3">
						<a href="{{ route('contact') }}?subject=wholesale" class="btn btn-bg-primary">Request Wholesale Pricing<i class="icon-1"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@extends('layouts.app')

@section('title', 'Home - Twoet')

@section('content')
<!-- banner-one -->
<section class="banner-one">
	<div class="banner-shape-1"></div>
	<div class="banner-shape-2"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 wow fadeInLeft animated"
				data-wow-duration="1500ms" data-wow-delay="100ms">
				<!-- banner-one-left -->
				<div class="banner-one-left">
					<!-- section-title -->
					<div class="section-title">
						<i class="icon-main-icon"></i>
						<span>15% Off For New Users</span>
					</div>
					<!-- section-main-title -->
					<div class="section-main-title">
						<h1>Faster & Reliable <strong> Quality</strong> <span> Internet</span>
							<strong>Provider</strong>
						</h1>
					</div>
					<!-- banner-one-left-details -->
					<div class="banner-one-left-details">
						<div class="banner-details-icon">
							<img src="{{ asset('assets/images/shapes/shape-1.png') }}" alt="shape-1">
						</div>
						<p>We Have <span> 5,26,384k+ </span> Register Users</p>
					</div>
					<!-- banner-one-btn -->
					<div class="theme-btn">
						<a href="{{ route('package') }}" class="btn btn-bg-primary">Explore Package<i class="icon-1"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
				<!-- banner-one-right -->
				<div class="banner-one-right">
					<div class="banner-one-right-img-1">
						<img class="wow fadeInRight animated" data-wow-duration="1500ms"
							data-wow-delay="100ms" src="{{ asset('assets/images/resources/banner-one-img-1.png') }}"
							alt="banner-img-1">
					</div>
					<div class="banner-one-right-img-2">
						<img class="wow fadeInRight animated" data-wow-duration="1500ms"
							data-wow-delay="200ms" src="{{ asset('assets/images/resources/banner-two-img-3.jpg') }}"
							alt="banner-img-3">
					</div>
					<div class="banner-one-right-img-3">
						<img class="wow fadeInRight animated" data-wow-duration="1500ms"
							data-wow-delay="500ms" src="{{ asset('assets/images/resources/banner-three-img-3.png') }}"
							alt="banner-img-1234">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- services-one -->
<section class="services-one">
	<div class="services-one-shape-1"></div>
	<div class="services-one-shape-2"></div>
	<div class="services-one-shape-3"></div>
	<div class="services-one-shape-4"></div>
	<div class="container">
		<!-- section-title -->
		<div class="section-title text-center">
			<i class="icon-main-icon"></i>
			<span>What We Offer</span>
		</div>
		<!-- section-main-title -->
		<div class="section-main-title text-center">
			<h2 class="mx-auto">Mediafy now comes <span class="section-main-title-primery">with an
					wide</span> array of other services.</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-lg-4 col-md-6 col-sm-12 text-center wow fadeInUp animated"
				data-wow-duration="1500ms" data-wow-delay="100ms">
				<!-- services-one-box -->
				<div class="services-one-box">
					<div class="services-one-icon">
						<i class="flaticon-fiber"></i>
					</div>
					<h3>Fiber Broadband</h3>
					<p>Sit amet consectetur. Pellentesque vel cursus magna proin enim odio ipsu vitae.
						pretium ultrices odio eu at cras.</p>
					<div class="services-one-btn">
						<a href="{{ route('services.list') }}" class="btn-arrow-right">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-lg-4 col-md-6 col-sm-12 text-center wow fadeInUp animated"
				data-wow-duration="1500ms" data-wow-delay="300ms">
				<!-- services-one-box -->
				<div class="services-one-box">
					<div class="services-one-icon">
						<i class="flaticon-tv"></i>
					</div>
					<h3>Satellite TV</h3>
					<p>Sit amet consectetur. Pellentesque vel cursus magna proin enim odio ipsu vitae.
						pretium ultrices odio eu at cras.</p>
					<div class="services-one-btn">
						<a href="{{ route('services.list') }}" class="btn-arrow-right">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-lg-4 col-md-12 col-sm-12 text-center wow fadeInUp animated"
				data-wow-duration="1500ms" data-wow-delay="600ms">
				<!-- services-one-box -->
				<div class="services-one-box">
					<div class="services-one-icon">
						<i class="flaticon-energy-management"></i>
					</div>
					<h3>Smart Broadband</h3>
					<p>Sit amet consectetur. Pellentesque vel cursus magna proin enim odio ipsu vitae.
						pretium ultrices odio eu at cras.</p>
					<div class="services-one-btn">
						<a href="{{ route('services.list') }}" class="btn-arrow-right">Read More</a>
					</div>
				</div>
			</div>
		</div>
		<!-- services-one-bottom -->
		<div class="services-one-bottom text-center">
			<p>Need Any Consultation's For New Services?
				<a href="{{ route('contact') }}">Contact Us</a>
			</p>
		</div>
	</div>
</section>
<!-- Note: Additional sections (about, package, video, whychoose, joinus, pricing, movies, testimonial, cta, blog, brand) would be added here -->
<!-- For now, this is a simplified version. You can add the remaining sections from the original HTML file -->
@endsection

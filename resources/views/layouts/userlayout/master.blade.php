<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Edulearn Education Category Bootstrap Responsive Website Template | Home :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Edulearn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<!-- Bootstrap-Core-Css -->
	<link rel="stylesheet" href="{{asset('userasset/css/bootstrap.css') }}">
	<!-- Testimonials-Css -->
	<link href="{{asset('userasset/css/mislider.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{asset('userasset/css/mislider-custom.css') }}" rel="stylesheet" type="text/css" />
	<!-- Style-Css -->
	<link rel="stylesheet" href="{{asset('userasset/css/style.css') }}" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-Css -->
	<link rel="stylesheet" href="{{asset('userasset/css/fontawesome-all.css') }}">

	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- header -->
  @include('layouts.userlayout.header')
	<!-- //header -->
			<!-- navigation -->
			<div class="navigation-w3ls">
			<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-nav">
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				 aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
					<ul class="navbar-nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link text-white" href="{{url('index')}}">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="{{url('aboutus')}}">About Us</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Courses
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="language.html">Language</a>
								<a class="dropdown-item" href="communication.html">Communication</a>
								<a class="dropdown-item" href="business.html">Business</a>
								<a class="dropdown-item" href="software.html">Software</a>
								<a class="dropdown-item" href="social_media.html">Social Media</a>
								<a class="dropdown-item" href="photography.html">Photography</a>
								<a class="dropdown-item" href="course_details.html">Course Details</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="form.html">Apply Now</a>
							</div>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="about.html">Instructors</a>
								<a class="dropdown-item" href="index.html">What We Do</a>
								<a class="dropdown-item active" href="login.html">Login</a>
								<a class="dropdown-item" href="register.html">Register</a>
								<a class="dropdown-item" href="404.html">404 Page</a>
								<a class="dropdown-item" href="coming_soon.html">Coming Soon</a>
								<a class="dropdown-item" href="form.html">Admission Form</a>
								<a class="dropdown-item" href="faq.html">Faq</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="blog.html">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="{{url('#')}}">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="#">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

@yield('content')
	<!-- //brands -->

	<!-- footer -->
	@include('layouts.userlayout.footer')
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="{{asset('userasset/js/jquery-2.2.3.min.js') }}"></script>
	<!-- Default-JavaScript-File -->
	<script src="{{asset('userasset/js/bootstrap.js') }}"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- banner slider -->
	<script src="{{asset('userasset/js/slider.js') }}"></script>
	<!-- //banner slider -->

	<!-- testimonial-plugin -->
	<script src="{{asset('userasset/js/mislider.js') }}"></script>
	<script>
		jQuery(function ($) {
			var slider = $('.mis-stage').miSlider({
				//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
				stageHeight: 320,
				//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
				slidesOnStage: false,
				//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
				slidePosition: 'center',
				//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
				slideStart: 'mid',
				//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
				slideScaling: 150,
				//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
				offsetV: -5,
				//  Center slide contents vertically - Boolean. Default: false
				centerV: true,
				//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
				navButtonsOpacity: 1,
			});
		});
	</script>
	<!-- //testimonial-plugin -->

	<!-- numscroller-js-file -->
	<script src="{{asset('userasset/js/numscroller-1.0.js') }}"></script>
	<!-- //numscroller-js-file -->

	<!-- smooth scrolling -->
	<script src="{{asset('userasset/js/SmoothScroll.min.js') }}"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="{{asset('userasset/js/move-top.js') }}"></script>
	<!-- easing -->
	<script src="{{asset('userasset/js/easing.js') }}"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="{{asset('userasset/js/edulearn.js') }}"></script>

	<!-- //Js files -->

</body>

</html>
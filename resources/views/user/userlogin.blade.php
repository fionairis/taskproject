@extends('layouts.userlayout.master')
@section('content')


	<!-- //header -->

	<!-- banner -->
	<div class="banner-agile-2">
		<!-- //navigation -->
	</div>
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Login Form</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- login -->
	<div class="login-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Login
				<span class="font-weight-bold">now</span>
			</h3>
			<!-- content -->
			<div class="sub-main-w3 pt-md-4">
				<form action="#" method="post">
					<div class="form-style-agile form-group">
						<label>
							Username
							<i class="fas fa-user"></i>
						</label>
						<input placeholder="Username" class="form-control" name="Name" type="text" required="">
					</div>
					<div class="form-style-agile form-group">
						<label>
							Password
							<i class="fas fa-unlock-alt"></i>
						</label>
						<input placeholder="Password" class="form-control" name="Password" type="password" required="">
					</div>
					<!-- switch -->
					<ul class="list-unstyled list-login">
						<li class="switch-agileits float-left">
							<label class="switch  text-capitalize">
								<input type="checkbox">
								<span class="slider-switch round"></span>
								keep me signed in
							</label>
						</li>
						<li class="float-right">
							<a href="#" class="text-right text-white text-capitalize">forgot password?</a>
						</li>
					</ul>
					<!-- //switch -->
					<input type="submit" value="Log In">
					<p class="text-center dont-do mt-4 text-white">Don't have an account?
						<a href="{{url('userregister')}}" class="text-white  font-weight-bold">
							Register Now</a>
					</p>
				</form>
			</div>
			<!-- //content -->
		</div>
	</div>
	<!-- //login -->







@endsection
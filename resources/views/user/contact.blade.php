@extends('layouts.userlayout.master')
@section('content')
<div class="banner-agile-2">
		
	</div>
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<div class="contact py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">contact
				<span class="font-weight-bold">us</span>
			</h3>
			<div class="row contact-grids agile-1 py-sm-5 pb-sm-0 pb-5">
				<div class="col-sm-4 contact-grid agileinfo-6 mt-sm-0 mt-2">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-map-marker-alt rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Address</h4>
						<p>1PO Box 8568954 California,
							<label>USA.</label>
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6 my-sm-0 my-4">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-phone rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Call Us</h4>
						<p>+(0121) 121 121
							<label>+(0121) 121 122</label>
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-envelope-open rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Email</h4>
						<p>
							<a href="mailto:info@example.com">info@example1.com</a>
							<label>
								<a href="mailto:info@example.com">info@example2.com</a>
							</label>
						</p>
					</div>
				</div>
			</div>
			<!-- form -->
			<form action="{{ url('submit') }}" method="post">{{ csrf_field() }}
				<div class="contact-grids1 w3agile-6">
					<div class="row">
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">First Name</label>
							<input type="text" class="form-control" name="first_name" placeholder="" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Last Name</label>
							<input type="text" class="form-control" name="last_name" placeholder="" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Subject</label>
							<input type="text" class="form-control" name="subject" placeholder="" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">E-mail</label>
							<input type="email" class="form-control" name="email" placeholder="" required="">
						</div>
					</div>
					<div class="contact-me animated wow slideInUp form-group">
						<label class="col-form-label">Message</label>
						<textarea name="message" class="form-control" placeholder="" required=""> </textarea>
					</div>
					<div class="contact-form">
						<input type="submit" value="submit">
					</div>
				</div>
			</form>
			<!-- //form -->
		</div>
	</div>
	<!-- //contact -->


	@endsection
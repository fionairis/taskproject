@extends('layouts.userlayout.master')
@section('content')

<head>
	<title>Register Form :: W3layouts</title>
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


</head>

<body>



<div class="banner-agile-2">
		<!-- navigation -->
	

	<!-- register -->
	<div class="login-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">register
				<span class="font-weight-bold">now</span>
			</h3>
			<!-- content -->
			<div class="sub-main-w3 pt-md-4">
				<form action="#" method="post">
					<div class="form-style-agile form-group">
						<label>
							Your Name
							<i class="fas fa-user"></i>
						</label>
						<input placeholder="Your Name" class="form-control" name="Name" type="text" required="">
					</div>
					<div class="form-style-agile form-group">
						<label>
							Email
							<i class="fas fa-envelope"></i>
						</label>
						<input placeholder="Email" class="form-control" name="Email" type="email" required="">
					</div>
					<div class="form-style-agile form-group">
						<label>
							Password
							<i class="fas fa-unlock-alt"></i>
						</label>
						<input placeholder="Password" class="form-control" name="Password" id="password1" type="password" required="">
					</div>
					<div class="form-style-agile form-group">
						<label>
							Confirm Password
							<i class="fas fa-unlock-alt"></i>
						</label>
						<input placeholder="Confirm Password" class="form-control" name="Confirm Password" id="password2" type="password" required="">
					</div>
					<!-- switch -->
					<ul class="list-unstyled list-login">
						<li class="switch-agileits float-left">
							<label class="switch  text-capitalize">
								<input type="checkbox">
								<span class="slider-switch slider-switch-2 round"></span>
								I Accept to the Terms & Conditions
							</label>
						</li>
					</ul>
					<!-- //switch -->
					<input type="submit" value="Register">
				</form>
			</div>
			<!-- //content -->
		</div>
	</div>
	<!-- //register -->




	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->



</body>

</html>
@endsection
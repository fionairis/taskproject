<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Signup :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<<link href="{{asset('adminasset/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('adminasset/css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{asset('adminasset/css/font-awesome.css') }}" rel="stylesheet"> 
<script src="{{asset('adminasset/js/jquery.min.js') }}"> </script>
<script src="{{asset('adminasset/js/bootstrap.min.js') }} "> </script>
</head>
<body>
<form class="form-vertical" role="form" method="post" action="{{ url('') }}">{{ csrf_field() }}
	<div class="login">
		<h1><a href="index.html">Minimal </a></h1>
		<div class="login-bottom">
			<h2>Register</h2>
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" placeholder="Email" name= "email" required="">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password"  name="password" required="">
					<i class="fa fa-lock"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Repeated password"   name="password" required="">
					<i class="fa fa-lock"></i>
				</div>
				  <a class="news-letter" href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>I agree with the terms</label>
					   </a>
	
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="Submit">
					</label>
					<p>Already register</p>
				<a href="signin.html" class="hvr-shutter-in-horizontal">Login</a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</form>
		<!---->
<div class="copy-right">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
	  
<!---->
<!--scrolling js-->
	<script src="{{asset('adminasset/js/jquery.nicescroll.js') }}"></script>
	<script src="{{asset('adminasset/js/scripts.js') }} "></script>
	<!--//scrolling js-->
</body>
</html>


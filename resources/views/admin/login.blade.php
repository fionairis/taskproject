<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Signin :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('adminasset/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('adminasset/css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{asset('adminasset/css/font-awesome.css') }}" rel="stylesheet"> 
<script src="{{asset('adminasset/js/jquery.min.js') }}"> </script>
<script src="{{asset('adminasset/js/bootstrap.min.js') }} "> </script>
</head>
<body>
	<div class="login">
		<h1><a href="index.html">WELCOME ADMIN!! </a></h1>
        
		<div class="login-bottom">
			<h2>Login</h2>



            @if(Session::has('flash_message_error'))
        <!-- {!! session('flash_message_error') !!} -->
        <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
       
        @endif
        @if(Session::has('flash_message_success'))
        <!-- {!! session('flash_message_success') !!} -->
        <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
       
        @endif
            
			<form class="form-vertical" role="form" method="post" action="{{ url('admin') }}">{{ csrf_field() }}
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" placeholder="Email" name= "email" required="">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" name="password" required="">
					<i class="fa fa-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					   </a>

			
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="login">
					</label>
					<p>Do not have an account?</p>
				<a href="signup.html" class="hvr-shutter-in-horizontal">Signup</a>
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
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


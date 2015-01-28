<?php
include('login.php');

if(isset($_SESSION['login_user'])){
	header("location: home.php");
}
?>
<!doctype html>
<html class="fixed">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="assets/stylesheets/theme.css" />
</head>
<body>
	<section class="body-sign">
		<div class="center-sign">
			<a href="http://preview.oklerthemes.com/" class="logo pull-left">
				<img src="assets/images/logo.png" height="54" alt="Porto Admin" />
			</a>
			
			<div class="panel panel-sign">
				<div class="panel-title-sign mt-xl text-right">
					<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
				</div>
				
				<div class="panel-body">
					<form action="login.php" method="post">
						<div style="text-align: center; color: red">
							<b><?php echo isset($_SESSION['login_error']) ? $_SESSION['login_error'] : "" ;?></b>
						</div>
						
						<div class="form-group mb-lg">
							<label for="name">Username</label>
							<div class="input-group input-group-icon">
								<input id="name" name="username" type="text" class="form-control input-lg" placeholder="Username" />
								<span class="input-group-addon">
									<span class="icon icon-lg">
										<i class="fa fa-user"></i>
									</span>
								</span>
							</div>
						</div>

						<div class="form-group mb-lg">
							<label for="password">Password</label>
							<div class="input-group input-group-icon">
								<input id="password" name="password" type="password" class="form-control input-lg" placeholder="Password" />
								<span class="input-group-addon">
									<span class="icon icon-lg">
										<i class="fa fa-lock"></i>
									</span>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-8">
								<div class="checkbox-custom checkbox-default">
									<input id="RememberMe" name="rememberme" type="checkbox"/>
									<label for="RememberMe">Remember Me</label>
								</div>
							</div>
							<div class="col-sm-4 text-right">
								<button name="submit" type="submit" class="btn btn-primary hidden-xs">Sign In</button>
							</div>
						</div>

						<span class="mt-lg mb-lg line-thru text-center text-uppercase">
							<span>or</span>
						</span>

						<div class="mb-xs text-center">
							<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
							<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
						</div>
					</form>
				</div>
			</div>
			
			<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2014. All Rights Reserved.</p>
		</div>
	</section>
</body>
</html>

<?php
session_destroy();
?>
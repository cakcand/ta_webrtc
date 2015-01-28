<?PHP
include("session.php");
?>

<!doctype html>
<html class="fixed">
<head>
	<meta charset="UTF-8">
	<title>Dashboard | Porto Admin - Responsive HTML5 Template 1.1.0</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="assets/stylesheets/theme.css" />
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css" />
	<link rel="stylesheet" href="assets/stylesheets/bootstrap-responsive.min.css" />

	<script src="js/firebaseVideo.js"></script>
	<!--<script src="js/online.js"></script>-->
	<script src="js/RecordRTC.js"></script>
	<script src="js/RTCMultiConnectionVideo.js"></script>
	<script src="assets/vendor/jquery/jquery.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<section class="body">
		<header class="header">
			<div class="logo-container">
				<a href="http://preview.oklerthemes.com/" class="logo">
					<img src="logo.png" height="40" alt="Porto Admin" />
				</a>
				<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>
		
			<div class="header-right">
				<button type="button" class="btn-9" style="background: #4AFF74" disabled><i class="fa fa-video-camera"></i> Video</button>
				&nbsp;&nbsp;
				<a href="homeAudio.php"><button type="button" class="btn-9"><i class="fa fa-volume-up"></i> Audio</button></a>
				
				<span class="separator"></span>
		
				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<figure class="profile-picture">
							<img src="assets/images/blank.png" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/%21logged-user.jpg" />
						</figure>
						<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
							<span class="name"><?php echo $_SESSION['login_user']; ?></span>
							<span class="role"><?php echo $_SESSION['user_status']; ?></span>
						</div>
		
						<i class="fa custom-caret"></i>
					</a>
		
					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<li>
								<a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off" id="logout"></i> Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
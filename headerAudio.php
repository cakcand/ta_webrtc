<?PHP
include("session.php");
?>

<!doctype html>
<html class="fixed">
	
<!-- Mirrored from preview.oklerthemes.com/porto-admin/1.1.0/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 24 Sep 2014 03:39:04 GMT -->
<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | Porto Admin - Responsive HTML5 Template 1.1.0</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />		<link rel="stylesheet" href="assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />
		<link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css" />
		<link rel="stylesheet" href="assets/stylesheets/bootstrap-responsive.min.css" />
		
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>
		
		<!-- for recording -->
		<script src="js/firebaseAudio.js"></script>
		
		<!-- for p2p streaming -->
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<!--<script src="js/online.js">-->
		
		<script src="js/RTCMultiConnectionAudio.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="http://preview.oklerthemes.com/" class="logo">
						<img src="logo.png" height="40" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
					<a href="home.php"><button type="button" class="btn-9"><i class="fa fa-video-camera"></i> Video</button></a>
					&nbsp;&nbsp;
					<button type="button" class="btn-9" style="background: #4AFF74" disabled><i class="fa fa-volume-up"></i> Audio</button>
					
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
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->
<?php 
include("header.php");
?>

	<script>
    document.createElement('article');
    document.createElement('footer');
    </script>
<!--
    <script src="js/RTCMultiConnection-v1.2.js"></script>
-->
			<div class="inner-wrapper">
				
				<section role="main" class="content-body">
					<header class="page-header">
						
					</header>
					<div class="row-fluid">
						
						
						<div class="col-md-3">
							<section class="panel">
								<header class="panel-heading">
									<h2 class="panel-title">User Online</h2>
									<p class="panel-subtitle"></p>
								</header>
								<div class="panel-body">
								<div class="widget-content">
									<div style="height:175px; width:100%; background:#fff">
									<div class="ganti">
									<?php
									include("online.php");
									?>
									</div>
									</div>
								</div>
								</div>								
							</section>	
							
							
							<section class="panel">
								<header class="panel-heading">
									<h2 class="panel-title">
									<!-- <a href="index.php?act=action1" id="open-session"><i class="fa fa-volume-up"></i></a>  
									<a href="index.php?act=action2" id="openRoom"><i class="fa fa-video-camera"></i></a> -->
									<i class="fa fa-volume-up"></i> Audio /
									<i class="fa fa-video-camera"></i> Video  Conference</h2>
								</header>
								<div class="panel-body">
								<div class="widget-content" >											
										<div style="height:175px; width:100%; background:#fff">
										<span id="videos-container" ></span>
						
										<section id="local-media-stream"></section>
										<!-- tawaran join room -->
										<table id="rooms-list"></table>
										<section id="remote-media-streams"></section>
	
								</div>
								</div>
								</div>
							</section>	
						</div>
						<div class="col-md-6 " >
							<section class="panel">
								<header class="panel-heading">
									<h2 class="panel-title">Presentasi</h2>
									<p class="panel-subtitle">
										<!--
										<a href="index.php?act=action1">Action 1 </a></br>
										<a href="index.php?act=action2">Action 2 </a></br>
										<a href="index.php?act=action3">Action 3 </a></br>
										-->
									</p>
								</header>
								<div class="panel-body">
								<div class="widget-content">
									<div style="height:400px; width:100%; background:#fff">
																				
									<?php
									//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
									//if($_GET["act"]=="action1"){
										//echo "Action 1 <br>";
										//}
									//else if($_GET["act"]=="action2"){
										//echo "Action 2 <br>";
										//}
									//else if($_GET["act"]=="action3"){
										//echo "Action 3 <br>";
										//}
									?>
									</div>
								</div>
								
								</div>
							
							<div class="col-md-12 bnt-grp-4">
								<ul class="gp-4">
								<li><button type="button" class="btn-4" id="joinRoom" >Join Room</button></li>
								<li><button type="button" class="btn-4" id="shareScreen" disabled="">Share Screen</button></li>
								<li><button type="button" class="btn-4" id="recordAudioVideo" disabled="">Record Vids</button></li>
								</ul>
							</div>
												
							</section>
						</div>
						<div class="col-md-3">
							<section class="panel">
								<header class="panel-heading">
									<h2 class="panel-title">Chating</h2>
									<p class="panel-subtitle"></p>
								</header>
								<div class="panel-body">
								<div class="widget-content">
									<?php if(!isset($_GET["video"])){?>
									<div style="height:460px; width:100%; background:#fff">
										<h2 style="margin:10px;display: block; font-size: 1em; text-align: center;">Share Files</h2>
										<input style="margin:10px" type="file" id="file" disabled>
										<div style="overflow:auto;width:100%;height:350px;padding:0px;border:1px solid #eee"> 
											<div style="margin:10px"id="chat-output"></div>
										</div>
										<textarea id="chat-input" style="font-size: 1.2em; width:100%" placeholder="chat message" disabled></textarea>
									</div>
									<?php } else if($_GET["video"]=="ada"){?>
									<div style="height:460px; width:100%; background:#55ff78" id="videos-container">
									
									
									</div>
									<?php } ?>
								</div>
								
								</div>
							</section>	
						</div>
				
					</div>
					
					<!-- script audio dan chat -->
					<script src="js/audiovideo.js"></script>
					<!-- script video,screen,record -->
					<script src="js/videogab.js"></script>
				
				</section>
			</div>
		<?php include ("sidebar_right.php");?>	
		</section>
		
     

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>		
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="assets/vendor/jquery-cookie/jquery.cookie.js"></script>		<script src="assets/vendor/style-switcher/style.switcher.js"></script>		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->		
		<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>		<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>		<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>		<script src="assets/vendor/flot/jquery.flot.js"></script>		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>		<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>		<script src="assets/vendor/raphael/raphael.js"></script>		<script src="assets/vendor/morris/morris.js"></script>		<script src="assets/vendor/gauge/gauge.js"></script>		<script src="assets/vendor/snap-svg/snap.svg.js"></script>		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>

<!-- Mirrored from preview.oklerthemes.com/porto-admin/1.1.0/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 24 Sep 2014 03:40:48 GMT -->
</html>
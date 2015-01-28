<?php 
include("header.php");
?>

	<script>
		document.createElement('article');
		document.createElement('footer');
		
		var username = "<?php echo $_SESSION['login_user'];?>";
		var user_status = "<?php echo $_SESSION['user_status'];?>";
    </script>

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
								<h2 class="panel-title">Video</h2>
							</header>
							<div class="panel-body">
								<div class="widget-content" >											
									<div id="videos-container" style="height:175px; width:100%; background:#fff">
									
									</div>
								</div>
							</div>
						</section>	
					</div>
					<div class="col-md-6 " >
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title">Presentation</h2>
								<p class="panel-subtitle">
									
								</p>
							</header>
							<div class="panel-body">
								<div class="widget-content">
									<div id="screen-container" style="height:400px; width:100%; background:#fff">
									
									</div>
								</div>
							</div>
							<div class="col-md-12 bnt-grp-4">
								<ul class="gp-4">
								<?php if($_SESSION['user_status'] == 'dosen'):?>
									<li>
										<button type="button" class="btn-4" id="openRoom">Create Room</button>
										<button type="button" class="btn-4" id="joinRoom" style="display:none">Join Room</button>
									</li>
									<li>
										<button type="button" class="btn-4" id="closeRoom" style="display:none">Close Room</button>
									</li>
									<li><button type="button" class="btn-4" id="shareScreen" disabled="">Share Screen</button></li>
									<li><button type="button" class="btn-4" id="recordScreen" disabled="">Record Screen</button></li>
									<li><button type="button" class="btn-4" id="recordAudioVideo" disabled="">Record Video</button></li>
								<?php else:?>
									<li>
										<button type="button" class="btn-4" id="openRoom" style="display:none">Create Room</button>
										<button type="button" class="btn-4" id="joinRoom" >Join Room</button>
									</li>
									<li><button type="button" class="btn-4" id="shareScreen" disabled="" style="display:none">Share Screen</button></li>
									<li><button type="button" class="btn-4" id="recordScreen" disabled="">Record Screen</button></li>
									<li><button type="button" class="btn-4" id="recordAudioVideo" disabled="">Record Video</button></li>
								<?php endif;?>
								</ul>
							</div>		
						</section>
					</div>
					<div class="col-md-3">
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title">Chat</h2>
								<p class="panel-subtitle"></p>
							</header>
							<div class="panel-body">
								<div class="widget-content">
									<div style="height:470px; width:100%; background:#fff">
										<div style="overflow:auto;width:100%;height:400px;padding:0px;border:1px solid #eee"> 
											<div style="margin:10px"id="chat-output"></div>
										</div>
										<br/>
										<textarea id="chat-input" style="font-size: 1.2em; width:100%" placeholder="chat message" disabled></textarea>
									</div>
								</div>
							</div>
						</section>	
					</div>
				</div>
			</section>
		</div>
	<?php include ("sidebar_right.php");?>	
	</section>
	
	<script src="js/video.js"></script>
</body>
</html>
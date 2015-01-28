<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="index.html">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									
									<li class="nav-parent">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Pages</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="pages-signup.html">
													 Sign Up
												</a>
											</li>
											<li>
												<a href="pages-signin.html">
													 Sign In
												</a>
											</li>
											
											<li>
												<a href="pages-404.html">
													 404
												</a>
											</li>
											<li>
												<a href="pages-500.html">
													 500
												</a>
											</li>
											<li>
												<a href="pages-log-viewer.html">
													 Log Viewer
												</a>
											</li>
										</ul>
									</li>
									
								</ul>
							</nav>
				
							<hr class="separator" />
						<div class="sidebar-widget widget-stats">
								<div class="widget-header">
									<h6>Video Conferance</h6>
								</div>
								<a href="index.php?video=ada">video</a>
								<div class="widget-content">
									<?php if(!isset($_GET["video"])){?>
									<div style="height:150px; width:100%; background:#fff"></div>
									<?php } else if($_GET["video"]=="ada"){?>
									<div style="height:150px; width:100%; background:#55ff78">
									
									
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->
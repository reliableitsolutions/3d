<?php
$page = basename($_SERVER['PHP_SELF']); /* Returns The Current PHP File Name */

?>
<header class="header_s1">
			<!-- SidePanel -->
			<div id="slidepanel">
				<!-- Top Header -->
				<div class="container-fluid top-header">
					<!-- Container -->
					<div class="container">
						<ul class="header-social">
							<li><a href="#" title="Facebbok"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title="Google"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<div class="contact-block">
							<p><i class="icon icon-Phone2"></i> <a href="tel:1234-678-9011" title="1234-678-9011">+1 (416) 388-9445</a></p>
							<p><i class="icon icon-Mail"></i> <a href="mailto:electric23d@gmail.com" title="electric23d@gmail.com">electric23d@gmail.com</a></p>
							<p><i class="icon icon-Time"></i><a href="">Monday - Saturday 9:00 - 18:00</a></p>
						</div>
					</div><!-- Container /- -->
				</div><!-- Top Header /- -->
			</div><!-- SidePanel /- -->
			
			<!-- Ownavigation -->
			<nav class="navbar ownavigation">
				<!-- Container -->
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html"><img src="assets/images/logo1.png" width="86px" height="76px" alt="logo"></a>
					</div>
					
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li <?php if($page == "index.php"){ echo "class='active'";} ?>>
								<a href="index.php" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
								
							</li>
							<li <?php if($page == "about.php"){ echo "class='active'";} ?>><a href="about.php" title="About">About</a></li>
							
							<li class="dropdown <?php if($page == "services.php" || $page == "industrial-services.php" || $page =="residential-services.php" || $page == "commercial-services.php" || $page == "renewable-services.php"){ echo "active";} ?> ">
								<a href="services.php" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a href=industrial-services.php title="Industrial">Industrial</a></li>
									<li><a href="residential-services.php" title="Residential">Residential</a></li>
									<li><a href="commercial-services.php" title="Commercial">Commercial</a></li>
									<li><a href="renewable-services.php" title="Renewable Energy">Renewable Energy</a></li>
								</ul>
							</li>
							
							<li <?php if($page == "gallery.php"){ echo "class='active'";} ?>>
								<a href="gallery.php" class="dropdown-toggle" title="Pages" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
								
							</li>
							<li <?php if($page == "contact-us.php"){ echo "class='active'";} ?>><a href="contact-us.php" title="Contact">Contact</a></li>
						</ul>
					</div>
					
				</div><!-- Container /- -->
			</nav><!-- Ownavigation /- -->
			
			<!-- Search Box -->
			
			
		</header>
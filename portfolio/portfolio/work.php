
<?php

					include'php/connexion.php';
					$pdo = $cnx;
					$sql = "SELECT * FROM items";
					$resultat = $pdo->query($sql);

?>
<!DOCTYPE html>

<html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Work portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	
	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/icomoon.css">
	
	<link rel="stylesheet" href="css/bootstrap.css">
	
	
	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">


	
	<script src="js/modernizr-2.6.2.min.js"></script>
	

	</head>
	<body>

	<nav id="fh5co-main-nav" role="navigation">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
		
		<div class="js-fullheight fh5co-table">
			<div class="fh5co-table-cell js-fullheight">
				<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="images/cutmypic.png" alt="" style="margin-bottom: 40px;">
				<h1 class="text-center"><a class="fh5co-logo" href="index.html">Mohamed Tahar Mazizi</a></h1>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="work.php">work</a></li>
					
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<p class="fh5co-social-icon">
					<a href="https://twitter.com/tahar_mazizi" target="_blank "><i class="icon-twitter2"></i></a>
					<a href="https://www.facebook.com/taharmazizi" target="_blank "><i class="icon-facebook2"></i></a>
					<a href="https://www.instagram.com/med.tahar.mazizi/?hl=en" target="_blank "><i class="icon-instagram"></i></a>
					<a href="https://www.linkedin.com/in/med-tahar-mazizi-813577161/" target="_blank"><i class="icon-linkedin2"></i></a>
					
				</p>
			</div>
		</div>
	</nav>
	
	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<div class="row">
						<div class="col-xs-6">
							<h1 class="text-left"><a class="fh5co-logo" href="index.html"><span>Portfolio</span> Med Tahar Mazizi <span>Web Developer </span></a></h1>
						</div>
						<div class="col-xs-6">
							<p class="fh5co-social-icon text-right">
								<a href="https://twitter.com/tahar_mazizi" target="_blank "><i class="icon-twitter2"></i></a>
					<a href="https://www.facebook.com/taharmazizi" target="_blank "><i class="icon-facebook2"></i></a>
					<a href="https://www.instagram.com/med.tahar.mazizi/?hl=en" target="_blank "><i class="icon-instagram"></i></a>
					<a href="https://www.linkedin.com/in/med-tahar-mazizi-813577161/" target="_blank"><i class="icon-linkedin2"></i></a>
				
							</p>
						</div>
					</div>
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				</div>
			</div>
		</header>
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url(images/web-project.png);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<span>Finished Projects</span>
			   						<h2>My Work</h2>
			   						<p class="fh5co-lead">Your satisfaction is my success <i class="icon-heart3"></i> </a></p>
			   					</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>


		<div id="fh5co-work-section" class="fh5co-work-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="work" style="background-image: url(images/clock.png);">

							<a href="project/clock/index.html" target="_blank " class="view">

								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-8 text-center animate-box">
						<div class="work" style="background-image: url(images/speach.PNG);">
							<a href="project/click/index.html" target="_blank " class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-7 text-center animate-box">
						<div class="work" style="background-image: url(images/game.png);">
							<a href="project/4096/index.html" target="_blank " class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-5 text-center animate-box">
						<div class="work" style="background-image: url(images/count.png);">
							<a href="project/count/index.html" target="_blank " class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<div id="fh5co-work-section" class="fh5co-work-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="work" style="background-image: url(images/clock.png);">
							<a href="project/clock/index.html" target="_blank " class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-8 text-center animate-box">
						<div class="work" style="background-image: url(images/click.png);">
							<a href="project/click/index.html" target="_blank " class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-7 text-center animate-box">
						<div class="work" style="background-image: url(images/band.png);">
							<a href="project/band/index.html" target="_blank " class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-5 text-center animate-box">
						<div class="work" style="background-image: url(images/add.png);">
							<a href="project/add-itemes/index.html" target="_blank " class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-work-section" class="fh5co-work-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="work" style="background-image: url(images/GRID.PNG);">
							<a href="project/css-grid/index.html" target="_blank " class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-8 text-center animate-box">
						<div class="work" style="background-image: url(images/donat.png);">
							<a href="project/donat/index.html" target="_blank" class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<!-- <div class="col-md-7 text-center animate-box">
						<div class="work" style="background-image: url(images/animation.png);">
							<a href="project/animation/index.html" target="_blank"  class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-5 text-center animate-box">
						<div class="work" style="background-image: url(images/flex.png);">
							<a href="project/flex/index.html" target="_blank"  class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div> -->
					
					
					<?php foreach($resultat as $itemD):?>
						<div class="col-md-5 text-center animate-box">	
						<!-- <div class='work' style='background-image: url('.$roww['image'].');'>'; -->

						<div class="work" style="background-image: url(images/<?= $itemD['img'];?>) ;"> 

						<!-- <a href="project/'.$roww['title'].'/index.html" target="_blank"  class="view">; -->

						<a href="project/<?=$itemD['title']; ?>" target="_blank"  class="view">
						<span>View Demo</span>
						</a>	
						 </div>
						 </div>

					
					<?php endforeach;?>



						 











				</div>
			</div>
		</div>

		<div class="fh5co-counters" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
			<div class="fh5co-narrow-content animate-box">
				<div class="row" >
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="23" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Project</span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="17" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Clients</span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="17" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Satisfied Client</span>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row " style="display: flex; justify-content: space-between;">
						<div class="col-md-3">
							<h3 class="section-title">About Me</h3>
							<p>Since beginning my journey as a freelance designer nearly 8 years ago, I've done remote work for agencies, consulted for startups, and collaborated with talented people to create digital products for both business and consumer use.</p>
						</div>
						
						<div class="col-md-3 col-md-push-1">
							<h3 class="section-title">Links</h3>
							<ul>
								<li><a href="index.php">Home</a></li>
					<li><a href="work.php">work</a></li>
					
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>

						
						<div class="col-md-3 " >
							<h3 class="section-title">Newsletter</h3>
							<p>Subscribe for my newsletter</p>
							<form class="form-inline" id="fh5co-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Enter your email">
											<button type="submit" class="btn btn-default"><i class="icon-paper-plane"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icon">
								<a href="https://twitter.com/tahar_mazizi" target="_blank "><i class="icon-twitter2"></i></a>
								<a href="https://www.facebook.com/taharmazizi" target="_blank "><i class="icon-facebook2"></i></a>
								<a href="https://www.instagram.com/med.tahar.mazizi/?hl=en" target="_blank "><i class="icon-instagram"></i></a>
								<a href="https://www.linkedin.com/in/med-tahar-mazizi-813577161/" target="_blank"><i class="icon-linkedin2"></i></a>
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- Main JS  -->
	<script src="js/main.js"></script>

	</body>
</html>


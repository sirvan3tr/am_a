<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
	<!-- Basic Page Needs
	 ================================================== -->
	<meta charset="utf-8">
	<title>AM Accountancy Services</title>
	<!-- Mobile Specific
	 ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
	 ================================================== -->
	<link rel="stylesheet" type="text/css"  href="css/style.css">
	<!-- Java Script
	 ================================================== -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/flexslider_slide.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/ender.min.js"></script>
	<script src="js/selectnav.js"></script>
	<script src="js/imagebox.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/twitter.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/effects.js"></script>
</head>
<body>
<!-- Header -->
<div id="header">
	<!-- 960 Container Start -->
	<div class="container ie-dropdown-fix">
		<!-- Logo -->
		<div class="four columns">
			<a href="index.php" title="AM Accountancy Services Home"><img src="images/logo.jpg" alt="AM Accountancy Services Home"/></a>
		</div>
		<!-- Main Navigation Start -->
		<div class="twelve columns">
			<div id="navigation">
				<ul id="nav">
					<li><a <?php if ($current=="home") {echo 'id="current"';} ?>href="index.php">Home</a></li>
					<li><a <?php if ($current=="about") {echo 'id="current"';} ?>href="about.php">About</a></li>
					<li><a <?php if ($current=="services") {echo 'id="current"';} ?>href="services.php">Services</a></li>
					<li><a <?php if ($current=="contact") {echo 'id="current"';} ?>href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div><!-- Main Navigation End -->
	</div><!-- 960 Container End -->
</div><!-- End Header -->
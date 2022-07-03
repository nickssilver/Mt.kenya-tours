<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>mt.kenya tours</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />

	  <!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">

		<!-- Flexslider  -->
		<link rel="stylesheet" href="css/flexslider.css">

		<!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">

		<!-- Date Picker -->
		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<!-- Flaticons  -->
		<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

		<!-- Theme style  -->
		<link rel="stylesheet" href="css/style.css">

		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->

		<script src="js/respond.min.js"></script>



</head>
<body>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">Mt.kenya Tours</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="package-list.php">packages</a></li>

								<li><a href="services.php">Services</a></li>

								<li class="active"><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
									<li class="has-dropdown">
										<a href="#">signing</a>
									<ul class="dropdown">
										<li><a href="admin/index.php">admin</a></li>
										<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal"  >Sign Up</a></li>
										<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >Sign In</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>welcome</h2>
				   					<h1>Mt.kenya is such an amazing place to be</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/cover2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>mt.kenya is the 2nd tallest mountain in africa and prides of several great tourist sites around it with a majority of tourists visiting  to climb the mountain.</h2>
				   					<h1>around mt.kenya region</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/cover3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>embrace our spirit</h2>
				   					<h1>more magic is coming</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/cover4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Experience the</h2>
				   					<h1>Best Trip Ever</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-tour colorlib-light-green">
			<div id= "aboutus" class="container">
				<div class="alert alert-success"><center><h3>VISION</h3></center></div>

						<h4 style = "text-indent:50px;">Excellence in producing highly skilled, well qualified and globally competitive Information Technology Education(ITE) graduation</h4>
						<br />


					<div class="alert alert-success" ><center><h3>MISSION</h3></center></div>
						<h4 style = "text-indent:50px;">Committed to provide affordable and high quality education for the training and development of ITE professionals equipped with the technological knowledge and skills responsive to the demands of both local and international communities</h4>
						<br />

						<div class="alert alert-success"><center><h3>OBJECTIVE</h3></center></div>
							<ol>
								<li><h4>Possess knowledge and skills that would prepare graduate in computing professions who are well versed on application, installation, operation, development, maintenance and administration of IT systems</h4></li>
								<li><h4>Prepare student to be IT professionals and be expert on design and implementation of Information Systems for business processes</h4></li>
								<li><h4>Be proficient in designing and developing computing solutions</h4></li>
								<li><h4>Manifest interpersonal, communications, and leadership skills through significant curricular, co-curricular and extra-curricular activities</h4></li>
								<li><h4>Virtues social consciousness through active participation in research, extension and professional organization</h4></li>
							</ol>
							</div>
						</div>
					</div>
				</div>

        <!-- jQuery -->
				<script src="js/jquery.min.js"></script>
				<!-- jQuery Easing -->
				<script src="js/jquery.easing.1.3.js"></script>
				<!-- Bootstrap -->
				<script src="js/bootstrap.min.js"></script>
				<!-- Waypoints -->
				<script src="js/jquery.waypoints.min.js"></script>
				<!-- Flexslider -->
				<script src="js/jquery.flexslider-min.js"></script>
				<!-- Owl carousel -->
				<script src="js/owl.carousel.min.js"></script>
				<!-- Magnific Popup -->
				<script src="js/jquery.magnific-popup.min.js"></script>
				<script src="js/magnific-popup-options.js"></script>
				<!-- Date Picker -->
				<script src="js/bootstrap-datepicker.js"></script>
				<!-- Stellar Parallax -->
				<script src="js/jquery.stellar.min.js"></script>
				<!-- Main -->
				<script src="js/main.js"></script>
			<?php include('includes/footer.php');?>
			<!-- signup -->
			<?php include('includes/signup.php');?>
			<!-- //signu -->
			<!-- signin -->
			<?php include('includes/signin.php');?>
			<!-- //signin -->
			<!-- write us -->
			<?php include('includes/write-us.php');?>
			<!-- //write us -->
</body>
</html>

<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sql="INSERT INTO contact(firstname,lastname,email,subject,message) VALUES(:fname,:lname,:email,:subject,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':subject',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Thanks for contacting us";
}
else
{
$error="Something went wrong";
}

}
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
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


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
								<li  ><a href="package-list.php">packages</a></li>

								<li><a href="services.php">Services</a></li>

								<li><a href="about.php">About</a></li>
								<li class="active"><a href="contact.php">Contact</a></li>
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
		<div id="colorlib-contact">
					<div class="container" >
						<div class="row">
							<div class="col-md-10 col-md-offset-1 animate-box">
								<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<h3>Get In Touch</h3>
								<form action="" method="post">
									<div class="row form-group">
										<div class="col-md-6 padding-bottom">
											<label for="fname">First Name</label>
											<input type="text" id="firstname" name="fname" class="form-control" placeholder="Your firstname"required="">
										</div>
										<div class="col-md-6">
											<label for="lname">Last Name</label>
											<input type="text" id="lastname"name="lname" class="form-control" placeholder="Your lastname"required="">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<label for="email">Email</label>
											<input type="text" id="email" name="email"class="form-control" placeholder="Your email address" required="">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<label for="subject">Subject</label>
											<input type="text" id="subject" name="subject"class="form-control" placeholder="Your subject of this message" required="">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<label for="message">Message</label>
											<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" required=""></textarea>
										</div>
									</div>
									<div class="form-group text-center">
							<input type="submit"name="submit" value="Send Message" class="btn btn-primary">
						</div>

								</form>
							</div>
							<div class="col-md-10 col-md-offset-1 animate-box">
								<h3>Contact Information</h3>
								<div class="row contact-info-wrap">
									<div class="col-md-3">
										<p><span><i class="icon-location"></i></span> tom mboya Street, <br> hart towers 721 nairobi,kenya</p>
									</div>
									<div class="col-md-3">
										<p><span><i class="icon-phone3"></i></span> <a href="tel://254720287104">+254720287104</a></p>
									</div>
									<div class="col-md-3">
										<p><span><i class="icon-paperplane"></i></span> <a href="mailto:silvernicks9@gmail.com">silvernicks9@gmail.com</a></p>
									</div>
									<div class="col-md-3">
										<p><span><i class="icon-globe"></i></span> <a href="#">mt.kenya.com</a></p>
									</div>
								</div>

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

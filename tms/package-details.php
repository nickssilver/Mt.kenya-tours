<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$guest=$_POST['guest'];
$payment=$_POST['payment'];
$comment=$_POST['comment'];
$status=0;
$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,guest,payment,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:guest,:payment,:comment,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':guest',$guest,PDO::PARAM_STR);
$query->bindParam(':payment',$payment,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Booked Successfully";
}
else
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
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
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


</head>
<body>
	<?php if($_SESSION['login'])
{?>

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
								<li class="hm"><a href="index.php">Home<i class="fa fa-home"></i></a></li>
							<li class="prnt"><a href="profile.php">My Profile</a></li>
								<li class="prnt"><a href="change-password.php">Change Password</a></li>
							<li><a href="tour-history.php">My Tour History</a></li>
								<li class="active"><a href="tour-history.php">packages</a></li>
							<li class="prnt"><a href="issuetickets.php">Issue Tickets</a></li>
							<li><a href="#" data-toggle="modal" data-target="#myModal3">complains </a>  </li>
							<li class="tol">Welcome :</li>
							<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li>
							<li class="sigi"><a href="logout.php" >/ Logout</a></li>


					<?php } else {?>

				<?php }?>
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
</div>
<?php if($_SESSION['login'])
{?>
<?php } else { ?>
<?php } ?>
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">
	<div class="room-bottom">
		<aside>
		  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
<?php
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<form name="book" method="post" >

		<div class="selectroom_middle">
			<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
			</div>
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h3>Package Details</h3>
						<p style="padding-top: 1%">
				<h2><?php echo htmlentities($result->PackageName);?></h2>
				<?php echo htmlentities($result->PackageDetails);?> </p>
				<p class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p>
				<p><b>Package Type :</b> <?php echo htmlentities($result->PackageType);?></p>
				<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</br>
				<div class="col-md-2">
						<div class="form-group">
							<label for="date">Check-in:</label>
							<div class="form-field">
								<i class="icon icon-calendar2"></i>
								<input type="text" id="#dpd1" class="form-control date" placeholder="Check-in date">
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="date">Check-out:</label>
							<div class="form-field">
								<i class="icon icon-calendar2"></i>
								<input type="text" id="#dpd2" class="form-control date" placeholder="Check-out date">
							</div>
						</div>
					</div>
											 <div class="col-md-3">
												 <div class="form-group">
													 <label for="guests">Guest</label>
													 <div class="form-field">
														 <i class="icon icon-arrow-down3"></i>
														 <input name="guest" id="guest" class="form-control"placeholder="guests" name="todate" required="">

													 </div>
												 </div>


				<div class="grand">
					<p>Grand Total</p>
					<h3>ksh.<?php echo htmlentities($result->PackagePrice);?></h3>
				</div>
			</div>

				<div class="clearfix"></div>
		</div>
		<div class="selectroom_top">
				 <div class="col-md-3">
			<li class="spe">
				<label class="inputLabel">Transaction No</label>
				<input class="special" type="text" name="payment" required="">
			</li>
		</div>
<br>
			<div class="col-md-3">
					<li class="spe">
						<label class="inputLabel">Comment</label>
						<input class="special" type="text" name="comment" required="">
					</li>
				</div>
					<?php if($_SESSION['login'])
					{?>
						<br>
						<div class="col-md-12">
							<ul>
						<li class="spe" align="center">
					<button type="submit" name="submit2" class="btn-primary btn">Book</button>
						</li>
						<?php } else {?>
							<li class="sigi" align="center" style="margin-top: 1%">
							<a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Book</a></li>
							<?php } ?>
					<div class="clearfix"></div>
				</ul>
			</div>
			</div>
						</div>
		</div>
		</form>
<?php }} ?>


	</div>
</div>
						</aside>
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
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
    <script src="js/main.js"></script>

<!--- /selectroom ---->
<<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>

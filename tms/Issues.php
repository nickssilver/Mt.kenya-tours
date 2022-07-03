<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{
header('location:index.php');
}
else{
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
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
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
							<li class="prnt"><a href="tour-history.php">My Tour History</a></li>
							<li class="active"><a href="Issues.php">Issues</a></li>
							<li ><a href="#" data-toggle="modal" data-target="#myModal3">complains </a></li>
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
<!-- <li><a href="enquiry.php"> Enquiry </a>  </li> -->
<?php } ?>
<div class="banner-1 ">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">TMS-Tourism Management System</h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- privacy ---->
<div class="privacy">
	<div class="container">
		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Issue Tickets</h3>
		<form name="chngpwd" method="post" onSubmit="return valid();">
		 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
	<p>
	<table border="1" width="100%">
<tr align="center">
<th>#</th>
<th>Ticket Id</th>
<th>Issue</th>
<th>Description</th>
<th>Admin Remark</th>
<th>Reg Date</th>
<th>Remark date</th>

</tr>
<?php

$uemail=$_SESSION['login'];;
$sql = "SELECT * from tblissues where UserEmail=:uemail";
$query = $dbh->prepare($sql);
$query -> bindParam(':uemail', $uemail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
<tr align="center">
<td ><?php echo htmlentities($cnt);?></td>
<td width="100">#TKT-<?php echo htmlentities($result->id);?></td>
<td><?php echo htmlentities($result->Issue);?></td>
<td width="300"><?php echo htmlentities($result->Description);?></td>
<td><?php echo htmlentities($result->AdminRemark);?></td>
<td width="100"><?php echo htmlentities($result->PostingDate);?></td>
<td width="100"><?php echo htmlentities($result->AdminremarkDate);?></td>
</tr>
<?php $cnt=$cnt+1; }} ?>
	</table>

			</p>
			</form>


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
</body>
</html>
<?php } ?>


  <?php if($_SESSION['login'])
{?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="profile.php">My Profile</a></li>
				<li class="prnt"><a href="change-password.php">Change Password</a></li>
			<li class="prnt"><a href="tour-history.php">My Tour History</a></li>
			<li class="prnt"><a href="issuetickets.php">Issue Tickets</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
			<li class="tol">Welcome :</li>
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li>
			<li class="sigi"><a href="logout.php" >/ Logout</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>

<?php }?>

<!--- footer-btm ---->

<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<!-- <span class="icon-bar"></span>
					<span class="icon-bar"></span> -->
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">

							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
								<li><a href="package-list.php">Tour Packages</a></li>
								<li><a href="services.php">services</a></li>
								<li><a href="contact.php">Contact</a></li>
								<?php if($_SESSION['login'])
{?>
								<li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li>
								<?php } else { ?>
								<!-- <li><a href="enquiry.php"> Enquiry </a>  </li> -->
								<?php } ?>
								<li class="has-dropdown">
										<a href="#">signing</a>
									<ul class="dropdown">
								<li class="hm"><a href="admin/index.php">Admin Login</a></li>

		<!-- <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">   -->

			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal"  >Sign Up</a></li>
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >Sign In</a></li>
        </ul>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>

		<div class="clearfix"></div>
	</div>
</div>

<?php
error_reporting(0);
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$mnumber=$_POST['mobilenumber'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql="INSERT INTO  tblusers(FullName,MobileNumber,EmailId,Password) VALUES(:fname,:mnumber,:email,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mnumber',$mnumber,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="You are Scuccessfully registered. Now you can login ";
header('location:thankyou.php');
}
else
{
$_SESSION['msg']="Something went wrong. Please try again.";
header('location:thankyou.php');
}
}
?>
<!--Javascript for check email availabilty-->
<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<style>
::placeholder{
	color: black;
	opacity: 1;
}
</style>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>

								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-left">

											</div>
											<div class="login-right">

												<form  method="post">
															<div style="text-align:center">
													<h3>Create your account </h3>


				<label for="FullName"><font color="black">Full Name:</font></label><input type="text" color="black" name="email" placeholder="Full Name" name="fname" autocomplete="off" required="">
				<!-- <label for="email"><font color="black"></font></label><input type="text" color="black" name="email" id="email" placeholder="Enter your Email"  required=""> -->

				<br>
				<br>
				<label for="MobileNumber"><font color="black">Mobile No:</font></label><input type="text" value="" placeholder="Mobile number" maxlength="10" name="mobilenumber" autocomplete="off" required="">
					 		<br>
							<br>
		<label for="EmailId"><font color="black">Email Id :</font></label><input  type="text" value="" placeholder="Email id" name="email" id="email" onBlur="checkAvailability()" autocomplete="off"  required="">
		 <span id="user-availability-status" style="font-size:12px;"></span>
		 <br>
		 <br>
	<label for="Password"><font color="black">Password :</font></label><input type="password" value="" placeholder="Password" name="password" required="">
	<br>
	<br>
											<label for="Password"></label><font color="black"</font><input type="submit" name="submit" id="submit" value="submit" placeholder="submit">
		</div>
												</form>

											</div>
												<div class="clearfix"></div>
										</div>
											<p>By logging in you agree to our <a href="page.php?type=terms">Terms and Conditions</a> and <a href="page.php?type=privacy">Privacy Policy</a></p>
									</div>
								</div>

					</div>
				</div>
			</div>

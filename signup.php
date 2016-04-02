<!doctype html>

<html>
<head>
    <title>FlashCharge</title>
<meta charset="utf-8">
<title>Untitled Document</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<style type="text/css">
	body {
		background: url(images/back.png) no-repeat center center fixed;
	}
</style>

<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>

</head>

<body background>

<div class="container">
	<div class="row">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form method="post" action = "" onsubmit="return checkvalid3()">
				<?php
					error_reporting(E_ERROR);

				    if (isset ($_POST['submit'])) {
					   $name = $_POST['first_name']." ".$_POST['last_name'];
					   $email = $_POST['email'];
					   $pwd = $_POST['pass'];
					   $confirm_pwd = $_POST['pass2'];
					   $mobile = $_POST['mobile'];
					   $freecharge = $_POST['freecharge'];
					   $paytm = $_POST['paytm'];
					   $mobikwik = $_POST['mobikwik'];
					   
					   if ($pwd == $confirm_pwd) {
						      $connection = mysql_connect("localhost", "root", "project");
				           
				           if (!$connection) {
				               echo "Connection failed";
				           }
				           
						  $db = mysql_select_db ("flashcharge", $connection);
						  $check_existing = "select * from customer where email = '$email'";
						  $result = mysql_query($check_existing);
						  $count = 0;
				          $count = mysql_num_rows($result);

				          $check_existing = "select * from customer where mobile = '$mobile'";
						  $result = mysql_query($check_existing);
						  $count1 = 0;
				          $count1 = mysql_num_rows($result);

				          if ($count > 0){
						  	echo "<script> alert('User ID exits');</script>";
						  } else if ($count1 > 0) {
						  	echo "<script> alert('Duplicate Mobile Number');</script>";
						  } else {
				              if ($name == "" || $email == "") {
				                  echo "All the fields are required";
				              } else {
							     echo "<script> alert('We have sent an email to you. Please verify your account by clicking on the activation link');</script>";

							     $sql = "insert into customer values ('$name', '$email', '$mobile', '$pwd', '$freecharge', '$paytm', '$mobikwik')";
				                     $result = mysql_query($sql);

				                 echo "<script>window.location.replace('login.php');</script>";

				              }
						  }
					   } else {
						  echo "<br>"."Password do not match";
					   }
				    } 
				?>

				<h2 align="center">Please Sign Up <small><font color="#666666">(All fields are mandatory)</font></small></h2>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
	                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
				</div>

				<div class="form-group">
					<input type="tel" name="mobile" id="mobile" class="form-control input-lg" placeholder="Enter your mobile number" tabindex="5" required>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="pass" id="password" class="form-control input-lg" placeholder="Password" tabindex="6" required>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="pass2" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="7" onkeyup="checkPass()" required>
						</div>
					</div>
				</div>

				<div class="form-group">
					<input type="email" name="freecharge" id="freecharge" class="form-control input-lg" placeholder="Enter email id associated with freecharge (optional)" tabindex="8">
				</div>

				<div class="form-group">
					<input type="email" name="paytm" id="paytm" class="form-control input-lg" placeholder="Enter email id associated with paytm (optional)" tabindex="8">
				</div>

				<div class="form-group">
					<input type="email" name="mobikwik" id="mobikwik" class="form-control input-lg" placeholder="Enter email id associated with mobikwik (optional)" tabindex="8">
				</div>

				<span id="confirmMessage"></span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-md-6"><input type="submit" value="Register" id="submit" name="submit" class="btn btn-primary btn-block btn-lg" tabindex="8"></div>
					<div class="col-xs-12 col-md-6"><input type="reset" name="reset" value="Reset" class="btn btn-success btn-block btn-lg"></input></div>
				</div>
			</form>
			<br><br>	
			<p><div class="form-links" align="center">
          		<h4><a href="index.html"><font color="#333333">Home</font></a> &ensp; | &ensp; <a href="login.php"><font color="#333333">Log in</font></a></h4>
        	</div>
        </p>
		</div>
	</div>
</div>
</body>
</html>
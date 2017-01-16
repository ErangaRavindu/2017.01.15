<?php 


session_start();
#$userid = $_SESSION['login_user'];

include '../../model/config.php';
//include '../../controller/del.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" href="../layout/styles/style.css" type="text/css">
</head>
<body>
	<div id="background">
    <img src="../images/general/back.png" class="stretch" alt="" />
    </div>
	<section class="loginform cf">
		<form name="login" action="../../controller/login.php" method="post" accept-charset="utf-8">
			<ul>
				<li>
					<label for="userid" >User ID</label>
					<input type="text" name="user_id" placeholder="userID" required>
				</li>
				<li>
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="password" required></li>
				<li>
					<input type="submit" value="Login" name="lg">
                    <!-- <input type="submit" value="Forgot Password" name="fp"> -->
					
					
				</li>
			</ul>
		</form>
		<input style="background: -moz-linear-gradient(top, #64c8ef 0%, #00a2e2 100%); margin-top: 15px ; color:#FFFFFF;" type="button" onclick="location.href='personalinformation.php';" value="Sign Up" />
	</section>

	<?php

	#$res1 =  mysqli_fetch_assoc(mysqli_query($connect,"select name_initials from staff where user_id = '$userid' "));
	#$_SESSION['name_initials']= $res1['fullname'];


	 ?>
</body>
</html>

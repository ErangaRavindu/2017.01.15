<?php


	include("../model/config.php");

	session_start();

	$myuserid=mysqli_real_escape_string($connect,$_POST['user_id']);

		$mypassword=mysqli_real_escape_string($connect,$_POST['password']);

		$sql="SELECT * FROM staff WHERE user_id='$myuserid' and password='$mypassword' ";
		$sql1="SELECT * FROM staff WHERE user_id='$myuserid' ";

		$result=mysqli_query($connect,$sql);
		$result1=mysqli_query($connect,$sql1);

		$rows=mysqli_num_rows($result);
		$rows1=mysqli_num_rows($result1);

		if($rows==1){

			$_SESSION['login_user']	= $myuserid;

			while ($count=mysqli_fetch_assoc($result)){


			if ($count['designation']=='admin'){

			header("location:../view/pages/admin_only.php");
				} else if ($count['designation']=='center coordinator'){

					header("location:../view/pages/centers_only.php");
									}
									
									else if ($count['designation']=='department coordinator'){

					header("location:../view/pages/departments_only.php");
									}
					else {
						header("location:../view/pages/staff_only.php");
					}
					}
		}else{
						echo '<script type="text/javascript">';
					echo 'alert("Get the help of forgot password");';
                    echo 'window.location="../view/pages/fpview.html";';
					echo '</script>';
						}
						
				
?>

<?php
session_start();
include "../model/config.php";
if(isset($_POST['email'])){
	$email=$_POST['email'];
	$query="SELECT * FROM staff WHERE email='$email'";
	$result=mysqli_query($connect,$query) or die(mysqli_error($connect));
	$count=mysqli_num_rows($result);
	
	if($count==1){
		$rows=mysqli_fetch_array($result);
		$pass=$rows['password'];
		$to=$rows['email'];
		$from="UCSC";
		$url="www.ucsc.cmb.ac.lk";	
		$body="password recovery script
		.................................
		Url:$url;
		email Details is : $to;
		Here is your password : $pass;
		Sincerely,
		UCSC";
		
		$from="	info@ucsc.cmb.ac.lk";
		$subject="UCSC password recovered";
		$headers1="From:$from\n";
		$headers1 .= "Content-type:text/html;charset=iso-8859-1\r\n";
		$headers1 .= "X-Prority: 1\r\n";
		$headers1 .= "X-MSMail-Prority:High\r\n";
		$headers1 .= "X-Mailer:Just My Server\r\n";	
		$sentmail = mail($to,$subject,$body,$headers1);
		
		if ($sentmail==1){
				
				echo '<script type="text/javascript">';
					echo 'alert("Your Password Has Been Sent To Your Email Address");';
                    echo 'window.location="../view/pages/login_index.html";';
					echo '</script>';
								}
		}else{
			if ($_POST['email'] != ""){
				
				echo '<script type="text/javascript">';
					echo 'alert("Not found your email in our database");';
                    echo 'window.location="../view/pages/personal_information.html";';
					echo '</script>';
			}
			
								else
								{
									if($_POST['email'] != ""){
										
										echo '<script type="text/javascript">';
					echo 'alert("Cannot send password to your e-mail address.Problem with sending mail....."");';
                    echo 'window.location="../index.html";';
					echo '</script>';
									}}
		}}
?>
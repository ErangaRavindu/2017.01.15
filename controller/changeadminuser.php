<?php

session_start();

include('../model/config.php');

$userid = $_SESSION['login_user'];
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$initials = $_POST['name_initials'];
$email = $_POST['email'];
$tp1 = $_POST['contact_no1'];
$tp2 = $_POST['contact_no2'];
$center = $_POST['center'];
$profile_pic = $_POST['profile_pic'];

$sql = "UPDATE staff SET f_name='$fname',profile_pic='$profile_pic',l_name='$lname',name_initials='$initials',email='$email',contact_no1='$tp1',contact_no2='$tp2',
center_id='$center' WHERE user_id='$userid'";

 
if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("Successfully Updated!");';
                    echo 'window.location="../view/pages/admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                } 
            
?>
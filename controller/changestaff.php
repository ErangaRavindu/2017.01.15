<?php
session_start();

include('../model/config.php');

$userid = $_SESSION['login_user'];
$fname = $_POST['f_name'];
$lname = $_POST['last_name'];
$initials = $_POST['name_initials'];
$nic = $_POST['nic'];
$email = $_POST['email'];
$tp1 = $_POST['contactno_1'];
$tp2 = $_POST['contactno_2'];
$department = $_POST['department'];
$division = $_POST['division'];
$center = $_POST['center'];


$sql = "UPDATE staff SET f_name='$fname',l_name='$lname',name_initials='$initials',nic='$nic',email='$email',contact_no1='$tp1',contact_no2='$tp2',
dep_id='$department',center_id='$center',division_id='$division' WHERE user_id='$userid'";

 
if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("Successfully Updated!");';
                    echo 'window.location="../view/pages/admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                } 
            
?>
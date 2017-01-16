<?php

session_start();

include('../model/config.php');

$userid = $_SESSION['login_user'];
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$initials = $_POST['name_initials'];
$email = $_POST['email'];
$tp1 = $_POST['contact_no1'];
$department = $_POST['department'];
$division = $_POST['division'];
$center = $_POST['center'];
$title = $_POST['title'];
$profile_pic = $_POST['profile_pic'];
$qualifications = $_POST['qualifications'];
$bio = $_POST['bio'];
$academic = $_POST['academic'];
$awards = $_POST['awards'];
$research = $_POST['research'];
$activity = $_POST['activity'];
$teaching = $_POST['teaching'];
$employee = $_POST['employee'];
$consultation = $_POST['consultation'];
$projects = $_POST['projects'];
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$scholar = $_POST['scholar'];
$research_gate = $_POST['research_gate'];
$location = $_POST['location'];

$sql = "UPDATE staff,academicemp_data SET staff.f_name='$fname',staff.profile_pic='$profile_pic',staff.l_name='$lname',staff.name_initials='$initials',
academicemp_data.title='$title',academicemp_data.research='$research',academicemp_data.qualifications='$qualifications',staff.email='$email',
staff.contact_no1='$tp1',academicemp_data.bio='$bio',academicemp_data.academic='$academic',academicemp_data.awards='$awards',
academicemp_data.activity='$activity',academicemp_data.teaching='$teaching',academicemp_data.employee='$employee',staff.dep_id='$department',
staff.center_id='$center',staff.division_id='$division',academicemp_data.consultation='$consultation',academicemp_data.projects='$projects',
academicemp_data.facebook='$facebook',academicemp_data.linkedin='$linkedin',academicemp_data.scholar='$scholar',academicemp_data.research_gate='$research_gate',
academicemp_data.location='$location' WHERE staff.user_id=academicemp_data.user_id AND staff.user_id='$userid'";

 
if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("Successfully Updated!");';
                    echo 'window.location="../view/pages/center_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                } 
            
?>
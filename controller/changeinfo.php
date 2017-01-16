<?php

include('../model/config.php');


				$vision = $_POST['vision'];
                $mission = $_POST['mission'];
                $ucsc_description = $_POST['ucsc_description'];
                $telephone = $_POST['telephone'];
                $fax = $_POST['fax'];
                $email = $_POST['email'];
                $goals = $_POST['goals'];
                $mailing_address=$_POST['mailing_address'];
                $union_activities = $_POST['union_activities'];
                $director_mg =$_POST['director_mg'];
				$image1=$_POST['image1'];
				$image2=$_POST['image2'];
				$image3=$_POST['image3'];
                
               
                $sql = "UPDATE info set vision='$vision',mission='$mission',ucsc_description='$ucsc_description',goals='$goals',
				mailing_address='$mailing_address',telephone='$telephone',fax='$fax',email='$email',union_activities='$union_activities',
				director_mg='$director_mg',image1='$image1',image2='$image2',image3='$image3'";

if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("Successfully Updated!");';
                    echo 'window.location="../view/pages/admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                } 
            
?>
<?php
        		include('../model/config.php');
				
                $name = $_POST['name'];
                $location = $_POST['center_location'];
                $cocordinator= $_POST['coordinator'];
                $telephone = $_POST['telephone'];
                $fax= $_POST['fax'];
                $email = $_POST['email'];
                $website= $_POST['website'];
                $image=$_POST['image'];
				$center_description=$_POST['center_description'];
               
                $sql = "update centers set center_name='$name',center_location='$location',center_coordinator='$cocordinator',
				center_telephone='$telephone',center_fax='$fax',center_email='$email',website='$website',image='$image',
				center_description='$center_description' where center_id='C001'";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("Updated successfully!");';
                    echo 'window.location="../view/pages/centers_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                }

?>
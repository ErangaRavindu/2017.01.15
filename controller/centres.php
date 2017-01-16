<?php
        		include('../model/config.php');
				
        		$id = $_POST['id'];
                $name = $_POST['CName'];
                $location = $_POST['CLocation'];
                $cocordinator= $_POST['CCoordinator'];
                $telephone = $_POST['CPhone'];
                $fax= $_POST['CFax'];
                $email = $_POST['email'];
                $website= $_POST['CWebsite'];
                $image=$_POST['image'];
				$center_description=$_POST['center_description'];
               
                $sql = "INSERT INTO centers (center_id,center_name,center_location,center_coordinator,center_telephone,center_fax,center_email,website,image,
				center_description) VALUES ('$id','$name','$location','$cocordinator',' $telephone','$fax','$email','$website','$image','$center_description')";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("A new centre added successfully!");';
                    echo 'window.location="../view/pages/admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                }

?>
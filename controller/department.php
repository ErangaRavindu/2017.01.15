<?php
        		include('../model/config.php');
				
                $id = $_POST['id'];
                $name = $_POST['DName'];
                $location = $_POST['DLocation'];
                $head = $_POST['DHead'];
				$description=$_POST['description'];
                $telephone = $_POST['DPhone'];
                $fax= $_POST['DFax'];
                $email = $_POST['email'];
                $website= $_POST['DWebsite'];
                $image=$_POST['image'];
                
               
                $sql = "INSERT INTO department (dep_id,dep_name,location,dep_head,dep_description,telephone,fax,email,website,image) VALUES ('$id','$name','$location','$head','$description','$telephone','$fax','$email','$website','$image')";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("A new department added successfully");';
                    echo 'window.location="../view/pages/admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                } 
?>
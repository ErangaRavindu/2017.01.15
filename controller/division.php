<?php

 require('../model/config.php');
        
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                
                
                $id = $_POST['id'];
                $name = $_POST['DName'];
                $location = $_POST['DLocation'];
                $head= $_POST['DHead'];
                $telephone = $_POST['DPhone'];
                $fax= $_POST['DFax'];
                $email = $_POST['email'];
                $website= $_POST['DWebsite'];
				$description=$_POST['description'];
                $image=$_POST['image'];
               
                $sql = "INSERT INTO division (division_id,division_name,location,head,telephone,fax,email,website,description,image) VALUES ('$id','$name','$location','$head',' $telephone','$fax','$email','$website','$description','$image')";
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("A new division added successfully!");';
                    echo 'window.location="../view/pages/admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                }

            }
        ?>
        
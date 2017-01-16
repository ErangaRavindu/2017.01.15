<?php
 if($_SERVER["REQUEST_METHOD"] == "POST") {
                $server = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'ucsc';

                //create connection
                $conn = mysqli_connect($server, $username, $password, $database);

                //check connection
                if (!$conn){
                    die("Connection faied: ".mysqli_connect_error());
                }
                //echo "connected successfully";
            
                $email = $_POST['email'];
                /*echo "id " . $id;*/
               
                $sql = "SELECT division_id FROM division WHERE email='$email'";
                ;
                if ($result = mysqli_query($conn, $sql)) {
                    if(mysqli_num_rows($result) > 0) {
                        echo "fail";
                    } else {
                        echo "pass";
                    }
				} else {
                    echo "pass";
                }

            }
?>
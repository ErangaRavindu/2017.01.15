<?php
        		include('../model/config.php');
         
        $userid= $_POST['userid'];
                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $lname = $_POST['lname'];
                $name_initials = $_POST['name_initials'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                $contactno1 = $_POST['contactno1'];
                $contactno2 = $_POST['contactno2'];
                $addline1 = $_POST['addline1'];
		        $addline2 = $_POST['addline2'];
                $city = $_POST['city'];
		        $country = $_POST['country'];
                $designation = $_POST['designation'];
                $stype= $_POST['s_type'];
		        $scategory = $_POST['s_category'];                
		        $dep_divi_center = $_POST['dep_divi_center'];
		        $password = $_POST['password'];
		        $profilepic = $_POST['profilepic'];
                
                if(substr($dep_divi_center,0,3)=="DIV"){
                   $sql = "INSERT INTO staff (user_id,f_name,m_name,l_name,name_initials,gender,email,contact_no1,contact_no2,add_line1,add_line2,add_city,add_country,designation,s_type,s_category,division_id,password,profile_pic) VALUES ('$userid','$fname','$mname','$lname','$name_initials','$gender','$email','$contactno1','$contactno2','$addline1','$addline2','$city','$country','$designation','$stype','$scategory','$dep_divi_center','$password','$profilepic')"; 
				   
                }
                elseif(substr($dep_divi_center,0,1)=="D"){
                     $sql = "INSERT INTO staff (user_id,f_name,m_name,l_name,name_initials,gender,email,contact_no1,contact_no2,add_line1,add_line2,add_city,add_country,designation,s_type,s_category,dep_id,password,profile_pic) VALUES ('$userid','$fname','$mname','$lname','$name_initials','$gender','$email','$contactno1','$contactno2','$addline1','$addline2','$city','$country','$designation','$stype','$scategory','$dep_divi_center','$password','$profilepic')";
					 
                    
                }
                else{
                   $sql = "INSERT INTO staff (user_id,f_name,m_name,l_name,name_initials,gender,email,contact_no1,contact_no2,add_line1,add_line2,add_city,add_country,designation,s_type,s_category,center_id,password,profile_pic) VALUES ('$userid','$fname','$mname','$lname','$name_initials','$gender','$email','$contactno1','$contactno2','$addline1','$addline2','$city','$country','$designation','$stype','$scategory','$dep_divi_center','$password','$profilepic')";
				   
                }


                
                if (mysqli_query($connect, $sql)) {
					
					echo '<script type="text/javascript">';
					echo 'alert("insert successful");';
                    echo 'window.location="../view/pages/login_index.html";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            
        ?>
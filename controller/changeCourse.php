<?php
        		include('../model/config.php');
				
        		$course_name = $_POST['course_name'];
                $course_coordinator = $_POST['course_coordinator'];
                $degreeProgramme = $_POST['degreeProgramme'];
                
               
                $sql = "UPDATE courses SET course_name='$course_name',course_coordinator='$course_coordinator',degreeProgramme='$degreeProgramme' WHERE 
				user_id=".$_GET['edit_id'];;
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("The course updated successfully!");';
                    echo 'window.location="../view/pages/staff_center_back.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                }

?>
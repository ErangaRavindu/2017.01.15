<?php

	include('../model/config.php');
	
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_author= $_POST['first_author'];
        $collaborators = $_POST['collaborators'];
	    $topic = $_POST['topic'];
		$booktopic = $_POST['booktopic'];
		$publisher=$_POST['publisher'];
		$series=$_POST['series'];
		$volume=$_POST['volume'];
        $date = $_POST['date'];
		$location = $_POST['location'];
		$pages=$_POST['pages'];
		$language = $_POST['language'];
		$isbn=$_POST['isbn'];
        $type= $_POST['type'];
               
         $sql = "INSERT INTO publication (first_author,other_authors,title,booktitle,publisher,series,volume,date,location,pages,language,isbn,pubtype) 
		 VALUES ('$first_author','$collaborators','$topic','$booktopic','$publisher','$series','$volume','$date','$location','$pages','$language','$isbn','$type')";
                
				if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("A new publication added successfully!");';
                    echo 'window.location="../view/pages/staff_center_back.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                }

            }
        ?>
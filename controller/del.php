<?php 
//include('.;C:\xampp\php\PEAR');
include('../model/config.php');

$output1 = "";
$output2 = "";

if(isset($_POST['searchText'])){
		$searchText = $_POST['searchText'];

	if(!empty($searchText)){

		if(isset($_POST['select'])){
			
			$searchType = $_POST['select'];
			
			if($searchType == "department"){
					$searchq = $_POST['searchText'];

					
					

					$query = mysqli_query($connect,"DELETE FROM department WHERE dep_name = '$searchq'") or die("could not search");	
					echo '<script type="text/javascript">';
					echo 'alert("Delete Successful!");';
                    echo 'window.location="admin_only.php";';
					echo '</script>';
						

			}
			if($searchType == "staff"){
					$searchq = $_POST['searchText'];
					

					$query = mysqli_query($connect,"DELETE FROM staff WHERE f_name = '$searchq'") or die("could not search");
					echo '<script type="text/javascript">';
					echo 'alert("Delete Successful!");';
                    echo 'window.location="admin_only.php";';
					echo '</script>';	
						

			}
			if($searchType == "division"){
					$searchq = $_POST['searchText'];
					

					$query = mysqli_query($connect,"DELETE FROM division WHERE division_name = '$searchq'") or die("could not search");	
					echo '<script type="text/javascript">';
					echo 'alert("Delete Successful!");';
                    echo 'window.location="admin_only.php";';
					echo '</script>';
						

			}

			if($searchType == "centers"){
					$searchq = $_POST['searchText'];
					

					$query = mysqli_query($connect,"DELETE FROM cneters WHERE center_name = '$searchq'") or die("could not search");
					echo '<script type="text/javascript">';
					echo 'alert("Delete Successful!");';
                    echo 'window.location="admin_only.php";';
					echo '</script>';	
						

			}
			if($searchType == "facilities"){
					$searchq = $_POST['searchText'];
					

					$query = mysqli_query($connect,"DELETE FROM facilities WHERE facility_name = '$searchq'") or die("could not search");
					echo '<script type="text/javascript">';
					echo 'alert("Delete Successful!");';
                    echo 'window.location="admin_only.php";';
					echo '</script>';	
						

			}
			if($searchType == "courses"){
					$searchq = $_POST['searchText'];
					

					$query = mysqli_query($connect,"DELETE FROM course WHERE course_name = '$searchq'") or die("could not search");	
					echo '<script type="text/javascript">';
					echo 'alert("Delete Successful!");';
                    echo 'window.location="admin_only.php";';
					echo '</script>';
						

			}

	}

}
}
<?php
include '../../model/config.php';
$sql = "SELECT dep_description FROM department where dep_id='D0001'";
$result = mysqli_query($connect, $sql);
if (!$result) {
                    echo "Error";
                    die();
				}
				$record = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>UCSC | Departments</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery-s3slider.js"></script>

</head>
<body id="top">

<h1>About</h1>
<p><?php echo $record['dep_description']?></p>

<?php include('../layout/styles/header.php');?>

<?php include('../../model/config.php'); 


$maxcols = 1;

$i = 0;

echo "Head of the Department";

$all_profiles_q="SELECT profile_pic,name_initials,email,qualifications,research FROM staff,academicemp_data where designation='Professor' or designation='Director'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
	
        echo '<td rowspan=5><img src="data:image/jpeg;base64,' . base64_encode($profile_info['profile_pic']) . '"/></td>';
		echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><p>Email : ".$profile_info['email']."</p></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><p>Research Interests : ".$profile_info['research']."</p></td>";
		echo "</tr>";
			
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";

echo "Staff";

$all_profiles_q="SELECT name_initials,qualifications FROM staff,academicemp_data where designation='Senior Lecturer'";
        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		if (mysqli_num_rows($all_profiles) > 0) {
    
    while($row = mysqli_fetch_assoc($all_profiles)) {
		
		echo "<ul>";
        echo "<li>".$row["name_initials"]." ".$row["qualifications"]"</li><br>";
		echo "</ul>";
	}
}
		?>


<?php include('../layout/styles/footer.php');?>
</body>
</html>
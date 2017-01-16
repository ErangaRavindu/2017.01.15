<!DOCTYPE html>
<html lang="en">
<head>
  <title>UCSC | Degrees</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php include('../layout/styles/header.php');?>
  <link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body>

<?php include('../../model/config.php');?>

<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Computer Science (CS)</a></li>
    <li><a data-toggle="tab" href="#menu1">Information Systems (IS)</a></li>
	<li><a data-toggle="tab" href="#menu2">Bachelor of Information Technology (BIT)</a></li>
    <li><a data-toggle="tab" href="#menu3">Foundation in Information Technology (FIT)</a></li>
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Computer Science (CS)</h3>
	  <?php
	  
	  $all_profiles_q="SELECT course_name,course_coordinator,degreeProgramme FROM courses where course_id='C002'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        $profile_info=mysqli_fetch_assoc($all_profiles);
			
		echo "<tr>";
		echo "<td>".$profile_info['course_name']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['degreeProgramme']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Course Coordinator : ".$profile_info['course_coordinator']."</td>";
		echo "</tr>";
		
		
		echo "</table>";

	  ?>
      </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Information Systems (IS)</h3>
	  <?php
	  
	  $all_profiles_q="SELECT course_name,course_coordinator,degreeProgramme FROM courses where course_id='C001'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        $profile_info=mysqli_fetch_assoc($all_profiles);
			
		echo "<tr>";
		echo "<td>".$profile_info['course_name']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['degreeProgramme']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Course Coordinator : ".$profile_info['course_coordinator']."</td>";
		echo "</tr>";
		
		
		echo "</table>";

	  ?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Bachelor of Information Technology (BIT)</h3>
	  <?php
	  
	  $all_profiles_q="SELECT course_name,course_coordinator,degreeProgramme FROM courses where course_id='C003'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        $profile_info=mysqli_fetch_assoc($all_profiles);
			
		echo "<tr>";
		echo "<td>".$profile_info['course_name']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['degreeProgramme']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Course Coordinator : ".$profile_info['course_coordinator']."</td>";
		echo "</tr>";
		
		
		echo "</table>";

	  ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Foundation in Information Technology</h3>
	  <?php
	  
	  $all_profiles_q="SELECT course_name,course_coordinator,degreeProgramme FROM courses where course_id='C004'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        $profile_info=mysqli_fetch_assoc($all_profiles);
			
		echo "<tr>";
		echo "<td>".$profile_info['course_name']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['degreeProgramme']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Course Coordinator : ".$profile_info['course_coordinator']."</td>";
		echo "</tr>";
		
		
		echo "</table>";

	  ?>
    </div>
	
  </div>
</div>

</body>
</html>

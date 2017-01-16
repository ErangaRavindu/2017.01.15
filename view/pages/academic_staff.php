<!DOCTYPE html>
<html lang="en">
<head>
  <title>UCSC | People</title>
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
    <li class="active"><a data-toggle="tab" href="#home">Professors</a></li>
    <li><a data-toggle="tab" href="#menu1">Senior Lecturers</a></li>
    <li><a data-toggle="tab" href="#menu2">Lecturers</a></li>
    <li><a data-toggle="tab" href="#menu3">Academic Support Staff</a></li>
	<li><a data-toggle="tab" href="#menu4">Temp. Academic Staff</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Professor</h3>
	  <?php
	  
	  $maxcols = 1;

$i = 0;

	  $all_profiles_q="SELECT staff.user_id,staff.profile_pic,staff.name_initials,academicemp_data.designation,academicemp_data.qualifications,staff.email,academicemp_data.location FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where academicemp_data.designation='Professor' OR academicemp_data.designation='Director'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
	
         echo '<td rowspan=6><img width="150" height="150" src="../images/staff/'. $profile_info['profile_pic'] .'"/></td>';
		 
			echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['designation']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		#echo "<td>".$profile_info['user_id']."</td>";
		#echo "<button onclick="window.location='academic_staff_single.php?edit_id='$profile_info['staff.user_id']'';" id="myButton">Home</button>";
		#echo '<td><input type="button" name="view_profile" onclick="window.open('academic_staff_single.php?edit_id=$profile_info['user_id']')" value="View Profile" class="McElieButton2"></td>';
		#echo '<input name="newThread" type="button" value="New Discussion" onclick="window.open('academic_staff_single.php')"/>';
		#echo '<td><a href="academic_staff_single.php?edit_id=$profile_info['user_id']" target="_blank">View Profile</a></td>';?>
		<td><a href="academic_staff_single.php?edit_id=<?php echo $profile_info['user_id'];?>" onclick="window.location('academic_staff_single.php?edit_id=<?php echo $profile_info['user_id'];?>', 'newwindow', 'width=600, height=600'); return false;">View Profile</a></td>
		<?php echo "</tr>";
		echo "<tr>";
		echo '<td><div class="hover_img">
     <a href="#">View Location<span><img src="../images/location/'.$profile_info['location'].'" alt="image" width="500" height="500" /></span></a></div></td>';
		
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";

	  ?>
      </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Senior Lecturers</h3>
	  <?php
	  
	  $maxcols = 1;

$i = 0;

	  $all_profiles_q="SELECT staff.user_id,staff.profile_pic,staff.name_initials,academicemp_data.designation,academicemp_data.qualifications,staff.email,academicemp_data.location FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where academicemp_data.designation='Senior Lecturer'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
	
         echo '<td rowspan=6><img width="150" height="150" src="../images/staff/'. $profile_info['profile_pic'] .'"/></td>';
		 
			echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['designation']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		#echo "<td>".$profile_info['user_id']."</td>";
		#echo "<button onclick="window.location='academic_staff_single.php?edit_id='$profile_info['staff.user_id']'';" id="myButton">Home</button>";
		#echo '<td><input type="button" name="view_profile" onclick="window.open('academic_staff_single.php?edit_id=$profile_info['user_id']')" value="View Profile" class="McElieButton2"></td>';
		#echo '<input name="newThread" type="button" value="New Discussion" onclick="window.open('academic_staff_single.php')"/>';
		#echo '<td><a href="academic_staff_single.php?edit_id=$profile_info['user_id']" target="_blank">View Profile</a></td>';?>
		<td><a href="academic_staff_single.php?edit_id=<?php echo $profile_info['user_id'];?>" onclick="window.location('academic_staff_single.php?edit_id=<?php echo $profile_info['user_id'];?>', 'newwindow', 'width=600, height=600'); return false;">View Profile</a></td>
		<?php echo "</tr>";
		echo "<tr>";
		echo '<td><div class="hover_img">
     <a href="#">View Location<span><img src="../images/location/'.$profile_info['location'].'" alt="image" width="500" height="500" /></span></a></div></td>';
		
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";

	  ?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Lecturers</h3>
	  <?php
	  
	  $maxcols = 1;

$i = 0;

	  $all_profiles_q="SELECT staff.user_id,staff.profile_pic,staff.name_initials,academicemp_data.designation,academicemp_data.qualifications,staff.email,academicemp_data.location FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where academicemp_data.designation='Lecturer'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
	
         echo '<td rowspan=6><img width="150" height="150" src="../images/staff/'. $profile_info['profile_pic'] .'"/></td>';
		 
			echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['designation']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		#echo "<td>".$profile_info['user_id']."</td>";
		#echo "<button onclick="window.location='academic_staff_single.php?edit_id='$profile_info['staff.user_id']'';" id="myButton">Home</button>";
		#echo '<td><input type="button" name="view_profile" onclick="window.open('academic_staff_single.php?edit_id=$profile_info['user_id']')" value="View Profile" class="McElieButton2"></td>';
		#echo '<input name="newThread" type="button" value="New Discussion" onclick="window.open('academic_staff_single.php')"/>';
		#echo '<td><a href="academic_staff_single.php?edit_id=$profile_info['user_id']" target="_blank">View Profile</a></td>';?>
		<td><a href="academic_staff_single.php?edit_id=<?php echo $profile_info['user_id'];?>" onclick="window.location('academic_staff_single.php?edit_id=<?php echo $profile_info['user_id'];?>', 'newwindow', 'width=600, height=600'); return false;">View Profile</a></td>
		<?php echo "</tr>";
		echo "<tr>";
		echo '<td><div class="hover_img">
     <a href="#">View Location<span><img src="../images/location/'.$profile_info['location'].'" alt="image" width="500" height="500" /></span></a></div></td>';
		
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";

	  ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Academic Support Staff</h3>
	  <?php
	  
	  $maxcols = 1;

$i = 0;

	  $all_profiles_q="SELECT staff.user_id,staff.profile_pic,staff.name_initials,academicemp_data.designation,academicemp_data.qualifications,staff.email,academicemp_data.location FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where academicemp_data.designation='Instructor'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
	
         echo '<td rowspan=6><img width="150" height="150" src="../images/staff/'. $profile_info['profile_pic'] .'"/></td>';
		 
			echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['designation']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		#echo "<td>".$profile_info['user_id']."</td>";
		#echo "<button onclick="window.location='academic_staff_single.php?edit_id='$profile_info['staff.user_id']'';" id="myButton">Home</button>";
		#echo '<td><input type="button" name="view_profile" onclick="window.open('academic_staff_single.php?edit_id=$profile_info['user_id']')" value="View Profile" class="McElieButton2"></td>';
		#echo '<input name="newThread" type="button" value="New Discussion" onclick="window.open('academic_staff_single.php')"/>';
		#echo '<td><a href="academic_staff_single.php?edit_id=$profile_info['user_id']" target="_blank">View Profile</a></td>';?>
		<td><a href="academic_staff_single.php?edit_id=<?php echo $profile_info['user_id'];?>" onclick="window.location('academic_staff_single.php?edit_id=<?php echo $profile_info['user_id'];?>', 'newwindow', 'width=600, height=600'); return false;">View Profile</a></td>
		<?php echo "</tr>";
		echo "<tr>";
		echo '<td><div class="hover_img">
     <a href="#">View Location<span><img src="../images/location/'.$profile_info['location'].'" alt="image" width="500" height="500" /></span></a></div></td>';
		
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";

	  ?>
    </div>
	
	<div id="menu4" class="tab-pane fade">
      <h3>Temporary Academic Staff</h3>
	  <?php
	  
	  $maxcols = 1;

$i = 0;

	  $all_profiles_q="SELECT staff.user_id,staff.profile_pic,staff.name_initials,academicemp_data.designation,academicemp_data.qualifications,staff.email,academicemp_data.location FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where academicemp_data.designation='Temporary Academic Staff'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
	
         echo '<td rowspan=6><img width="150" height="150" src="../images/staff/'. $profile_info['profile_pic'] .'"/></td>';
		 
			echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['designation']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		#echo "<td>".$profile_info['user_id']."</td>";
		#echo "<button onclick="window.location='academic_staff_single.php?edit_id='$profile_info['staff.user_id']'';" id="myButton">Home</button>";
		#echo '<td><input type="button" name="view_profile" onclick="window.open('academic_staff_single.php?edit_id=$profile_info['user_id']')" value="View Profile" class="McElieButton2"></td>';
		#echo '<input name="newThread" type="button" value="New Discussion" onclick="window.open('academic_staff_single.php')"/>';
		#echo '<td><a href="academic_staff_single.php?edit_id=$profile_info['user_id']" target="_blank">View Profile</a></td>';?>
		<td><a href="academic_staff_single.php?edit_id=<?php echo $profile_info['user_id'];?>" onclick="window.location('academic_staff_single.php?edit_id=<?php echo $profile_info['user_id'];?>', 'newwindow', 'width=600, height=600'); return false;">View Profile</a></td>
		<?php echo "</tr>";
		echo "<tr>";
		echo '<td><div class="hover_img">
     <a href="#">View Location<span><img src="../images/location/'.$profile_info['location'].'" alt="image" width="500" height="500" /></span></a></div></td>';
		
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";

	  ?>
	  <h3>Temporary Academic Support Staff - Assistant Lecturers</h3>
	  <?php
	  
	  $maxcols = 1;

$i = 0;

	  $all_profiles_q="SELECT staff.user_id,staff.profile_pic,staff.name_initials,academicemp_data.designation,academicemp_data.qualifications,staff.email,academicemp_data.location FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where academicemp_data.designation='Temporary Assistant Lecturer'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
	
         echo '<td rowspan=6><img width="150" height="150" src="../images/staff/'. $profile_info['profile_pic'] .'"/></td>';
		 
			echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['designation']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		#echo "<td>".$profile_info['user_id']."</td>";
		#echo "<button onclick="window.location='academic_staff_single.php?edit_id='$profile_info['staff.user_id']'';" id="myButton">Home</button>";
		#echo '<td><input type="button" name="view_profile" onclick="window.open('academic_staff_single.php?edit_id=$profile_info['user_id']')" value="View Profile" class="McElieButton2"></td>';
		#echo '<input name="newThread" type="button" value="New Discussion" onclick="window.open('academic_staff_single.php')"/>';
		#echo '<td><a href="academic_staff_single.php?edit_id=$profile_info['user_id']" target="_blank">View Profile</a></td>';?>
		<td><a href="academic_staff_single.php?edit_id=<?php echo $profile_info['user_id'];?>" onclick="window.location('academic_staff_single.php?edit_id=<?php echo $profile_info['user_id'];?>', 'newwindow', 'width=600, height=600'); return false;">View Profile</a></td>
		<?php echo "</tr>";
		echo "<tr>";
		echo '<td><div class="hover_img">
     <a href="#">View Location<span><img src="../images/location/'.$profile_info['location'].'" alt="image" width="500" height="500" /></span></a></div></td>';
		
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";

	  ?>
    </div>
  </div>
</div>

</body>
</html>

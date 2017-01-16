<!DOCTYPE html>
<html lang="en">
<head>
  <title>People | Profile</title>
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

<?php

if(isset($_GET['edit_id']))
				$id = $_GET['edit_id'];
{

$all_profiles_q="SELECT staff.*,academicemp_data.* FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where staff.user_id='$id'";
$result_set = mysqli_query($connect, $all_profiles_q);
 
}

echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($result_set)){
			
	echo "<tr>";
	
         echo '<td rowspan=5><img width="200" height="200" src="../images/staff/'. $profile_info['profile_pic'] .'"/></td>';
		 
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
		echo "<td>"."Research Interests:".$profile_info['research']."</td>";
		
		echo "</tr>";
            } 
			
			echo "</tr>";
echo "</table>";

?>



<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Biography</a></li>
    <li><a data-toggle="tab" href="#menu1">Academic Record</a></li>
    <li><a data-toggle="tab" href="#menu2">Awards</a></li>
    <li><a data-toggle="tab" href="#menu3">Activity</a></li>
	<li><a data-toggle="tab" href="#menu4">Employeement Record</a></li>
	<li><a data-toggle="tab" href="#menu5">Projects Supervised</a></li>
	<li><a data-toggle="tab" href="#menu6">Publications</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Biography</h3>
	  <?php
	  if(isset($_GET['edit_id']))
				$id = $_GET['edit_id'];
{

$all_profiles_q="SELECT staff.*,academicemp_data.* FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where staff.user_id='$id'";
$result_set = mysqli_query($connect, $all_profiles_q);
	  
$profile_info=mysqli_fetch_assoc($result_set);
echo $profile_info['bio'];
}

	  
	  

	  ?>
      </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Academic Record</h3>
	  <?php
	  
	  

echo $profile_info['academic'];
 


	  ?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Awards</h3>
	  <?php
	  

echo $profile_info['awards'];
 
	  ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Activity</h3>
	  <?php
	  
	  

echo $profile_info['activity'];
 


	  ?>
    </div>
	<div id="menu4" class="tab-pane fade">
      <h3>Employeement Record</h3>
	  <?php
	  
	  

echo $profile_info['employee'];
 


	  ?>
    </div>
    <div id="menu5" class="tab-pane fade">
      <h3>Projects Supervised</h3>
	  <?php
	  
	  

echo $profile_info['projects'];
 

	  ?>
    </div>
    <div id="menu6" class="tab-pane fade">
      <h3>Publications</h3>
	  
	  <?php
	  if(isset($_GET['edit_id']))
				$id = $_GET['edit_id'];
{
$q="SELECT name_id FROM academicemp_data where user_id='$id'";
$result_set1 = mysqli_query($connect, $q);
$profile_info1=mysqli_fetch_assoc($result_set1);
$w=$profile_info1['name_id'];
$all_profiles_q="SELECT * FROM publication where first_author like '%$w%'";
$result_set = mysqli_query($connect, $all_profiles_q);

echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
	?>
	
	<tr><th> First Authour</th>
                    <th>Other Authours</th>
                    <th>Author</th>
                     <th>Title</th>
					 <th>Book Title</th>
					 <th>Publisher</th>
					 <th>Series</th>
                    <th>Date</th>
                     <th>Location</th>
					 <th>Pages</th>
					 <th>Language</th>
					 <th>ISBN</th>
                    <th>Publication Type</th>
                     </tr>
					
					<?php
        while($profile_info=mysqli_fetch_assoc($result_set)){
			
	echo "<tr>";
	
         
			echo "<td>".$profile_info['first_author']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['other_authors']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['auth']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['title']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['booktitle']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['publisher']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['series']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['date']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['location']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['pages']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['language']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['isbn']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['pubtype']."</td>";
		echo "</tr>";
            } 
			
			echo "</tr>";
echo "</table>";
}

	  ?>
    </div>
  </div>
</div>

</body>
</html>

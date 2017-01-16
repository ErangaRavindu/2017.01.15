<!DOCTYPE html>
<html lang="en">
<head>
  <title>UCSC | Departments</title>
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
    <li class="active"><a data-toggle="tab" href="#home">Department of Computation and Intelligent Systems</a></li>
    <li><a data-toggle="tab" href="#menu1">Department of Information Systems Engineering</a></li>
    <li><a data-toggle="tab" href="#menu2">Department of Communication and Media Technologies</a></li>
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Department of Computation and Intelligent Systems</h3>
	  <?php
	  
	  
	  $q="select dep_description from department where dep_id='D001'";
$result_set1 = mysqli_query($connect, $q);
$info=mysqli_fetch_assoc($result_set1);
echo $info['dep_description'];
 echo "</br>";
 echo "</br>";
	  echo "Head of the Department";

$all_profiles_q="SELECT staff.*,academicemp_data.* FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where staff.dep_id='D001' AND staff.s_type='Head'";
$result_set = mysqli_query($connect, $all_profiles_q);
 
 echo "</br>";
 echo "</br>";


echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($result_set)){
			
	echo "<tr>";
	
         echo '<td rowspan=5><img width="200" height="200" src="../images/staff/'. $profile_info['profile_pic'] .'"/></td>';
		 
			echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Email : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Research Interests:".$profile_info['research']."</td>";
		
		echo "</tr>";
            } 
			
			echo "</tr>";
echo "</table>";

echo "Staff";

$i=0;

$all_profiles_q="SELECT staff.name_initials,academicemp_data.qualifications FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where s_type='staff' and dep_id='D001'";
        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		
    while($row = mysqli_fetch_assoc($all_profiles)) {
		
		echo "<ul>";
        echo "<li>".$row["name_initials"]." ".$row["qualifications"]."</li>";
		echo "</br>";
		echo "</ul>";
	}
	$i++;
	  ?>
      </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Department of Information Systems Engineering</h3>
	  <?php
	  
	  $q="select dep_description from department where dep_id='D002'";
$result_set1 = mysqli_query($connect, $q);
$info=mysqli_fetch_assoc($result_set1);
echo $info['dep_description'];
 echo "</br>";
 echo "</br>";
	  
	  echo "Head of the Department";

$all_profiles_q="SELECT staff.*,academicemp_data.* FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where staff.dep_id='D002' AND staff.s_type='Head'";
$result_set = mysqli_query($connect, $all_profiles_q);
 


echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($result_set)){
			
	echo "<tr>";
	
         echo '<td rowspan=5><img width="200" height="200" src="../images/staff/'. $profile_info['profile_pic'] .'"/></td>';
		 
			echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Email : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Research Interests:".$profile_info['research']."</td>";
		
		echo "</tr>";
            } 
			
			echo "</tr>";
echo "</table>";

echo "Staff";

$i=0;

$all_profiles_q="SELECT staff.name_initials,academicemp_data.qualifications FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where s_type='staff' and dep_id='D002'";
        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		
    while($row = mysqli_fetch_assoc($all_profiles)) {
		
		echo "<ul>";
        echo "<li>".$row["name_initials"]." ".$row["qualifications"]."</li>";
		echo "</br>";
		echo "</ul>";
	}
	$i++;
	  ?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Department of Communication and Media Technologies</h3>
	  <?php
	  
	  $q="select dep_description from department where dep_id='D003'";
$result_set1 = mysqli_query($connect, $q);
$info=mysqli_fetch_assoc($result_set1);
echo $info['dep_description'];
 echo "</br>";
 echo "</br>";
 
	  echo "Head of the Department";

$all_profiles_q="SELECT staff.*,academicemp_data.* FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where staff.dep_id='D003' AND staff.s_type='Head'";
$result_set = mysqli_query($connect, $all_profiles_q);
 


echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($result_set)){
			
	echo "<tr>";
	
         echo '<td rowspan=5><img width="200" height="200" src="../images/staff/'. $profile_info['profile_pic'] .'"/></td>';
		 
			echo "<td>".$profile_info['name_initials']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['qualifications']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Email : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Research Interests:".$profile_info['research']."</td>";
		
		echo "</tr>";
            } 
			
			echo "</tr>";
echo "</table>";

echo "Staff";

$i=0;

$all_profiles_q="SELECT staff.name_initials,academicemp_data.qualifications FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where s_type='staff' and dep_id='D003'";
        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		
    while($row = mysqli_fetch_assoc($all_profiles)) {
		
		echo "<ul>";
        echo "<li>".$row["name_initials"]." ".$row["qualifications"]."</li>";
		echo "</br>";
		echo "</ul>";
	}
	$i++;
	  ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>e-Learning Center (eLC)</h3>
	  <?php
	  
	  $all_profiles_q="SELECT center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description FROM centers where center_id='C0004'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        $profile_info=mysqli_fetch_assoc($all_profiles);
			
        echo '<td><img src="../images/centers/'. $profile_info['image'] .'"/></td>';
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['center_description']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Center Coordinator : ".$profile_info['center_coordinator']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Contact Number : ".$profile_info['center_telephone']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Fax Number : ".$profile_info['center_fax']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Email Address : ".$profile_info['center_email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Website : ".$profile_info['website']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo '<td><img src="../images/location/'. $profile_info['center_location'] .'"/></td>';
		echo "</tr>";
echo "</table>";

	  ?>
    </div>
	<div id="menu4" class="tab-pane fade">
      <h3>External Degree Center (EDC)</h3>
	  <?php
	  
	  $all_profiles_q="SELECT center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description FROM centers where center_id='C0005'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        $profile_info=mysqli_fetch_assoc($all_profiles);
			
	
        echo '<td><img src="../images/centers/'. $profile_info['image'] .'"/></td>';
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['center_description']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Center Coordinator : ".$profile_info['center_coordinator']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Contact Number : ".$profile_info['center_telephone']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Fax Number : ".$profile_info['center_fax']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Email Address : ".$profile_info['center_email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Website : ".$profile_info['website']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo '<td><img src="../images/location/'. $profile_info['center_location'] .'"/></td>';
		echo "</tr>";
echo "</table>";

	  ?>
    </div>
	<div id="menu5" class="tab-pane fade">
      <h3>Professional Development Center (PDC)</h3>
	  <?php
	  
	  $all_profiles_q="SELECT center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description FROM centers where center_id='C0006'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        $profile_info=mysqli_fetch_assoc($all_profiles);
			
	
        echo '<td><img src="../images/centers/'. $profile_info['image'] .'"/></td>';
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['center_description']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Center Coordinator : ".$profile_info['center_coordinator']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Contact Number : ".$profile_info['center_telephone']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Fax Number : ".$profile_info['center_fax']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Email Address : ".$profile_info['center_email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Website : ".$profile_info['website']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo '<td><img src="../images/location/'. $profile_info['center_location'] .'"/></td>';
		echo "</tr>";
echo "</table>";

	  ?>
    </div>
	<div id="menu6" class="tab-pane fade">
      <h3>Network Operating Center (NOC)</h3>
	  <?php
	  
	  $all_profiles_q="SELECT center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description FROM centers where center_id='C0007'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        $profile_info=mysqli_fetch_assoc($all_profiles);
			
	echo "<tr>";
        echo '<td><img src="../images/centers/'. $profile_info['image'] .'"/></td>';
		echo "</tr>";
		echo "<tr>";
		echo "<td>".$profile_info['center_description']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Center Coordinator : ".$profile_info['center_coordinator']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Contact Number : ".$profile_info['center_telephone']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Fax Number : ".$profile_info['center_fax']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Email Address : ".$profile_info['center_email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Website : ".$profile_info['website']."</td>";
		echo "</tr>";
		echo "<tr>";
echo '<td><img src="../images/location/'. $profile_info['center_location'] .'"/></td>';
		echo "</tr>";
echo "</table>";

	  ?>
    </div>
  </div>
</div>

</body>
</html>

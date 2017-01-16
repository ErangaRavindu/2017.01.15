<!DOCTYPE html>
<html lang="en">
<head>
  <title>UCSC | Divisions</title>
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
    <li class="active"><a data-toggle="tab" href="#home">Academic and Publications</a></li>
    <li><a data-toggle="tab" href="#menu1">Establishments and Administration</a></li>
    <li><a data-toggle="tab" href="#menu2">Examinations and Registrations</a></li>
    <li><a data-toggle="tab" href="#menu3">Engineering Division</a></li>
	<li><a data-toggle="tab" href="#menu4">Finance Division</a></li>
	<li><a data-toggle="tab" href="#menu5">Information Systems</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Academic and Publications</h3>
	  <?php
	  
	  $maxcols = 1;

$i = 0;

	  $all_profiles_q="SELECT location,head,telephone,email,fax,website,image,description FROM division where division_id='DIV001'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
	
         echo "<td>"."Location : ". $profile_info['location'] ."</td>";
		 echo "</tr>";
			echo "<td>"."Head of the Division : ".$profile_info['head']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Telephone : ".$profile_info['telephone']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Email : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Fax : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Website : ".$profile_info['website']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Image : ".$profile_info['image']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Description : ".$profile_info['description']."</td>";
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";

	  ?>
      </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Establishments and Administration</h3>
	  <?php
	  
	  $maxcols = 1;

$i = 0;

	  $all_profiles_q="SELECT location,head,telephone,email,fax,website,image,description FROM division where division_id='DIV002'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
	
         echo "<td>"."Location : ". $profile_info['location'] ."</td>";
		 echo "</tr>";
			echo "<td>"."Head of the Division : ".$profile_info['head']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Telephone : ".$profile_info['telephone']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Email : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Fax : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Website : ".$profile_info['website']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Image : ".$profile_info['image']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Description : ".$profile_info['description']."</td>";
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";

	  ?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Examinations and Registration</h3>
	  <?php
	  
	  $maxcols = 1;

$i = 0;

	  $all_profiles_q="SELECT location,head,telephone,email,fax,website,image,description FROM division where division_id='DIV003'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
	
         echo "<td>"."Location : ". $profile_info['location'] ."</td>";
		 echo "</tr>";
			echo "<td>"."Head of the Division : ".$profile_info['head']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Telephone : ".$profile_info['telephone']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Email : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Fax : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Website : ".$profile_info['website']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Image : ".$profile_info['image']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Description : ".$profile_info['description']."</td>";
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";

	  ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Engineering Division</h3>
	 <?php
	  
	  $maxcols = 1;

$i = 0;

	  $all_profiles_q="SELECT location,head,telephone,email,fax,website,image,description FROM division where division_id='DIV004'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
	
         echo "<td>"."Location : ". $profile_info['location'] ."</td>";
		 echo "</tr>";
			echo "<td>"."Head of the Division : ".$profile_info['head']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Telephone : ".$profile_info['telephone']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Email : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Fax : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Website : ".$profile_info['website']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Image : ".$profile_info['image']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Description : ".$profile_info['description']."</td>";
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";

	  ?>
    </div>
	
	<div id="menu4" class="tab-pane fade">
      <h3>Finance Division</h3>
	  <?php
	  
	  $maxcols = 1;

$i = 0;

	  $all_profiles_q="SELECT location,head,telephone,email,fax,website,image,description FROM division where division_id='DIV005'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
	
         echo "<td>"."Location : ". $profile_info['location'] ."</td>";
		 echo "</tr>";
			echo "<td>"."Head of the Division : ".$profile_info['head']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Telephone : ".$profile_info['telephone']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Email : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Fax : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Website : ".$profile_info['website']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Image : ".$profile_info['image']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Description : ".$profile_info['description']."</td>";
		echo "</tr>";
		
		$i++;
            } 
			
			echo "</tr>";
echo "</table>";

	  ?>
	  <h3>Information Systems</h3>
	  <?php
	  
	  $maxcols = 1;

$i = 0;

	  $all_profiles_q="SELECT location,head,telephone,email,fax,website,image,description FROM division where division_id='DIV006'";

        $all_profiles=mysqli_query($connect,$all_profiles_q);
		
        if(!$all_profiles){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		echo "<table cellspacing=3 cellpadding=3 align=center border=0>";
    
        while($profile_info=mysqli_fetch_assoc($all_profiles)){
			
	echo "<tr>";
	
         echo "<td>"."Location : ". $profile_info['location'] ."</td>";
		 echo "</tr>";
			echo "<td>"."Head of the Division : ".$profile_info['head']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Telephone : ".$profile_info['telephone']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Email : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Fax : ".$profile_info['email']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Website : ".$profile_info['website']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Image : ".$profile_info['image']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"."Description : ".$profile_info['description']."</td>";
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

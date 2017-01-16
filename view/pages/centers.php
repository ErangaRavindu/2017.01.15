<!DOCTYPE html>
<html lang="en">
<head>
  <title>UCSC | Centers</title>
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
    <li class="active"><a data-toggle="tab" href="#home">Advance Digital Media Technology Center (ADMTC)</a></li>
    <li><a data-toggle="tab" href="#menu1">Computing Services Center (CSC)</a></li>
    <li><a data-toggle="tab" href="#menu2">Digital Forensic Center (DFC)</a></li>
    <li><a data-toggle="tab" href="#menu3">e-Learning Center (eLC)</a></li>
	<li><a data-toggle="tab" href="#menu4">External Degree Center (EDC)</a></li>
	<li><a data-toggle="tab" href="#menu5">Professional Development Center (PDC)</a></li>
	<li><a data-toggle="tab" href="#menu6">Network Operating Center (NOC)</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Advance Digital Media Technology Center (ADMTC)</h3>
	  <?php
	  
	  $all_profiles_q="SELECT center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description FROM centers where center_id='C001'";

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
    <div id="menu1" class="tab-pane fade">
      <h3>Computing Services Center (CSC)</h3>
	  <?php
	  
	  $all_profiles_q="SELECT center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description FROM centers where center_id='C002'";

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
    <div id="menu2" class="tab-pane fade">
      <h3>Digital Forensic Center (DFC)</h3>
	  <?php
	  
	  $all_profiles_q="SELECT center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description FROM centers where center_id='C003'";

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
    <div id="menu3" class="tab-pane fade">
      <h3>e-Learning Center (eLC)</h3>
	  <?php
	  
	  $all_profiles_q="SELECT center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description FROM centers where center_id='C004'";

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
	  
	  $all_profiles_q="SELECT center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description FROM centers where center_id='C005'";

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
	  
	  $all_profiles_q="SELECT center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description FROM centers where center_id='C006'";

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
	  
	  $all_profiles_q="SELECT center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description FROM centers where center_id='C007'";

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

<!DOCTYPE html>
<html lang="en">
<head>
  <title>UCSC | Facilities</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php include('../layout/styles/header.php');?>
  <link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
  
  <script type="text/javascript">
		function redirect() {
			window.location = "reservation.php"

		}
</script>
</head>
<body>
<?php
 include('../../model/config.php');?>
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Library</a></li>
    <li><a data-toggle="tab" href="#menu1">Computer Laboratory</a></li>
    <li><a data-toggle="tab" href="#menu2">Lecture Rooms</a></li>
    <li><a data-toggle="tab" href="#menu3">Digital Studio</a></li>
	<li><a data-toggle="tab" href="#menu4">Auditorium</a></li>
	<li><a data-toggle="tab" href="#menu5">Canteen and Cafetaria</a></li>
    <li><a data-toggle="tab" href="#menu6">Wi-Fi Connectivity</a></li>
	<li><a data-toggle="tab" href="#menu7">University Medical Services</a></li>
	<li><a data-toggle="tab" href="#menu8">Reservation</a></li>
  </ul>
<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Library</h3>
	  <?php
	  $maxcols = 1;
$i = 0;
$all_profiles_q="SELECT description,image FROM facilities where facility_name='Library'";
$all_profiles=mysqli_query($connect,$all_profiles_q);
	if(!$all_profiles){
            die("Database query failed: ".mysqli_error($connect));
        }
        $record=mysqli_fetch_assoc($all_profiles);
		echo $record['description'];
		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo '<img align="middle" width="30%" class="avatar img-circle" alt="avatar" src="../images/facilities/'.$record['image'].'"/>';
		
	  ?>
      </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Computer Laboratory</h3>
	  <?php
	  $maxcols = 1;
$i = 0;
$all_profiles_q="SELECT description,image FROM facilities where facility_name='Computer Laboratory'";
$all_profiles=mysqli_query($connect,$all_profiles_q);
	if(!$all_profiles){
            die("Database query failed: ".mysqli_error($connect));
        }
        $record=mysqli_fetch_assoc($all_profiles);
		echo $record['description'];
		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo '<img align="middle" width="30%" class="avatar img-circle" alt="avatar" src="../images/facilities/'.$record['image'].'"/>';
		
	  ?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Lecture Rooms</h3>
	  <?php
	  $maxcols = 1;
$i = 0;
$all_profiles_q="SELECT description,image FROM facilities where facility_name='Lecture Rooms'";
$all_profiles=mysqli_query($connect,$all_profiles_q);
	if(!$all_profiles){
            die("Database query failed: ".mysqli_error($connect));
        }
        $record=mysqli_fetch_assoc($all_profiles);
		echo $record['description'];
		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo '<img align="middle" width="30%" class="avatar img-circle" alt="avatar" src="../images/facilities/'.$record['image'].'"/>';
		
	  ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Digital Studio</h3>
	  <?php
	  $maxcols = 1;
$i = 0;
$all_profiles_q="SELECT description,image FROM facilities where facility_name='Digital Studio'";
$all_profiles=mysqli_query($connect,$all_profiles_q);
	if(!$all_profiles){
            die("Database query failed: ".mysqli_error($connect));
        }
        $record=mysqli_fetch_assoc($all_profiles);
		echo $record['description'];
		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo '<img align="middle" width="30%" class="avatar img-circle" alt="avatar" src="../images/facilities/'.$record['image'].'"/>';
		
	  ?>
    </div>
	<div id="menu4" class="tab-pane fade">
      <h3>New Auditorium</h3>
	  <?php
	  $maxcols = 1;
$i = 0;
$all_profiles_q="SELECT description,image FROM facilities where facility_name='New Auditorium'";
$all_profiles=mysqli_query($connect,$all_profiles_q);
	if(!$all_profiles){
            die("Database query failed: ".mysqli_error($connect));
        }
        $record=mysqli_fetch_assoc($all_profiles);
		echo $record['description'];
		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo '<img align="middle" width="30%" class="avatar img-circle" alt="avatar" src="../images/facilities/'.$record['image'].'"/>';
		
	  ?>
    </div>
	<div id="menu5" class="tab-pane fade">
      <h3>Cafetaria</h3>
	  <?php
	  $maxcols = 1;
$i = 0;
$all_profiles_q="SELECT description,image FROM facilities where facility_name='Cafetaria'";
$all_profiles=mysqli_query($connect,$all_profiles_q);
	if(!$all_profiles){
            die("Database query failed: ".mysqli_error($connect));
        }
        $record=mysqli_fetch_assoc($all_profiles);
		echo $record['description'];
		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo '<img align="middle" width="30%" class="avatar img-circle" alt="avatar" src="../images/facilities/'.$record['image'].'"/>';
		
	  ?>
    </div>
	<div id="menu6" class="tab-pane fade">
      <h3>Wi-Fi & Internet</h3>
	  <?php
	  $maxcols = 1;
$i = 0;
$all_profiles_q="SELECT description,image FROM facilities where facility_name='Wi-Fi'";
$all_profiles=mysqli_query($connect,$all_profiles_q);
	if(!$all_profiles){
            die("Database query failed: ".mysqli_error($connect));
        }
        $record=mysqli_fetch_assoc($all_profiles);
		echo $record['description'];
		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo '<img align="middle" width="30%" class="avatar img-circle" alt="avatar" src="../images/facilities/'.$record['image'].'"/>';
		
	  ?>
    </div>
	<div id="menu7" class="tab-pane fade">
      <h3>Medical Services</h3>
	  <?php
	  $maxcols = 1;
$i = 0;
$all_profiles_q="SELECT description,image FROM facilities where facility_name='Medical Services'";
$all_profiles=mysqli_query($connect,$all_profiles_q);
	if(!$all_profiles){
            die("Database query failed: ".mysqli_error($connect));
        }
        $record=mysqli_fetch_assoc($all_profiles);
		echo $record['description'];
		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo '<img align="middle" width="30%" class="avatar img-circle" alt="avatar" src="../images/facilities/'.$record['image'].'"/>';
		
	  ?>
    </div>
	<!-- <div id="menu3" class="tab-pane fade">
      <h3>Reservation</h3>
        </div>
	-->
	<div id="menu8" class="tab-pane fade">
      <h3>Facility Reservation</h3>
	  
	  <input type="button" onclick="redirect()" value="Sinhala Books">
	  
	  <hr>
	  <?php include('calendar.php');?>
    </div>
  </div>
</div>
<hr>
<?php include('../layout/styles/footer.php');?>
</body>
</html>

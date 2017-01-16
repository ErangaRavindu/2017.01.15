<?php
include('../../model/config.php');
$sql = "SELECT ucsc_description,goals FROM info";
$sql1 = "SELECT dep_name,dep_head,telephone,email FROM department";
$result = mysqli_query($connect, $sql);
$result1 = mysqli_query($connect, $sql1);
if (!$result) {
                    echo "Error";
                    die();
				}
				if (!$result1) {
                    echo "Error";
                    die();
				}
				$record = mysqli_fetch_assoc($result);
				
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>UCSC</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <?php include('../layout/styles/header.php');?>
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<!-- 3 Column Stylesheet Added To The Page And Not To the Layout.css -->
<link rel="stylesheet" href="../layout/styles/3_column.css" type="text/css" />
</head>
<body id="top">


<!-- ####################################################################################################### -->
<hr>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="left_column">
      <div class="holder">
        <h2 class="title">Quick Links</h2>
        <ul class="nostart">
          <li><a href="#">Alumni</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Job opportunities</a></li>
          <li><a href="#">Maps and Directions</a></li>
          <li><a href="#">Online Courses</a></li>
          <li><a href="#">Postgraduate research</a></li>
          <li><a href="#">Research</a></li>
          <li><a href="undergraduate_studies.html">Undergraduate Courses</a></li>
        </ul>
      </div>
      <div class="holder">
        <h2 class="title">CONFERENCES AND SYMPOSIUMS</h2>
        <div class="imgholder"><a href="conferences_and_sysmposiums.php"><img src="../images/general/icter.png" alt="" /></a></div>
        <div class="imgholder last"><a href="conferences_and_sysmposiums.php"><img src="../images/general/symposium.png" alt="" /></a></div>
      </div>
    </div>
    <!-- ############ -->
    <div id="content">
      <h1 class="title">University of Colombo School of Computing</h1>
      <div class="imgholder"><img src="../images/general/ucsc.png" alt="" /></div>
      <p><?php echo $record['ucsc_description']?></p>

	  <h2 class="title">Abbreviations</h2>
      <ul>
        <li>ADMTC – Advanced Digital Multimedia Technology Centre</li></br>
        <li>CMT – Communication and Media Technologies</li></br>
        <li>CSC – Computing Services Centre</li></br>
        <li>CIS – Computation and Intelligent Systems(CIS)</li></br>
        <li>DFC – Digital Forensic Centre</li></br>
        <li>EDC – External Degrees Centre</li></br>
        <li>eLC– E-Learning Centre</li></br>
        <li>ISE – Information Systems Engineering</li></br>
        <li>NOC – Network Operating Centre</li></br>
        <li>PDC – Professional Development Centre</li></br>
        <li>UCSC – University of Colombo School of Computing</li>
      </ul>
      </div>
    <!-- ############ -->
    <div id="right_column">
      <div class="holder">
        <h2 class="title">Goals</h2>
        <p><?php echo $record['goals']?></p>
        
      </div>
      <div class="holder">
        <h2 class="title">INFRASTRUCTURE AND SERVICES</h2>
        <div class="imgholder"><a href="infrastructure_and_services.html"><img src="../images/general/library.png" alt="" /></a></div>
        <div class="imgholder"><a href="infrastructure_and_services.html"><img src="../images/general/lecture.png" alt="" /></a></div>
        <div class="imgholder last"><a href="infrastructure_and_services.html"><img src="../images/general/labs.png" alt="" /></a></div>
      </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<?php include('../layout/styles/footer.php');?>

</body>
</html>
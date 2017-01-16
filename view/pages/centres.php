<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>UCSC | External and Online Programmes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<?php include('../layout/styles/header.php');
include 'model/config.php';
$sql = "SELECT degreeProgramme FROM couses where course_name='FIT'";
$result = mysqli_query($connect, $sql);
if (!$result) {
                    echo "Error";
                    die();
				}
				$record = mysqli_fetch_assoc($result);?>
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="portfolio">
      <ul>
        <li class="clear">
          <div class="fl_left"><a href="#"><img src="../images/demo/selected photos/FIT.JPG" alt=""/></a></div>
          <div class="fl_right">
            <h2>Foundation in Information Technology (FIT)</h2>
            <p><?php echo $record['degreeProgramme']?></p>
            
            <p class="readmore"><a href="#">View This Centre &raquo;</a></p>
          </div>
        </li>
        </ul>
    </div>
    <!-- ####################################################################################################### -->
       <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="academiclinks" class="clear">
    <div class="linkbox">
      <h2>Academic</h2>
      <ul>
        
        <li><a href="#">&raquo; Academic Calendars</a></li>
        <li><a href="#">&raquo; Academics Office</a></li>
        <li><a href="#">&raquo; Alumni Chapters</a></li>
        <li><a href="#">&raquo; Alumni Events</a></li>
        <li><a href="#">&raquo; Campus Life At a Glance</a></li>
        </ul>
    </div>
    <div class="linkbox">
      <h2>Administration</h2>
      <ul>
        
        <li><a href="#">&raquo; Counsellers</a></li>
        <li><a href="#">&raquo; Course Descriptions and Catalogue</a></li>
        <li><a href="#">&raquo; Departments</a></li>
        <li><a href="#">&raquo; Financial Aid</a></li>
        <li><a href="#">&raquo; Fitness and Recreation Facilities</a></li>
        </ul>
    </div>
    <div class="linkbox">
      <h2>Programs</h2>
      <ul>
        
        <li><a href="#">&raquo; Honours Program</a></li>
        <li><a href="#">&raquo; International Students</a></li>
        <li><a href="#">&raquo; Maps and Directions</a></li>
      </ul>
    </div>
    <div class="linkbox last">
      <h2>Services</h2>
      <ul>
        <li><a href="#">&raquo; Office of the Registrar</a></li>
        <li><a href="#">&raquo; Online Learning</a></li>
        <li><a href="#">&raquo; Residence Life</a></li>
        <li><a href="#">&raquo; Student Activities</a></li>
        <li><a href="#">&raquo; Student Life</a></li>
      </ul>
    </div>
  </div>
</div>
<?php include('../layout/styles/footer.php');?>

</body>
</html>
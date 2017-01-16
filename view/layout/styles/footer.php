<?php
include '../../model/config.php';

$sql1="select center_name from centers";
$sql2="select dep_name from department";

$result1 = mysqli_query($connect,$sql1);
$result2 = mysqli_query($connect,$sql2);

if (!$result1) {
                    echo "Error";
                    die();
				}
				
				if (!$result2) {
                    echo "Error";
                    die();
				}
?>
<div class="wrapper">
  <div id="academiclinks" class="clear">
    <div class="linkbox">
      <h2>Degrees</h2>
      <ul>
        <li><a href="#">&raquo; Undergraduate Progammes</a></li>
        <li><a href="#">&raquo; Postgraduate progammes</a></li>
        <li><a href="#">&raquo; Research Degrees</a></li>
        <li><a href="#">&raquo; External Degrees</a></li>
        <li><a href="#">&raquo; Online Programmes</a></li>
      </ul>
    </div>
    <div class="linkbox">
      <h2>Management</h2>
      <ul>
        <li><a href="#">&raquo; Academic & Publication</a></li>
        <li><a href="#">&raquo; Establishments & Administration </a></li>
        <li><a href="#">&raquo; Examination and Registraton</a></li>
        <li><a href="#">&raquo; Engineering Division</a></li>
        <li><a href="#">&raquo; Finance Division</a></li>
        <li><a href="#">&raquo; Information Systems(NOC)</a></li>
        <li><a href="#">&raquo; Strategic Plan</a></li>
      </ul>
    </div>
    <div class="linkbox">
      <h2>UCSC Centres</h2>
	  
	  <?php
	  if (mysqli_num_rows($result1) > 0) {
    
    while($row = mysqli_fetch_assoc($result1)) {
		
		echo "<ul>";
        echo "<li><a href='../pages/centers.php'>".$row["center_name"]."</a></li><br>";
		echo "</ul>";
	}
}
	  ?>
      </div>
    <div class="linkbox last">
      <h2>Departments</h2>
      <?php
	  if (mysqli_num_rows($result1) > 0) {
    
    while($row = mysqli_fetch_assoc($result2)) {
		
		echo "<ul>";
        echo "<li><a href='../pages/departments.php'>".$row["dep_name"]."</a></li><br>";
		echo "</ul>";
	}
}
	  ?>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer" class="clear"> 
    <!-- ####################################################################################################### -->
    <div class="fl_left clear">
      <div class="fl_left center"><img src="../images/general/google.png" alt="" /><br />
        <a href="#">Find Us With Google Maps &raquo;</a></div>
      <address>
      University of Colombo School of Computing<br />
      UCSC Building Complex<br />
      35,Reid Avenue,Colombo 07<br />
      SRI LANKA<br />
      <br />
      Tel: +94 -11- 2581245/ 7<br />
      Fax: +94 -11- 2587239<br />
      Email: <a href="#">info@ucsc.cmb.ac.lk</a>
      </address>
    </div>
    <div class="fl_right">
      <div id="social" class="clear">
        <p>Stay Up to Date With Whats Happening</p>
        <ul>
          <li><a style="background-position:0 0;" href="#">Twitter</a></li>
          <li><a style="background-position:-72px 0;" href="#">LinkedIn</a></li>
          <li><a style="background-position:-142px 0;" href="#">Facebook</a></li>
          <li><a style="background-position:-212px 0;" href="#">Flickr</a></li>
          <li><a style="background-position:-282px 0;" href="#">RSS</a></li>
          <li><a style="background-position:-352px 0;" href="#">YouTube</a></li>
        </ul>
      </div>
      <div id="newsletter">
        <form action="#" method="post">
          <fieldset>
            <legend>Subscribe To Our Newsletter:</legend>
            <input type="text" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
            <input type="text" id="subscribe" value="Submit" />
          </fieldset>
        </form>
      </div>
    </div>
   
    <!-- ####################################################################################################### --> 
  </div>
</div>

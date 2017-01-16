<?php
        		include('../../model/config.php');
?>
<html>
<head>
<title>News/Notices | Achievements</title>

<?php include('../layout/styles/header.php');?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body id="top">

<?php $sql = "SELECT achievement_id,award_name,category,project_name FROM achievements where locality='International'";
$sql1 = "SELECT achievement_id,award_name,category,project_name FROM achievements where locality='National'"; 
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
?>			


<hr>
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <div id="content">
      <h1>A pursuit of excellence in 2014</h1>
      <img class="imgr" src="../images/general/achievement1.JPG" alt="" width="125" height="125" />
      <p>Our main objective is not winning design competitions;we gauge our success by how well our Students and Academics are performing.</p>
      <p>The proud winners of the University of Colombo School of Computing reveal their excellence in the computing chnnel,rewarding professional achievements and outstanding results in the industry.</p>
      <img class="imgl" src="../images/general/achievement2.JPG" alt="" width="125" height="125" />
      <p>The major goal of the UCSC is to prepare students for careers in computer science,software engineering,information system and information technology.</p>
      
      <h2>Achievements in International Context</h2>
      
	  <table summary="Summary Here" cellpadding="0" cellspacing="0" border="1">
        <thead>
          <tr>
            <th>Award Name</th>
            <th>Category</th>
            <th>Project Name</th>
          </tr>
        </thead>
        <tbody>
		<?php

             while($row=mysqli_fetch_assoc($result))
             {
                 ?>
          <tr class="light">
                            
                <td><?php echo $row['award_name']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['project_name'] ;?></td>
          </tr>
		  <?php
             }
             ?>
          
        </tbody>
      </table>
      <h2>Achievements in National Context in 2014</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0" border="1">
        <thead>
          <tr>
            <th>Award Name</th>
            <th>Category</th>
            <th>Project Name</th>
          </tr>
        </thead>
        <tbody>
		<?php

             while($row=mysqli_fetch_assoc($result1))
             {
                 ?>
          <tr class="light">
                            
                <td><?php echo $row['award_name']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['project_name'] ;?></td>
          </tr>
		  <?php
             }
             ?>
          
        </tbody>
      </table>
      </div>
    <div id="column">
      <div class="subnav">
        <h2>Quick Navigation</h2>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a>
            <ul>
              <li><a href="#">Vision & Mission</a></li>
              <li><a href="#">Divisions</a></li>
            </ul>
          </li>
          <li><a href="#">Education</a>
            <ul>
              <li><a href="#">Undergraduate Programmes</a></li>
              <li><a href="#">Postgraduate Programmes</a>
                <ul>
                  <li><a href="#">Degrees By Research</a></li>
                  <li><a href="#">External Degrees</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">People</a></li>
        </ul>
      </div>
      <div class="holder">
        <h2 class="title"><img src="../images/demo/selected photos/bit1.JPG" alt="" width="60" height="60"/>BIT</h2>
        <p>Taking into consideration the job opportunities that exist for ICT graduates in Sri Lanka & overseas,the UCSC (formerly Institute of Computer Technology) took</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div class="holder">
        <h2>Centres</h2>
        <p>UCSC also performs several secondary activities.These activities are organized under six separate centres with the last set up in 2011.</p>
        <ul>
          <li><a href="#">CSC</a></li>
          <li>EDC</li>
          <li><a href="#">ADMTC</a></li>
	  <li><a href="#">PDC</a></li>
          <li>eLC</li>
          <li><a href="#">DFC</a></li>
        </ul>
        <p>Each centre has a coordinator who manages the day-to-day operations of the centre.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
	</div>
    </div>
</div>
<?php include('../layout/styles/footer.php');?>
</body>
</html>
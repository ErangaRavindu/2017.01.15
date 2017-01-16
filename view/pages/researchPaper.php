<?php 
include '../../model/config.php';
$query1=mysqli_query($connect,"SELECT * FROM publication WHERE paper_id= '".$_GET['ppr_id']."';") or die("could not search");
$row1 = mysqli_fetch_array($query1);

/**
$query2=mysqli_query($connect,"SELECT * FROM academicemp_data WHERE user_id= '".$_GET['usr_id']."';") or die("could not search");
$row2 = mysqli_fetch_array($query2);

$path="../images/staff/";
$pic =$row1['profile_pic'];
//echo $pic;
$picpath = $path.$pic;
**/

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />



</head>
<body>

<div class="wrapper row2">
  <div id="header" class="clear" style="padding-bottom:100px">
    <div class="img">
      <h1><a href="index.html"><img src="../images/demo/logo-ucsc-1.png"/></a></h1>
 
	</div>

  </div>
</div>

<div style="margin-left: 4cm;margin-right:4cm; padding-bottom:6cm; padding-top:2
cm; ">

</div>

<div style="margin-left: 4cm;margin-right:4cm; background-color:white ; padding-right:2cm; padding-left:2cm ; padding-top:2cm;">

<!--
<p>user id- <?php echo $row1['user_id']; ?></p>
<p>name-  <?php echo $row1['f_name']." ".$row1['l_name']; ?></p>
<p>designation-   <?php echo $row1['designation']; ?></p>
-->

<p div style="font-size: 48px ; align:center; margin-left:240px;">details about the research paper</p></br></br>
<p style="font-size:42px;"><?php echo $row1['title']; ?></p></br>

<div style="font-size: 27px">
<p>author <?php echo $row1['first_author']; ?></p></br>
<p> title -  <?php echo $row1['title']; ?></p></br>
<p>book title - <?php echo $row1['booktitle']; ?></p></br>
<p>publisher - <?php echo $row1['publisher']; ?></p></br>
<p>location - <?php echo $row1['location']; ?></p></br>
<p>other authors <?php echo $row1['other_authors']; ?></p></br>
<p>date - <?php echo $row1['date']; ?></p></br>
</div>


</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../view/layout/scripts/postPublicationSearch.js"></script>



</html>
</html>
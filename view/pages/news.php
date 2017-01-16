<?php
        		include('../../model/config.php');
       ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>News & Notices</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php include('../layout/styles/header.php'); ?>
  <link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
    
</head>
<body>

 
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">News</a></li>
    <li><a data-toggle="tab" href="#menu1">Memorial Orations</a></li>
	<li><a data-toggle="tab" href="#menu2">Events</a></li>
	<li><a data-toggle="tab" href="#menu3">Competitions</a></li>
	<li><a data-toggle="tab" href="#menu4">Newspaper Articles</a></li>
	<li><a data-toggle="tab" href="#menu5">Procurement</a></li>
	<li><a data-toggle="tab" href="#menu6">Vacancies</a></li>
    </ul>
<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>News</h3>
	  
	 <?php 
	 
	 $i=0;
	 
	 $sql = "SELECT headline_post,post,attachments FROM post where category='News'"; 
$result = mysqli_query($connect, $sql);
while($row=mysqli_fetch_assoc($result)){

echo "Headline : ".$row['headline_post'];
echo "</br>";
echo "</br>";
echo "Description : ".$row['post'];
#echo "Attachments : ".$row['attachments'];
echo "</br>";
echo "</br>";
echo '<a href="../media/'.$row['attachments'].'">View</a>';

echo "</br>";
echo "</br>";

$i++;
}
?>

</div>
	  <div id="menu1" class="tab-pane fade">
            <h3>Memorial Orations</h3>
	  
	 <?php 
	 
	 $i=0;
	 
	 $sql = "SELECT headline_post,post,attachments FROM post where category='Memorial orations'"; 
$result = mysqli_query($connect, $sql);
while($row=mysqli_fetch_assoc($result)){

echo "Headline : ".$row['headline_post'];
echo "</br>";
echo "</br>";
echo "Description : ".$row['post'];
#echo "Attachments : ".$row['attachments'];
echo "</br>";
echo "</br>";
echo '<a href="../media/'.$row['attachments'].'">View</a>';

echo "</br>";
echo "</br>";

$i++;
}
?>
    </div>
	
		  <div id="menu2" class="tab-pane fade">
            <h3>Events</h3>
	  
	 <?php $sql = "SELECT headline_post,post,attachments FROM post where category='Events'"; 
$result = mysqli_query($connect, $sql);
while($row=mysqli_fetch_assoc($result)){

echo "Headline : ".$row['headline_post'];
echo "</br>";
echo "</br>";
echo "Description : ".$row['post'];
#echo "Attachments : ".$row['attachments'];
echo "</br>";
echo "</br>";
echo '<a href="../media/'.$row['attachments'].'">View</a>';

echo "</br>";
echo "</br>";

$i++;
}

?>
    </div>
	
		  <div id="menu3" class="tab-pane fade">
            <h3>Competitions</h3>
	  
	 <?php $sql = "SELECT headline_post,post,attachments FROM post where category='Competitions'"; 
$result = mysqli_query($connect, $sql);
while($row=mysqli_fetch_assoc($result)){

echo "Headline : ".$row['headline_post'];
echo "</br>";
echo "</br>";
echo "Description : ".$row['post'];
#echo "Attachments : ".$row['attachments'];
echo "</br>";
echo "</br>";
echo '<a href="../media/'.$row['attachments'].'">View</a>';

echo "</br>";
echo "</br>";

$i++;
}

?>
    </div>
	
		  <div id="menu4" class="tab-pane fade">
            <h3>News paper articles</h3>
	  
	 <?php $sql = "SELECT headline_post,post,attachments FROM post where category='News paper articles'"; 
$result = mysqli_query($connect, $sql);
while($row=mysqli_fetch_assoc($result)){

echo "Headline : ".$row['headline_post'];
echo "</br>";
echo "</br>";
echo "Description : ".$row['post'];
#echo "Attachments : ".$row['attachments'];
echo "</br>";
echo "</br>";
echo '<a href="../media/'.$row['attachments'].'">View</a>';

echo "</br>";
echo "</br>";

$i++;
}

?>
    </div>
	
		  <div id="menu5" class="tab-pane fade">
            <h3>Memorial Orations</h3>
	  
	 <?php 
	 
	 $sql = "SELECT headline_post,post,attachments FROM post where category='Procurement'"; 
$result = mysqli_query($connect, $sql);
while($row=mysqli_fetch_assoc($result)){

echo "Headline : ".$row['headline_post'];
echo "</br>";
echo "</br>";
echo "Description : ".$row['post'];
#echo "Attachments : ".$row['attachments'];
echo "</br>";
echo "</br>";
echo '<a href="../media/'.$row['attachments'].'">View</a>';

echo "</br>";
echo "</br>";

$i++;
}

?>
    </div>
	
		  <div id="menu6" class="tab-pane fade">
            <h3>Vacancies</h3>
	  
	 <?php $sql = "SELECT headline_post,post,attachments FROM post where category='Vacancies'"; 
$result = mysqli_query($connect, $sql);
while($row=mysqli_fetch_assoc($result)){

echo "Headline : ".$row['headline_post'];
echo "</br>";
echo "</br>";
echo "Description : ".$row['post'];
#echo "Attachments : ".$row['attachments'];
echo "</br>";
echo "</br>";
echo '<a href="../media/'.$row['attachments'].'">View</a>';

echo "</br>";
echo "</br>";

$i++;
}
?>
    </div>
	
</div>

</body>
</html>

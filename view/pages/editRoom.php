<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'UCSC'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 


$staffId=$_REQUEST['staffId'];
//$query = "SELECT staff.name_initials,academicemp_data.user_id,academicemp_data.location,academicemp_data.room FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id ";
$query="SELECT * from academicemp_data where user_id = '".$staffId."'"; 
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);

$query1="SELECT * from staff where user_id = '".$staffId."'"; 
$result1 = mysql_query($query1);
$row1 = mysql_fetch_assoc($result1);

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
<div class="form">
<!--<p><a href="insert.php">Insert New Record</a></p>-->
<h1 style="margin-left: 6cm">Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$location = "../images/demo/locations/";
$pic = ".jpg";


$staffId=$_REQUEST['user_id'];
$room =$_REQUEST['room'];
$b = $location.$room.$pic;


$update="update academicemp_data set room ='".$room."',location ='".$b."' where user_id = '".$staffId."'";

//$update="update staff set firstName ='ameera' where staffId = 1";
mysql_query($update);
$status = "Record Updated Successfully. </br></br><a href='viewRoom.php' >View Updated Record</a>";
echo '<p style="color:#FF0000; font-size:24px; margin-left: 6cm;">'.$status.'</p>';
}else {
?>
<div style="margin-left: 12cm">
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="user_id" type="hidden" value="<?php echo $row['user_id'];?>" />
<p style="font-size:24px;"><?php echo $row1['name_initials'];?></p>
<p style="font-size:24px;"><?php echo $row['user_id'];?></p>

<p style="font-size:24px;">room <input type="text" name="room" placeholder="Enter room" required value="<?php echo $row['room'];?>" /></p>



<p><input style="font-size:24px;" name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>


</div>
</div>
</body>
</html>

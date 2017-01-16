<?php
 
define('DB_HOST', 'localhost');
 define('DB_NAME', 'UCSC'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
//inserting Record to the database 


?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    font-size: 21px;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;
					}

th {
    background-color: #4CAF50;
    font-size: 27px;
    color: white;
}
</style>


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
<p><a href="insert.php">Insert New Record</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>user id</strong></th><th><strong>firstname</strong></th><th><strong>room</strong></th><th><strong>edit</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT staff.name_initials,academicemp_data.user_id,academicemp_data.location,academicemp_data.room FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id ";
//$sel_query="SELECT * from staff";
$result = mysql_query($sel_query);
while($row = mysql_fetch_assoc($result)) { ?>
<tr><td align="center" ><?php echo $count; ?></td><td align="center"><?php echo $row["name_initials"]; ?></td><td align="center"><?php echo $row["room"]; ?></td><td align="center"><a href="editRoom.php?staffId=<?php echo $row["user_id"]; ?>">Edit</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>


</div>
</body>
</html>

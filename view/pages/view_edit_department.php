<?php
        		include('../../model/config.php');
       ?>
	   <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <script src="../../js/jquery-2.0.0.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>View and Edit Departments</title>
    </head>
    <body>
	       
        <?php $sql = "SELECT dep_id,dep_name,location,dep_head,telephone,fax,email,website,image FROM department"; 
$result = mysqli_query($connect, $sql);
if (!$result) {
                    echo "Error";
                    die();
				}
?>				
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">View Departments</h2>
			
			<table border="1" class="table table-striped table-hover">
            <tr><th> Department ID</th>
                    <th>Department Name</th>
                    <th>Location</th>
                     <th>Department Head</th>
					 <th>Telephone</th>
					 <th>Fax</th>
					 <th>Email</th>
					 <th>Website</th>
					 <th>Image</th>
					 <th></th>
                    </tr>

        <?php

             while($row=mysqli_fetch_assoc($result))
             {
                 ?>
            <tr>
                <td><?php echo $row['dep_id']; ?></td>
                <td><?php echo $row['dep_name']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><?php echo $row['dep_head'] ;?></td>
				<td><?php echo $row['telephone'] ;?></td>
				<td><?php echo $row['fax']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['website']; ?></td>
                <td><?php echo '<img width="100%" class="avatar img-circle" alt="avatar" src="../images/departments/' . $row['image'] . '"/>' ;?></td>
				<td><a href="#" onclick="window.open('edit_department.php?edit_id=<?php echo $row['dep_id']; ?>', '_self', 'width=1200, height=600'); return false;">EDIT</a></td>
                               
            </tr>
        <?php
             }
             ?>
             </table>
        
        </div>
    </body>
</html>
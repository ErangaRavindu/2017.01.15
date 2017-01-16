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
        
        <title>View and Edit Facility</title>
    </head>
    <body>
	       
        <?php $sql = "SELECT facility_id,facility_name,rent,capacity,description,image FROM facilities"; 
$result = mysqli_query($connect, $sql);
if (!$result) {
                    echo "Error";
                    die();
				}
?>				
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">View Facilities</h2>
			
			<table class="table table-striped table-hover" border="1">
            <th> Facility ID</th>
                    <th>Facility Name</th>
                    <th>Rent</th>
                     <th>Capacity</th>
					 <th>Description</th>
					 <th>Image</th>
					 <th></th>
                    </tr>

        <?php

             while($row=mysqli_fetch_assoc($result))
             {
                 ?>
            <tr>
                <td><?php echo $row['facility_id']; ?></td>
                <td><?php echo $row['facility_name']; ?></td>
                <td><?php echo $row['rent']; ?></td>
                <td><?php echo $row['capacity'] ;?></td>
				<td><?php echo $row['description'] ;?></td>
				<td><?php echo '<img width="40%" class="avatar img-circle" alt="avatar" src="../images/facilities/' . $row['image'] . '"/>' ;?></td>
				<td><a href="#" onclick="window.open('edit_facility.php?edit_id=<?php echo $row['facility_id']; ?>', '_self', 'width=1200, height=600'); return false;">EDIT</a></td>
                               
            </tr>
        <?php
             }
             ?>
             </table>
        
        </div>
    </body>
</html>
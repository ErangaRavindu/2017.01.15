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
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>View and Approve Reservations</title>
    </head>
    <body>
	       
        <?php $sql = "SELECT reservation.r_id,reservation.type,facilities.facility_name,reservation.start,reservation.end,reservation.purpose FROM reservation inner join facilities on facilities.facility_id=reservation.facility_id where reservation.status='0'"; 
$result = mysqli_query($connect, $sql);
if (!$result) {
                    echo "Error";
                    die();
				}
?>				
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Approve Reservations</h2>
			
			<table border="1">
            <tr><th> Reservation ID</th>
                    <th>Reservation Type</th>
                    <th>Facility Name</th>
                     <th>Start Date and Time</th>
					 <th>End Date and Time</th>
					 <th>Purpose</th>
                    </tr>

        <?php

             while($row=mysqli_fetch_assoc($result))
             {
                 ?>
            <tr>
                <td><?php echo $row['r_id']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['facility_name']; ?></td>
                <td><?php echo $row['start'] ;?></td>
				<td><?php echo $row['end'] ;?></td>
				<td><?php echo $row['purpose'] ;?></td>
				<td><a href="../../controller/approve.php?edit_id=<?php echo $row['r_id'];?>" onclick="window.location('approve.php?edit_id=<?php echo $row['r_id'];?>', 'newwindow', 'width=600, height=600'); return false;">Approve</a></td>
                               
            </tr>
        <?php
             }
             ?>
             </table>
        
        </div>
    </body>
</html>
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
        
        <title>View and Edit Course</title>
    </head>
    <body>
	       
        <?php $sql = "SELECT division_id,division_name,location,head,telephone,email,fax,website,image FROM division"; 
$result = mysqli_query($connect, $sql);
if (!$result) {
                    echo "Error";
                    die();
				}
?>				
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">View Divisions</h2>
			
			<table border="1" class="table table-striped table-hover">
            <th> Division ID</th>
                    <th>Division Name</th>
                    <th>Location</th>
                     <th>Head</th>
					 <th>Telephone</th>
                    <th>Email</th>
                     <th>Fax</th>
					 <th>Website</th>
                    <th>Image</th>
                    <th></th>
                    </tr>

        <?php

             while($row=mysqli_fetch_assoc($result))
             {
                 ?>
            <tr>
                <td><?php echo $row['division_id']; ?></td>
                <td><?php echo $row['division_name']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><?php echo $row['head'] ;?></td>
				<td><?php echo $row['telephone']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['fax']; ?></td>
                <td><?php echo $row['website'] ;?></td>
				<td><?php echo $row['image'] ;?></td>
				<!-- <td align="center"><a href="edit_course.php?edit_id=<?php echo $row['course_id']; ?>">EDIT</a></td>-->
				<td><a href="#" onclick="window.open('edit_division.php?edit_id=<?php echo $row['division_id']; ?>', '_self', 'width=1200, height=600'); return false;">EDIT</a></td>
                  <!--<td><a href="javascript:q=(document.location.href);void(open('admin_only.php?edit_division.php?edit_id=<?php echo $row['division_id']; ?>',_self','resizable,location,menubar,toolbar,scrollbars,status'));">click here</a></td>  -->           
            </tr>
        <?php
             }
             ?>
             </table>
        
        </div>
    </body>
</html>
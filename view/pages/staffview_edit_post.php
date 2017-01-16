<?php

$user_id = $_SESSION['login_user'];
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
        
        <title>View and Edit Post</title>
    </head>
    <body>
	       
        <?php $sql = "SELECT post_id,date_posted,headline_post,post,category,attachments FROM post where user_id='$user_id'"; 
$result = mysqli_query($connect, $sql);
if (!$result) {
                    echo "Error";
                    die();
				}
?>				
        <div class="container" style='text-align:center;margin-left:10%'>
            <h2 style="margin-bottom:20px;">View Posts</h2>
			
			<table border="1" class="table table-striped table-hover">
            <th>Post ID</th>
                    <th>Headline of the Post</th>
                     <th>Date Posted</th>
					 <th>Description</th>
                    <th>Category</th>
                     <th>Attachment</th>
					 <th></th>
                    </tr>

        <?php

             while($row=mysqli_fetch_assoc($result))
             {
                 ?>
            <tr>
                <td><?php echo $row['post_id']; ?></td>
                <td><?php echo $row['headline_post']; ?></td>
                <td><?php echo $row['date_posted'] ;?></td>
				<td><?php echo $row['post']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['attachments']; ?></td>
                <td><a href="#" onclick="window.open('edit_post.php?edit_id=<?php echo $row['post_id']; ?>', '_self', 'width=1200, height=600'); return false;">EDIT</a></td>
                               
            </tr>
        <?php
             }
             ?>
             </table>
        
        </div>
    </body>
</html>
<html>
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery-2.0.0.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/functions.js"></script>
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Edit Center</title>
    </head>
    <body>
        <?php
        
            include('../../model/config.php');
			
			if(isset($_GET['edit_id']))
				$id = $_GET['edit_id'];
{
 $sql_query = "SELECT center_name,center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description FROM centers 
 WHERE center_id='$id'";
 
 $result_set = mysqli_query($connect, $sql_query);
 
 $row = mysqli_fetch_assoc($result_set);
 
}
			if(isset($_POST['update'])){
			
			$center_name = $_POST['center_name'];
                $center_coordinator = $_POST['center_coordinator'];
                $center_telephone = $_POST['center_telephone'];
				$center_fax = $_POST['center_fax'];
				$center_email = $_POST['center_email'];
				$website = $_POST['website'];
				$center_location = $_POST['center_location'];
                $image = $_POST['image'];
				$center_description = $_POST['center_description'];
               
                $sql = "UPDATE centers SET center_name='$center_name',center_coordinator='$center_coordinator',center_telephone='$center_telephone',center_fax='$center_fax',center_email='$center_email',website='$website',center_location='$center_location',image='$image',center_description='$center_description' WHERE center_id='$id'";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("The center updated successfully!");';
                    echo 'window.close()';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}}

        ?>
        
               
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Edit Center</h2>
        <form method="post">
                        <div class="form-group">
                 <label for="name" class="col-sm-6 control-label">Center</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="center_name"><?php echo $row['center_name']?></textarea>
                 </div>
            </div>
			
			<div class="form-group">
            <label for="center_description" class="col-sm-6 control-label">Center Description</label>
			<div class="col-sm-5">
            <textarea width="100" style="width: 500px; height: 350px;" required class="form-control" id="notes1" name="center_description"><?php echo $row['center_description']?></textarea>
			</div>
        </div>
            
             <div class="form-group">
                 <label for="center_location" class="col-sm-6 control-label">Location</label>
                 <div class="col-sm-5">
                     <?php echo '<img width="100%" class="avatar img-circle" alt="avatar" src="../images/location/'.$row['center_location'].'"/>' ?>
          <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file" name="center_location">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="coordinator" class="col-sm-6 control-label">Co-ordinator</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="center_coordinator" value="<?php echo $row['center_coordinator']?>">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="telephone" class="col-sm-6 control-label">Contact number</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="center_telephone" value="<?php echo $row['center_telephone']?>">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="fax" class="col-sm-6 control-label">Fax</label>
                 <div class="col-sm-5">
                     <input required  class="form-control" type="text" name="center_fax" value="<?php echo $row['center_fax']?>">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="email" class="col-sm-6 control-label">Email</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="email" name="center_email" value="<?php echo $row['center_email']?>">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="website" class="col-sm-6 control-label">Web site</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="website" name="website" value="<?php echo $row['website']?>">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="image" class="col-sm-6 control-label">Image</label>
                 <div class="col-sm-5">
                     <?php echo '<img class="avatar img-circle" alt="avatar" src="../images/centers/'.$row['image'].'"/>' ?>
					 
					 <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file" name="image">
                 </div>
				 
				 
            </div>
            <button type="submit" name="update" class="btn btn-default" style="margin-left:200px;">Update</button>
              
            </form>
        </div>
    </body>
</html>
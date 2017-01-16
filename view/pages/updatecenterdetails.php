<?php

include('../../model/config.php');
//session_start();
$user_id = $_SESSION['login_user'];
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../layout/styles/bootstrap.min.css">
        <script src="../layout/scripts/jquery-2.0.0.js"></script>
        <script src="../layout/scripts/bootstrap.min.js"></script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Edit Center Details</title>
    </head>
    <body>
        
        
        <?php
		
		
		$sql="select center_name,center_coordinator,center_telephone,center_fax,center_email,website,center_location,image,center_description from centers where 
		center_id=(select center_id from staff where user_id='$user_id')";
        $result=mysqli_query($connect,$sql); 
		if (!$result) {
                    echo "Error";
                    die();
				}
				$record = mysqli_fetch_assoc($result);
		               
        ?> 
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Centers</h2>
        <form method="post" action="../../controller/update_centres.php">
            
                       
            <div class="form-group">
                 <label for="name" class="col-sm-6 control-label">Center</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="name" value="<?php echo $record['center_name']?>">
                 </div>
            </div>
			
			<div class="form-group">
            <label for="center_description" class="col-sm-6 control-label">Center Description</label>
			<div class="col-sm-5">
            <textarea required class="form-control" id="notes1" name="center_description"><?php echo $record['center_description']?></textarea>
			</div>
        </div>
            
             <div class="form-group">
                 <label for="center_location" class="col-sm-6 control-label">Location</label>
                 <div class="col-sm-5">
                     <?php echo '<img class="avatar img-circle" alt="avatar" src="data:image/jpeg;base64,' . base64_encode($record['center_location']) . '"/>' ?>
          <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file" name="center_location">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="coordinator" class="col-sm-6 control-label">Co-ordinator</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="coordinator" value="<?php echo $record['center_coordinator']?>">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="telephone" class="col-sm-6 control-label">Contact number</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="telephone" value="<?php echo $record['center_telephone']?>">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="fax" class="col-sm-6 control-label">Fax</label>
                 <div class="col-sm-5">
                     <input required  class="form-control" type="text" name="fax" value="<?php echo $record['center_fax']?>">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="email" class="col-sm-6 control-label">Email</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="email" name="email" value="<?php echo $record['center_email']?>">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="website" class="col-sm-6 control-label">Web site</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="website" name="website" value="<?php echo $record['website']?>">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="image" class="col-sm-6 control-label">Image</label>
                 <div class="col-sm-5">
                     <?php echo '<img width="40%" class="avatar img-circle" alt="avatar" src="../images/centers/'.$record['image'].'"/>' ?>
					 
					 <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file" name="image">
                 </div>
				 
				 
            </div>
    
            <button type="submit" class="btn btn-default" style="margin-left:100px;margin-top:1%;">Submit</button>
              
            </form>
        </div>
    </body>
</html>
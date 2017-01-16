<?php
        		include('../../model/config.php');
       ?>

<html>
    <head>
        <meta charset="UTF-8">
  <title>Edit Center</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
 
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
<link rel="stylesheet" href="../layout/styles/style_forms.css">
        
        <style>
            .radio-left {
                float: left;
            }
			
			.forms1 {
				width:800px;
				margin-top: 0px;
				margin-left: 200px;
				position: absolute;
			}    
        </style>
        
    
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
			
			$name = $_POST['name'];
                $coordinator = $_POST['coordinator'];
                $center_telephone = $_POST['telephone'];
				$center_fax = $_POST['fax'];
				$center_email = $_POST['email'];
				$website = $_POST['website'];
				$center_location = $_POST['center_location'];
                $image = $_POST['image'];
				$center_description = $_POST['center_description'];
               
                $sql = "UPDATE centers SET center_name='$name',center_coordinator='$coordinator',center_telephone='$center_telephone',center_fax='$center_fax',center_email='$center_email',website='$website',center_location='$center_location',image='$image',center_description='$center_description' WHERE center_id='$id'";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("The center updated successfully!");';
                    echo 'window.location="admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}}

        ?>
		
	<div class="forms1">    
		<form class="well form-horizontal" action="" method="post"  id="contact_form">
		<fieldset>
		<!-- Form Name -->
		<legend>EDIT CENTER</legend>
        
                       
            <div class="form-group">
                <label class="col-md-6 control-label"> Center</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                     <input required class="form-control" type="text" name="name" value="<?php echo $row['center_name']?>">
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                 <label for="location" class="col-sm-6 control-label">Location</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                     <input required  class="form-control" type="text" name="center_location" value="<?php echo $row['center_location']?>">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="coordinator" class="col-sm-6 control-label">Co-ordinator</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input class="form-control" type="text" name="coordinator" value="<?php echo $row['center_coordinator']?>">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="telephone" class="col-sm-6 control-label">Contact number</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                     <input required class="form-control" type="text" name="telephone" value="<?php echo $row['center_telephone']?>">
                 </div>
				 </div>
            </div>
			
			<div class="form-group">
                <label for="description" class="col-sm-6 control-label">Description</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                     <textarea required class="form-control" name="center_description"><?php echo $row['center_description']?></textarea>
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                <label for="fax" class="col-sm-6 control-label">Fax</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                     <input required  class="form-control" type="text" name="fax" value="<?php echo $row['center_fax']?>">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="email" class="col-sm-6 control-label">Email</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                     <input class="form-control" type="email" name="email" value="<?php echo $row['center_email']?>">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="website" class="col-sm-6 control-label">Web site</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                     <input class="form-control" id="website" type="url" name="website" value="<?php echo $row['website']?>">
                 </div>
				 </div>
            </div>
			
			           
            <div class="form-group">
                <label for="image" class="col-sm-6 control-label">Image</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                     <input  type="file" name="image" value="<?php echo $row['image']?>">
                 </div>
				 </div>
            </div>
			
			
    
            <div class="form-group">
				<label class="col-md-4 control-label"></label>
				<div class="col-md-4">
					<button type="submit" class="btn btn-warning" name="update">Submit </button>
				</div>
			</div>
			
            </fieldset>
			
            </form>
        </div>
		
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    </body>
</html>
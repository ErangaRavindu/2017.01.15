<?php require('../../model/config.php'); ?>

<html>
    <head>
        <meta charset="UTF-8">
  <title>Edit Division</title>
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
				margin-top: 10px;
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
 $sql_query = "SELECT division_name,location,head,telephone,email,fax,website,image,description FROM division where division_id='$id'";
 
 $result_set = mysqli_query($connect, $sql_query);
 
 $row = mysqli_fetch_assoc($result_set);
 
}
			if(isset($_POST['update'])){
			
			$name = $_POST['name'];
                $location = $_POST['location'];
				$head = $_POST['head'];
				$telephone = $_POST['telephone'];
				$email = $_POST['email'];
				$fax = $_POST['fax'];
                $website = $_POST['website'];
				$image = $_POST['image'];
				$description = $_POST['description'];
               
                $sql = "UPDATE division SET division_name='$name',location='$location',head='$head',telephone='$telephone',email='$email',fax='$fax',website='$website',image='$image',description='$description' WHERE division_id='$id'";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("The division updated successfully!");';
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
		<legend>EDIT DIVISION</legend>
            
                       
            <div class="form-group">
                <label class="col-md-6 control-label"> Division</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                     <input required class="form-control" type="text" name="name" value="<?php echo $row['division_name']?>">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="location" class="col-sm-6 control-label">Location</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                     <input required  class="form-control" type="text" name="location" value="<?php echo $row['location']?>">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="head" class="col-sm-6 control-label">Head of the division</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input class="form-control" type="text" name="head" value="<?php echo $row['head']?>">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="telephone" class="col-sm-6 control-label">Contact number</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                     <input required id="telephone" class="form-control" type="text" name="telephone" value="<?php echo $row['telephone']?>">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="fax" class="col-sm-6 control-label">Fax</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                     <input required  class="form-control" type="text" name="fax" value="<?php echo $row['fax']?>">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="email" class="col-sm-6 control-label">Email</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                     <input class="form-control" id="email" type="email" name="email" value="<?php echo $row['email']?>">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="website" class="col-sm-6 control-label">Web site</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                     <input class="form-control" id="web_site" type="url" name="website" value="<?php echo $row['website']?>">
                 </div>
				 </div>
            </div>
			
			<div class="form-group">
                <label for="head" class="col-sm-6 control-label">Description</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                     <textarea required class="form-control" name="description" ><?php echo $row['description']?></textarea>
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="website" class="col-sm-6 control-label">Image</label>
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
					<button type="submit" class="btn btn-warning" name="update" >Submit </button>
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
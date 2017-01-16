<?php
        		include('../../model/config.php');
       ?>

<html>
    <head>
        <meta charset="UTF-8">
  <title>Facility</title>
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
				margin-top: 50px;
				margin-left: 200px;
				position: absolute;
			}    
        </style>
        
        <title>Add Facility</title>
    </head>
    <body>
        
        <?php 
		
		$result=mysqli_query($connect, "SELECT count(*) as total from facilities"); 
		$count = mysqli_fetch_assoc($result)['total']; 
		$count++; 
		$fid = "F00" . strval($count); ?>
         
        
        
        <div class="forms1">    
			<form class="well form-horizontal" action="../../controller/facility.php" method="post"  id="contact_form">
			<fieldset>
			<!-- Form Name -->
			<legend>ADD FACILITY</legend>
   
            <div class="form-group">
				<label for="id" class="col-sm-6 control-label">Facility ID</label>
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>
				<input required class="form-control" type="text" name="id" value="<?php echo $fid; ?>">
                </div>
				</div>
            </div>
            
            <div class="form-group">
                 <label for="name" class="col-sm-6 control-label">Facility</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                     <input required class="form-control" type="text" name="name">
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                 <label for="rent" class="col-sm-6 control-label">Rent (per hour)</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                     <input required  class="form-control" type="double" name="rent">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="capacity" class="col-sm-6 control-label">Capacity</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input class="form-control" type="int" name="capacity">
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                 <label for="description" class="col-sm-6 control-label">Description</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                     <input class="form-control" type="text" name="description">
                 </div>
				 </div>
            </div>
            
			
			<div class="form-group">
                 <label for="image" class="col-sm-6 control-label">Image</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                     <input class="form-control" type="file" name="image">
                 </div>
				 </div>
            </div>
			
			
            <div class="form-group">
				<label class="col-md-4 control-label"></label>
				<div class="col-md-4">
					<button type="submit" class="btn btn-warning" name="submit" >Submit </button>
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
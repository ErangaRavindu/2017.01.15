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
        
        
    </head>
    <body>
        
        <?php
        
            include('../../model/config.php');
			
			if(isset($_GET['edit_id']))
				$id = $_GET['edit_id'];
{
 $sql_query = "SELECT facility_name,rent,capacity,description,image FROM facilities where facility_id='$id'";
 
 $result_set = mysqli_query($connect, $sql_query);
 
 $row = mysqli_fetch_assoc($result_set);
 
}
			if(isset($_POST['update'])){
			
			    $name = $_POST['name'];
                $rent = $_POST['rent'];
				$capacity = $_POST['capacity'];
				$description = $_POST['description'];
				$image = $_POST['image'];
               
                $sql = "UPDATE facilities SET facility_name='$name',image='$image',description='$description',rent='$rent',capacity='$capacity' WHERE facility_id='$id'";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("The facility updated successfully!");';
                    echo 'window.location="admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}}

        ?>
         
        
        
        <div class="forms1">    
			<form class="well form-horizontal" action=" " method="post"  id="contact_form">
			<fieldset>
			<!-- Form Name -->
			<legend>EDIT FACILITY</legend>
   
           
            <div class="form-group">
                 <label for="name" class="col-sm-6 control-label">Facility</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                     <input required class="form-control" type="text" name="name" value="<?php echo $row['facility_name']?>">
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                 <label for="rent" class="col-sm-6 control-label">Rent (per hour)</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                     <input required  class="form-control" type="double" name="rent" value="<?php echo $row['rent']?>">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="capacity" class="col-sm-6 control-label">Capacity</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input class="form-control" type="int" name="capacity" value="<?php echo $row['capacity']?>">
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
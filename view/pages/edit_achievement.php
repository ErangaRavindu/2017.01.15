<?php
include('../../model/config.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
  <title>Achievement</title>
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
				margin-top: 90px;
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
 $sql_query = "SELECT award_name,category,project_name,locality FROM achievements WHERE achievement_id='$id'";
 
 $result_set = mysqli_query($connect, $sql_query);
 
 $row = mysqli_fetch_assoc($result_set);
 
}
			if(isset($_POST['update'])){
			
			$award_name = $_POST['award_name'];
                $category = $_POST['category'];
                $project_name = $_POST['project_name'];
				$locality = $_POST['locality'];

               
                $sql = "UPDATE achievements SET award_name='$award_name',category='$category',project_name='$project_name',locality='$locality' WHERE achievement_id='$id'";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("The achievement updated successfully!");';
                    echo 'window.close()';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}}

        ?>
        
               
        
        <div class="forms1">    
			<form class="well form-horizontal" action=" " method="post"  id="contact_form">
			<fieldset>
			<!-- Form Name -->
			<legend>EDIT ACHIEVEMENT</legend>
            
            
             <div class="form-group">
                 <label for="award_name" class="col-sm-6 control-label">Award Name</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-tower"></i></span>
                     <input required  class="form-control" type="double" name="award_name" value="<?php echo $row['award_name']?>">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="category" class="col-sm-6 control-label">Category</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-tower"></i></span>
                     <input class="form-control" type="text" name="category" value="<?php echo $row['category']?>">
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                 <label for="project_name" class="col-sm-6 control-label">Project Name</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-tower"></i></span>
                     <input class="form-control" type="text" name="project_name" value="<?php echo $row['project_name']?>">
                 </div>
				 </div>
            </div>
			
			<div class="form-group">
                 <label for="locality" class="col-sm-6 control-label">Locality</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                 <select name="locality" class="form-control" id="locality">
                    <option>National</option>
                    <option>International</option>
                </select>
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
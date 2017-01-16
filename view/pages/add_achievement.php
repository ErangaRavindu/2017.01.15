<?php
//session_start();
$user_id = $_SESSION['login_user'];

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
        
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                
                $achievement_id = $_POST['achievement_id'];
                $award_name = $_POST['award_name'];
                $category = $_POST['category'];
                $project_name = $_POST['project_name'];
				$locality = $_POST['locality'];   
				
                $sql = "INSERT INTO achievements (achievement_id,award_name,category,project_name,locality) VALUES ('$achievement_id','$award_name','$category','$project_name','$locality')";
                if (mysqli_query($connect,$sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("A new achievement added successfully!");';
                    echo 'window.location="admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                } 

            }
        ?>
        
         <?php
        $result=mysqli_query($connect, "SELECT count(*) as total from achievements"); 
		$count = mysqli_fetch_assoc($result)['total']; 
		$count++; 
		$aid = "A0" . strval($count);
                 
        ?> 
        
        <div class="forms1">    
			<form class="well form-horizontal" action=" " method="post"  id="contact_form">
			<fieldset>
			<!-- Form Name -->
			<legend>ADD ACHIEVEMENT</legend>
            
            <div class="form-group">
                 <label for="achievement_id" class="col-sm-6 control-label">Achievement ID</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-tower"></i></span>
                     <input required class="form-control" type="text" name="achievement_id" value="<?php echo $aid; ?>">
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                 <label for="award_name" class="col-sm-6 control-label">Award Name</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-tower"></i></span>
                     <input required  class="form-control" type="double" name="award_name">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="category" class="col-sm-6 control-label">Category</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-tower"></i></span>
                     <input class="form-control" type="text" name="category">
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                 <label for="project_name" class="col-sm-6 control-label">Project Name</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-tower"></i></span>
                     <input class="form-control" type="text" name="project_name">
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
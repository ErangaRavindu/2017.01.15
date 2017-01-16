<?php
        		include('../../model/config.php');
       ?>

<html>
    <head>
        <meta charset="UTF-8">
  <title>Course</title>
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
				margin-top: 150px;
				margin-left: 400px;
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
 $sql_query = "SELECT course_name,course_coordinator,degreeProgramme FROM courses where course_id='$id'";
 
 $result_set = mysqli_query($connect, $sql_query);
 
 $row = mysqli_fetch_assoc($result_set);
 
}
			if(isset($_POST['update'])){
			
			    $name = $_POST['cname'];
                $coordinator = $_POST['ccoordinator'];
				$degreeProgramme = $_POST['dprogramme'];
				
               
                $sql = "UPDATE courses SET course_name='$name',course_coordinator='$coordinator',degreeProgramme='$degreeProgramme' WHERE course_id='$id'";
				
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("The course updated successfully!");';
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
			<legend>EDIT COURSE</legend>
            
			
            <div class="form-group">
                 <label for="cname" class="col-sm-6 control-label">Course name</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <input required class="form-control" type="text" name="cname" value="<?php echo $row['course_name']?>" >
                 </div>
				 </div>
            </div>
			
			
            
             <div class="form-group">
                 <label for="ccoordinator" class="col-sm-6 control-label">Course Coordinator</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input required  class="form-control" type="double" name="ccoordinator" value="<?php echo $row['course_coordinator']?>">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="dprogramme" class="col-sm-6 control-label">Degree Programme</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input class="form-control" type="text" name="dprogramme" value="<?php echo $row['degreeProgramme']?>">
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
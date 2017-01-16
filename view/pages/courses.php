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
				margin-left: 200px;
				position: absolute;
			}    
        </style>
        
		<script type="text/javascript">
		//validating center form
		function testform(){
			if(document.courseForm.CName.value==''){
				alert("Please enter your Center Name");
				return false;
			}
			if(document.courseForm.CCoordinator.value==''){
				alert("Please enter Coordinator name");
				return false;
			}
			if(document.courseForm.CDegree.value==''){
				alert("Please enter phone number");
				return false;
			}
			return confirm("Do you want to register a new course");
		}

//validating fields in center form
		function validateCName(x){
	      // Validation rule
	      var re = /[A-Za-z -']$/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style white
	        document.getElementById(x).style.background ='#FFFFFF';
	        // Hide error prompt
	        document.getElementById('CNameError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('CNameError').style.display = "block";
	        return false; 
	      }
	    }

	    function validateCCoordinator(x){
	      // Validation rule
	      var re = /[A-Za-z -']$/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style white
	        document.getElementById(x).style.background ='#FFFFFF';
	        // Hide error prompt
	        document.getElementById('CCoordinatorError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('CCoordinatorError').style.display = "block";
	        return false; 
	      }
	    }
		
		
		function validateCDegree(x){
	      // Validation rule
	      var re = /[A-Za-z -']$/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style white
	        document.getElementById(x).style.background ='#FFFFFF';
	        // Hide error prompt
	        document.getElementById('CDegreeError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('CDegreeError').style.display = "block";
	        return false; 
	      }
	    }
		
	</script>
		
		
		
        <title>Add Course</title>
    </head>
    <body>
	
	<?php
        $result=mysqli_query($connect, "SELECT count(*) as total from courses"); 
		$count = mysqli_fetch_assoc($result)['total']; 
		$count++; 
		$coid = "CO0" . strval($count);
                 
        ?> 
	
        
        
              
        
        <div class="forms1">    
			<form name="courseForm" class="well form-horizontal" action="../../controller/courses.php" method="post" onsubmit="return testform()">
			<fieldset>
			<!-- Form Name -->
			<legend>ADD COURSE</legend>
            
			<div class="form-group">
				<label for="cid" class="col-sm-6 control-label">Course ID</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
					<input type="text" name="" value="" hidden="true"><input class="form-control" type="text" name="coid" value="<?php echo $coid; ?>" readonly><br>
                </div>
				</div>
            </div>
            
            <div class="form-group">
                 <label for="cname" class="col-sm-6 control-label">Course name</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <!--<input required class="form-control" type="text" name="cname">-->
					 <input required type="text" class="form-control name" placeholder="Course Name" name="CName" id="CName" onblur="validateCName(name)">
                 </div>
				 <span id="CNameError" style="display:none;" >*Must contain only letters</span>
				 </div>
            </div>
			
			
            
             <div class="form-group">
                 <label for="ccoordinator" class="col-sm-6 control-label">Course Coordinator</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <!--<input required  class="form-control" type="double" name="ccoordinator">-->
					 <input required type="text" class="form-control name" placeholder="Coordinator's name" name="CCoordinator" id="CCoordinator" onblur="validateCCoordinator(name)">
                 </div>
				 <span id="CCoordinatorError" style="display:none;">*Must contain only letters</span>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="dprogramme" class="col-sm-6 control-label">Degree Programme</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <!--<input class="form-control" type="text" name="dprogramme">-->
					 <input required type="text" class="form-control name" placeholder="Degree Programme" name="CDegree" id="CDegree" onblur="validateCDegree(name)">
                 </div>
				 <span id="CDegreeError" style="display:none;">*Must contain only letters</span>
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
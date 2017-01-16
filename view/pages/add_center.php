<?php
        		include('../../model/config.php');
       ?>

<html>
    <head>
        <meta charset="UTF-8">
  <title>Center</title>
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
        
		
		<script type="text/javascript">
		//validating center form
		function testform(){
			if(document.centerForm.CName.value==''){
				alert("Please enter your Center Name");
				return false;
			}
			if(document.centerForm.CLocation.value==''){
				alert("Please enter center Location");
				return false;
			}
			if(document.centerForm.CCoordinator.value==''){
				alert("Please enter Coordinator name");
				return false;
			}
			if(document.centerForm.CPhone.value==''){
				alert("Please enter phone number");
				return false;
			}
			if(document.centerForm.CFax.value==''){
				alert("Please enter fax number");
				return false;
			}
			if(document.centerForm.email.value==''){
				alert("Please enter email address");
				return false;
			}
			if(document.centerForm.CWebsite.value==''){
				alert("Please enter a url");
				return false;
			}
			
			return confirm("Do you want to register a new center");
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

	    function validateCLocation(x){
	      // Validation rule
	      var re = /[A-Za-z -']$/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style white
	        document.getElementById(x).style.background ='#FFFFFF';
	        // Hide error prompt
	        document.getElementById('CLocationError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('CLocationError').style.display = "block";
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
		
		// Validate phone number
		function validateCPhone(x){
	      // Validation rule
	      
	      var re = /^\+?([0-9]{2})\)?[-. ]?([0-9]{2})[-. ]?([0-9]{7})$/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style white
	        document.getElementById(x).style.background ='#FFFFFF';
	        // Hide error prompt
	        document.getElementById('CPhoneError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('CPhoneError').style.display = "block";
	        return false; 
	      }
	    }
		
		// Validate fax
		function validateCFax(x){
	      // Validation rule
	      
	      var re = /^\+?([0-9]{2})\)?[-. ]?([0-9]{2})[-. ]?([0-9]{7})/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style white
	        document.getElementById(x).style.background ='#FFFFFF';
	        // Hide error prompt
	        document.getElementById('CFaxError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('CFaxError').style.display = "block";
	        return false; 
	      }
	    }
		
		

		// Validate email
	    function validateEmail(email2){ 
	      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	      if(re.test(email2)){
	        document.getElementById('email2').style.background ='#ffffff';
	        document.getElementById('emailError').style.display = "none";
	        return true;
	      }else{
	        document.getElementById('email2').style.background ='#e35152';
	        document.getElementById('emailError').style.display = "block";
	        return false;
	      }
	    }
		
		// Validate website url
		function validateCWebsite(x){
	      // Validation rule
	      var re = /http:\/\/[A-Za-z0-9\.-]{3,}\.[A-Za-z]{3}/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style white
	        document.getElementById(x).style.background ='#FFFFFF';
	        // Hide error prompt
	        document.getElementById('CWebsiteError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('CWebsiteError').style.display = "block";
	        return false; 
	      }
	    }

	    
	</script>
		
		
    
    </head>
    <body>
        
        
        <?php
        $result=mysqli_query($connect, "SELECT count(*) as total from centers"); 
		$count = mysqli_fetch_assoc($result)['total']; 
		$count++; 
		$cid = "C00" . strval($count);
                 
        ?> 
		
	<div class="forms1">    
		<form name="centerForm" class="well form-horizontal" action="../../controller/centres.php" method="post"  onsubmit="return testform()">
		<fieldset>
		<!-- Form Name -->
		<legend>ADD CENTER</legend>
        
            <div class="form-group">
            <label class="col-md-6 control-label">Center ID</label> 
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" hidden="true"><input class="form-control" type="text" name="id" value="<?php echo $cid; ?>" readonly><br>
                </div>
				</div>
            </div>
            
            <div class="form-group">
                <label class="col-md-6 control-label"> Center</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                     <!--<input  class="form-control" type="text" name="name"> -->
					 <input required type="text" class="form-control name" placeholder="Center Name" name="CName" id="CName" onblur="validateCName(name)">
	                 
	            
                 </div>
				 <span id="CNameError" style="display:none;" >*Must contain only letters</span>
				 </div>
            </div>
            
             <div class="form-group">
                 <label for="location" class="col-sm-6 control-label">Location</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                     <!-- <input required  class="form-control" type="text" name="center_location">-->
					<input required type="text" class="form-control name" placeholder="Location" name="CLocation" id="CLocation" onblur="validateCLocation(name)">
				 </div>
				 <span id="CLocationError" style="display:none;">*Must contain only letters</span>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="coordinator" class="col-sm-6 control-label">Co-ordinator</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <!--<input class="form-control" type="text" name="coordinator">-->
					 <input required type="text" class="form-control name" placeholder="Coordinator's name" name="CCoordinator" id="CCoordinator" onblur="validateCCoordinator(name)">
                 </div>
				 <span id="CCoordinatorError" style="display:none;">*Must contain only letters</span>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="telephone" class="col-sm-6 control-label">Contact number</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                     <!--<input required class="form-control" type="text" name="telephone">-->
					 <input required type="text" class="form-control name" placeholder="+XX XX XXXXXXX" name="CPhone" id="CPhone" onblur="validateCPhone(name)">
                 </div>
				 <span id="CPhoneError" style="display:none;">*Invalid phone number</span>
				 </div>
            </div>
			
			<div class="form-group">
                <label for="description" class="col-sm-6 control-label">Description</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                     <textarea required class="form-control" name="center_description" ></textarea>
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                <label for="fax" class="col-sm-6 control-label">Fax</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                     <!--<input required  class="form-control" type="text" name="fax">-->
					 <input required type="text" class="form-control name" placeholder="+XX XX XXXXXXX" name="CFax" id="CFax" onblur="validateCFax(name)">
                 </div>
				 <span id="CFaxError" style="display:none;">*Invalid fax number</span>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="email" class="col-sm-6 control-label">Email</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                     <!--<input class="form-control" type="email" name="email">-->
					 <input type="email" class="form-control email" placeholder="Email Address" name="email" id="email2"  onblur="validateEmail(value)">
                 </div>
					<span id="emailError" style="display:none;">*Invalid email address</span>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="website" class="col-sm-6 control-label">Web site</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                     <!--<input class="form-control" type="website" name="website">-->
					 <input required type="text" class="form-control name" placeholder="Url" name="CWebsite" id="CWebsite" onblur="validateCWebsite(name)">
                 </div>
				 <span id="CWebsiteError" style="display:none;" >*Invalid url</span>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="image" class="col-sm-6 control-label">Image</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                     <input  type="file" name="image">
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
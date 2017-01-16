<?php require('../../model/config.php'); ?>

<html>
    <head>
        <meta charset="UTF-8">
  <title>Division</title>
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
			if(document.divisionForm.DName.value==''){
				alert("Please enter your Center Name");
				return false;
			}
			if(document.divisionForm.DLocation.value==''){
				alert("Please enter center Location");
				return false;
			}
			if(document.divisionForm.DHead.value==''){
				alert("Please enter Coordinator name");
				return false;
			}
			if(document.divisionForm.DPhone.value==''){
				alert("Please enter phone number");
				return false;
			}
			if(document.divisionForm.DFax.value==''){
				alert("Please enter fax number");
				return false;
			}
			if(document.divisionForm.email.value==''){
				alert("Please enter email address");
				return false;
			}
			if(document.divisionForm.DWebsite.value==''){
				alert("Please enter a url");
				return false;
			}
			
			return confirm("Do you want to register a new center");
		}

//validating fields in center form
		function validateDName(x){
	      // Validation rule
	      var re = /[A-Za-z -']$/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style white
	        document.getElementById(x).style.background ='#FFFFFF';
	        // Hide error prompt
	        document.getElementById('DNameError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('DNameError').style.display = "block";
	        return false; 
	      }
	    }

	    function validateDLocation(x){
	      // Validation rule
	      var re = /[A-Za-z -']$/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style white
	        document.getElementById(x).style.background ='#FFFFFF';
	        // Hide error prompt
	        document.getElementById('DLocationError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('DLocationError').style.display = "block";
	        return false; 
	      }
	    }
		
		function validateDHead(x){
	      // Validation rule
	      var re = /[A-Za-z -']$/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style white
	        document.getElementById(x).style.background ='#FFFFFF';
	        // Hide error prompt
	        document.getElementById('DHeadError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('DHeadError').style.display = "block";
	        return false; 
	      }
	    }
		
		// Validate phone number
		function validateDPhone(x){
	      // Validation rule
	      
	      var re = /^\+?([0-9]{2})\)?[-. ]?([0-9]{2})[-. ]?([0-9]{7})$/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style white
	        document.getElementById(x).style.background ='#FFFFFF';
	        // Hide error prompt
	        document.getElementById('DPhoneError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('DPhoneError').style.display = "block";
	        return false; 
	      }
	    }
		
		// Validate fax
		function validateDFax(x){
	      // Validation rule
	      
	      var re = /^\+?([0-9]{2})\)?[-. ]?([0-9]{2})[-. ]?([0-9]{7})/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style white
	        document.getElementById(x).style.background ='#FFFFFF';
	        // Hide error prompt
	        document.getElementById('DFaxError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('DFaxError').style.display = "block";
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
		function validateDWebsite(x){
	      // Validation rule
	      var re = /http:\/\/[A-Za-z0-9\.-]{3,}\.[A-Za-z]{3}/;
	      // Check input
	      if(re.test(document.getElementById(x).value)){
	        // Style white
	        document.getElementById(x).style.background ='#FFFFFF';
	        // Hide error prompt
	        document.getElementById('DWebsiteError').style.display = "none";
	        return true;
	      }else{
	        // Style red
	        document.getElementById(x).style.background ='#e35152';
	        // Show error prompt
	        document.getElementById('DWebsiteError').style.display = "block";
	        return false; 
	      }
	    }

	    
	</script>
		
    </head>
    <body>
        
        <?php
        
                  
        $result=mysqli_query($connect, "SELECT count(*) as total from division");
        $count = mysqli_fetch_assoc($result)['total'];
        $count++;
        
        $divid = "DIV00" . strval($count);
        ?> 
        
        <div class="forms1">    
		<form name="divisionForm" class="well form-horizontal" action="../../controller/division.php" method="post"  onsubmit="return testform()">
		<fieldset>
		<!-- Form Name -->
		<legend>ADD DIVISION</legend>
            
            <div class="form-group">
            <label class="col-md-6 control-label">Division ID</label> 
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" name="" value="" hidden="true"><input class="form-control" type="text" name="id" value="<?php echo $divid; ?>" readonly><br>
                </div>
				</div>
            </div>
            
            <div class="form-group">
                <label class="col-md-6 control-label"> Division</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                     <!--<input required class="form-control" type="text" name="name">-->
					 <input required type="text" class="form-control name" placeholder="Division Name" name="DName" id="DName" onblur="validateDName(name)">
                 </div>
				 <span id="DNameError" style="display:none;" >*Must contain only letters</span>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="location" class="col-sm-6 control-label">Location</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                     <!--<input required  class="form-control" type="text" name="location">-->
					 <input required type="text" class="form-control name" placeholder="Location" name="DLocation" id="DLocation" onblur="validateDLocation(name)">
                 </div>
				 <span id="DLocationError" style="display:none;">*Must contain only letters</span>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="head" class="col-sm-6 control-label">Head of the division</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <!--<input class="form-control" type="text" name="head">-->
					 <input required type="text" class="form-control name" placeholder="HOD" name="DHead" id="DHead" onblur="validateDHead(name)">
                 </div>
				 <span id="DHeadError" style="display:none;">*Must contain only letters</span>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="telephone" class="col-sm-6 control-label">Contact number</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                     <!--<input required id="telephone" class="form-control" type="text" name="telephone">-->
					 <input required type="text" class="form-control name" placeholder="+XX XX XXXXXXX" name="DPhone" id="DPhone" onblur="validateDPhone(name)">
                 </div>
				 <span id="DPhoneError" style="display:none;">*Invalid phone number</span>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="fax" class="col-sm-6 control-label">Fax</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                     <!--<input required  class="form-control" type="text" name="fax">-->
					 <input required type="text" class="form-control name" placeholder="+XX XX XXXXXXX" name="DFax" id="DFax" onblur="validateDFax(name)">
                 </div>
					<span id="DFaxError" style="display:none;">*Invalid fax number</span>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="email" class="col-sm-6 control-label">Email</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                     <!--<input class="form-control" id="email" type="email" name="email">-->
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
                     <!--<input class="form-control" id="web_site" type="url" name="website">-->
					 <input required type="text" class="form-control name" placeholder="Url" name="DWebsite" id="DWebsite" onblur="validateDWebsite(name)">
                 </div>
				 <span id="DWebsiteError" style="display:none;" >*Invalid url</span>
				 </div>
            </div>
			
			<div class="form-group">
                <label for="head" class="col-sm-6 control-label">Description</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                     <textarea required class="form-control" name="description" ></textarea>
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="website" class="col-sm-6 control-label">Image</label>
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
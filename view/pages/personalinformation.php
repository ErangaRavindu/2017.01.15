<html>
    <head>
        <meta charset="UTF-8">
  <title>Signup</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
 
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
<link rel="stylesheet" href="../layout/styles/style_forms.css">
<script src="../layout/scripts/jquery-2.0.0.js"></script>
<script src="../layout/scripts/bootstrap.min.js"></script>
        
        <style>
            .radio-left {
                float: left;
            }
			
			.forms1 {
				width:1200px;
				margin-top: 20px;
				margin-left: 80px;
				position: absolute;
			}    
        </style>
        
         <script>
            $(function(){
                selectUpdate();
            });
            
            function selectUpdate() {
                var sel_type = $('#s_type').val();
                var sel_staff_cat = $('#s_category').val();
                
                switch(sel_type) {
                    case "type1": {
                        var content = "<option value='cat1'>Professor</option> \
                    <option value='cat2'>Senior Lecturer</option>   \
                    <option value='cat3'>Lecturer</option>  \
                    <option value='cat4'>Instructor</option>    \
                    <option value='cat5'>Temp. Academic Staff</option>";
                        
                        $('#s_category').html(content);
                    }
                    break;
                    case "type4": {
                        var content = "<option value='cat6'>Masters Programme</option> \
                    <option value='cat7'>Undergraduate Programme</option>";
                        
                        $('#s_category').html(content);
                    }
                    break;
                    default: {
                        $('#s_category').html("");
                    }
                }
            }
            
            function check() {
                if($("#password").val() !== $("#repassword").val()) {
                    alert("Passwords mismatch");
                    return false;
                }
                return true;
            }
            
        </script>
         
    </head>
    <body>
        <?php
        
            include("../../model/config.php"); 

			if($_SERVER["REQUEST_METHOD"] == "POST") { 			
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $name_initials = $_POST['name_initials'];
                $nic=$_POST['nic'];
                $email = $_POST['email'];
                $contactno1 = $_POST['contactno1'];
                $contactno2 = $_POST['contactno2'];
                $designation = $_POST['designation'];
                $stype= $_POST['s_type'];
		        $scategory = $_POST['s_category'];                
		        $department = $_POST['department'];
                $division = $_POST['division'];
                $center=$_POST['center'];
		        $password = $_POST['password'];
		        $profilepic = $_POST['profilepic'];
                
                $sql = "INSERT INTO signup (f_name,l_name,name_initials,nic,email,contact_no1,contact_no2,designation,s_type,s_category,dep_id,center_id,division_id,password,profile_pic) VALUES ('$fname','$lname','$name_initials','$nic','$email','$contactno1','$contactno2','$designation','$stype','$scategory','$department','$center','$division','$password','$profilepic')"; 
                

                
                if (mysqli_query($connect, $sql)) {
                     echo '<script type="text/javascript">';
					echo 'alert("A new account added successfully for approval!");';
                    echo 'window.location="staff_center_back.php";';
					echo '</script>';
				} else {
                    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
 }
        ?>
        
        
        <?php
        
        $result=mysqli_query($connect, "SELECT count(*) as total from staff");
        $count = mysqli_fetch_assoc($result)['total'];
        $count++;
        $user_id = "EO" . strval($count);
        ?>
        
        <div class="forms1">    
			<form class="well form-horizontal" action=" " method="post"  id="contact_form" onsubmit='return check()'>
			<fieldset>
			<!-- Form Name -->
			<legend>WELCOME TO UCSC</legend>

            <div class="form-group">
				<label for="userid" class="col-sm-4 control-label">User ID</label>
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input required class="form-control" type="text" name="userid" value="<?php echo $user_id; ?>">
                </div>
				</div>
            </div>
            
            <div class="form-group">
                <label for="fname" class="col-sm-4 control-label">First Name</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input required class="form-control" type="text" name="fname">
                </div>
				</div>
            </div>
            
            <div class="form-group">
                <label for="lname" class="col-sm-4 control-label">Last Name</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input required  class="form-control" type="text" name="lname">
                </div>
				</div>
            </div>
            
            <div class="form-group">
                <label for="name_initials" class="col-sm-4 control-label">Name with initials</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input required  class="form-control" type="text" name="name_initials">
                </div>
				</div>
            </div>
            
            
			<div class="form-group"> 
				<label for="nic" class="col-sm-4 control-label">NIC </label>
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input required id="nic" type="text" name="nic" class="form-control">
				</div>
				</div>
			</div>
            
            
            
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Email Address</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                    <input required class="form-control" type="email" name="email">
                </div>
				</div>
            </div>
            
            <div class="form-group">
                <label for="cotactno1" class="col-sm-4 control-label">Contact Number 1</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                    <input required class="form-control" type="text" name="contactno1">
                </div>
				</div>
            </div>
            
            <div class="form-group">
                <label for="cotactno2" class="col-sm-4 control-label">Contact Number 2</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input required class="form-control" type="text" name="contactno2">
                </div>
				</div>
            </div>
                        
             <div class="form-group">
                 <label for="addline1" class="col-sm-4 control-label">Designation</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input class="form-control" type="text" name="designation">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="s_type" class="col-sm-4 control-label">Staff Type</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                 <select name="s_type" class="form-control" id="s_type" onchange="selectUpdate()">
                    <option value="type1">Academic Staff</option>
                    <option value="type2">Administrative Staff</option>
                    <option value="type3">Project Staff</option>
                    <option value="type4">Visiting Staff</option>
                </select>
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                 <label for="s_category" class="col-sm-4 control-label">Staff Category</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                 <select name="s_category" class="form-control" id="s_category">
                </select>
                 </div>
				 </div>
            </div>
            
            
            <div class="form-group">
                 <label for="department" class="col-sm-4 control-label">Department / Division / center</label>
                <div class="col-md-2 inputGroupContainer">
				<div class="input-group">
                 <label for="department" class="col-sm-4 control-label">Department</label><br/>
                 <select name="department" class="form-control" id="dep_divi_center">
                    <option></option>
                    <?php
                    $department = mysqli_query($conn, "select * from department");
                    if (mysqli_num_rows($department) > 0) {
                        while($row = mysqli_fetch_assoc($department)) {
                            echo "<option value='" . $row["dep_id"] . "'>" . $row["dep_name"]. "</option>";
                        }
                    }
                    ?>
                     </select>
                </div>
				</div>
                
                <div class="form-group">
                <div class="col-md-2 inputGroupContainer">
				<div class="input-group">
                    <label for="division" class="col-sm-4 control-label">Division</label><br/>
                    <select name="division" class="form-control" id="dep_divi_center">
                    <option></option>
                   <?php
                    $division = mysqli_query($conn, "select * from division");
                    if (mysqli_num_rows($division) > 0) {
                        while($row = mysqli_fetch_assoc($division)) {
                            echo "<option value='" . $row["division_id"] . "'>" . $row["division_name"]. "</option>";
                        }
                    }
                    ?>
                    
                </select>
                </div>
				</div>
                
                <div class="form-group">
                <div class="col-md-2 inputGroupContainer">
				<div class="input-group">
                    <label for="center" class="col-sm-4 control-label">Center</label><br/>
                    <select name="center" class="form-control" id="dep_divi_center">
                    <option></option>
                    <?php
                    $centers = mysqli_query($conn, "select * from centers");
                    if (mysqli_num_rows($centers) > 0) {
                        while($row = mysqli_fetch_assoc($centers)) {
                            echo "<option value='" . $row["center_id"] . "'>" . $row["center_name"]. "</option>";
                        }
                    }
                    ?>
                </select>
                 </div>
            </div>
            </div>
            </div>
                  
            <div class="form-group">
            <label for="password" class="col-sm-4 control-label">Password</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				<input required type="password" class="form-control" id="password" name="password">
                </div>
				</div>
            </div>
           
            <div class="form-group">
            <label for="password" class="col-sm-4 control-label">Re-confirm Password</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
            <input required type="password" class="form-control" id="repassword">
                </div>
				</div>
            </div>
            
           <div class="form-group">
                 <label for="profilepic" class="col-sm-4 control-label">Profile Image</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                     <input  type="file" name="profilepic">
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
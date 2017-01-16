<?php
#session_start();
$userid = $_SESSION['login_user'];
?>
<html>
    <head>
        <meta charset="UTF-8">
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
				width:1000px;
				margin-top: 0px;
				margin-left: 100px;
				position: absolute;
			}    
        </style>
        
        <title>Update staff profile</title>
    </head>
    <body>
        
        <?php
            
            
                include('../../model/config.php');
                
                $sql = "SELECT * FROM staff WHERE user_id='$userid'";
				
				
                $result = mysqli_query($connect, $sql);
                if (!$result) {
                    echo "Error";
                    die();
				}
                $record = mysqli_fetch_assoc($result);
                       
        ?>
        
                
                
                
    
    <div class="forms1">    
	<form class="well form-horizontal" action="../../controller/changestaff.php" method="post"  id="contact_form">
	<fieldset>
	<!-- Form Name -->
	<legend>EDIT PROFILE</legend>
  	<hr>
	
	 <div class="form-group">
      <div class="col-md-3">
        <div class="text-center">
          			<?php echo '<img width="80%" class="avatar img-circle" alt="avatar" src="../images/staff/' . $record['profile_pic'] . '"/>' ?>

          <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file" name="profile_pic">
        </div>
      </div>
	  </div>
            <div class="form-group">
                <label for="fname" class="col-sm-4 control-label">First Name</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input required id="f_name" type="text" name="f_name" class="form-control" value="<?php echo $record['f_name']?>" style="width:400px">
                </div>
				</div>
            </div>
            
            <div class="form-group">
                <label for="lname" class="col-sm-4 control-label">Last Name</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input required id="l_name" type="text" name="last_name" class="form-control" value="<?php echo $record['l_name']?>" style="width:400px">
                </div>
				</div>
            </div>
            
            <div class="form-group">
                <label for="name_initials" class="col-sm-4 control-label">Name with initials</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input required id="name_initials" type="text" name="name_initials" class="form-control" value="<?php echo $record['name_initials']?>" style="width:400px">
                </div>
				</div>
            </div>
            
            
			<div class="form-group"> 
				<label for="nic" class="col-sm-4 control-label">NIC </label>
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input required id="nic" type="text" name="nic" class="form-control" value="<?php echo $record['nic']?>" style="width:400px">
				</div>
				</div>
			</div>
            
            
            
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Email Address</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                    <input required id="email" type="email" name="email" class="form-control" value="<?php echo $record['email']?>" style="width:400px">
                </div>
				</div>
            </div>
            
            <div class="form-group">
                <label for="cotactno1" class="col-sm-4 control-label">Contact Number 1</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                    <input required id="contactno_1" type="text" name="contactno_1" class="form-control" value="<?php echo $record['contact_no1']?>" style="width:400px">
                </div>
				</div>
            </div>
            
            <div class="form-group">
                <label for="cotactno2" class="col-sm-4 control-label">Contact Number 2</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input required id="contactno_2" type="text" name="contactno_2" class="form-control" value="<?php echo $record['contact_no2']?>" style="width:400px">
                </div>
				</div>
            </div>
                       
            <div class="form-group">
                 <label for="department" class="col-sm-4 control-label">Department / Division / center</label>
                <div class="col-md-2 inputGroupContainer">
				<div class="input-group">
                 <label for="department" class="col-sm-4 control-label">Department</label><br/>
                 <select name="department" class="form-control" id="dep_divi_center" style="width:150px">
                    <option></option>
                    <?php
                    $department = mysqli_query($connect, "select * from department");
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
                    <select name="division" class="form-control" id="dep_divi_center" style="width:150px">
                    <option></option>
                   <?php
                    $division = mysqli_query($connect, "select * from division");
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
                    <select name="center" class="form-control" id="dep_divi_center" style="width:150px">
                    <option></option>
                    <?php
                    $centers = mysqli_query($connect, "select * from centers");
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
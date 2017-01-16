<html>
    <head>
        <meta charset="UTF-8">
		<title>Reservation</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
 
		<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
		<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
		<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
		<!--<link rel="stylesheet" href="css/style_forms.css">-->
        <script src="js/jquery-2.0.0.js"></script>
        <script src="../layout/scripts/moment.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css">
       
        
        <style>
            .radio-left {
                float: left;
            }
			
			.forms1 {
				width:1000px;
				margin-top: 150px;
				margin-left: 400px;
				position: absolute;
			}    
        </style>
    </head>
    <body>
        <?php
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'ucsc';
        //create connection
        $conn = mysqli_connect($server, $username, $password, $database);
        $success = false;
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            //check connection
            if (!$conn){
                die("Connection faied: ".mysqli_connect_error());
            }
            //echo "connected successfully";

            $userid = $_POST['id'];
            $reservationid = $_POST['reservationid'];
            $facilityname = $_POST['facilityid'];
            $purpose = $_POST['purpose'];               
            $start = $_POST['start'];
            $end = $_POST['end'];
            $reservationfee = $_POST['reservationfee'];
            $type="external";

            $sql = "SELECT * FROM staff WHERE user_id = '$userid' LIMIT 1";
            $res = mysqli_query($conn, $sql);

            if ($res) {
                $count = mysqli_num_rows($res);
                if ($count > 0) {
                    $type = 'internal';
                }
            }
            
            
            
            $timestampstart = strtotime('$start');
            $timestampend = strtotime('$end');
            $diff= $timestampend-$timestampstart;
            // print ($diff); 
            
            
            

            $sql = "INSERT INTO reservation (r_id,facility_id,start,end,purpose,user_id,r_fee,type) VALUES ('$reservationid','$facilityname','$start','$end','$purpose','$userid','$reservationfee','$type')";
            if (mysqli_query($conn, $sql)) {

                $success = true;
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                $success = true;
            } 
        }
        $result=mysqli_query($conn, "SELECT count(*) as total from reservation");
        $count = mysqli_fetch_assoc($result)['total'];
        $count++;
        $rid= "R000" . strval($count);

    ?>
        
        <?php if (isset($_POST['fname']) && $success == true) : ?>
            <div class="alert alert-success alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> We got it...
            </div>
        <?php endif; ?>
        
        <div class="forms1">    
			<form class="well form-horizontal" action=" " method="post"  id="contact_form">
			<fieldset>
			<!-- Form Name -->
			<legend>RESERVATION</legend>
        <div style="float:left;">
		<h4 style="margin-bottom:20px;">Contact Details</h4>
		
		 <div class="form-group">
                 <label for="id" class="col-sm-6 control-label">NIC/User ID</label>
                 <div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input class="form-control" type="text" name="id" id="id" style="width:200px;">
                 </div>
				 </div>
          </div>

			
		 <div class="form-group">
                 <label for="fname" class="col-sm-6 control-label">First Name</label>
                 <div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input class="form-control" type="text" name="fname" id="fname" style="width:200px;">
                 </div>
				 </div>
            </div>

			
		 <div class="form-group">
                 <label for="lname" class="col-sm-6 control-label">Last Name</label>
                 <div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input class="form-control" type="text" name="lname" id="lname" style="width:200px;">
                 </div>
				 </div>
            </div>
			
			
		<div class="form-group">
                 <label for="contact1" class="col-sm-6 control-label">Contact No.1</label>
                 <div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                     <input class="form-control" type="text" name="contact1" id="contact1" style="width:200px;">
                 </div>
				 </div>
            </div>
			
		<div class="form-group">
                 <label for="contact2" class="col-sm-6 control-label">Contact No.2</label>
                 <div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                     <input class="form-control" type="text" name="contact2" id="contact1" style="width:200px;">
                 </div>
				 </div>
            </div>
			
		<div class="form-group">
                 <label for="email" class="col-sm-6 control-label">Email</label>
                 <div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                     <input class="form-control" type="text" name="email" id="email" style="width:200px;">
                 </div>
				 </div>
            </div>
		</div>
		
		<div style="float:right;">
		<h4 style="margin-bottom:20px;">Reservation Details</h4>
		
   
             <div class="form-group">
                 <label for="reservationid" class="col-sm-4 control-label">Reservation ID</label>
                <div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>
                     <input required  class="form-control" disabled="disabled" type="text" id="reservationid" name="reservationid" value="<?php echo $rid; ?>" style="width:200px;">
                 </div>
				 </div>
            </div>

         
             <div class="form-group">
                 <label for="facilityname" class="col-sm-4 control-label">Facility</label>
                 <div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <select name="facilityid" id="facilityid" class="form-control" style="width:200px;">
                    <?php
                    $facilities = mysqli_query($conn, "select * from facilities");
                    if (mysqli_num_rows($facilities) > 0) {
                        while($row = mysqli_fetch_assoc($facilities)) {
                            echo "<option value='" . $row["facility_id"] . "'>" . $row["facility_name"]. "</option>";
                        }
                    }
                    ?>
                	</select>
                 </div>
				 </div>
            </div>
            

             <div class="form-group">
                 <label for="purpose" class="col-sm-4 control-label">Purpose</label>
                 <div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-question-sign"></i></span>
                     <input class="form-control" type="text" name="purpose" style="width:200px;">
                 </div>
				 </div>
            </div>

            

             <div class="form-group">
                 <label for="start" class="col-sm-4 control-label">Start</label>
                 <div class="col-sm-6">
                    <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="start" style="width:200px;"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#datetimepicker1').datetimepicker({
                                format : 'YYYY/MM/DD, HH:mm'
                            });
                        });
                    </script>
                 </div>
             </div>
            
            <div class="form-group">
                 <label for="end" class="col-sm-4 control-label">End</label>
                 <div class="col-sm-6">
                    <div class='input-group date' id='datetimepicker2'>
                    <input type='text' class="form-control" name="end" style="width:200px;" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker2').datetimepicker({
                                format : 'YYYY/MM/DD, HH:mm'
                            });
                        });
                    </script>
                 </div>
             </div>
            
	    
	      <div class="form-group">
                 <label for="reservationfee" class="col-sm-4 control-label">Reservation Fee</label>
                 <div class="col-md-6 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                     <input class="form-control" type="text" name="reservationfee" style="width:200px;">
                 </div>
				 </div>
          </div>
          </div>
		  
	      <div class="form-group">
				<label class="col-md-4 control-label"></label>
				<div class="col-md-4">
					<button type="submit" class="btn btn-warning" name="submit" style="margin-left:850px;">Submit </button>
				</div>
			</div>
			
            </fieldset>
			
            </form>
        </div>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
        <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
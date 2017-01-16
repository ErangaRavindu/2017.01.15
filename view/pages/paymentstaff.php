<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <script src="../../js/jquery-2.0.0.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Payment Form</title>
    </head>
    <body>
        <?php
        
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $server = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'ucsc';

                //create connection
                $conn = mysqli_connect($server, $username, $password, $database);

                //check connection
                if (!$conn){
                    die("Connection faied: ".mysqli_connect_error());
                }
                /*echo "connected successfully";*/

		 $sql = "SELECT * FROM staff WHERE user_id='$uid'";
                
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo "Error";
                    die();
				}
                $record = mysqli_fetch_assoc($result);


                
		$paymentid = $_POST['paymentid'];
		$reservationid = $_POST['reservationid'];
		$paymenttype = $_POST['paymenttype'];
                $uid = $_POST['uid'];
		$fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $address = $_POST['address'];
                $aline1 = $_POST['aline1'];
		$aline2 = $_POST['aline2'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$contactno1 = $_POST['contactno1'];
		$contactno2 = $_POST['contactno2'];
		$email = $_POST['email'];
		$amount = $_POST['amount'];
		$remarks = $_POST['remarks'];
		
		

                $sql = "INSERT INTO payment (pay_id,r_id,pay_type,amount,remarks,user_id) VALUES ('$paymentid','$reservationid','$paymenttype','$amount','$remarks','$uid')";
                /*if (mysqli_query($conn, $sql)) {
                    echo "insert successful";
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                } */

            }
        ?>
        
         <?php
        
            $server = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'ucsc';

                //create connection
                $conn = mysqli_connect($server, $username, $password, $database);

                //check connection
                if (!$conn){
                    die("Connection faied: ".mysqli_connect_error());
                }
        
        
        ?> 
        
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Payment</h2>
        <form method="post" action="">

	<div class="form-group">
                 <label for="paymentid" class="col-sm-6 control-label">Payment ID</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="paymentid">
                 </div>
            </div>
            


	<div class="form-group">
                 <label for="reservationid" class="col-sm-6 control-label">Reservation ID</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="reservationid">
                 </div>
            </div>



	    <div class="form-group">
                 <label for="uid" class="col-sm-6 control-label">User ID</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="uid">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="fname" class="col-sm-6 control-label">First Name</label>
                 <div class="col-sm-5">
                     <input required  class="form-control" type="text" name="fname" value="<?php echo $record['f_name']?>">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="lname" class="col-sm-6 control-label">Last Name</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="lname" value="<?php echo $record['l_name']?>">
                 </div>
            </div>
            
             

             <div class="form-group">
                 <label for="aline1" class="col-sm-6 control-label">Address Line 1</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="aline1" value="<?php echo $record['add_line1']?>">
                 </div>
            </div>

	    <div class="form-group">
                 <label for="aline2" class="col-sm-6 control-label">Address Line 2</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="aline2" value="<?php echo $record['add_line2']?>">
                 </div>
            </div>

	    <div class="form-group">
                 <label for="city" class="col-sm-6 control-label">City</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="city" value="<?php echo $record['add_city']?>">
                 </div>
            </div>


	    <div class="form-group">
                 <label for="country" class="col-sm-6 control-label">Country</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="country" value="<?php echo $record['add_country']?>">
                 </div>
            </div>

	    <div class="form-group">
                 <label for="contactno1" class="col-sm-6 control-label">Contact Number1</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="contactno1" value="<?php echo $record['contact_no1']?>">
                 </div>
            </div>
 
	    <div class="form-group">
                 <label for="contactno2" class="col-sm-6 control-label">Contact Number2</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="contactno2" value="<?php echo $record['contact_no2']?>">
                 </div>
            </div>

            <div class="form-group">
                 <label for="email" class="col-sm-6 control-label">Email</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="email" name="email" value="<?php echo $record['email']?>">
                 </div>
            </div>
            
	    
            
	    <div class="form-group">
                 <label for="paymenttype" class="col-sm-6 control-label">Payment Type</label>
                 <div class="col-sm-5">
                 <select>
                    <option value="f0001">Course Fee</option>
                    <option value="f0002">Donation</option>
                </select>
                 </div>
            </div>

	    
	    	    <div class="form-group">
                 <label for="amount" class="col-sm-6 control-label">Reservation Fee</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="amount">
                 </div>
            </div>

	<div class="form-group">
                 <label for="remarks" class="col-sm-6 control-label">Remarks</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="remarks">
                 </div>

	    
	    <button type="submit" class="btn btn-default" style="margin-left:-133px;">Submit</button>
              
            </form>
        </div>
    </body>
</html>
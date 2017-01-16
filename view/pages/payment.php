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

                
		$paymentid = $_POST['paymentid'];
		$reservationid = $_POST['reservationid'];
		$reservationfee = $_POST['reservationfee'];
		$paymenttype = $_POST['paymenttype'];
		$nic = $_POST['nic'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $address = $_POST['address'];
                $line1 = $_POST['line1'];
		$line2 = $_POST['line2'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$contactno1 = $_POST['contactno1'];
		$contactno2 = $_POST['contactno2'];
		$email = $_POST['email'];
		$amount = $_POST['amount'];
		$remarks = $_POST['remarks'];
		
		

                $sql = "INSERT INTO payment (pay_id,r_id,pay_type,amount,remarks,v_nic) VALUES ('$paymentid','$reservationid','$paymenttype','$amount','$remarks','$nic')";
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
        <form class="form-horizontal"  method="post" action="">
            <div class="form-group">
                 <label for="nic" class="col-sm-4 control-label">NIC</label>
                 <div class="col-sm-3">
                     <input required class="form-control" type="text" name="nic">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="fname" class="col-sm-4 control-label">First Name</label>
                 <div class="col-sm-3">
                     <input required  class="form-control" type="double" name="fname">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="lname" class="col-sm-4 control-label">Last Name</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="int" name="lname">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="address" class="col-sm-4 control-label">Address</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="address">
                 </div>
            </div>
            

             <div class="form-group">
                 <label for="line1" class="col-sm-4 control-label">Line 1</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="line1">
                 </div>
            </div>

	    <div class="form-group">
                 <label for="line2" class="col-sm-4 control-label">Line 2</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="line2">
                 </div>
            </div>

	    <div class="form-group">
                 <label for="city" class="col-sm-4 control-label">City</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="city">
                 </div>
            </div>


	    <div class="form-group">
                 <label for="country" class="col-sm-4 control-label">Country</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="country">
                 </div>
            </div>

	    <div class="form-group">
                 <label for="contactno" class="col-sm-4 control-label">Contact Number</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="contactno">
                 </div>
            </div>
 
            <div class="form-group">
                 <label for="email" class="col-sm-4 control-label">Email</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="email" name="email">
                 </div>
            </div>
            
	    <div class="form-group">
                 <label for="reservationid" class="col-sm-4 control-label">Reservation ID</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="reservationid">
                 </div>
            </div>
            <table class="table">
	   <tr>
   	   <td>
	    <div class="form-group">
                 <label for="facilityname" class="col-sm-4 control-label">Facility Name</label>
                 <div class="col-sm-3">
                 <select>
                    <option value="f0001">Auditorium</option>
                    <option value="f0002">Digital Studio</option>
                </select>
                 </div>
            </div></td>	    
            <td>
	    <div class="form-group">
                 <label for="facilityid" class="col-sm-4 control-label">Facility ID</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="facilityid">
                 </div>
            </div></td>

</tr>
</table>

	    <div class="form-group">
                 <label for="date" class="col-sm-4 control-label">Date</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="date">
                 </div>
            </div>

	    <div class="form-group">
                 <label for="purpose" class="col-sm-4 control-label">Purpose</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="purpose">
                 </div>
            </div>
 
	    <div class="form-group">
                 <label for="stime" class="col-sm-4 control-label">Start Time</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="stime">
                 </div>
            </div>
 
	    <div class="form-group">
                 <label for="etime" class="col-sm-4 control-label">End Time</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="etime">
                 </div>
            </div>

	    <div class="form-group">
                 <label for="reservationfee" class="col-sm-4 control-label">Reservation Fee</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="reservationfee">
                 </div>
            </div>	    
	    <button type="submit" class="btn btn-default" style="margin-left:-133px;">Submit</button>
              
            </form>
        </div>
    </body>
</html>
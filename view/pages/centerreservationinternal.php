<?php $user_id = $_SESSION['login_user']; ?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery-2.0.0.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="moment.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css">
        <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>
       
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
       
    <title>Reservation Form</title>
    </head>
    <body>
        <?php
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'ucsc';
        //create connection
        $conn = mysqli_connect($server, $username, $password, $database);
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            //check connection
            if (!$conn){
                die("Connection faied: ".mysqli_connect_error());
            }
            //echo "connected successfully";

            $reservationid = $_POST['reservationid'];
            $facilityname = $_POST['facilityid'];
            $purpose = $_POST['purpose'];               
            $start = $_POST['start'];
            $end = $_POST['end'];
            $type="internal";

            $sql = "INSERT INTO reservation (user_id,r_id,facility_id,start,end,purpose,type) VALUES ('$user_id','$reservationid','$facilityname','$start','$end','$purpose','$type')";
            if (mysqli_query($conn, $sql)) {

                echo '<script type="text/javascript">';
					echo 'alert("The reservation added to approval !");';
                    echo 'window.location="centers_only.php";';
					echo '</script>';
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            } 
        }
        $result=mysqli_query($conn, "SELECT count(*) as total from reservation");
        $count = mysqli_fetch_assoc($result)['total'];
        $count++;
        $rid= "R00" . strval($count);

    ?>

        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Reservation Form</h2>
        <form class="form-horizontal"  method="post" action="">


   
             <div class="form-group">
                 <label for="reservationid" class="col-sm-4 control-label">Reservation ID</label>
                 <div class="col-sm-3">
                     <input required  class="form-control" type="text" name="reservationid" value="<?php echo $rid; ?>">
                 </div>
            </div>

                   
             <div class="form-group">
                 <label for="facilityname" class="col-sm-4 control-label">Facility</label>
                 <div class="col-sm-3">
                    <select name="facilityid" class="form-control">
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
            

             <div class="form-group">
                 <label for="purpose" class="col-sm-4 control-label">Purpose</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="purpose">
                 </div>
            </div>

            

             <div class="form-group">
                 <label for="start" class="col-sm-4 control-label">Start</label>
                 <div class="col-sm-3">
                    <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="start" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker1').datetimepicker({
                                format : 'YYYY/MM/DD, HH:mm'
                            });
                        });
                    </script>
                 </div>
             </div>
            
            <div class="form-group">
                 <label for="end" class="col-sm-4 control-label">End</label>
                 <div class="col-sm-3">
                    <div class='input-group date' id='datetimepicker2'>
                    <input type='text' class="form-control" name="end" />
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
            
	    
	                 
	      <button type="submit & pay" class="btn btn-default" style="margin-left:-133px;">Submit</button>
              
            </form>
        </div>
    </body>
</html>
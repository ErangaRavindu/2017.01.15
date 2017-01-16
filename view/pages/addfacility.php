<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery-2.0.0.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Add facility</title>
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
                
                $id = $_POST['id'];
                $name = $_POST['name'];
                $rent = $_POST['rent'];
                $capacity = $_POST['capacity'];
                $description= $_POST['description'];
               
                $sql = "INSERT INTO facilities (facility_id,facility_name,rent,capacity,description) VALUES ('$id','$name','$rent','$capacity','$description')";
                if (mysqli_query($conn, $sql)) {
                    //echo "insert successful";
				} else {
                    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                } 

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
        
        $result=mysqli_query($conn, "SELECT count(*) as total from facilities");
        $count = mysqli_fetch_assoc($result)['total'];
        $fid = "F000" . strval($count);
        ?> 
        
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Add facility</h2>
        <form class="form-horizontal"  method="post" action="">
            <div class="form-group">
            <label for="id" class="col-sm-4 control-label">Facility ID</label>
                <div class="col-sm-3">
            <input required class="form-control" type="text" name="id" value="<?php echo $fid; ?>">
                </div>
            </div>
            
            <div class="form-group">
                 <label for="name" class="col-sm-4 control-label">Facility</label>
                 <div class="col-sm-3">
                     <input required class="form-control" type="text" name="name">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="rent" class="col-sm-4 control-label">Rent(per hour)</label>
                 <div class="col-sm-3">
                     <input required  class="form-control" type="double" name="rent">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="capacity" class="col-sm-4 control-label">Capacity</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="int" name="capacity">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="description" class="col-sm-4 control-label">Description</label>
                 <div class="col-sm-3">
                     <textarea class="form-control" type="text" name="description"></textarea>
                 </div>
            </div>
            
            <button type="submit" class="btn btn-default" style="margin-left:-133px;">Submit</button>
              
            </form>
        </div>
    </body>
</html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery-2.0.0.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script>
            function checkEmail() {
                var email = $('#email').val();
                $.ajax({
                    url: "emailCheckcenter.php",
                    async: true,
                    type: "POST",
                    data: {email: email}
                })
                .done(function(data){
                     if(data === 'fail') {
                         alert("Email exists");
                     }
                });
            }
            
                function phonenumber(telephone){  
      var phoneno = /^\d{10}$/;  
      if(telephone.value.match(phoneno))  
      {  
          return true;  
      }  
      else  
      {  
         alert("Please provide a valid Contact Number");  
         return false;  
      }  
      }  
            
        
        
        </script>
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Add Center</title>
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
                //echo "connected successfully";
                
                $id = $_POST['id'];
                $name = $_POST['name'];
                $location = $_POST['location'];
                $cocordinator= $_POST['coordinator'];
                $telephone = $_POST['telephone'];
                $fax= $_POST['fax'];
                $email = $_POST['email'];
                $website= $_POST['website'];
                $image=$_POST['image'];
                /*echo "id " . $id;*/
               
                $sql = "INSERT INTO centers (center_id,center_name,center_location,center_coordinator,center_telephone,center_fax,center_email,website,image) VALUES ('$id','$name','$location','$cocordinator',' $telephone','$fax','$email','$website','$image')";
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
        
        $result=mysqli_query($conn, "SELECT count(*) as total from centers");
        $count = mysqli_fetch_assoc($result)['total'];
        $count++;
        $cid = "C000" . strval($count);
        ?> 
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Centers</h2>
        <form class="form-horizontal"  method="post" action="">
            
            <div class="form-group">
                <label for="id" class="col-sm-4 control-label">Center ID</label>
                <div class="col-sm-3">
                    <input type="text" name="" value="" hidden="true"><input class="form-control" type="text" name="id" value="<?php echo $cid; ?>"><br>
                </div>
            </div>
            
            <div class="form-group">
                 <label for="name" class="col-sm-4 control-label">Center</label>
                 <div class="col-sm-3">
                     <input required class="form-control" type="text" name="name">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="location" class="col-sm-4 control-label">Location</label>
                 <div class="col-sm-3">
                     <input required  class="form-control" type="text" name="location">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="coordinator" class="col-sm-4 control-label">Co-ordinator</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="coordinator">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="telephone" class="col-sm-4 control-label">Contact number</label>
                 <div class="col-sm-3">
                     <input required class="form-control" type="text" name="telephone" onmouseleave="phonenumber(telephone)">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="fax" class="col-sm-4 control-label">Fax</label>
                 <div class="col-sm-3">
                     <input required  class="form-control" type="text" name="fax">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="email" class="col-sm-4 control-label">Email</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="email" name="email" oninput="checkEmail()">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="website" class="col-sm-4 control-label">Web site</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="wrbsite" name="website">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="image" class="col-sm-4 control-label">Image</label>
                 <div class="col-sm-3">
                     <input  type="file" name="image">
                 </div>
            </div>
    
            <button type="submit" class="btn btn-default" style="margin-left:-133px;">Submit</button>
              
            </form>
        </div>
    </body>
</html>
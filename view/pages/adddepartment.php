<html>
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery-2.0.0.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/functions.js"></script>
        <script>
            function checkEmail() {
                var email = $('#email').val();
                $.ajax({
                    url: "emailCheckdep.php",
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
        
        <title>Add Department</title>
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
                $head = $_POST['head'];
                $telephone = $_POST['telephone'];
                $fax= $_POST['fax'];
                $email = $_POST['email'];
                $website= $_POST['website'];
                $image=$_POST['image'];
                
               
                $sql = "INSERT INTO department (dep_id,dep_name,location,dep_head,telephone,fax,email,website,image) VALUES ('$id','$name','$location','$head','$telephone','$fax','$email','$website','$image')";
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
        
        $result=mysqli_query($conn, "SELECT count(*) as total from department");
        $count = mysqli_fetch_assoc($result)['total'];
        $count++;
        $did = "D000" . strval($count);
        ?> 
        
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Department</h2>
        <form class="form-horizontal"  method="post" action="">
            <div class="form-group">
            <label for="id" class="col-sm-4 control-label">Department ID</label>
                <div class="col-sm-3">
            <input required class="form-control" type="text" name="id" value="<?php echo $did; ?>"><br>
                </div>
            </div>
            
            <div class="form-group">
                 <label for="name" class="col-sm-4 control-label">Department</label>
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
                 <label for="head" class="col-sm-4 control-label">Head of the department</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="head">
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
                     <input class="form-control" type="url" name="website">
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
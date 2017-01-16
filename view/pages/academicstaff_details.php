<html>
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery-2.0.0.js"></scrip>
        <script src="../js/bootstrap.min.js"></script>
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>academicstaff details</title>
        
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
                
                $nameid= $_POST['nameid'];
                $title = $_POST['title'];
                $qualifications = $_POST['qualifications'];
                $bio= $_POST['bio'];
                $academic=$_POST['academic'];
                $awards= $_POST['awards'];
                $research= $_POST['research'];
                $activity= $_POST['activity'];
                $teaching = $_POST['teaching'];
                $employee = $_POST['employee'];
		        $consultation = $_POST['consultation'];
                $projects= $_POST['projects'];
		        $facebook= $_POST['facebook'];
                $linkedin= $_POST['linkedin'];
		        $scholar = $_POST['scholar'];                
		        $research_gate = $_POST['research_gate'];
                $academia = $_POST['academia'];
                $designation=$_POST['designation'];
                $userid=$_POST['userid'];
		        
                
                   $sql = "INSERT INTO academicemp_data (name_id,title,qualifications,bio,academic,awards,research,activity,teaching,employee,consultation,projects,facebook,linkedin,scholar,research_gate,academia,designation,user_id) VALUES ('$nameid','$title','$qualifications','$bio','$academic','$awards','$research','$activity','$teaching','$employee','$consultation','$projects','$facebook','$linkedin','$scholar','$research_gate','$academia','$designation','$userid')"; 
                

                
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

        ?>
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:25px;">My Account</h2>
        <form class="form-horizontal" method="post" action="" onsubmit='return check()'>
            
            <div class="form-group">
                 <label for="id" class="col-sm-4 control-label">User ID</label>
                 <div class="col-sm-6">
                 <input required class="form-control" type="text" name="userid">    
                 </div>
            </div>
            
            <div class="form-group">
            <label for="userid" class="col-sm-4 control-label">Name ID</label>
                <div class="col-sm-6">
            <input required class="form-control" type="text" name="nameid">
                </div>
            </div>
            
            <div class="form-group">
                 <label for="title" class="col-sm-4 control-label">Title</label>
                 <div class="col-sm-6">
                     <input required class="form-control" type="text" name="title">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="qualifications" class="col-sm-4 control-label">Qualifications</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="qualifications"></textarea>
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="bio" class="col-sm-4 control-label">Biography</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="bio"></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="academic" class="col-sm-4 control-label">Academic Record</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="academic"></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="awards" class="col-sm-4 control-label">Awards</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="awards"></textarea>
                 </div>
            </div>
            
        <div class="form-group"> 
        <label for="research" class="col-sm-4 control-label">Research Interests</label>
        <div class="col-sm-6">
            <textarea required class="form-control" name="research"></textarea>
        </div></div>
            
                        
             <div class="form-group">
                 <label for="activity" class="col-sm-4 control-label">Activity</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="activity"></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="teaching" class="col-sm-4 control-label">Teaching Experience</label>
                 <div class="col-sm-6">
                    <textarea required class="form-control" name="teaching"></textarea>
        </div>
                 </div>
            
            <div class="form-group">
                 <label for="employee" class="col-sm-4 control-label">Employeement Record</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="employee"></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="consultation" class="col-sm-4 control-label">Consultation</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="consultation"></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="projects" class="col-sm-4 control-label">Projects Supervised</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="projects"></textarea>
                 </div>
            </div>
                     
            <div class="form-group">
                 <label for="facebook" class="col-sm-4 control-label">Facebook</label>
                 <div class="col-sm-6">
                     <input class="form-control" type="url" name="facebook">
                 </div>
            </div>
                     
            <div class="form-group">
                 <label for="linkedin" class="col-sm-4 control-label">Linkedin</label>
                 <div class="col-sm-6">
                     <input class="form-control" type="url" name="linkedin">
                 </div>
            </div>
                     
            <div class="form-group">
                 <label for="research_gate" class="col-sm-4 control-label">Research Gateway</label>
                 <div class="col-sm-6">
                     <input class="form-control" type="url" name="research_gate">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="scholar" class="col-sm-4 control-label">Scholar</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="scholar"></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="academia" class="col-sm-4 control-label">Academia</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="academia"></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="designation" class="col-sm-4 control-label">Designation</label>
                 <div class="col-sm-6">
                     <input class="form-control" type="text" name="designation">
                 </div>
            </div>
            
            <button type="submit" class="btn btn-default" style="margin-left:-133px;">Submit</button>
              
            </form>
        </div>
    </body>
</html>
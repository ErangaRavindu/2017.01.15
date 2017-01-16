<?php
#session_start();
$userid = $_SESSION['login_user'];
?>
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
        <title>Edit My Account</title>
    </head>
    <body>
        
        <?php
            
            
                include('../../model/config.php');
                
                $sql = "SELECT profile_pic,f_name,l_name,name_initials,email,contact_no1,contact_no2,center_id FROM staff where user_id='$userid'";
				
				
                $result = mysqli_query($connect, $sql);
                if (!$result) {
                    echo "Error";
                    die();
				}
                $record = mysqli_fetch_assoc($result);
                       
        ?>
        
                
                
                
    
    <form method="post" action="../../controller/changeadminuser.php">

    <div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <div class="col-md-3">
        <div class="text-center">
          					  <?php echo '<img width="40%" class="avatar img-circle" alt="avatar" src="../images/staff/' . $record['profile_pic'] . '"/>' ?>

          <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file" name="profile_pic">
        </div>
      </div>
                        <table class="table">
                            <tr>
                                <th colspan="4" id="form_titles"><h3>Personal Information</h3></th>                        
                            </tr>
                            <tr>
                                <td colspan="4" ><span id="errors"></span></td>                  
                            </tr>
                            <tr>
                                <td><div class="form-group">
                                    <label for="full_name" class="col-lg-5 control-label">Full Name :</label><br /><br/>
                                    <label for="f_name" class="col-lg-5 control-label">First Name</label><br />
                                        <input required id="f_name" type="text" name="f_name" class="form-control" value="<?php echo $record['f_name']?>" style="width:400px"></div>
                                    </td>
                                                                
                                <td><br /><br/><div class="form-group">
                                    <label for="l_name" class="col-lg-5 control-label"> Last Name</label><br />
                                    <input required id="l_name" type="text" name="l_name" class="form-control" value="<?php echo $record['l_name']?>" style="width:400px"></div>
                                    </td>
									
										
					
								
                            </tr>
                            
                             <tr>
                                 <td><div class="form-group">
                                 <label for="name_initials" class="col-lg-6 control-label">Name with initials :</label><br /><br/> 
                                 <input required id="name_initials" type="text" name="name_initials" class="form-control" value="<?php echo $record['name_initials']?>" style="width:400px"></div>
                                 </td>
								 
							
														
								
                            
                                                       
                            <tr>
                                <td><div class="form-group">
                                <label for="email" class="col-sm-5 control-label">Email: </label><br /><br/> 
                                    <input required id="email" type="email" name="email" class="form-control" value="<?php echo $record['email']?>" style="width:400px"></div></td>
                            
															
														
								
								
							</tr>
                            
                             <tr>
                                 <td><div class="form-group">
                                 <label for="contact_no1" class="col-sm-5 control-label">Contact no 1:</label><br />
                                     <input required id="contact_no1" type="text" name="contact_no1" class="form-control" value="<?php echo $record['contact_no1']?>" style="width:400px"></div></td>
                                 
								 								
						
								
								
								 </tr>
								 
								 <tr>
                                 <td><div class="form-group">
                                 <label for="contact_no2" class="col-sm-5 control-label">Contact no 2 :</label><br />
                                     <input required id="contact_no2" type="text" name="contact_no2" class="form-control" value="<?php echo $record['contact_no2']?>" style="width:400px"></div></td>
                                 
								 								
						
								
								
								 </tr>
                            
                                 
														
								
                             <tr>
                            
                            
                <td><br/><br/><div class="form-group">
                <div class="col-sm-10">
                    <label for="center" class="col-sm-10 control-label">Center</label><br/>
                    <select name="center" class="form-control" id="dep_divi_center">
                    <option></option>
                    <option <?php if($record['center_id'] == 'C0001') echo "selected"; ?> value="C0001">Advanced Digital Media Technology Center (ADMTC)</option>
                    <option <?php if($record['center_id'] == 'C0002') echo "selected"; ?> value="C0002">Computing Services Center (CSC)</option>
                    <option <?php if($record['center_id'] == 'C0003') echo "selected"; ?> value="C0003">Digital Forensic Center (DFC)</option>
                    <option <?php if($record['center_id'] == 'C0004') echo "selected"; ?> value="C0004">E-learning Center (ELC)</option>
                    <option <?php if($record['center_id'] == 'C0005') echo "selected"; ?> value="C0005">External Degree Center (EDC)</option>
                    <option <?php if($record['center_id'] == 'C0006') echo "selected"; ?> value="C0006">Professional Development Center (PDC)</option>
					<option <?php if($record['center_id'] == 'C0007') echo "selected"; ?> value="C0007">Network Operating Center (NOC)</option>
                </select>
                    </div></div></td>
					
					
								 
             </tr>
            
                            
                            
                            <tr>
                                <td  colspan="4" align="center"><button type="submit" class="btn btn-default" style="margin-left:-133px;">UPDATE PROFILE</button>
                                </td>
                            </tr>
       
        </table>
        
        </div>
        </div>
        </form>
    </body>
</html>
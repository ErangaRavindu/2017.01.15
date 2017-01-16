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
                
                $sql = "SELECT staff.profile_pic,staff.f_name,staff.l_name,staff.name_initials,academicemp_data.research,staff.email,staff.contact_no1,
				staff.dep_id,staff.center_id,staff.division_id,academicemp_data.title,academicemp_data.qualifications,academicemp_data.bio,
				academicemp_data.academic,academicemp_data.awards,academicemp_data.activity,academicemp_data.teaching,academicemp_data.employee,
				academicemp_data.consultation,academicemp_data.projects,academicemp_data.facebook,academicemp_data.linkedin,academicemp_data.scholar,
				academicemp_data.research_gate,academicemp_data.location FROM staff inner join academicemp_data on staff.user_id=academicemp_data.user_id where staff.user_id='$userid'";
				
				
                $result = mysqli_query($connect, $sql);
                if (!$result) {
                    echo "Error";
                    die();
				}
                $record = mysqli_fetch_assoc($result);
                       
        ?>
        
                
                
                
    
    <form style="margin-left:110px" method="post" action="../../controller/changeuser.php">

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
									
									<td><br/><br/><div class="form-group">
                <div class="col-sm-10">
                    <label for="title" class="col-sm-10 control-label">Title</label><br/>   
                    <select name="title" class="form-control" id="title">
                    <option></option>
                    <option <?php if($record['title'] == 'Mr') echo "selected"; ?> value="Mr">Mr</option>
                    <option <?php if($record['title'] == 'Mrs') echo "selected"; ?> value="Mrs">Mrs</option>
                    <option <?php if($record['title'] == 'Dr') echo "selected"; ?> value="Dr">Dr</option>
                    <option <?php if($record['title'] == 'Prof') echo "selected"; ?> value="Prof">Prof</option>
                    <option <?php if($record['title'] == 'Ms') echo "selected"; ?> value="Ms">Ms</option>
                    </div> </div>
                    </td>
					
					
								
                            </tr>
                            
                             <tr>
                                 <td><div class="form-group">
                                 <label for="name_initials" class="col-lg-6 control-label">Name with initials :</label><br /><br/> 
                                 <input required id="name_initials" type="text" name="name_initials" class="form-control" value="<?php echo $record['name_initials']?>" style="width:400px"></div>
                                 </td>
								 
								 <td><div class="form-group">
                            <label for="qualifications">Qualifications :</label>
                            <textarea required class="form-control" id="qualifications" name="qualifications"><?php echo $record['qualifications']?></textarea>
                            </div>
                                </td>
								
								<td><div class="form-group">
                            <label for="activity">Activities :</label>
                            <textarea required class="form-control" id="activity" name="activity"><?php echo $record['activity']?></textarea>
                            </div>
                                </td>
								
								
                            
                                                       
                            <tr>
                                <td><div class="form-group">
                                <label for="email" class="col-sm-5 control-label">Email: </label><br /><br/> 
                                    <input required id="email" type="email" name="email" class="form-control" value="<?php echo $record['email']?>" style="width:400px"></div></td>
                            
								<td><div class="form-group">
                            <label for="bio">Biography :</label>
                            <textarea required class="form-control" id="bio" name="bio"><?php echo $record['bio']?></textarea>
                            </div>
                                </td>
								
								<td><div class="form-group">
                            <label for="teaching">Teaching History :</label>
                            <textarea required class="form-control" id="teaching" name="teaching"><?php echo $record['teaching']?></textarea>
                            </div>
                                </td>
								
								
								
							</tr>
                            
                             <tr>
                                 <td><div class="form-group">
                                 <label for="contact_no1" class="col-sm-5 control-label">Contact no :</label><br />
                                     <input required id="contact_no1" type="text" name="contact_no1" class="form-control" value="<?php echo $record['contact_no1']?>" style="width:400px"></div></td>
                                 
								 <td><div class="form-group">
                            <label for="academic">Academic History :</label>
                            <textarea required class="form-control" id="academic" name="academic"><?php echo $record['academic']?></textarea>
                            </div>
                                </td>
								
								<td><div class="form-group">
                            <label for="employee">Employeement History :</label>
                            <textarea required class="form-control" id="employee" name="employee"><?php echo $record['employee']?></textarea>
                            </div>
                                </td>
								
								
								
								 </tr>
                            
                                 
								<tr>
								<td><div class="form-group">
                            <label for="projects">Projects :</label>
                            <textarea required class="form-control" id="projects" name="projects"><?php echo $record['projects']?></textarea>
                            </div>
                                </td>
								<td><div class="form-group">
                                 <label for="facebook" class="col-lg-6 control-label">Facebook Profile :</label><br /><br/> 
                                 <input required id="facebook" type="text" name="facebook" class="form-control" value="<?php echo $record['facebook']?>" style="width:400px"></div>
                                 </td>
								 <td><div class="form-group">
                                 <label for="linkedin" class="col-lg-6 control-label">LinkedIn Profile :</label><br /><br/> 
                                 <input required id="linkedin" type="text" name="linkedin" class="form-control" value="<?php echo $record['linkedin']?>" style="width:400px"></div>
                                 </td>
                                 
                                </tr>
								</tr>
								<tr>
								<td><div class="form-group">
                                 <label for="scholar" class="col-lg-6 control-label">Scholar :</label><br /><br/> 
                                 <input required id="scholar" type="text" name="scholar" class="form-control" value="<?php echo $record['scholar']?>" style="width:400px"></div>
                                 </td>
								 <td><div class="form-group">
                                 <label for="research_gate" class="col-lg-6 control-label">Research Gate :</label><br /><br/> 
                                 <input required id="research_gate" type="text" name="research_gate" class="form-control" value="<?php echo $record['research_gate']?>" style="width:400px"></div>
                                 </td>
								 <td><div class="text-center">
								 <label for="location" class="col-lg-5 control-label">Location :</label><br /><br/>
					  <?php echo '<img width="40%" class="avatar img-circle" alt="avatar" src="../images/location/' . $record['location'] . '"/>' ?>
          <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file" name="location">
        </div></td>
								</tr>
								
								
                             <tr>
                            
                            <td><div class="form-group">
                                <label for="department" class="col-sm-10 control-label">Department / Division / center :</label><br/><br/>
                                <div class="col-sm-10">
                 <label for="department" class="col-sm-10 control-label">Department</label><br/>
                 <select name="department" class="form-control" id="dep_divi_center">
                    <option></option>
                    <option <?php if($record['dep_id'] == 'D0001') echo "selected"; ?> value="D0001">Computation and Intelligent Systems</option>
                    <option <?php if($record['dep_id'] == 'D0002') echo "selected"; ?> value="D0002">Information Systems Engineering</option>
                    <option <?php if($record['dep_id'] == 'D0003') echo "selected"; ?> value="D0003">Communication and Media Technologies</option>
                  </select></div>
                    </div></td>
                
                <td><br/><br/><div class="form-group">
                <div class="col-sm-10">
                    <label for="division" class="col-sm-10 control-label">Division</label><br/>   
                    <select name="division" class="form-control" id="dep_divi_center">
                    <option></option>
                    <option <?php if($record['division_id'] == 'DIV0001') echo "selected"; ?> value="DIV0001">Academic and Pulications</option>
                    <option <?php if($record['division_id'] == 'DIV0002') echo "selected"; ?> value="DIV0002">Establishments and Administration</option>
                    <option <?php if($record['division_id'] == 'DIV0003') echo "selected"; ?> value="DIV0003">Examinations and Registration</option>
                    <option <?php if($record['division_id'] == 'DIV0004') echo "selected"; ?> value="DIV0004">Engineering Division</option>
                    <option <?php if($record['division_id'] == 'DIV0005') echo "selected"; ?> value="DIV0005">Finance Division</option>
                    <option <?php if($record['division_id'] == 'DIV0006') echo "selected"; ?> value="DIV0006">Information Systems(NOC)</option></select>
                    </div> </div>
                    </td>
                
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
                </select>
                    </div></div></td>
					
					
								 
             </tr>
            
                            <tr>
                            <td><div class="form-group">
                            <label for="research_interests">Research Interests :</label>
                            <textarea required class="form-control" id="research" name="research"><?php echo $record['research']?></textarea>
                            </div>
                                </td>
								
								<td><div class="form-group">
                            <label for="awards">Awards:</label>
                            <textarea required class="form-control" id="awards" name="awards"><?php echo $record['awards']?></textarea>
                            </div>
                                </td>
								
								<td><div class="form-group">
                                <label for="consultation" class="col-sm-5 control-label">Consultation: </label><br /><br/> 
                                    <input required id="consultation" type="text" name="consultation" class="form-control" value="<?php echo $record['consultation']?>" style="width:400px"></div></td>
								
								
								
                            </tr>
                            
                            <tr>
                                <td  colspan="4" align="center"><button type="submit" class="btn btn-default" style="margin-left:-133px;">Submit</button>
                                </td>
                            </tr>
       
        </table>
        
        </div>
        </div>
        </form>
    </body>
</html>
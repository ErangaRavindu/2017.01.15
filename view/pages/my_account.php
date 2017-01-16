<!--This is the User profile settings page-->

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../layout/styles/bootstrap.min.css">
        <script src="../layout/scripts/jquery-2.0.0.js"></script>
        <script src="../layout/scripts/bootstrap.min.js"></script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        <title>My Account</title>
    </head>
    
   <body>   
       
        <?php
        		include('../../model/config.php');
       ?>
                
                <table class="table">
                    <tr>
                        <td colspan="3"><h2>Welcome</h2></td>
 
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file">
        </div>
      </div>
      
                    </tr>
                    <tr>
                        <td><strong>Fist Name :</strong></td>
                        <td><strong>Middle Name :</strong></td>
                        <td><strong>Last Name :</strong></td>
                    </tr>
                     <tr>
                        <td><strong>Name with initials :</strong></td>
                        <td><strong>Gender :</strong></td>
                    </tr>
                    <tr>
                        <td><strong>User ID :</strong></td>
                        <td><strong>Password :</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Staff Type :</strong></td>
                        <td><strong>Staff Category :</strong></td>                        
                    </tr>
                    <tr>
                        <td><strong>Designation :</strong></td>
                        <td><strong>Department or Center :</strong></td>                        
                    </tr>
                    <tr>
                        <td><strong>Contact no :</strong></td>
                        <td><strong>Address :</strong></td>
                        <td><strong>Email :</strong></td>                       
                    </tr>
                    
                </table>
        
                
                    <form method="post" action="../../controller/staffprofile.php" id=change_form>
                        <table class="table">
                            <tr>
                                <th colspan="2" id="form_titles"><h3>Change account setings</h3></th>                        
                            </tr>
                            <tr>
                                <td colspan="2" ><span id="errors"></span></td>                  
                            </tr>
                            <tr>
                                <td>Full Name : <br /> First Name <br /> <input type="text" name="first_name" maxlength="50" size="51" ></td>
                                <td><br /> Middle Name <br /> <input type="text" name="last_name" maxlength="50" size="51" ></td>
                                <td><br /> Last Name <br /> <input type="text" name="last_name" maxlength="50" size="51"></td>
                            </tr>
                            <tr>
                                <td colspan="2">Name with initials :<br /> <input type="text" name="name_initials" maxlength="100" size="108"></td>
                            </tr>
                            <tr>
                                <td colspan="2">Gender: <br /> <input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Male">Female 
                            </tr>
                            <tr>
                                <td colspan="2">User ID: (max length 15 charactors) <br /> <input type="text" name="reg_id" maxlength="15" size="108"></td>
                            </tr>
                            <tr>
                                <td colspan="2">Password: (max length 15 charactors) <br /> <input type="password" name="reg_password" maxlength="15" size="108"></td>
                            </tr>
                            <tr>
                                <td colspan="2">Retype Password: <br /> <input type="password" name="retype_password" maxlength="15" size="108"></td>
                            </tr>
                            <tr>
                                <td>Staff Type: <br />
                                    <select name="staff_type">
                                        <option value="Academic">Academic Staff</option>
                                        <option value="Administrative">Administrative Staff</option>
                                        <option value="Project">Project Staff</option>
                                        <option value="Visiting">Visiting Staff</option>
                                    </select>
                                </td>
                                <td>Staff Category : <br />
                                    <select name="staff_Category">
                                        <option value="Professor">Professor</option>
                                        <option value="Senior_Lecturer">Senior Lecturer</option>
                                        <option value="Lecturer">Lecturer</option>
                                        <option value="Instructor">Instructor</option>
                                        <option value="Temp_academic_staff">Temp. Academic staff</option>
                                        <option value="Masters_pro">Masters Programme</option>
                                        <option value="Undergraduate_pro">Undergraduate Programme</option>
                                    </select>
                                </td>
                            </tr> 
                            <tr>
                                <td colspan="2">Designation :<br /> <input type="text" name="designation" maxlength="100" size="108"></td>
                            </tr>
                            <tr>
                                <td colspan="2">Department or Center : <br />
                                    <select name="">
                                         <option value="D0001">Computation and Intelligent Systems</option>
                    <option value="D0002">Information Systems Engineering</option>
                    <option value="D0003">Communication and Media Technologies</option>
                    <option value="DIV0001">Academic and Pulications</option>
                    <option value="DIV0002">Establishments and Administration</option>
                    <option value="DIV0003">Examinations and Registration</option>
                    <option value="DIV0004">Engineering Division</option>
                    <option value="DIV0005">Finance Division</option>
                    <option value="DIV0006">Information Systems(NOC)</option>
                     <option value="C0001">Advanced Digital Media Technology Center (ADMTC)</option>
                    <option value="C0002">Computing Services Center (CSC)</option>
                    <option value="C0003">Digital Forensic Center (DFC)</option>
                    <option value="C0004">E-learning Center (ELC)</option>
                    <option value="C0005">External Degree Center (EDC)</option>
                    <option value="C0006">Professional Development Center (PDC)</option>
                                    </select>
                                </td>
                            </tr>  
                             <tr>
                                <td colspan="2">Contact no : <br /> <input type="text" name="contact_no" maxlength="10" size="108"></td>
                            </tr>
                            <tr>
                                <td>Address : <br />Line1 <br /> <input type="text" name="add_line1" maxlength="50" size="51" ></td>
                                <td><br /> Line2<br /> <input type="text" name="add_line2" maxlength="50" size="51" >
                                </td>
                            </tr>
                            <tr>
                                <td><br /> City <br /> <input type="text" name="city" maxlength="50" size="51"></td>
                                <td><br /> Country <br /> <input type="text" name="country" maxlength="50" size="51"></td>
                            </tr>
                            <tr>
                                <td colspan="2">Email: <br /> <input type="text" name="email" size="108"></td>
                            </tr>
                            <tr>
                                <td  colspan="2" align="center"><input type="submit" name="register" value="Submit Changes" id="submit" onclick="checkEmpty()"></td>
                            </tr>

                        </table>
                    </form>
   
    </body> 
</html>
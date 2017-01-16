<html>
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../view/layout/styles/bootstrap.min.css">
        <script src="../view/layout/scripts/jquery-2.0.0.js"></script>
        <script src="../view/layout/scripts/bootstrap.min.js"></script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        <title>Edit My Account</title>
    </head>
    <body>
    
    <form method="post" action="">

    <div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <div class="col-md-3">
        <div class="text-center">
          <img src="../images/demo/3.jpg" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file">
        </div>
      </div>
                        <table class="table">
                            <tr>
                                <th colspan="2" id="form_titles"><h3>Personal Information</h3></th>                        
                            </tr>
                            <tr>
                                <td colspan="2" ><span id="errors"></span></td>                  
                            </tr>
                            <tr>
                                <td><div class="form-group">
                                    <label for="full_name" class="col-lg-5 control-label">Full Name :</label><br />
                                    <label for="full_name" class="col-lg-5 control-label">First Name</label><br />
                                        <input required id="f_name" type="text" name="f_name" class="form-control" style="width:300px"></div></td>
                                <td><br /><div class="form-group"><label class="col-lg-5 control-label">Middle Name</label> <br /> <input type="text" name="last_name"  class="form control" style="width:300px"></td>
                                <td><br /><label class="col-lg-5 control-label"> Last Name</label> <br /> <input type="text" name="last_name" maxlength="50" size="51"></td>
                    
                            </tr>
                            
                             <tr>
                                 <td colspan="2"><label for="id" class="col-sm-5 control-label">Name with initials :</label><br /> <input type="text" name="designation" maxlength="100" size="108"></td>
                            </tr>
                            
                            <tr>
                                <td colspan="2"><label for="id" class="col-sm-5 control-label">Gender: </label><br /> <input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Male">Female 
                            </tr><br/>
                        
                            <tr>
                                <td colspan="2"><label for="id" class="col-sm-5 control-label">Password: (max length 15 charactors)</label> <br /> <input type="password" name="reg_password" maxlength="15" size="108"></td>
                            </tr>
                            
                            <tr>
                                <td colspan="2"><label for="id" class="col-sm-5 control-label">Retype Password: </label><br /> <input type="password" name="retype_password" maxlength="15" size="108"></td>
                            </tr>
                            
                            <tr>
                                <td colspan="2"><label for="id" class="col-sm-5 control-label">Email: </label><br /> <input type="text" name="email" size="108"></td>
                            </tr>
                            
                             <tr>
                                 <td><label for="id" class="col-sm-5 control-label">Contact no 1 :</label><br /> <input type="text" name="add_line1" maxlength="50" size="51" ></td>
                                 <td><label for="id" class="col-sm-5 control-label">Contact no 2 :</label><br /> <input type="text" name="add_line2" maxlength="50" size="51" >
                                </td>
                            </tr>
                            
                             <tr>
                                 <td colspan="2"><label for="id" class="col-sm-5 control-label">Designation :</label><br /> <input type="text" name="designation" maxlength="100" size="108"></td>
                            </tr>
                            
                            
                             <tr>
                                 <td><label for="id" class="col-sm-5 control-label">Staff Type:</label><br/>
                                    <select name="staff_type">
                                        <option value="Academic">Academic Staff</option>
                                        <option value="Administrative">Administrative Staff</option>
                                        <option value="Project">Project Staff</option>
                                        <option value="Visiting">Visiting Staff</option>
                                    </select>
                                </td>
                                 <td><label for="id" class="col-sm-5 control-label">Staff Category : </label><br />
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
                                <td colspan="2"><label for="id" class="col-sm-5 control-label">Department or Center : </label><br />
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
                                <td><label for="id" class="col-sm-5 control-label">Address : </label><br /><label for="id" class="col-sm-4 control-label">Line1 </label><br /> <input type="text" name="add_line1" maxlength="50" size="51" ></td>
                                <td><br /><label for="id" class="col-sm-4 control-label">Line2</label><br /><input type="text" name="add_line2" maxlength="50" size="51" >
                                </td>
                            </tr>
                            <tr>
                                <td><br /><label for="id" class="col-sm-5 control-label"> City</label> <br /> <input type="text" name="city" maxlength="50" size="51"></td>
                                <td><br /> <label for="id" class="col-sm-4 control-label">Country </label><br /> <input type="text" name="country" maxlength="50" size="51"></td>
                            </tr>
                            
                            
                            <tr>
                                <td  colspan="2" align="center"><input type="submit" name="register" value="Submit Changes" id="submit" onclick="checkEmpty()"></td>
                            </tr>
       
        </table>
        </form>
        </div>
        </div>
    </body>
</html>
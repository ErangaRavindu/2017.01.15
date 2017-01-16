<html>
    <head>
        <meta charset="UTF-8">
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
 
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
<link rel="stylesheet" href="../layout/styles/style_forms.css">
        
        <style>
            .radio-left {
                float: left;
            }
			
			.forms1 {
				width:1000px;
				margin-top: 0px;
				margin-left: 100px;
				position: absolute;
			}    
        </style>
        
        <title>Statistical Details</title>
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
                
                $year=$_POST['year'];
                $projects=$_POST['projects'];
                $publications=$_POST['publications'];
                $notes1=$_POST['notes1'];
                $kpi_intake=$_POST['kpi_intake'];
                $kpi_graduates=$_POST['kpi_graduates'];
                $intake=$_POST['intake'];
                $graduates=$_POST['graduates'];
                $notes2=$_POST['notes2'];
                $kpi_year1_reg_cs=$_POST['kpi_year1_reg_cs'];
                $cs_year1_reg=$_POST['cs_year1_reg'];
                $kpi_year1_reg_is=$_POST['kpi_year1_reg_is'];
                $is_year1_reg=$_POST['is_year1_reg'];
                $kpi_year2_reg_cs=$_POST['kpi_year2_reg_cs'];
                $cs_year2_reg=$_POST['cs_year2_reg'];
                $kpi_year2_reg_is=$_POST['kpi_year2_reg_is'];
                $is_year2_reg=$_POST['is_year2_reg'];
                $kpi_year3_reg_cs=$_POST['kpi_year3_reg_cs'];
                $cs_year3_reg=$_POST['cs_year3_reg'];
                $kpi_year3_reg_is=$_POST['kpi_year3_reg_is'];
                $is_year3_reg=$_POST['is_year3_reg'];
                $kpi_year3_grad_cs=$_POST['kpi_year3_grad_cs'];
                $cs_year3_grad=$_POST['cs_year3_grad'];
                $kpi_year3_grad_is=$_POST['kpi_year3_grad_is'];
                $is_year3_grad=$_POST['is_year3_grad'];
                $kpi_year4_reg_cs=$_POST['kpi_year4_reg_cs'];
                $cs_year4_reg=$_POST['cs_year4_reg'];
                $kpi_year4_reg_is=$_POST['kpi_year4_reg_is'];
                $is_year4_reg=$_POST['is_year4_reg'];
                $kpi_year4_grad_cs=$_POST['kpi_year4_grad_cs'];
                $cs_year4_grad=$_POST['cs_year4_grad'];
                $kpi_year4_grad_is=$_POST['kpi_year4_grad_is'];
                $is_year4_grad=$_POST['is_year4_grad'];
                $kpi_interfaculty=$_POST['kpi_interfaculty'];
                $Bsc=$_POST['Bsc'];
                $notes3=$_POST['notes3'];
                
                $sql = "INSERT INTO research (year,projects,publications,notes) VALUES ('$year','$projects','$publications','$notes1')";
                
                 if (mysqli_query($conn, $sql)) {
                  echo '<script type="text/javascript">';
					echo 'alert("The division updated successfully!");';
                    echo 'window.location="admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                
                $sql = "INSERT INTO internal_cs (year,KPI_year1_reg,year1_reg,KPI_year2_reg,year2_reg,KPI_year3_reg,year3_reg,KPI_year3_grad,year3_grad,KPI_year4_reg,year4_reg,KPI_year4_grad,year4_grad) VALUES ('$year','$kpi_year1_reg_cs','$cs_year1_reg','$kpi_year2_reg_cs','$cs_year2_reg','$kpi_year3_reg_cs','$cs_year3_reg','$kpi_year3_grad_cs','$cs_year3_grad','$kpi_year4_reg_cs','$cs_year4_reg','$kpi_year4_grad_cs','$cs_year4_grad')";
                
                 if (mysqli_query($conn, $sql)) {
                    //echo "insert successful";
				} else {
                   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                
                $sql = "INSERT INTO internal_is (year,KPI_year1_reg,year1_reg,KPI_year2_reg,year2_reg,KPI_year3_reg,year3_reg,KPI_year3_grad,year3_grad,KPI_year4_reg,year4_reg,KPI_year4_grad,year4_grad) VALUES ('$year','$kpi_year1_reg_is','$is_year1_reg','$kpi_year2_reg_is','$is_year2_reg','$kpi_year3_reg_is','$is_year3_reg','$kpi_year3_grad_is','$is_year3_grad','$kpi_year4_reg_is','$is_year4_reg','$kpi_year4_grad_is','$is_year4_grad')";
                
                 if (mysqli_query($conn, $sql)) {
                    //echo "insert successful";
				} else {
                    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                
                
                $sql = "INSERT INTO inter_faculty (KPI,year,Bsc_science,notes) VALUES ('$kpi_interfaculty','$year','$Bsc','$notes3')";
                
                 if (mysqli_query($conn, $sql)) {
                    //echo "insert successful";
				} else {
                    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                
                $sql = "INSERT INTO internal_undergraduates (year,KPI_intake,intake,KPI_grad,graduates,notes) VALUES ('$year','$kpi_intake','$intake','$kpi_graduates','$graduates','$notes2')";
                
                
                
                if (mysqli_query($conn, $sql)) {
                    //echo "insert successful";
				} else {
                    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                

            }
        ?>
        
        
        
    <div class="forms1">    
	<form class="well form-horizontal" action=" " method="post"  id="contact_form">
	<fieldset>
	<!-- Form Name -->
	<legend><h2><b>STATISTICAL DETAILS</b></h2></legend>
        

        <div class="form group">
                <label for="year" class="col-sm-4 control-label">Year</label>
                 <div class="col-sm-3">
                     <input required class="form-control" type="text" name="year">
                 </div>
               
             </div><br>
    
        
        <h3><b>Research</b></h3>
        
        <div class="form-group">
            <label for="projects" class="">Projects</label>
                <input required id="projects" class="form-control" type="number" name="projects" style="width:200px">
        </div>
        <div class="form-group">
            <label for="publications" class="">Publications</label>
            <input required class="form-control" type="number" name="publications"  style="width:200px">
        </div>
             
        <div class="form-group">
            <label for="notes1">Notes</label>
            <textarea required class="form-control" id="notes1" name="notes1" style="width:950px"></textarea>
        </div>

        
        <h3><b>Education</b></h3>
        <h4>Internal Undergraduates</h4>
        
    <table class="table">
        <tr>
        <td><div class="form-group">
            <label for="kpi_intake" class="">KPI</label>
                <input required id="kpi_intake" class="form-control" type="number" name="kpi_intake"  style="width:200px"></div></td>
            
        <td><div class="form-group">
            <label for="kpi_graduates" class="">KPI</label>
                <input required id="kpi_graduates" class="form-control" type="number" name="kpi_graduates"  style="width:200px">
        </div>
            </td>
        </tr>
        <tr>
        <td><div class="form-group">
            <label for="intake" class="">Intake CS and IS degrees</label>
            <input required class="form-control" type="number" name="intake"  style="width:200px">
        </div></td>
            
        <td><div class="form-group">
            <label for="graduates" class="">Graduates(CS and IS)</label>
            <input required class="form-control" type="number" name="graduates"  style="width:200px">
        </div></td>
        </tr>
        </table>
        <div class="form-group">
            <label for="notes2">Notes</label>
            <textarea required class="form-control" id="notes2" name="notes2" style="width:950px"></textarea>
        </div>
        
        <table class="table">
  <thead>
    <tr>
      <th></th>
      <th>KPI (CS)</th>
      <th>Internal CS undergraduates</th>
      <th>KPI (IS)</th>
      <th>Internal IS undergraduates</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Year 1- Registered</th>
      <td><input required class="form-control" type="number" name="kpi_year1_reg_cs"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="cs_year1_reg"  style="width:200px"></td>
      <td><input required class="form-control" type="number" name="kpi_year1_reg_is"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="is_year1_reg"  style="width:200px"></td>
    </tr>
    <tr>
      <th scope="row">Year 2- Registered</th>
      <td><input required class="form-control" type="number" name="kpi_year2_reg_cs"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="cs_year2_reg"  style="width:200px"></td>
      <td><input required class="form-control" type="number" name="kpi_year2_reg_is"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="is_year2_reg"  style="width:200px"></td>
    </tr>
    <tr>
      <th scope="row">Year 3- Registered</th>
      <td><input required class="form-control" type="number" name="kpi_year3_reg_cs"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="cs_year3_reg"  style="width:200px"></td>
      <td><input required class="form-control" type="number" name="kpi_year3_reg_is"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="is_year3_reg"  style="width:200px"></td>
    </tr>
    <tr>
      <th scope="row">Year 3- Graduates</th>
      <td><input required class="form-control" type="number" name="kpi_year3_grad_cs"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="cs_year3_grad"  style="width:200px"></td>
      <td><input required class="form-control" type="number" name="kpi_year3_grad_is"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="is_year3_grad"  style="width:200px"></td>
    </tr>
    <tr>
      <th scope="row">Year 4- Registered</th>
      <td><input required class="form-control" type="number" name="kpi_year4_reg_cs"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="cs_year4_reg"  style="width:200px"></td>
      <td><input required class="form-control" type="number" name="kpi_year4_reg_is"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="is_year4_reg"  style="width:200px"></td>
    </tr>
    <tr>
      <th scope="row">Year 4- Graduates</th>
      <td><input required class="form-control" type="number" name="kpi_year4_grad_cs"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="cs_year4_grad"  style="width:200px"></td>
      <td><input required class="form-control" type="number" name="kpi_year4_grad_is"  style="width:200px">
      </td>
      <td><input required class="form-control" type="number" name="is_year4_grad"  style="width:200px"></td>
    </tr>
  </tbody>
</table>
        
    <h4>Inter Faculty Undergraduates</h4>
        
        <div class="form-group">
            <label for="kpi_interfaculty" class="">KPI</label>
                <input required id="kpi_interfaculty" class="form-control" type="number" name="kpi_interfaculty"  style="width:200px">
        </div>
        <div class="form-group">
            <label for="Bsc" class="">Bsc- Faculty of Science</label>
            <input required class="form-control" type="number" name="Bsc"  style="width:200px">
        </div>
             
        <div class="form-group">
            <label for="notes3">Notes</label>
            <textarea required class="form-control" id="notes3" name="notes3" style="width:950px"></textarea>
        </div>
        <div class="form-group">
				<label class="col-md-4 control-label"></label>
				<div class="col-md-4">
					<button type="submit" class="btn btn-warning" name="submit" >Submit </button>
				</div>
			</div>
			
            </fieldset>
			
            </form>
        </div>
		
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    </body>
</html>
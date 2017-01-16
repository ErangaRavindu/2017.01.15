<?php
        		include('../../model/config.php');
       ?>

<html>
    <head>
        <meta charset="UTF-8">
  <title>General Information</title>
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
				width:800px;
				margin-top: 0px;
				margin-left: 200px;
				position: absolute;
			}    
        </style>
        
    
    </head>
    <body>
        <?php
        
            include('../../model/config.php');
			$sql="select vision,mission,ucsc_description,goals,mailing_address,telephone,fax,email,union_activities,director_mg,image1,image2,image3 from info";
			$result = mysqli_query($connect, $sql);
                if (!$result) {
                    echo "Error";
                    die();
				}
                $record = mysqli_fetch_assoc($result);
        ?>
        
               
        
        <div class="forms1">    
		<form class="well form-horizontal" action="../../controller/changeinfo.php" method="post"  id="contact_form">
		<fieldset>
		<!-- Form Name -->
		<legend>GENERAL INFORMATION</legend>
		
            <div class="form-group">
                 <label for="vision" class="col-sm-4 control-label">Vision</label>
                 <div class="col-md-8 inputGroupContainer">
				 <div class="input-group">
                    <textarea required class="form-control" name="vision" style="width:400px"><?php echo $record['vision']?></textarea>
                 </div>
				 </div>
            </div>
			
			
            <div class="form-group">
                 <label for="mision" class="col-sm-4 control-label">Mission</label>
                 <div class="col-md-8 inputGroupContainer">
				 <div class="input-group">
                     <textarea required class="form-control" name="mission" style="width:400px"><?php echo $record['mission']?></textarea>
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="description" class="col-sm-4 control-label">Description</label>
                 <div class="col-md-8 inputGroupContainer">
				 <div class="input-group">
                     <textarea required class="form-control" name="ucsc_description" style="width:400px"><?php echo $record['ucsc_description']?></textarea>
                 </div>
				 </div>
            </div>
            
			<div class="form-group">
                 <label for="director_mg" class="col-sm-4 control-label">Message from Director</label>
                 <div class="col-md-8 inputGroupContainer">
				 <div class="input-group">
                     <textarea required class="form-control" name="director_mg" style="width:400px"><?php echo $record['director_mg']?></textarea>
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="goals" class="col-sm-4 control-label">Goals</label>
                 <div class="col-md-8 inputGroupContainer">
				 <div class="input-group">
                     <textarea required class="form-control" name="goals" style="width:400px"><?php echo $record['goals']?></textarea>
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="mailing_address" class="col-sm-4 control-label">Address</label>
                 <div class="col-md-8 inputGroupContainer">
				 <div class="input-group">
                     <textarea required class="form-control" name="mailing_address" style="width:400px"><?php echo $record['mailing_address']?></textarea>
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="telephone" class="col-sm-4 control-label">Contact number</label>
                 <div class="col-md-8 inputGroupContainer">
				 <div class="input-group">
                     <input required class="form-control" type="text" name="telephone" style="width:400px" onmouseleave="phonenumber(telephone)" value="<?php echo $record['telephone']?>">
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                 <label for="fax" class="col-sm-4 control-label">Fax</label>
                 <div class="col-md-8 inputGroupContainer">
				 <div class="input-group">
                     <input required  class="form-control" type="text" name="fax" value="<?php echo $record['fax']?>" style="width:400px">
                 </div>
				 </div>
            </div>
            
            
             <div class="form-group">
                 <label for="email" class="col-sm-4 control-label">Email</label>
                 <div class="col-md-8 inputGroupContainer">
				 <div class="input-group">
                     <input class="form-control" type="email" name="email" oninput="checkEmail()" value="<?php echo $record['email']?>" style="width:400px">
                 </div>
				 </div>
            </div>
            
            
            <div class="form-group">
                 <label for="union_activities" class="col-sm-4 control-label">Union activities</label>
                 <div class="col-md-8 inputGroupContainer">
				 <div class="input-group">
                     <textarea required class="form-control" name="union_activities" style="width:400px"><?php echo $record['union_activities']?></textarea>
                 </div>
				 </div>
            </div>
			
			
            <div class="form-group">
                 <label for="image1" class="col-sm-4 control-label">Slider Image 1</label>
                 <div class="col-md-8 inputGroupContainer">
				 <div class="input-group">
					  <?php echo $record['image1']; ?>
					  <?php echo '<img width="20%" class="avatar img-circle" alt="avatar" src="../images/general/' . $record['image1'] . '"/>' ?>
                      <h6>Upload a different photo...</h6>
					  <input class="form-control" type="file" name="image1" style="width:400px">
                 </div>
				 </div>
            </div>
			
			
        	<div class="form-group">
                 <label for="image2" class="col-sm-4 control-label">Slider Image 2</label>
                 <div class="col-md-8 inputGroupContainer">
				 <div class="input-group">
					  <?php echo $record['image2']; ?>
                      <?php echo '<img width="20%" class="avatar img-circle" alt="avatar" src="../images/general/' . $record['image2'] . '"/>' ?>
                      <h6>Upload a different photo...</h6>
                      <input class="form-control" type="file" name="image2" style="width:400px">
                 </div>
				 </div>
            </div>
			
			<div class="form-group">
                 <label for="image3" class="col-sm-4 control-label">Slider Image 3</label>
                 <div class="col-md-8 inputGroupContainer">
				 <div class="input-group">
				      <?php echo $record['image3']; ?>
                      <?php echo '<img width="20%" class="avatar img-circle" alt="avatar" src="../images/general/' . $record['image3'] . '"/>' ?>
                      <h6>Upload a different photo...</h6>
                      <input class="form-control" type="file" name="image3" style="width:400px">
                 </div>
				 </div>
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
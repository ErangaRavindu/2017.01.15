<?php
#session_start();
$user_id = $_SESSION['login_user'];
?>
<?php
        		include('../../model/config.php');
       ?>

<html>
    <head>
        <meta charset="UTF-8">
  <title>News/Events</title>
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
				margin-top: 50px;
				margin-left: 200px;
				position: absolute;
			}    
        </style>
        
        <title>Add News/Events</title>
    </head>
    <body>
        <?php
        
		if($_SERVER["REQUEST_METHOD"] == "POST") {
                          
                $category=$_POST['category'];
                $dposted = $_POST['dposted'];
                $hpost = $_POST['hpost'];
                $post= $_POST['post'];
                $attach=$_POST['attach'];
               
                $sql = "INSERT INTO post(user_id,category,date_posted,headline_post,post,attachments) VALUES ('$user_id','$category','$dposted','$hpost','$post','$attach')";
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("A new post added successfully!");';
                    echo 'window.location="centers_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                } 

		}
        ?>
        
         
        
        <div class="forms1">    
			<form class="well form-horizontal" action=" " method="post"  id="contact_form">
			<fieldset>
			<!-- Form Name -->
			<legend>ADD NEWS/EVENTS</legend>
            
                      
            <div class="form-group">
                 <label for="category" class="col-sm-6 control-label">Category</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                 <select name="category" class="form-control" id="category">
                    <option>News</option>
                    <option>Memorial orations</option>
                    <option>Events</option>
                    <option>Competitions</option>
                    <option>News paper articles</option>
                    <option>Procurement</option>
                    <option>Vacancies</option>
                </select>
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                 <label for="dposted" class="col-sm-6 control-label">Date</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                     <input required  class="form-control" type="date" name="dposted">
                 </div>
				 </div>
            </div>
			

            
            <div class="form-group">
                 <label for="hpost" class="col-sm-6 control-label">Headline of Post</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                     <input class="form-control" type="text" name="hpost">
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                 <label for="post" class="col-sm-6 control-label">Post</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                     <textarea class="form-control" type="text" name="post"></textarea>
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="attach" class="col-sm-6 control-label">Attachments</label>
                 <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                    <input class="form-control" type="file" name="attach">
                 </div>
				 </div>
            </div>
            
            
            <div class="form-group">
				<label class="col-md-6 control-label"></label>
				<div class="col-md-4">
					<button type="submit" class="btn btn-warning" name="submit" >Submit </button>
				</div>
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
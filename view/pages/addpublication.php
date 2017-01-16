<?php
session_start();
$user_id = $_SESSION['login_user'];
?>
<?php
        		include('../../model/config.php');
       ?>

<html>
    <head>
        <meta charset="UTF-8">
  <title>Publication</title>
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
				margin-top: 150px;
				margin-left: 400px;
				position: absolute;
			}    
        </style>
        
        <title>Add Publication</title>
    </head>
    <body>
        <?php
        
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                
                $first_author= $_POST['first_author'];
                $collaborators = $_POST['collaborators'];
                $auth= $_POST['auth'];
                $title=$_POST['title'];
                $abstract= $_POST['abstract'];
                $booktitle= $_POST['booktitle'];
                $publisher = $_POST['publisher'];
                $series= $_POST['series'];
                $volume=$_POST['volume'];
                $edition= $_POST['edition'];
                $date= $_POST['date'];
                $location= $_POST['location'];
                $pages= $_POST['pages'];
                $language=$_POST['language'];
                $url= $_POST['url'];
                $doi= $_POST['doi'];
                $isbn= $_POST['isbn'];
                $pubtype= $_POST['pubtype'];
               
                
               
                $sql = "INSERT INTO publication (user_id,first_author,collaborators,auth,title,abstract,booktitle,publisher,series,volume,edition,date,location,pages,language,url,doi,isbn,pubtype) VALUES ('$user_id','$first_author','$collaborators','$auth','$title',' $abstract','$booktitle','$publisher','$series','$volume','$edition',' $date','$location','$pages','$language','$url','$doi','$isbn','$pubtype')";
                if (mysqli_query($connect, $sql)) {
                    //echo "insert successful";
				} else {
                    //echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                }

            }
        ?>
        
        <div class="forms1">    
			<form class="well form-horizontal" action=" " method="post"  id="contact_form">
			<fieldset>
			<!-- Form Name -->
			<legend>ADD PUBLICATION</legend>
            
            <div style="float:left;">
            <div class="form-group">
                 <label for="title" class="col-sm-4 control-label">Title</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
                     <input required class="form-control" type="text" name="title">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="date" class="col-sm-4 control-label">Date </label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                     <input class="form-control" type="date" name="date">
                 </div>
				 </div>
            </div>
            
            
             <div class="form-group">
                 <label for="first_author" class="col-sm-4 control-label">First Author</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input required  class="form-control" type="text" name="first_author">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="collaborators" class="col-sm-4 control-label">Collaborators</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input class="form-control" type="text" name="collaborators">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="auth" class="col-sm-4 control-label">Auth</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <input required class="form-control" type="text" name="auth">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="abstract" class="col-sm-4 control-label">Abstract</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <input required class="form-control" type="text" name="abstract">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="booktitle" class="col-sm-4 control-label">Book Title</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <input class="form-control" type="text" name="booktitle">
                 </div>
				 </div>
            </div>
            
            
             <div class="form-group">
                 <label for="publisher" class="col-sm-4 control-label">Publisher</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input required  class="form-control" type="text" name="publisher">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="series" class="col-sm-4 control-label">Series</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <input class="form-control" type="text" name="series">
                 </div>
				 </div>
            </div>
            </div>
			<div style="float:right;">
            <div class="form-group">
                 <label for="volume" class="col-sm-4 control-label">Volume</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <input required class="form-control" type="text" name="volume">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="edition" class="col-sm-4 control-label">Edition</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <input class="form-control" type="text" name="edition">
                 </div>
				 </div>
            </div>
            
            
             <div class="form-group">
                 <label for="location" class="col-sm-4 control-label">Location</label>
                <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                     <input required  class="form-control" type="text" name="location">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="pages" class="col-sm-4 control-label">Pages</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <input class="form-control" type="text" name="pages">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="language" class="col-sm-4 control-label">Language</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <input required class="form-control" type="text" name="language">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="url" class="col-sm-4 control-label">Url</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <input required class="form-control" type="url" name="url">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="doi" class="col-sm-4 control-label">DOI</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <input class="form-control" type="text" name="doi">
                 </div>
				 </div>
            </div>
            
            
             <div class="form-group">
                 <label for="isbn" class="col-sm-4 control-label">ISBN</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                     <input required  class="form-control" type="text" name="isbn">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                 <label for="pubtype" class="col-sm-4 control-label">Publication Type</label>
                 <div class="col-md-8 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                 <select name="pubtype" class="form-control" id="pubtype">
                    <option>Conference</option>
                    <option>Conference_full_paper</option>
                    <option>Journal</option>
                    <option>Other</option>
                </select>
                 </div>
				 </div>
            </div>
            </div>
    
            <div class="form-group">
				<label class="col-md-4 control-label"></label>
				<div class="col-md-4">
					<button type="submit" class="btn btn-warning" name="submit" style="margin-left:450px;">Submit </button>
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
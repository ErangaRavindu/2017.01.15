<?php
include ('../../model/config.php');
 ?>
<?php
session_start();
$userid= $_SESSION['login_user'];
 ?>
<html>
<head>
<title>UCSC | Centers Panel
</title>

<link rel="stylesheet" type="text/css" href="../layout/styles/application/application.css">
<script src="../layout/scripts/jquery.js"></script>
<script src="../layout/scripts/jquery-2.js"></script>
<script src="../layout/scripts/jquery.js"></script>
<script src="../layout/scripts/jquery_002.js"></script>

<link rel="stylesheet" href="../layout/styles/bootstrap.min.css">
<script src="../layout/scripts/jquery-2.0.0.js"></script>
<script src="../layout/scripts/bootstrap.min.js"></script>
<link rel="stylesheet" href="../layout/styles/staff_center_back_style.css" type="text/css" media="all">
<script>

$(function() {
  // Get the modal
  var modal = document.getElementById('myModal');

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  console.log(btn);
  // When the user clicks the button, open the modal
  btn.onclick = function() {
      modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
      modal.style.display = "none";
  }


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
});
</script>

<style>
/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 10; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal1 .modal-container {
      position: absolute;
      left: 0px;
      top: 35%;
      background: rgba(0, 0, 0, 0.9);
      padding: 20px;
      width: 100%;
    }

.modal1 .modal-container .mb-middle {
      width: 50%;
      left: 25%;
      position: relative;
      color: #FFF;
}
.modal1 .modal-container .mb-middle .mb-title {
	width: 100%;
    float: left;
    padding: 10px 0px 0px;
    font-size: 31px;
    font-weight: 400;
    line-height: 36px;
}

.modal1.open {
   display: block;
}
.modal1 .modal-container .mb-middle .mb-content {
  width: 100%;
  float: left;
  padding: 10px 0px 0px;
}
.modal1 .modal-containe .mb-middle .mb-content p {
  margin-bottom: 0px;
}
.modal1 .modal-container .mb-middle .mb-footer {
  width: 100%;
  float: left;
  padding: 10px 0px;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}


.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

<style>
.forms111{
	z-index: -2;
	position: absolute;
	margin-left:150px;
	margin-top:60px;
	
}


</style>
<style>

    #menu{
        display: block;
        text-decoration: none;
        color: white;
    }
</style>

</head>
<body style="margin:0;padding:0;">
	<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="userid">
			<div class="sessionid">
						<div style="padding-top: 12px; float: left; height: 1.2em; background-color:# fff; color: white; font-weight: bold;font-size:1.2em;">
							<?php
							$res1 =  mysqli_fetch_assoc(mysqli_query($connect,"select name_initials,profile_pic from staff where user_id = '$userid' "));
							 ?>
							<?php
							echo $res1['name_initials'];
							?>
						</div></br>
						<div style="position: absolute; padding-top: 10px; float: left; height: 1.2em; background-color:# fff; color: white;font-size:1.2em ">
							<?php echo $userid;?>
						</div>
						<div style="padding-left: 10px; float:left; height: 60px; width: 60px; margin-top: -27px;">
							<?php


							echo '<td><h4><img style="height: 60px; width: 60px;" src="../images/staff/'. $res1['profile_pic'] .'"/></h4></td>';
						?>
					</div>
					
					<div style="position: absolute; margin-top: -3px; margin-left: 60%;">
					
					<button style="border:none; background:none;" id="myBtn"><img style="height: 30px; width: 32px;" src="../images/general/power-icon.png"></button>
								      </div>
		</div>

	</div>
<div class="nav1">
    <div class="logo">
        <img src="../images/general/UCSC_logo [Converted] white.png" class="logo">
        <script src="../layout/scripts/application.js"></script>
    </div>

    <ul class="mainmenu">

        <li><span><a href="departments_only.php?type=update" id="menu">My Account</a></span></li>
        
       
	  	
     <li><span><a href="departments_only.php?type=department" id="menu">Department</a></span></li>
        

        
	  <li><span><a href="#" id="menu">Posts</a></span></li>

      <ul class="submenu" style="display: none;">

       <li><span><a href="departments_only.php?type=post">Add Post</a></span></li>
        <li><span><a href="departments_only.php?type=post1">View & Edit</a></span></li>
      </ul>
	  
	  
      
	  
		<li><span><a href="departments_only.php?type=reservation" id="menu">Reservation</a></span></li>


    </ul>
</div>


<div class="forms111">
  

<?php
	if(isset($_GET['type'])){
		if($_GET['type'] == 'update'){
			require "updateprofile.php";
		}
		else if($_GET['type'] == 'updateinfo'){
			require "generalinfo.php";
		}

		else if($_GET['type'] == 'dep'){
				require "add_department.php";
		}
		else if($_GET['type'] == 'dep1'){
				require "view_edit_department.php";
		}
		else if($_GET['type'] == 'divi'){
				require "adddivision.php";
		}
		else if($_GET['type'] == 'divi1'){
				require "view_edit_division.php";
		}
		else if($_GET['type'] == 'department'){
				require "edit_department.php";
		}
		else if($_GET['type'] == 'center1'){
				require "view_edit_center.php";
		}
		else if($_GET['type'] == 'achievement'){
				require "add_achievement.php";
		}
		else if($_GET['type'] == 'achievement1'){
				require "view_edit_achievement.php";
		}
		else if($_GET['type'] == 'facility'){
				require "add_facility.php";
		}
		else if($_GET['type'] == 'publication'){
				require "addpublication.php";
		}
		else if($_GET['type'] == 'course'){
				require "courses.php";
		}
		else if($_GET['type'] == 'course1'){
				require "view_edit_course.php";
		}
		else if($_GET['type'] == 'payment'){
				require "paymentstaff.php";
		}
		else if($_GET['type'] == 'post'){
				require "addpost.php";
		}
		else if($_GET['type'] == 'post1'){
				require "view_edit_post.php";
		}
		else if($_GET['type'] == 'reservation'){
				require "reservationinternal.php";
		}
		else if($_GET['type'] == 'stats'){
				require "statisticaldetails.php";
		}
		else if($_GET['type'] == 'facility'){
				require "facilities.php";
		}
		else if($_GET['type'] == 'facility1'){
				require "view_edit_facility.php";
		}


	}
	else{
			require "welcomepage.php";
		}


?>

<div id="myModal" class="modal1">

  <!-- Modal content -->
  <div class="modal-container">
    <div class="mb-middle">
    	<div class="mb-title">

        <span class="close">&times;</span> Log <strong>Out</strong> ?</div>

          <div class="mb-content">
          <p>Are you sure you want to logout?</p>
            <p> Press No if youwant to continue work. Press Yes to logout current user.</p>
         </div>
         <div class="mb-footer">
             <div class="pull-right">
                 <a href="../../controller/logout.php" class="btn btn-success btn-lg">Yes</a>
                 <button class="btn btn-default btn-lg mb-control-close" style="">No</button>
             </div>
         </div>
    </div>
  </div>

</div>

</div>
</body>
</html>

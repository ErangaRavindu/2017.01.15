<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>UCSC | Student Union</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery-s3slider.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#featured_slide_").s3Slider({
		timeOut:10000 
	});
});
</script>

</head>
<body id="top">
<?php include('../layout/styles/header.php');?>
<?php include('../../model/config.php');?>
<h1>About</h1>
<p>Student Union is the representative body of all registered internal undergraduate students of University of Colombo School of Computing (UCSC).</p> 
<h1>Activities</h1>

	<?php $all_activities_q="SELECT union_activities FROM info";

        $all_activities=mysqli_query($connect,$all_activities_q);
		
        if(!$all_activities){
			//echo "hi";
            die("Database query failed: ".mysqli_error($connect));
        }
		
		$activities_info=mysqli_fetch_assoc($all_activities);
			
			echo $activities_info['union_activities'];
			
	?>


<?php include('../layout/styles/footer.php');?>
</body>
</html>
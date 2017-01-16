<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>UCSC | FAQ</title>
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
<?php include('../../model/config.php'); 
$maxcols = 1;
$i = 0;
$sql="SELECT question,answer FROM faq";

        $do=mysqli_query($connect,$sql);
		
        if(!$do){
			die("Database query failed: ".mysqli_error($connect));
        }
		echo "<ol>";
		while($info=mysqli_fetch_assoc($do)){
		echo "<li>";
		echo $info['question'];
		echo "<ul>";
			echo $info['answer'];
		echo "</ul>";
	echo "</li>";
		echo "</br>";
		$i++;
            } 
			
			?>


<?php include('../layout/styles/footer.php');?>
</body>
</html>
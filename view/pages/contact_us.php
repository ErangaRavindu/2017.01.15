<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php include('../layout/styles/header.php');?>
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

 <?php include('../../model/config.php'); 
$all_info_q="SELECT mailing_address,telephone,fax,email FROM info";

        $all_info=mysqli_query($connect,$all_info_q);
		
        if(!$all_info){
			
            die("Database query failed: ".mysqli_error($connect));
        }
		
		   
        $contact_info=mysqli_fetch_assoc($all_info);
			
	echo "Mailing Address";
	
    echo $contact_info['mailing_address'];
	
	echo "Telephone";
	echo "</br>";
	echo "</br>";
	
    echo $contact_info['telephone'];
	echo "</br>";
	echo "</br>";
	echo "Fax";
	echo "</br>";
	echo "</br>";
    echo $contact_info['fax'];
	echo "</br>";
	echo "</br>";
	echo "Email";
	echo "</br>";
	echo "</br>";
    echo $contact_info['email'];
echo "</br>";
echo "<hr>";
?>

<?php include ('../layout/styles/footer.php');?>
</body>
</html>
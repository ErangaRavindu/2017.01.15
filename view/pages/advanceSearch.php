<?php 
include '../../model/config.php';
include '../../controller/searchContent.php';
include '../layout/styles/header.php';

?>




<!DOCTYPE html>
<html>
<head>
<title>UCSC | Advance Search</title><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../layout/scripts/postPublicationSearch.js"></script>

<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<style type="text/css">

	.insideFrame{
		background-color: white;
		margin: 8px;
		height: 75px;
		width: 1225px



	}
	.outsideFrame{
		background-color: lightblue;
		border: 2px solid black;
		height: 150px;
		width: 1250px;
		margin-top: 4px;
		margin-left: 12px;


	}
		.insideFrame1{
		background-color: white;
		margin: 8px;
		height: 100px;
		width: 1225px;



	}
	.outsideFrame1{
		background-color: lightblue;
		border: 2px solid black;
		height: 150px;
		width: 1250px;
		margin-top: 4px;
		margin-left: 12px;


	}

		.insideFrame2{
		background-color: white;
		margin: 8px;
		height: 75px;
		width: 1225px;



	}
	.outsideFrame2{
		background-color: lightblue;
		border: 2px solid black;
		height: 125px;
		width: 1250px;
		margin-top: 4px;
		margin-left: 12px;


	}

</style>


</head>
<body>

<div class="wrapper row2">
  

  </div>
 	<div  style="background-color:white;height:100px">
  		<div style="float:right">
		<form action="advanceSearch.php"  method= "post">

			<div id="radio">
				<label style="color:black"> search by :</label>
				<input name ="radio" type ="radio"  value="by_date" style="font-color:black">date
				<input name ="radio" type="radio" value="by_headline" style="color:black">headline
				<br> date input format - dd/mm/yyyy

			</div>

			<br><input type= "text"  name = "searchText" placeholder="search >>">
			<input type="submit"  value = "search"> 

			<select id="adv"  name="advanceSearch">
    			<option disabled selected value> advance search </option>
    			<option value = "staff"> search staff </option>
    			<option value = "publication">  publications </option>
    			<option value = "post"> posts </option>
    			
			</select>

		</form>
		</div>
	</div>
</div>
<?php

	$output1 = explode(",",$output1);


?>
<?php
	foreach ($output1 as $item) {
		if($item==""){
				continue;
			}

		?>
		<div class="outsideFrame">
		<?php
			$separate = explode("|",$item);
		?>
			<div style="padding-left:8px; padding-top:4px; font-weight: bold; font-size:27px"><?php echo $separate[0]; ?> </div>
		
			<div class="insideFrame">

				<p style="font-size:20px;"> <?php echo $separate[1];?></p>
		

			</div>


		</div>
<?php
		# code...
	}

?>



<?php

	$output4 = explode(",",$output4);



?>
<?php
	foreach ($output4 as $item) {
		if($item==""){
				continue;
			}


		?>


		<div class="outsideFrame1">
			<?php 
			$words =  explode("+", $item);
			$user_id = $words[1];
			$path="../images/staff/";
			$pic =$words[2];
			//echo $pic;
			$picpath = $path.$pic;


			?>
			
			<a style="padding-left:8px; padding-top:4px; font-weight: bold; font-size:20px" href=<?php echo "'academic_staff_single.php?edit_id=".$user_id."'"?>><?php echo $words[0]; ?></a>



			
			<div class="insideFrame1">

				
				<img src="<?php echo $picpath; ?> " style="width:100px;height:90px;float:right;margin-top:4px;margin-right:4px;">
				
				



				
				



		

			</div>


		</div>

<?php
		# code...
	}

?>

<?php

	$output5 = explode(",",$output5);


?>
<?php
	foreach ($output5 as $item) {
		if($item==""){
				continue;
			}

		?>
		<div class="outsideFrame2">
		<?php
			$separate = explode("|",$item);
		?>
			<a style="padding-left:16px; padding-top:4px; font-weight: bold; font-size:20px" href=<?php echo "'researchPaper.php?ppr_id=".$separate[2]."'"?>><?php echo $separate[0]; ?></a>

		
			<div class="insideFrame2">

				<p style="padding-left:8px; padding-top:4px; font-size:20px;"> first authr of this research paper is <?php echo $separate[1];?></p>
				
		

			</div>


		</div>
<?php
		# code...
	}

?>





<p style="font-size:40px;margin-left:20px;"> <?php echo $output3 ?></p>




</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../layout/scripts/postPublicationSearch.js"></script>



</html>
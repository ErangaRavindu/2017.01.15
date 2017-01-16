<?php 
include '../../model/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
	<style type="text/css">

	.insideFrame{
		background-color: white;
		margin: 8px;
		height: 42px;
		width: 1225px



	}
	.outsideFrame{
		background-color: lightblue;
		border: 2px solid black;
		height: 100px;
		width: 1250px;
		margin-top: 4px;


	}
</style>
</head>
<body>
<?php include('../layout/styles/header.php');?>
<?php
$output1 = "";
$output2 = "";
					$searchq = $_POST['searchText'];
					
					$query = mysqli_query($connect,"SELECT * FROM post WHERE headline_post LIKE '%$searchq%' ") or die("could not search");	
					$count = mysqli_num_rows($query);	
		
					if($count == 0 ){
						$output2 =  "there was no search results";
					}
					else{
						while($row = mysqli_fetch_array($query)){
							$fname = $row['headline_post'];
							$lname = $row['post'];
							$output1 .= $fname.'|'.$lname.',';

						}

					}
?>

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
			<div style="padding-left:8px; padding-top:4px; font-weight: bold; font-size:20px"><?php echo $separate[0]; ?> </div>
		
			<div class="insideFrame">

				<p> <?php echo $separate[1];?></p>
		

			</div>


		</div>
<?php
		# code...
	}

?>
<div style="padding-left:8px; padding-top:4px; font-weight: bold; font-size:40px color:black"><?php echo $output2; ?> </div>
</body>

</html>
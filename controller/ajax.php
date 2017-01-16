<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'ucsc';
//create connection
$conn = mysqli_connect($server, $username, $password, $database);

if (isset($_POST['id'])) {
	$results = [
		'success'	=> false,
		'staff'		=> false,
		'data'		=> ''
	];

	$id = trim($_POST['id']);
	$sql1 = "SELECT * FROM staff WHERE user_id = '$id' LIMIT 1";
	$sql2 = "SELECT * FROM visitor WHERE v_nic = '$id' LIMIT 1";

	$result = mysqli_query($conn, $sql1);
	if ($result) {
		$count = mysqli_num_rows($result);
		if ($count > 0) {
			$results['success'] = true;
			$results['staff'] = true;
			$results['data'] = mysqli_fetch_assoc($result);
			echo json_encode($results);
		} else {
			$result = mysqli_query($conn, $sql2);
			$count = mysqli_num_rows($result);
			if ($count > 0) {
				$results['success'] = true;
				$results['staff'] = false;
				$results['data'] = mysqli_fetch_assoc($result);
				echo json_encode($results);
			} else {
				$results['success'] = false;
				$results['data'] = '';
				echo json_encode($results);
			}
			
		}
	} else {
		$result = mysqli_query($conn, $sql2);
		$results['success'] = true;
		$results['success'] = false;
		$results['data'] = mysqli_fetch_assoc($result);
		echo json_encode($results);
	}

}
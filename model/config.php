<?php
	
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "ucsc";

	$connect = new mysqli($host,$username,$password,$database) or die ("Connection Failed!! Database not found!!!!");
?>
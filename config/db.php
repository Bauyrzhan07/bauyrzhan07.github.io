<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    $con = new mysqli("localhost", "root", "", "web");
	mysqli_query($con,"SET NAMES UTF8");
	if($con->connect_error) {
		echo "Failed to connect to MySQL: " . $con->connect_error;
		exit();
	}

?>
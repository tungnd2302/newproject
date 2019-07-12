<?php
	$serverName = "localhost";
	$dbname		= "dbphattrienweb";
	$userName   = "root";
	$pass       = "";
	$conn = new mysqli($serverName,$userName,$pass,$dbname);
	$conn -> set_charset("UTF8");
	if($conn->connect_error){
		die("Connection failed: " . $conn ->connect_error);
	}

?>
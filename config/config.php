<?php
	//Database parameters
	$db_host="localhost";
	$db_name="db_meta_data";
	$db_user="lear.p";
	$db_passwrd="W1ldc4rD";
	//connect db
	//$db_conn=mysql_connect($db_host,$db_user,$db_passwrd);
	$conn = new mysqli($db_host, $db_user, $db_passwrd, $db_name);
	if ($conn->connect_errno) {
		echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}	
	//$conn->close();	
?>
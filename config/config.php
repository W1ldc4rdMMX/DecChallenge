<?php
	//Database parameters
	$db_host="localhost";
	$db_name="db_meta_data";
	$db_user="lear.p";
	$db_passwrd="W1ldc4rD";
	//connect db
	//$db_conn=mysql_connect($db_host,$db_user,$db_passwrd);
	$mysqli = new mysqli($db_host, $db_user, $db_passwrd, $db_name);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	echo $mysqli->host_info . "<br>";
	mysqli_query($mysqli,"Select * from 'tbltest'");
	//Select working db
	//$connection_string=mysql_select_db($db_name);
	
?>
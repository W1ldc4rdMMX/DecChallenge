<?php
	//Database parameters
	$db_host="localhost";
	$db_name="db_meta_data";
	$db_user="lear.p";
	$db_passwrd="W1ldc4rD";
	//connect db
	$db_conn=mysql_connect($db_host,$db_user,$db_passwrd);
	//Select working db
	$connection_string=mysql_select_db($db_name);
	
?>
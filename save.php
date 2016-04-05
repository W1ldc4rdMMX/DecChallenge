<?php
	include('./config/config.php');
	include("./dbFunctions.php");
	include('./myfunctions.php');
	$metatagnames=GetMetaDB();		
	
	foreach($metatagnames as $val){
		foreach($val as $subkey => $subval){
			$postvarname="txt".$subkey; 
			echo $_POST[$postvarname];
			echo "<br>";

		}	
	}
	

?>

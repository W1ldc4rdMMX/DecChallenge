<!DOCTYPE html>
<head>
	<?php include("header.html"); ?>
</head>
<div class="container">
  <div class="jumbotron">
    <h2>Stored Metadata</h2>    
  </div>
 </div>
<?php
		include("./config/config.php");
		include("./dbFunctions.php");
		include('./myfunctions.php');
		$metadata=GetMetaDB();
		//print_r($DBmetadata);
		/* foreach($metadata as $val){				
			foreach($val as $subval)
			{					
				echo $subval."<br>";				
			} 
		} */
		display_DB_meta($metadata);
?>
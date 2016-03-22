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
		$metadata=GetMetaDB();
		display_DB_meta($metadata);
?>
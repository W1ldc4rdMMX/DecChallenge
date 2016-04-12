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
		display_DB_meta($metadata);
		if(isset($_POST["addUfield"]) && isset($_POST["addUdata"])) {
			addAddtionalMeta($_POST["metaid"],$_POST["addUfield"],$_POST["addUdata"]);
			echo "<meta http-equiv=\"Refresh\" content=\"10\">";
			//header("refresh:0;url=view.php");
		}

?>

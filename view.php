<?php 
	include("header.html");
	include("./dbFunctions.php");
	include('./myfunctions.php');
?>

<html>
	<div class="container">
		<div class="jumbotron">
    		<h2>Stored Metadata</h2>    
  		</div>
		<body>
			<div class="well">
			<?php
				//include("./config/config.php");
				$metadata=GetMetaDB();
				display_DB_meta($metadata);
				if(isset($_POST["addUfield"]) && isset($_POST["addUdata"])) {
					addAddtionalMeta($_POST["metaid"],$_POST["addUfield"],
					$_POST["addUdata"]);
					echo "<meta http-equiv=\"Refresh\" content=\"10\">";
					//header("refresh:0;url=view.php");
				}
			?>
			</div>
		</body>
	</div>
</html>

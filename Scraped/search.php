<?php 
	include("header.html"); 
	include("dbFunctions.php");
	include("myfunctions.php");
?>

<html>
	<div class="container">
  		<div class="jumbotron">
    		<h2>Search Results</h2>    
  		</div>
		<body>
			<div class="well">
			<?php 
				$srch_results=SearchDB($_POST['srch-term']); 
				display_DB_meta($srch_results);
 				if(isset($_POST["addUfield"]) && isset($_POST["addUdata"])) {
	            addAddtionalMeta($_POST["metaid"],$_POST["addUfield"],
   	         $_POST["addUdata"]);
               echo "<meta http-equiv=\"Refresh\" content=\"10\">";
               //header("refresh:0;url=view.php");
	         }
			?>		
		</body>
		</div>
	</div>
</html>


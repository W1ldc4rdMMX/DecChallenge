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
				//print_r($srch_results);
				display_DB_meta($srch_results);				
			?>
		</body>
		</div>
	</div>
</html>


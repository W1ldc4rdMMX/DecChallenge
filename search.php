<?php 
	include("header.html"); 
	include("dbFunctions.php");
?>

<html>
	<div class="container">
  		<div class="jumbotron">
    		<h2>Search Results</h2>    
  		</div>
		<body>
			<div class="well">
			<?php SearchDB($_POST['srch-term']); ?>
		</body>
		</div>
	</div>
</html>


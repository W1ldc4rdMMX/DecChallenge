<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
<fieldset>
    Select a file to upload:
    <input type="file" name="fileToRead" id="fileToRead">
    <input type="submit" value="Read file Metadata" name="submit">
</fieldset>
</form>
<br><br>
<?php
	foreach($_FILES['fileToRead'] as $key => $value) {
		echo "[$key] = $value";
		echo "<br>";
	}
	$uploaddir = "./uploads/";
	$uploadfile = $uploaddir.basename($_FILES['fileToRead']['name']);
	if(move_uploaded_file($_FILES['fileToRead']['tmp_name'],$uploadfile)){
		echo "file uploaded";
	}else{
		echo "an error has occured";
	}
	echo "<br>";

	$metadata=get_meta_tags("http://www.afrihost.com");
	$fp=fopen($uploadfile,'r');
	$metadata2=stream_get_meta_data($fp);
	
	echo "<br>";
	echo "stream_get_meta_data <br>";
	foreach($metadata2 as $key => $mdata){
		echo "[$key] = $mdata <br>";
	}	
	echo "<br>";
	echo "get_meta_tags <br>";
	foreach($metadata as $key => $value){
		echo "[$key] = $value <br>";
	}
?>

</body>
</html> 

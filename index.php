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
	//Read basic file info
	echo "Basic file info <br>";
	echo "<fieldset>";
	foreach($_FILES['fileToRead'] as $key => $value) {
		echo "[$key] = $value";
		echo "<br>";
	}
	//Get file type
	$tempFile=$_FILES['fileToRead']['type'];
	$ftype=substr($tempFile,0,strpos($tempFile,"/"));
	$tempFile=$_FILES['fileToRead']['tmp_name'];

	//Determine which function to use to get meta data
	switch ($ftype) {
		case "image": 
				echo "Pictue Meta data <br>";
				//echo exif_imagetype($tempFile);
				//print_r(getimagesize($tempFile));
				//$Picdata=exif_read_data($tempFile);
				//print_r(exif_read_data("uploads/birthday-stag-678.JPG"));
				$PicSize=getimagesize($tempFile);
				foreach($Picsize as $key => $val){
				//	foreach($section as $name => $val){
						echo "$key = $val <br>";
				//	}
				}
				break;
		case "application":echo "Application";break;
		case "text": echo "Text";break;
		case "object":echo "Object";break;
		default: echo "Unknown file type";
	}
	
//	echo "file size: ".filesize($_FILES['fileToRead']['tmp_name'])."<br>";
//	echo "stat: ".print_r(stat($_FILES['fileToRead']['tmp_name']))."<br>";
//	echo "file: ";
//	foreach (file($_FILES['fileToRead']['tmp_name']) as $key => $value){
//		echo "$key => $value <br>";
//	}
	echo "</fieldset>";

	//Store file for reading addtional meta data
	//$uploaddir = "./uploads/";
	//$uploadfile = $uploaddir.basename($_FILES['fileToRead']['name']);
	//Check if file was successfully uploaded
	//if(move_uploaded_file($_FILES['fileToRead']['tmp_name'],$uploadfile)){
	//	echo "file uploaded";
	//}//else{
		//need a new error message here
	//	echo "an error has occured";
//	}
//	echo "<br>";

	//open file for reading
//	$fp=fopen($uploadfile,'r');
//	$metadata=get_meta_tags($fp);
//	$metadata2=stream_get_meta_data($fp);
	
//	echo "file size: ".filesize($uploadfile);
//	echo "<br>";
//	echo "stream_get_meta_data <br>";

//	foreach($metadata2 as $key => $mdata){
//		echo "[$key] = $mdata <br>";
//	}	
//	echo "<br>";
//	echo "get_meta_tags <br>";
//	foreach($metadata as $key => $value){
//		echo "[$key] = $value <br>";
//	}

//	$fileAttr=xattr_list($fp);
//	foreach($fileAttr as $key => $value){
//		 echo "[$key] = $value <br>";
//	}	
?>

</body>
</html> 

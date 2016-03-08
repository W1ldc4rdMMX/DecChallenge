<!DOCTYPE html>
<?php
	include("./functions.php");
?>
	
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
	$tmpFleTyp=$_FILES['fileToRead']['type'];
	$ftype=substr($tmpFleTyp,0,strpos($tmpFleTyp,"/"));
	$tempFile=$_FILES['fileToRead']['tmp_name'];
	
	//Determine which function to use to get meta data
	switch ($ftype) {
		case "image": 
				echo "<h2>Pictue Meta data</h2> <br>";
				//Check if image is jpeg
				if ($tmpFleTyp=="image/jpeg") {
					//Read picture metadata and store in array
					$Picdata=exif_read_data($tempFile);
					foreach($Picdata as $key => $val){
						echo "$key = $val <br>";
					}
				} else {
					//if not jpeg format, get data manually....this should probabley be in a function
					$Picdata['FileName']=$_FILES['fileToRead']['name'];
					$Picdata['FileDateTime']=filemtime($tempFile);
					$Picdata['FileSize']=$_FILES['fileToRead']['size'];
					$Picdata['MimeType']=$tmpFleTyp;
					list($width, $height, $type) = getimagesize($tempFile);
					$Picdata['width']=$width;
					$Picdata['height']=$height;
					$Picdata['Filetype']=$type;
					//echo "Attribute " .$attr;
					//getimagesize($tempFile);
					//echo date('d-M-Y :H:i:s',filemtime($tempFile))."<br>";
					foreach($Picdata as $key => $val){
						echo "$key = $val <br>";
					}
				}
				break;
		case "application":
				echo "Application";
				break;
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

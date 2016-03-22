<!DOCTYPE html>
<head>
<!--<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
-->
</head>
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
	include('./myfunctions.php');
	include('./config/config.php');
	include('./dbFunctions.php');
	
	echo "<h2>Basic file info</h2>";
	echo "<fieldset>";
	$tempFile=$_FILES['fileToRead']['tmp_name'];
	//Store base data and get file type
	$file_meta=get_base_file_info($tempFile);
	//Determine which function to use to get meta data		
	switch ($file_meta['Filetype']) {
		case "image": 
			echo "<h3>Picture Meta data</h3> "; 
			list($width, $height, $type) = getimagesize($tempFile);
			$file_meta['width']=$width;
			$file_meta['height']=$height;			
			break;
		case "application":
			echo "<h3>Application</h3>";
			break;
		case "text": 
			echo "<h3>Text</h3>";
			$file_meta['WrdCnt']=0;
			$file_meta['LineCnt']=0;
			//get number of lines and words in file
			$fp=fopen($tempFile,'r');
			$handle = $fp;
			if ($handle) {
				while (!feof($handle)) {
					$lines = fgets($handle);	
					$file_meta['WrdCnt'] += str_word_count($lines);
					$file_meta['LineCnt']++;
				}
				fclose($handle);				
			}			
			break;
		case "video":
			echo "<h3>Video</h3>";
			break;
		case "audio":
			echo "<h3>Audio</h3>";
			break;
		case "object":
			echo "<h3>Object</h3>";			
			break;
		default: echo "Unknown file type";
	}
	//check for addtional meta data
	$addMeta=get_meta_tags($tempFile);
	if (!empty($addMeta)) {
		foreach ($addMeta as $key => $val) {
			$file_meta["$key"] = $val;
		}
	}			
	//Display Metadata found
	display_file_meta($file_meta);
	AddMeta2DB($file_meta);
	echo "</fieldset>";	
	//chkDB();	
	
	
?>

</body>
</html> 

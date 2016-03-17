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
	include('./myfunctions.php');
	include('./config/config.php');
	echo "Basic file info <br>";
	echo "<fieldset>";
		
	$tempFile=$_FILES['fileToRead']['tmp_name'];
	
	//Store base data and get file type
	$file_meta=get_base_file_info($tempFile);
	
	//Determine which function to use to get meta data		
	switch ($file_meta['Filetype']) {
		case "image": 
			echo "<h2>Picture Meta data</h2> "; 
			echo "<br>";			
			list($width, $height, $type) = getimagesize($tempFile);
			$file_meta['width']=$width;
			$file_meta['height']=$height;			
			break;
			
		case "application":
			echo "<h2>Application</h2>";
			echo "<br>";			
			break;
			
		case "text": 
			echo "<h2>Text</h2>";
			echo "<br>";
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
			echo "<h2>Video</h2>";
			echo "<br>";			
			break;
			
		case "audio":
			echo "<h2>Audio</h2>";
			echo "<br>";			
			break;
			
		case "object":
			echo "<h2>Object</h2>";			
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
	echo "</fieldset>";	
?>

</body>
</html> 

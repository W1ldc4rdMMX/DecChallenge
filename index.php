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
	/* foreach($_FILES['fileToRead'] as $key => $value) {
		echo "[$key] = $value";
		echo "<br>";
	} */
	
	$tempFile=$_FILES['fileToRead']['tmp_name'];
	$array=get_meta_tags($_FILES['fileToRead']['tmp_name']);
	foreach($array as $key => $value) {
		echo "[$key] = $value";
		echo "<br>";
	}
	
	//Store base data and get file type
	$file_meta=get_base_file_info($tempFile);
	//Determine which function to use to get meta data
	$addMeta=get_meta_tags($tempFile);
	display_file_meta($addMeta);
	switch ($file_meta['Filetype']) {
		case "image": 
			echo "<h2>Picture Meta data</h2> "; 
			echo "<br>";
			list($width, $height, $type) = getimagesize($tempFile);
			$file_meta['width']=$width;
			$file_meta['height']=$height;
			//print_r(get_dpi($tempFile));
			display_file_meta($file_meta);
			
			break;
			
		case "application":
			echo "<h2>Application</h2>";
			echo "<br>";
			display_file_meta($file_meta);
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
			display_file_meta($file_meta);			
			break;
			
		case "video":
			echo "<h2>Video</h2>";
			echo "<br>";
			display_file_meta($file_meta);	
			break;
			
		case "audio":
			echo "<h2>Audio</h2>";
			echo "<br>";
			display_file_meta($file_meta);	
			break;
			
		case "object":
			echo "<h2>Object</h2>";
			
			break;
		default: echo "Unknown file type";
	}
	echo "</fieldset>";	
?>

</body>
</html> 

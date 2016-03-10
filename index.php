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
	$tmpFleTyp=$_FILES['fileToRead']['type'];
	$ftype=substr($tmpFleTyp,0,strpos($tmpFleTyp,"/"));
	$tempFile=$_FILES['fileToRead']['tmp_name'];
	
	//Determine which function to use to get meta data
	switch ($ftype) {
		case "image": 
				echo "<h2>Picture Meta data</h2> "; 
				echo "<br>";
				//if not jpeg format, get data manually....this should probabley be in a function
				$picdata['FileName']=$_FILES['fileToRead']['name'];
				$picdata['FileDateTime']=filemtime($tempFile);
				$picdata['FileSize']=filesize($tempFile);
				$picdata['MimeType']=$tmpFleTyp;
				list($width, $height, $type) = getimagesize($tempFile);
				$picdata['width']=$width;
				$picdata['height']=$height;
				$picdata['Filetype']=$ftype;
				$picdata['FileOwner']=fileowner($tempFile);
				foreach($picdata as $key => $val){
					echo "$key = $val <br>";
				}
				break;
		case "application":
				echo "<h2>Application</h2>";
				echo "<br>";
				$appdata['FileName']=$_FILES['fileToRead']['name'];
				$appdata['FileDateTime']=filemtime($tempFile);
				$appdata['FileSize']=filesize($tempFile);
				$appdata['MimeType']=$tmpFleTyp;
				$appdata['Filetype']=$ftype;
				$appdata['FileOwner']=fileowner($tempFile);				
				foreach($appdata as $key => $val){
					echo "$key = $val <br>";
				}
				/*get_meta_tags($tempFile);
				print_r($appData);
				$appData=stream_get_meta_data($tempFile);
				print_r($appData);*/
				break;
		case "text": 
			echo "<h2>Text</h2>";
			echo "<br>";
			$txtdata['FileName']=$_FILES['fileToRead']['name'];
			$txtdata['FileDateTime']=filemtime($tempFile);
			$txtdata['FileSize']=filesize($tempFile);
			$txtdata['MimeType']=$tmpFleTyp;
			$txtdata['Filetype']=$ftype;
			$txtdata['FileOwner']=fileowner($tempFile);
			$txtdata['WrdCnt']=0;
			$txtdata['LineCnt']=0;
			//get number of lines and words in file
			$fp=fopen($tempFile,'r');
			$handle = $fp;
			if ($handle) {
				while (!feof($handle)) {
					$lines = fgets($handle);	
					$txtdata['WrdCnt'] += str_word_count($lines);
					$txtdata['LineCnt']++;
				}
				fclose($handle);				
			}
			
			foreach($txtdata as $key => $val){
				echo "$key = $val <br>";
			}
			break;
		case "object":echo "Object";break;
		default: echo "Unknown file type";
	}
	echo "</fieldset>";

	
?>

</body>
</html> 

<!DOCTYPE html>
<head>
	<?php include("header.html"); ?>
</head>

<html>
<div class="container">
  <div class="jumbotron">
    <h2>Metadata webapp Home page</h2>    
  </div>
	<body>
	<div class="well">
		<form action="" method="post" enctype="multipart/form-data">	
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">Select a file to upload:</legend>
			<div class="row">
				<div class="col-sm-8">
					<input type="file" class="btn btn-info btn-lg" 
					name="fileToRead" id="fileToRead">
				</div>   
			<div class="col-sm-4">
				<input type="submit" class="btn btn-success btn-lg" 
				value="Read file Metadata" id="readMeta" onclick="chkForFile()"
				name="submit">
			</div>   
		</div>    
		</fieldset>
		</form>
	</div>

<script>
function chkForFile(){
	//window.alert("function called");
	var x = document.getElementById("readMeta");
	x.disable = "active";
}
</script>

<?php
	//Read basic file info
	include('./myfunctions.php');
	include('./config/config.php');
	include('./dbFunctions.php');
	
	
	echo "<div class=\"well well-sm\"><h3>Basic file info</h3></div>";
	echo "<div class=\"well well-lg\">";
	echo "<fieldset>";
	if (isset($_FILES['fileToRead'])) {
		$tempFile=$_FILES['fileToRead']['tmp_name'];
		//Store base data and get file type
		$file_meta=get_base_file_info($tempFile);
		//Determine which function to use to get meta data		
		$filetype="unknown";
	
		switch ($file_meta['Filetype']) {
			case "image": 
				$filetype="Picture"; 
				list($width, $height, $type) = getimagesize($tempFile);
				$file_meta['width']=$width;
				$file_meta['height']=$height;			
				break;
			case "application":
				$filetype="Application";
				break;
			case "text": 
				$filetype="Text";
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
				$filetype="Video";
				break;
			case "audio":
				$filetype="Audio";
				break;
			case "object":
				$filetype="Object";			
				break;
			default: 
				$filetype = "Other";
				//echo "Unknown file type";
		}
		//----------------------------------------------------------------------
		//check for addtional meta data

		$filedata = file_get_contents($tempFile); 
		$data = json_decode($filedata,true);
		
		//check if array was formed
		if (!empty($data)) {
			foreach ($data as $key => $val) {
				if (is_array($val)) {
					loopthrudata($val,$key);
					continue;
				}
				$file_meta["$key"] = $val;
			}
			if (!empty($tempArr)) {
				foreach ($tempArr as $key => $val){
					$file_meta[$key] = $val;
				}
			}
		}

		$addMeta=get_meta_tags($tempFile);
		if (!empty($addMeta)) {
			foreach ($addMeta as $key => $val) {
				$file_meta["$key"] = $val;
			}
		}			
	
		//Display Metadata found
		echo "<h3><small>".$filetype."</small></h3> ";
		display_file_meta($file_meta);
		AddMeta2DB($file_meta);
		echo "</fieldset>";	
		echo "</div>";
		unset( $_FILES['fileToRead']['name'] );
		unset( $_FILES['fileToRead']['tmp_name'] );

	}	

	function loopthrudata($arrData,$keyval) {
		global $tempArr;
		foreach ($arrData as $k => $v) {
			if (is_array($v)) {
				loopthrudata($v,$keyval.".".$k);	
				continue;
			}
			$tempArr[$keyval.".".$k] = $v;
		}
		
	}
?>

</div>
</body>
</html> 

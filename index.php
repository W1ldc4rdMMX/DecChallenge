<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Metadata Webapp</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Home </a></li>          
        <li><a href="#">History</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span>Search</a></li>
  </button>
      </ul>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>-->
    </div>
  </div>
</nav>

<html>
<div class="container">
  <div class="jumbotron">
    <h2>Metadata web-app</h2>    
  </div>
	<body>
	<div class="well">
	<form action="" method="post" enctype="multipart/form-data">	
	<fieldset class="scheduler-border">
		<legend class="scheduler-border">Select a file to upload:</legend>
		<div class="row">
			<div class="col-sm-8">
				<input type="file" class="btn btn-info btn-lg" name="fileToRead" id="fileToRead">  
			</div>   
			<div class="col-sm-4">
			<?php 
				/* if($_FILES['fileToRead']['name']=="") 
				{ 
					echo "<input type=\"submit\" class=\"btn btn-success btn-lg disabled\" value=\"Read file Metadata\" name=\"submit\">";
				} else {
					echo "<input type=\"submit\" class=\"btn btn-success btn-lg active\" value=\"Read file Metadata\" name=\"submit\">";
				} */
			?>
			<input type="submit" class="btn btn-success btn-lg" value="Read file Metadata" name="submit">
			</div>   
		</div>    
	</fieldset>
	</form>
	</div>
	
<?php
	//Read basic file info
	include('./myfunctions.php');
	include('./config/config.php');
	include('./dbFunctions.php');
	
	
	echo "<div class=\"well well-sm\"><h3>Basic file info</h3></div>";
	echo "<div class=\"well well-lg\">";
	echo "<fieldset>";
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
	echo "<h3><small>".$filetype."</small></h3> ";
	display_file_meta($file_meta);
	AddMeta2DB($file_meta);
	echo "</fieldset>";	
	echo "</div>";
	$_FILES['fileToRead']['name']="";
	//chkDB();	
	
	
?>
</div>
</body>
</html> 

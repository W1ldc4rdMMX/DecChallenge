<?php
	$testfile1=("./Test_file/001.torrent");
	$testfile2=("./Test_file/002.wpl");
	$testfile3=("./Test_file/003.jpg");
	$testfile4=("./Test_file/004.doctree");
	$testfile5=("./Test_file/005.ott");
	$testfile6=("./Test_file/006.exe");
	$testfile7=("./Test_file/007.txt");
	$testfile8=("./Test_file/008.xlsx");
	$testfile9=("./Test_file/009.zip");
	$testfile10=("./Test_file/010.pfx");
	$testfile11=("./Test_file/011.csproj");
	$testfile12=("./Test_file/012.exe.config");
	$testfile13=("./Test_file/013.pdb");
	$testfile14=("./Test_file/014.sln");
	$testfile15=("./Test_file/015.exe.manifest");
	$testfile16=("./Test_file/016.pdf");
	$testfile17=("./Test_file/017.png");
	$testfile18=("./Test_file/018.cs");
	$testfile19=("./Test_file/019.xml");
	$testfile20=("./Test_file/020.mp4");

	//SplFileInfo::getATime(
	//$addPicMeta=exif_read_data($tempFile);
			/*if(!empty($addPicMeta)) {
				foreach ($addPicMeta as $key => $section) {
					foreach ($section as $name => $val) {
						echo "$key.$name: $val<br />\n";
					}
				}
				/* foreach($addPicMeta as $key => $val){
					if (!is_array($val)){
						$file_meta["$key"] = $val;
					}else{
						foreach($val as $subkey => $subval){
							$file_meta["$subkey"] = $subval;
						}
					}
					
					//print_r($addPicMeta);
				} 
			} */
	//Check if image is jpeg
				/*if ($tmpFleTyp=="image/jpeg") {
					//Read picture metadata and store in array
					$Picdata=exif_read_data($tempFile);
					foreach($Picdata as $key => $val){
						echo "[$key] = $val <br>";
					}
				} else {*/
	
	/*echo "file size: ".filesize($testfile1)."<br>";
	echo "stat: <br>";
	for($i=1;$i<=20;$i++){
		$tempvar="testfile".$i;
		echo $$tempvar." <br>";
		foreach(stat($$tempvar) as $key => $value){
			echo "$key => $value <br>";
		}
	}*/
	
	//open file for reading
	/*for($i=1;$i<=20;$i++){
		$tempvar="testfile".$i;
		$fp=fopen($$tempvar,'r');
		echo "File <br>";
		print_r($fp);
		echo "<br>";
		$metadata2=stream_get_meta_data($fp);
		echo "stream_get_meta_data <br>";
		foreach($metadata2 as $key => $mdata){
			echo "[$key] = $mdata <br>";
		}	
	}*/
	
	/*echo "<br>";
	echo "file_get_contents <br>";
	for($i=1;$i<=10;$i++){
		$tempvar="testfile".$i;
		$section = strip_tags(file_get_contents($$tempvar));
		var_dump($section);
		echo "<br>";
	}*/
	
		
	/*echo "<br>";
	echo "simplexml_load_file <br>";
	for($i=1;$i<=10;$i++){
		$tempvar="testfile".$i;
		echo $$tempvar."<br>";
		$xmlload=simplexml_load_file($$tempvar);
		print_r($xmlload);	
	}*/
	
	
	/*echo "<br>";
	for($i=1;$i<=20;$i++){
		$tempvar="testfile".$i;
		$TAarray = explode("\n", strip_tags($$tempvar)); 
		var_dump($TAarray);

		//loop through the array 
		foreach ($TAarray as $line) { 
				$line = htmlspecialchars(trim($line)); 
				echo $line."<br>";
		}      
	
		foreach ($TAarray as $url) {
				// get the meta data for each url
				$tags = get_meta_tags($url);

			/*unset($tags["content-type"]);
			unset($tags["page-type"]);
			unset($tags["page-topic"]);
			unset($tags["audience"]);

					echo '<tr>';
					foreach ($tags as $meta) {
                        echo '<td>' . $meta . '</td>';
					}
					echo '</tr>';
		}
		
	}*/
/*===================NOT USED================================
	echo "<br>";
	echo "file: <br>";
	for($i=1;$i<=19;$i++){
		$tempvar="testfile".$i;
		echo $$tempvar." <br>";
		foreach (file($$tempvar) as $key => $value){
			echo "$key => $value <br>";
		}
	}
	echo "<br>";
	
	echo "get_meta_tags <br>";
	for($i=1;$i<=20;$i++){
		$tempvar="testfile".$i;
		$metadata=get_meta_tags($$tempvar);
		echo "<br>";
		echo "get_meta_tags <br>";
		print_r($metadata);
		echo "<br>";
	}
	
	echo "<br>";
	echo "fgetss <br>";
	for($i=1;$i<=10;$i++){
		$tempvar="testfile".$i;
		$fp=fopen($$tempvar,'r');
		$handle = $fp;
		if ($handle) {
			while (!feof($handle)) {
				$buffer = fgets($handle, 4096);
				echo $buffer;
			}
			fclose($handle);
		}
	}

	echo "<br>";
	echo "file <br>";	
	for($i=1;$i<=10;$i++){
		$tempvar="testfile".$i;
		$lines = file($$tempvar);
		//Loop through our array, show HTML source as HTML source; and line numbers too.
		foreach ($lines as $line_num => $line) {
			echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
		}	
	}
	*/	
?>
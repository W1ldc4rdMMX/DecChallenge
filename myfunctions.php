<?php
	
	//get basic data of all files and store to array
	function get_base_file_info($tmpFile)
	{
		$tmpFleTyp=$_FILES['fileToRead']['type'];
		$ftype=substr($tmpFleTyp,0,strpos($tmpFleTyp,"/"));
		$base_file_info['FileName']= $_FILES['fileToRead']['name'];
		$base_file_info['FileModDT']=date('jS-M-Y, H:i',filemtime($tmpFile));
		$base_file_info['FileSize']=filesize($tmpFile);
		$base_file_info['MimeType']=$tmpFleTyp;
		$base_file_info['Filetype']=$ftype;
		$base_file_info['FileOwner']=fileowner($tmpFile);
		return $base_file_info;
	}
	
	//loop through array and print data
	function display_file_meta($metadata)
	{
		echo "<div class=\"table-responsive\">";
		echo "<table class=\"table table-striped table-hover\">
				<thead>
					<tr>
						<th>Data Field</th>
						<th>Value</th>        
					</tr>
				</thead>";
		echo "<tbody>";
		foreach($metadata as $key => $val){
			echo "<tr>";
			if ($key=='FileSize'){
				echo "<td>$key</td>";
				echo "<td>".FileSizeConvert($val)."</td>";
				continue;
			}
			echo "<td>$key</td>"; 
			echo "<td>$val</td>";
			echo "</tr>";
		}
		echo "</tbody>";
		echo "<table>";
		echo "</div>";
	}
		
	function display_DB_meta($metadata)
	{
		echo "<div class=\"table-responsive\">";
		echo "<table class=\"table table-hover\">
				<thead>
					<tr>";
		foreach ($metadata as $key => $val)
		{
				echo "<th>".$key."</th>";					
		}
		echo "</thead>";
		echo "<tbody>";
		
		foreach($metadata as $key => $val){
			echo "<tr>";
			if ($key=='FileSize'){
				echo "<td>".FileSizeConvert($val)."</td>";
				continue;
			}
			echo "<td>$val</td>";
			echo "</tr>";
		}
		echo "</tbody>";
		echo "<table>";
		echo "</div>";
	}
	/**
	* Converts bytes into human readable file size.
	*
	* @param string $bytes
	* @return string human readable file size (2,87 Мб)
	* @author Mogilev Arseny
	*/
	function FileSizeConvert($bytes)
	{
		$bytes = floatval($bytes);
			$arBytes = array(
				0 => array(
					"UNIT" => "TB",
					"VALUE" => pow(1024, 4)
				),
				1 => array(
					"UNIT" => "GB",
					"VALUE" => pow(1024, 3)
				),
				2 => array(
					"UNIT" => "MB",
					"VALUE" => pow(1024, 2)
				),
				3 => array(
					"UNIT" => "KB",
					"VALUE" => 1024
				),
				4 => array(
					"UNIT" => "B",
					"VALUE" => 1
				),
			);

		foreach($arBytes as $arItem)
		{
			if($bytes >= $arItem["VALUE"])
			{
				$result = $bytes / $arItem["VALUE"];
				$result = str_replace(".", "," , strval(round($result, 2)))." ".$arItem["UNIT"];
				break;
			}
		}
		return $result;
	}
	
	function store_meta_data($arrayMetaD){
		
		
	}
  /* function get_dpi($filename){
	//get_png_imageinfo();
    $a = fopen($filename,'rb');
    $string = fread($a,filesize($filename));
    fclose($a);
	
    $data = bin2hex(substr($string,14,4));
    $x = substr($data,0,4);
    $y = substr($data,4,4);

      return array(hexdec($x),hexdec($y));
  } */

?>

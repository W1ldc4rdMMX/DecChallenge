<?php
	
	//get basic data of all files and store to array
	function get_base_file_info($tmpFile)
	{
		$tmpFleTyp=$_FILES['fileToRead']['type'];
		$ftype=substr($tmpFleTyp,0,strpos($tmpFleTyp,"/"));
		$base_file_info['FileName']= $_FILES['fileToRead']['name'];
		$base_file_info['FileModDT']=date('jS-M-Y, H:i',filemtime($tmpFile));
		$base_file_info['FileSize']=filesize($tmpFile). " bytes";
		$base_file_info['MimeType']=$tmpFleTyp;
		$base_file_info['Filetype']=$ftype;
		$base_file_info['FileOwner']=fileowner($tmpFile);
		return $base_file_info;
	}
	
	//loop through array and print data
	function display_file_meta($metadata)
	{
		foreach($metadata as $key => $val){
			echo "$key = $val <br>";
		}
	}
		
  function get_dpi($filename){
	//get_png_imageinfo();
    $a = fopen($filename,'rb');
    $string = fread($a,filesize($filename));
    fclose($a);
	
    $data = bin2hex(substr($string,14,4));
    $x = substr($data,0,4);
    $y = substr($data,4,4);

      return array(hexdec($x),hexdec($y));
  }

?>

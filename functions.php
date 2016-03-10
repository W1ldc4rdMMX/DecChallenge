<?php
	
	function get_base_file_info($tmpFile)
	{
		$base_file_info['FileName']= $_FILES['fileToRead']['name'];
		$base_file_info['FileDateTime']=filemtime($tempFile);
		$base_file_info['FileSize']=filesize($tempFile);
		$base_file_info['MimeType']=$tmpFleTyp;
		$base_file_info['Filetype']=$type;
		$base_file_info['FileOwner']=fileowner($tempFile);	
	}
  /*function get_dpi($filename){
      $a = fopen($filename,'r');
      $string = fread($a,20);
      fclose($a);

      $data = bin2hex(substr($string,14,4));
      $x = substr($data,0,4);
      $y = substr($data,4,4);

      return array(hexdec($x),hexdec($y));*/
  }
?>

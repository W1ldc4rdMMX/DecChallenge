<?php

  function get_dpi($filename){
      $a = fopen($filename,'r');
      $string = fread($a,20);
      fclose($a);

      $data = bin2hex(substr($string,14,4));
      $x = substr($data,0,4);
      $y = substr($data,4,4);

      return array(hexdec($x),hexdec($y));
  }
?>

<!DOCTYPE html>
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
		//echo "<div class=\"well well-lg\">";
		echo "<div class=\"table-responsive\">";
		echo "<table class=\"table table-hover\">
				<thead>
					<tr>";
		echo "<th>Click to Edit</th>";
		foreach ($metadata[0] as $key => $val)
		{
				//Skip meta_id field
				if ($key=='id'){					
					continue;
				}
				echo "<th>".$key."</th>";					
		}
		echo "</thead>";
		echo "<tbody>";
		echo "<tr>";		
		$i=0;
		
		//loop for each row of the array
		foreach($metadata as $val)
		{
			//loop through each col of the current row of the array	
			
			//insert edit button
			echo "<td> <button type=\"button\" class=\"btn btn-info btn-sm\" 
			data-toggle=\"modal\" data-target=\"#myModal".$val['id']."\">
			Edit data</button></td>";
			//begin building and storing code for modal window
			$addtomodal="<div class = \"first-row\">
			<div class=\"well\">";
			//loop to get column names and data to be viewed in modal window
			foreach($val as $subkey => $subval){
				if (strtolower($subkey)=='id'){
					$addtomodal.="<input type=\"hidden\" name=\"meta.".$subkey."\"
					value=\"".$subval."\"/>";
				}
				if($subkey <> "id" AND strtolower($subkey) <> "adddata"){
					$addtomodal.="<label class=\"control-label col-sm-2\"
					for=\"".$subkey."\">".$subkey."</label>";
					$addtomodal.="<div class=col-sm-10>
					<input type=\"text\" class=\"form-control\" 
					name=\"".$subkey."\" id=\"".$subkey."\" value=\""
					.formatDispVal($subkey,$subval)."\">
					</div><br><br>";					
				}
				//$addtomodal="</div>";
				if (strtolower($subkey)=='adddata'){
					//Check if addtional Meta data is avalible
					if($subval <> "0" AND $subval <> "a:0:{}"){
						//Format addtional meta data string to array
						$addmeta=unserialize($subval);
						$addtomodal.="</div><div class=\"well well-sm\">
						<fieldset>";
						foreach($addmeta as $metakey => $metaval){
									$addtomodal.="<h4><label 
									class=\"control-label col-sm-5\"
									for=\"".$metakey."\">
									<span class=\"label label-pill label-info\">"
									.$metakey."</span></label></h4>";
									$addtomodal.="<div class=\"col-sm-5\">
									<input type=\"text\" 
									class=\"form-control\" name=\"".$metakey."\" 
									id=\"".$metakey."\" value=\"".$metaval."\">
									</div>
									<div class=\"col-sm-2\">
									<a class=\"btn btn-danger btn-xs open-delModal\" 
									data-toggle=\"modal\"
									data-field-id = \"".$metakey."\" 
									data-target=\"#delModal\">
                        	<i class=\"glyphicon glyphicon-minus\"></i>  
									Remove<br>Data
                          </a></div><br>";
						}
						$addtomodal.="</fieldset><br>";
						continue;
					}
					continue;					
				}
			}
							
			//add generated string data to modal string builder
			//add footer to modal string builder

			createMainModal($val['id'],$val['filename'],$addtomodal);
			createSubModal($val['id']); 
			delModal($val['id']); 
			
			foreach($val as $subkey => $subval)
			{		
				//Skip meta_id field
				if ($subkey=='id'){					
					continue;
				}
				//format to human readable filesize
				if ($subkey=='filesize'){
					echo "<td>".FileSizeConvert($subval)."</td>";
					continue;
				}
				//format to human readable date
				if ($subkey=='filedate'){
					echo "<td>".date('jS-M-Y, H:i',$subval)."</td>";
					continue;
				}
				//format add metadata for output
				if (strtolower($subkey)=='adddata'){
					//Check if addtional Meta data is avalible
					if($subval <> "0" AND $subval <> "a:0:{}"){
						//Format addtional meta data string to array
						$addmeta=unserialize($subval);						
						//set-up dynamic collapsable tables
						echo "<td><button class=\"btn btn-info btn-sm\" 
						data-toggle=\"collapse\" data-target=\"#demo".$i."\">
						View addtional data</button>";
						echo "<div id=\"demo".$i."\" class=\"collapse\">
								<div class=\"table-responsive\">
								<table class=\"table table-hover\">
									<thead>
										<tr>
										<th>Data</th>
										<th>Value</th>
										</tr>
									</thead>
									<tbody>";
						//loop through addtional Meta array and output to sub table
						foreach($addmeta as $metakey => $metaval){
									echo "<tr><td>".$metakey."</td>";
									echo "<td>".$metaval."</td></tr>";
						}
						echo "		</tbody>
								</table>
							</tr>
						</div>
						</div>
						</td>";
						//increment for Dynamic collapsable name
						$i++;
					}
						continue;
				}
				echo "<td>".$subval."</td>";	
				
			}			
			echo "</tr>";			
		}
		echo "</tbody>";
		echo "</table>";
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
				$result = str_replace(".", "," , strval(round($result, 2)))." ".
				$arItem["UNIT"];
				break;
			}
		}
		return $result;
	}

	function createMainModal($id, $mfilename, $addtoMain) {
		$mainModal="<div class=\"modal fade\" id=\"myModal".$id."\">
                    <div class=\"modal-dialog\">
                       <div class=\"modal-content\">
                        <form class=\"form-horizontal\" 
								action=\"save.php\" method=\"post\">
                          <div class=\"modal-header\">
                             <button type=\"button\" class=\"close\" 
										data-dismiss=\"modal\" aria-hidden=\"true\">×
										</button>
                             <h4 class=\"modal-title\">Meta data for ".
										$mfilename."</h4>
                          </div>
                          <div class=\"modal-body\">
                          <br>";
		$mainModal.=$addtoMain;
		$mainModal.="</div>
                  	<div class=\"modal-footer\">
                     	<button type=\"button\" class=\"btn btn-default\" 
								data-dismiss=\"modal\">Close</button>
                         <a class=\"btn btn-default\" data-toggle=\"modal\" 
								data-target=\"#mysubModal".$id."\">
                        	 <i class=\"glyphicon glyphicon-plus\"></i>  
									Add additional MetaData
                          </a>
                          <button type=\"submit\" class=\"btn btn-primary\">
									Save changes</button>
                       </div>
                    </form>
                   </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->";
		echo $mainModal;
	}

	function createSubModal($id) {
		$submodal="<div class=\"modal fade\" id=\"mysubModal".$id."\" 
		tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" 
		aria-hidden=\"true\">
    						<div class=\"modal-dialog\">
		      				<div class=\"modal-content\">
								<form action=\"".
								htmlspecialchars($_SERVER["PHP_SELF"])."\" 
								method=\"post\">
							      <div class=\"modal-header\">
							         <button type=\"button\" class=\"close\" 
										data-dismiss=\"modal\" aria-hidden=\"true\">
										&times;</button>
					   		      <h4 class=\"modal-title\">Modal title</h4>
					        		</div>
					        		<div class=\"modal-body\">
										<input type=\"hidden\" name=\"metaid\" 
										value=\"".$id."\"/>
										<label for=\"addUfield\"><span 
										class=\"label label-primary\">
										Meta Field name</span></label>
	                           <input type=\"text\" class=\"form-control\" 
										name=\"addUfield\"><br>
										<label for=\"addUdata\"><span 
										class=\"label label-primary\">Meta Data</span>
										</label>
	                           <input type=\"text\" class=\"form-control\" 
										name=\"addUdata\">
									</div>
			   			   	<div class=\"modal-footer\">
         	 						<button type=\"button\" 
										class=\"btn btn-default\" 
										data-dismiss=\"modal\">Close</button>
	          						<button type=\"submit\" 
										class=\"btn btn-primary\">Save changes</button>
       		 					</div>
								</form>
		     					</div><!-- /.modal-content -->
			  				</div><!-- /.modal-dialog -->
			  			</div><!-- /.modal -->";
		echo $submodal;
	}

	function delModal($id){
		$delmodal="<div class=\"modal fade\" id=\"delModal\" 
		tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" 
		aria-hidden=\"true\">
    						<div class=\"modal-dialog\">
		      				<div class=\"modal-content\">
								<form action=\"".
								htmlspecialchars($_SERVER["PHP_SELF"])."\" 
								method=\"post\">
							      <div class=\"modal-header\">
							         <button type=\"button\" class=\"close\" 
										data-dismiss=\"modal\" aria-hidden=\"true\">
										&times;</button>
					   		      <h4 class=\"modal-title\">Modal title</h4>
					        		</div>
					        		<div class=\"modal-body\">
										<input type=\"hidden\" name=\"delmetaid\" 
										 id=\"delmetaid\" value=\"".$id."\"/>
										<p>Are you sure you to remove this field?</p>
										<label for=\"fieldname\" 
										name=\"fieldname\"><strong>
										</strong></label>
										<input type=\"hidden\" id=\"delFieldName\" 
										 name=\"delFieldName\" value=\"\"/>
									</div>
			   			   	<div class=\"modal-footer\">
         	 						<button type=\"button\" 
										class=\"btn btn-default\" 
										data-dismiss=\"modal\">Close</button>
	          						<button type=\"submit\" 
										class=\"btn btn-danger\">Delete field</button>
       		 					</div>
								</form>
		     					</div><!-- /.modal-content -->
			  				</div><!-- /.modal-dialog -->
			  			</div><!-- /.modal -->";
		echo $delmodal;	
	}

	
	function store_meta_data($arrayMetaD){
		
		
	}

	function formatDispVal($key,$val) {
		if ($key == "filesize") {
			return FileSizeConvert($val);	
		}
		if ($key == "filedate") {
			return date('jS-M-Y, H:i',$val);
		}
		return $val;
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
<html>
<script>
$(document).on("click", ".open-delModal", function () {
		var myFieldId = $(this).data('field-id');
		alert(myFieldId);
		$("label[for='fieldname']").text(myFieldId);
	 	$(".modal-body #delFieldName").val(myFieldId);
});
</script>
</html>

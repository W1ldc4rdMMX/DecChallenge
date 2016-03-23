<?php
	//DB functions
	include('./config/config.php');
	//see if table exsists, if not create
	$mysqlquery ="SELECT * FROM `tblMetadata`";
	if (!($conn->query($mysqlquery))) {                 
		//Something went wrong; so
        //Create Table
		$Metadata="CREATE TABLE tblMetadata (
        meta_id int(11) NOT NULL auto_increment,
        meta_filename varchar(32) NOT NULL,
        meta_filesize float(32) NOT NULL,
        meta_filedate int(32) NOT NULL,
		meta_filemime varchar(32) NOT NULL,
		meta_filetype varchar(32) NOT NULL,
		meta_addData longblob,
        PRIMARY KEY (meta_id))";
		//$results = $conn->query($Metadata);
		if(($conn->query($Metadata))) {
			echo "table created successfully";
		}
    }
        
		
	function AddMeta2DB($MetaData)
	{
		include("./config/config.php");
		$addMetaData=array_slice($MetaData,6);
		//print_r($MetaData);
		$strAddMetaData=serialize($addMetaData);
		//echo "<br>";
		//echo $strAddMetaData;
        $UpdateDB="INSERT INTO tblMetadata (meta_filename, meta_filesize, meta_filedate,meta_filemime,meta_filetype,meta_addData)
                  VALUES ('".$MetaData['FileName']."',
						".$MetaData['FileSize'].",
						".strtotime($MetaData['FileModDT']).",		
						'".$MetaData['MimeType']."',
						'".$MetaData['Filetype']."',
						'".$strAddMetaData."')";
		 //echo $UpdateDB;
		 $results = $conn->query($UpdateDB);
		 if($results) {
			 echo "<br>";
			 echo "<div class=\"alert alert-success fade in\">
					  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
						<strong>Data saved: </strong> Meta data successfully stored</div>";
		 }
	}
	
	function UpdateMeta2DB()
	{
		
	}
	
	function DelMeta2DB()
	{
		
	}
	
	function GetMetaDB()
	{
		include("./config/config.php");
		$mysqlquery = "SELECT * FROM tblMetadata";
		$results = $conn->query($mysqlquery);
		if (($results)) 
		{			
			$rows=mysqli_fetch_all($results,MYSQLI_ASSOC);
			//print_r($rows);
			$i=0;
			foreach($rows as $key => $val){
				foreach($val as $subkey => $subval){
					//echo "[$subkey] -- $subval <br>";	
					$mdkey=substr($subkey,(strpos($subkey,"_")+1),strlen($subkey));
					$Metadata[$i]["$mdkey"]= $subval;
				}
				$i++;
			}
			
		}
		return($Metadata);
	}
		
?>
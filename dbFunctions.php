<?php
	//DB functions
	include('./config/config.php');
	//see if table exsists, if not create
	$mysqlquery ="SELECT * FROM `tblMetadata`";
	//$check=mysql_query ("SELECT * FROM `people` LIMIT 0,1");
    if (!($conn->query($mysqlquery))) {                 
		//Something went wrong; so
         //Create Table
		 echo "--attempting table create";
               $Metadata="CREATE TABLE tblMetadata (
                meta_id int(11) NOT NULL auto_increment,
                meta_filename varchar(32) NOT NULL,
                meta_filesize float(32) NOT NULL,
                meta_filedate int(32) NOT NULL,
				meta_filemime varchar(32) NOT NULL,
				meta_filetype varchar(32) NOT NULL,
				meta_addData longblob,
                PRIMARY KEY (meta_id))";
		$results = $conn->query($Metadata);
		if($result===TRUE) {
			echo "table created successfully";
		}
    }
        
		
	function AddMeta2DB()
	{
		
	}
	
	function UpdateMeta2DB()
	{
		
	}
	
	function DelMeta2DB()
	{
		
	}
?>
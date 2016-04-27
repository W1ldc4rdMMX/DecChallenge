<?php
	//DB functions
	include('./config/config.php');
	//see if tables exsists, if not create
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

	$mysqlquery ="SELECT * FROM `tblMetaChanges`";
	if (!($conn->query($mysqlquery))) {                 
		//Something went wrong; so
        //Create Table
		$Metadata="CREATE TABLE tblMetaChanges (
      change_id int(11) NOT NULL auto_increment,
      change_date int(32) NOT NULL,
		change_addData longblob,
		meta_id int(11) NOT NULL,
      PRIMARY KEY (change_id),
		FOREIGN KEY (meta_id) REFERENCES tblMetadata(meta_id))";
		//$results = $conn->query($Metadata);
		if(($conn->query($Metadata))) {
			echo "table created successfully";
		}
	}
 	
	/*$mysqlquery ="SELECT * FROM `tblMetaHistory`";
	if (!($conn->query($mysqlquery))) {                 
		//Something went wrong; so Create Table
		$Metadata="CREATE TABLE tblMetaHistory (
      hist_id int(11) NOT NULL auto_increment,
		hist_addData longblob,
		change_id int(11) NOT NULL,
      PRIMARY KEY (hist_id),
		FOREIGN KEY (change_id) REFERENCES tblMetaChanges(change_id))";
		//$results = $conn->query($Metadata);
		if(($conn->query($Metadata))) {
			echo "table created successfully";
		}
	}*/
 
       
		
	function AddMeta2DB($MetaData)
	{
		include("./config/config.php");
		$addMetaData=array_slice($MetaData,6);
		//print_r($MetaData);
		$strAddMetaData=serialize($addMetaData);
		//echo "<br>";
		//echo $strAddMetaData;
      $InsertDB="INSERT INTO tblMetadata (meta_filename, meta_filesize, 
						meta_filedate,meta_filemime,meta_filetype,meta_addData)
                 	VALUES ('".$MetaData['FileName']."',
						".$MetaData['FileSize'].",
						".strtotime($MetaData['FileModDT']).",		
						'".$MetaData['MimeType']."',
						'".$MetaData['Filetype']."',
						'".$strAddMetaData."')";
		$results = mysqli_query($conn,$InsertDB);
		if($results) {
			echo "<br>";
			echo "<div class=\"alert alert-success fade in\">
				  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" 
					aria-label=\"close\">&times;</a>
					<strong>Data saved: </strong> Meta data successfully stored
					</div>";
		}
	}

	function getCurrMeta($metaid) {
		include("./config/config.php");
		$GetCurrentMeta = "SELECT meta_addData 
		FROM  tblMetadata 
		WHERE meta_id = ".$metaid."";
		$results = mysqli_query($conn,$GetCurrentMeta);
	 	$results_array = array();
     	while ($row = $results->fetch_assoc()) {
    		$results_array[] = $row;
    	}
      $oldMetaData=($results_array[0]['meta_addData']);
		return $oldMetaData;
	}
	
	function UpdateMeta2DB($MetaData)
	{
		include("./config/config.php");
		$addMetaData=array_slice($MetaData,6);
		$strAddMetaData=serialize($addMetaData);
		$oldMetaData = getCurrMeta($MetaData['meta_id']);
		
		$UpdateMetaDB="UPDATE tblMetadata 
		SET meta_filename='".$MetaData['filename']."',
		meta_filesize='".$MetaData['filesize']."',
		meta_filedate=".$MetaData['filedate'].",
		meta_filemime='".$MetaData['filemime']."',
		meta_filetype='".$MetaData['filetype']."',
		meta_addData='".$strAddMetaData."' 
		WHERE meta_id=".$MetaData['meta_id']."";
		
		$UpdateChangesDB="INSERT INTO tblMetaChanges( 
		change_date,change_addData,meta_id) 
		VALUES (".strtotime('now').",'".$oldMetaData."'
		,".$MetaData['meta_id'].")";

		// Set autocommit to off
		mysqli_autocommit($conn,FALSE);
		
		mysqli_query($conn,$UpdateMetaDB);
		mysqli_query($conn,$UpdateChangesDB);

		// Commit transaction
		$results = mysqli_commit($conn);
	

		// Close connection
		mysqli_close($conn);
		
		//$results = $conn->query($UpdateDB);
		if($results) {
			 echo "<br>";
			 echo "<div class=\"alert alert-success fade in\">
					  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" 
						aria-label=\"close\">&times;</a>
						<strong>Data saved: </strong> Meta data successfully stored
						</div>";
			//header("refresh:2.5;url=view.php");
		 }
	}
	
	function addAddtionalMeta($id, $key, $val)
	{
		include("./config/config.php");
		$oldMetaData =  getCurrMeta($id);
		$currentMeta = unserialize($oldMetaData);
		$currentMeta[$key]=$val;
		$strcurrentMeta=serialize($currentMeta);
		$insertAddMeta="UPDATE tblMetadata 
							SET meta_addData='".$strcurrentMeta."' 
							WHERE meta_id=".$id."";

		$UpdateChangesDB="INSERT INTO tblMetaChanges(
      change_date,change_addData,meta_id)
      VALUES (".strtotime('now').",'".$oldMetaData."'
      ,".$id.")";
    
		// Set autocommit to off
	    mysqli_autocommit($conn,FALSE);
	    mysqli_query($conn,$insertAddMeta);
	    mysqli_query($conn,$UpdateChangesDB);
	    // Commit transaction
	    $results = mysqli_commit($conn);
	    // Close connection
	    mysqli_close($conn);

      if($results) {
         echo "<br>";
       	echo "<div class=\"alert alert-success fade in\">
         <a href=\"#\" class=\"close\" data-dismiss=\"alert\" 
			aria-label=\"close\">&times;</a>
	         <strong>Data saved: </strong> Meta data successfully stored --
				</div>";
   	   // header("refresh:0");
    	 }
	}
	
	function DelMeta2DB()
	{
		
	}
	
	function GetMetaDB()
	{
		global $conn;
		$mysqlquery = "SELECT * FROM tblMetadata";
		$results = $conn->query($mysqlquery);
		$results_array = array();
				
		while ($row = $results->fetch_assoc()) {	
			$results_array[] = $row;			
		}
		$i=0;
		foreach($results_array as $key => $val){
			foreach($val as $subkey => $subval){
				//echo "[$subkey] -- $subval <br>";	
				$mdkey=substr($subkey,(strpos($subkey,"_")+1),strlen($subkey));
				$Metadata[$i]["$mdkey"]= $subval;
			}
			$i++;
		}
		return($Metadata);
	}
		
	function SearchDB($srchterm) {
		global $conn;
		$table = "tblMetadata";
		$mysqlsrchqry = "SELECT * FROM ".$table." WHERE ";
		$sqlCols = "SHOW COLUMNS FROM ".$table;
		$results = $conn ->query($sqlCols);
		while($r = $results->fetch_assoc()){
			$results_array[]=$r;
		}
		foreach($results_array as $val){
			foreach($val as $key => $subval) {			
				if($key=='Field'){
					$col = $subval;
					$sql_srch_cols[] = $col." like('%".$srchterm."%') ";
				}
			}
		}
		$mysqlsrchqry .= implode(" OR ", $sql_srch_cols);
		
		$srchresults = $conn ->query($mysqlsrchqry);
		$srch_results_array=array();
		$results=array();

		while($rs = $srchresults->fetch_assoc()){
			$results[]=$rs;
		}
		if (empty($results)){
			echo "NO RESULTS FOUND";
			exit;
		}
		$i=0;
		foreach($results as $key => $val){
			foreach($val as $subkey => $subval){
				//echo "[$subkey] -- $subval <br>";	
				$mdkey=substr($subkey,(strpos($subkey,"_")+1),strlen($subkey));
				$srch_results_array[$i]["$mdkey"]= $subval;
			}
			$i++;
		}
		return $srch_results_array;
		//echo$mysqlsrchqry;	
	}
?>

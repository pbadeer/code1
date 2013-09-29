<?php 

	require_once('inc/config.php');

	$q = "SELECT * FROM IDEAS WHERE USERNAME='".$_GET['id']."' order by TMSTMP";
	$r = mysql_query($q);
	$returnArray = array();
	if(gettype($r) != 'boolean')
	while($row = mysql_fetch_assoc($r)){
		$returnArray[] = $row;
	}

	$q = "SELECT * FROM COMMENTS WHERE USERNAME='".$_GET['id']."' order by TIMSTMP";
	$r = mysql_query($q);	
	if(gettype($r) != 'boolean')
	while($row = mysql_fetch_assoc($r)){
		$returnArray[] = $row;
	}	

	echo json_encode($returnArray);


?>
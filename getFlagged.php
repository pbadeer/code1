<?php 

	require_once('inc/config.php');

	$q = "SELECT * FROM IDEAS WHERE ISFLAGGED=1 order by FLAGCOUNT";
	$r = mysql_query($q);
	$returnArray = array();
	while($row = mysql_fetch_assoc($r)){
		$returnArray[] = $row;
	}

	$q = "SELECT * FROM COMMENTS WHERE ISFLAGGED=1 order by FLAGCOUNT";
	$r = mysql_query($q);	
	while($row = mysql_fetch_assoc($r)){
		$returnArray[] = $row;
	}	

	echo json_encode($returnArray);


?>
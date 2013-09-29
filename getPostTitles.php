<?php
	header('Content-type: application/json');
	require_once('inc/config.php');

	$q = "select distinct IDEA from IDEAS order by TMSTMP asc";
	$res = mysql_query($q) or die(mysql_error());
	$return = array();

	while($row = mysql_fetch_assoc($res)){
		$return[] = $row;
	}

	echo json_encode($return);


?>
<?php 
	
	header('Content-type: application/json');

	require_once("inc/config.php");

	$query = "select * from BADGEVIEW where USERNAME = '".$_GET['USERNAME']."'";

	$res = mysql_query($query);
	$res = mysql_fetch_assoc($res);

	echo json_decode($res);


?>
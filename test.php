<?php 
	
	require_once('inc/config.php');

	$query = "select count(*) from USERS";
	$res = mysql_query($query) or die(mysql_error());
	$res = mysql_fetch_array($res);
	var_dump($res);
	

?>
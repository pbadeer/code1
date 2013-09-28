<?php 

	require_once('inc/config.php');

	$query = "select * from USERS where USERNAME='".$_GET['username']."'";
	$res = mysql_query($query)or die(mysql_error());
	$res = mysql_fetch_assoc($res);

	echo json_encode($res);


?>
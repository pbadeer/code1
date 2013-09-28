<?php 
	
	require_once('inc/config.php');

	$query = "update USERS set ISADMIN=1 where username='zolee';";
	$res = mysql_query($query) or die(mysql_error());
	echo $res;
	while($row = mysql_fetch_array($res)){
		var_dump($row);
		echo '<br>';
	}

?>
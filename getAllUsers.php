<?php 

	require_once("inc/config.php");

	$q= "select username from users";
	$res = mysql_query($q);
	while($row=mysql_fetch_array($res)){
		echo $row["username"].'<br>';
	}



?>
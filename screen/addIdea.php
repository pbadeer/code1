<?php 

	
	require_once('inc/config.php');

	$q = "insert into IDEAS (IDEA, USERNAME,TMSTMP,TAG,ISIMPORTANT) values ('".$_POST['fr']."' , '".$_POST['author']."', now(),'idea',0)";
	mysql_query($q) or die(mysql_error());
	
	echo "success";

?>
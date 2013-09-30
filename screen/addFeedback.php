<?php 


	require_once('inc/config.php');

	$q = "insert into IDEAS (IDEA, USERNAME,TMSTMP,TAG,ISIMPORTANT) values ('".$_POST['fb']."' , '".$_POST['author']."', now(),'feedback',0)";
	mysql_query($q) or die(mysql_error());
	
	echo "Thank you for submitting feeback! You can check the status on your feeback by entering Feedback in the One bar";


?>
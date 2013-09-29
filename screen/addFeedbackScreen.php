<?php 


	require_once('inc/config.php');

	$q = "insert into IDEAS (IDEA, USERNAME,TMSTMP,TAG,ISIMPORTANT,SCREENSHOT) values ('".$_POST['fb']."' , '".$_POST['author']."', now(),'feedback',0,'".$_POST['screenshot']."')";
	mysql_query($q) or die(mysql_error());
	
	echo "Thank you! Your feedback has been save. You can view it by typing Feedback in the One bar";


?>
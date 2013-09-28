<?php 

	require_once('inc/config.php');
	require_once('functions.php');

	
	echo json_encode(getCommentsFor($_GET['id']));


	function getCommentsFor($ideaId){		
		$allComments = array();
		$query = "select * from COMMENTS where IDEAID=".$ideaId." order by TIMSTMP desc , UPVOTES desc";
		$res = mysql_query($query) or die(mysql_error());
		while($row = mysql_fetch_assoc($res)){
			$row['timeAgo']= time_elapsed_string($row['TIMSTMP']);
			$allComments[] = $row;
		}
		return $allComments;
	}
	



?>
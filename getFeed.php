<?php 

	require_once('inc/config.php');

	
	echo json_encode(getCommentsFor($_GET['id']));


	function getCommentsFor($ideaId){		
		$allComments = array();
		$query = "select * from COMMENTS where IDEAID=".$ideaId;
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$allComments[] = $row;
		}
		return $allComments;
	}
	



?>
<?php 

	header('Content-type: application/json');

	require_once('inc/config.php');
	require_once('functions.php');

	

	$feed = array();
	$fQuery = "select * from IDEAS order by ISIMPORTANT desc, TMSTMP desc LIMIT 0,".$_GET['limit'];
	$fRes = mysql_query($fQuery) or die(mysql_error());
	while($frow = mysql_fetch_assoc($fRes)){
		$frow['TIMEAGO'] = time_elapsed_string($frow['TMSTMP']);
		$frow['FAVCOUNT'] = getFavCount($frow['IDEAID']);
		$frow['comments'] = getCommentsFor($frow["IDEAID"]);
		$feed[] = $frow;
	}

	echo json_encode($feed);


	function getFavCount($id){

		$q = "select count(*) as num from USERFAVORITES where IDEAID=".$id;
		$res = mysql_query($q) or die(mysql_error());
		$row = mysql_fetch_assoc($res);
		return $row["num"];

	}



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
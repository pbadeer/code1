<?php 

	header('Content-type: application/json');

	require_once('inc/config.php');
	require_once('functions.php');

	

	$feed = array();$p = 0;
	$fQuery = "select * from IDEAS where ISIMPORTANT = 1 order by  TMSTMP desc";
	$fRes = mysql_query($fQuery) or die(mysql_error());
	while($frow = mysql_fetch_assoc($fRes)){
		$p++;
		$frow['TIMEAGO'] = time_elapsed_string($frow['TMSTMP']);
		$frow['FAVCOUNT'] = getFavCount($frow['IDEAID']);
		$frow['comments'] = getCommentsFor($frow["IDEAID"]);
		$feed[] = $frow;
	}


	$seed = array();
	$sQuery = "select * from IDEAS where ISIMPORTANT = 0 order by  TMSTMP desc LIMIT 0,".($_GET['limit'] - $p);
	$sRes = mysql_query($sQuery)or die(mysql_error());
	while($sRow = mysql_fetch_assoc($sRes)){
		$sRow['TIMEAGO'] = time_elapsed_string($sRow['TMSTMP']);
		$sRow['FAVCOUNT'] = getFavCount($sRow['IDEAID']);
		$sRow['comments'] = getCommentsFor($sRow["IDEAID"]);
		$seed[] = $sRow;
	}

	$fCount=0; $sCount=0;
	$returnArray = array();
	for($i=0;$i<(count($feed)+count($seed));$i++){
		if(($i%2) == 0){
			if($fCount < count($feed)){
				$returnArray[] = $feed[$fCount]; $fCount++;
			}else if($sCount < count($seed)){
				$returnArray[] = $seed[$sCount]; $sCount++;
			}
		}else{
			if($sCount < count($seed)){
				$returnArray[] = $seed[$sCount]; $sCount++;
			}else if($fCount < count($feed)){
				$returnArray[] = $feed[$fCount]; $fCount++;
			}
		}		
	}





	echo json_encode($returnArray);


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
			$row['TIMEAGO']= time_elapsed_string($row['TIMSTMP']);
			$allComments[] = $row;
		}
		return $allComments;
	}
	



?>
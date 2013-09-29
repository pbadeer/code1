<?php 

	header('Content-type: application/json');
	require_once('inc/config.php');

	$query = "select * from USERS where USERNAME='".$_GET['username']."'";
	$res = mysql_query($query)or die(mysql_error());
	$res = mysql_fetch_assoc($res);
	$res['BADGES'] = getUserBadges($_GET['username']);

	echo json_encode($res);


	function getUserBadges($username){

		$q = "SELECT BADGES.BADGEID AS BID, BADGES.BADGENAME AS BNAME, BADGES.BADGEDESC AS BDESC, BADGES.BADGEPATH AS BPATH from BADGES,BADGEMAP where BADGEMAP.BADGEID = BADGES.BADGEID AND USERNAME='".$username."';";
		
		$r = mysql_query($q) or die(mysql_error());
		$badges = array();
		while($row = mysql_fetch_assoc($r)){
			$badges[] = $row;
		}
		return $badges;
	}


?>
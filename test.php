<?php 
	
	require_once('inc/config.php');

/*	$query = "update USERS set ISADMIN=1 where username='zolee';";
	$res = mysql_query($query) or die(mysql_error());
	echo $res;
	while($row = mysql_fetch_array($res)){
		var_dump($row);
		echo '<br>';
	}
*/

/*	$users = array("albrooks",
					"alhall",
					"alscott",
					"anlee",
					"anmurphy",
					"anwatson",
					"auanderson",
					"brallen",
					"brdavis",
					"cawright",
					"chdiaz",
					"chgray",
					"chking",
					"cotaylor",
					"dycox",
					"elgriffin",
					"erwilson",
					"etparker",
					"gamartinez",
					"gethompson",
					"grking",
					"hajackson",
					"hathompson",
					"heedwards",
					"isjenkins",
					"jacook",
					"jehughes",
					"joedwards",
					"kemurphy",
					"lawilliams",
					"lecampbell",
					"librooks",
					"luramirez",
					"magarcia",
					"mapowell",
					"nomartin",
					"rigriffin",
					"rijones",
					"rimartin",
					"sadiaz",
					"saharris",
					"samorgan",
					"saprice",
					"scgarcia",
					"shhamilton",
					"sogarcia",
					"sohoward",
					"sostewart",
					"strivera",
					"zolee");

	$qArray = array("I love it!",
					"Yay!",
					"I agree",
					"not sure that is a good idea.",
					"I <3 FNBO ",
					"This is great.",
					"This is awful",
					"Terrific, I love it",
					"There are number of ways this can be improved",
					"I think this can turn out to be an amazing feature",
					"Idea is good, not sure about the execution",
					"I have to disagree",
					"Having been an FNBO customer for 15 years, I have to honestly say that this is one of the best things you have done",
					"hmmm....Can you elaborate?",
					"Is that typical for a bank?",
					"FNBO rocks!",
					"Wells Fargo sucks!",
					"I was at your branch on 16th & Dodge today and the staff were amazing",
					"This is really confusing",
					"Go Big Red!",
					"I am not at all happy with the bank. I will be taking my business elsewhere.",
					"I love you guys. You rock!",
					"That is AWESOME!",
					"Has this been implemented?",
					"Status on this?");

	$rangeQuery = "select min(IDEAID),max(IDEAID) from IDEAS";
	$res = mysql_query($rangeQuery);
	$res = mysql_fetch_array($res);
	var_dump($res);*/

	$f = 0;

	for($i=1;$i<16;$i++){
		$commentCount = rand(0,40);
		for($j=0;$j<=$commentCount;$j++){

			$commentQuery = "insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(".$i.", '".$qArray[rand(0,count($qArray)-1)]."', '".$users[rand(0,49)]."' , now() ,".rand(0,10)." , ".rand(0,5).");";
			$res = mysql_query($commentQuery)or die(mysql_error());
			echo $res.'<br>';
			$f++;
		}
	}

	echo $f;

	/*foreach ($qArray as $key => $value) {
		$res = mysql_query($value);
		echo $res.'<br>';
	}*/

?>
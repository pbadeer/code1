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

	/*
		$users = array("albrooks",
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
			*/
	
	/*
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

		

		$f = 0;

		for($i=1;$i<16;$i++){
			$commentCount = rand(0,30);
			for($j=0;$j<=$commentCount;$j++){

				$commentQuery = "insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(".$i.", '".$qArray[rand(0,count($qArray)-1)]."', '".$users[rand(0,49)]."' , now() ,".rand(0,10)." , ".rand(0,5).");";
				//$res = mysql_query($commentQuery)or die(mysql_error());
				echo $commentQuery.'<br>';
				$f++;
			}
		}

		echo $f;
		*/

		/*foreach ($qArray as $key => $value) {
			$res = mysql_query($value);
			echo $res.'<br>';
		}
	*/

	/*	for($i=1;$i<16;$i++){
			$q = "update IDEAS set UPVOTE=".rand(10,35)." where IDEAID = ".$i.";";
			$res = mysql_query($q)or die(mysql_error());
			echo $res;
		}
	*/



	/*	for($i=1;$i<16;$i++){
			$q = "update IDEAS set DOWNVOTE=".rand(0,10)." where IDEAID = ".$i.";";
			$res = mysql_query($q)or die(mysql_error());
			echo $res;
		}
	*/


	/*	for($i=1;$i<16;$i++){
			$q = "SELECT IDEAID, UPVOTE,DOWNVOTE from IDEAS where IDEAID = ".$i.";";
			$res = mysql_query($q)or die(mysql_error());
			$row = mysql_fetch_array($res);
			echo $row['IDEAID']."----".$row['UPVOTE']."--".$row["DOWNVOTE"].'<br>';
		}
	*/

	/*$q = "select count(*) from COMMENTS";
	$res = mysql_query($q) or die(mysql_error());
	var_dump(mysql_fetch_assoc($res));*/

	/*
		$queries = array("insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'hmmm....Can you elaborate?', 'saprice' , now() ,10 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'Has this been implemented?', 'saprice' , now() ,9 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'Yay!', 'saprice' , now() ,0 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'Yay!', 'rigriffin' , now() ,6 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'Wells Fargo sucks!', 'samorgan' , now() ,10 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'Yay!', 'strivera' , now() ,0 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'I love it!', 'isjenkins' , now() ,3 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'Go Big Red!', 'cotaylor' , now() ,8 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'Status on this?', 'librooks' , now() ,10 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'That is AWESOME!', 'hajackson' , now() ,7 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'This is great.', 'zolee' , now() ,5 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'This is great.', 'brallen' , now() ,4 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'hmmm....Can you elaborate?', 'dycox' , now() ,9 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'I have to disagree', 'chgray' , now() ,8 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'Wells Fargo sucks!', 'elgriffin' , now() ,7 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'There are number of ways this can be improved', 'gethompson' , now() ,5 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'Terrific, I love it', 'sadiaz' , now() ,8 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(1, 'I was at your branch on 16th & Dodge today and the staff were amazing', 'gamartinez' , now() ,4 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(2, 'Having been an FNBO customer for 15 years, I have to honestly say that this is one of the best things you have done', 'samorgan' , now() ,0 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(2, 'Has this been implemented?', 'anwatson' , now() ,6 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(2, 'not sure that is a good idea.', 'luramirez' , now() ,5 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(2, 'I love you guys. You rock!', 'hathompson' , now() ,5 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(2, 'Having been an FNBO customer for 15 years, I have to honestly say that this is one of the best things you have done', 'sostewart' , now() ,6 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(2, 'I love you guys. You rock!', 'brallen' , now() ,4 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(2, 'There are number of ways this can be improved', 'isjenkins' , now() ,1 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(2, 'I was at your branch on 16th & Dodge today and the staff were amazing', 'strivera' , now() ,1 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(2, 'I think this can turn out to be an amazing feature', 'alhall' , now() ,8 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(3, 'Wells Fargo sucks!', 'hajackson' , now() ,10 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(3, 'Terrific, I love it', 'dycox' , now() ,8 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(3, 'Status on this?', 'sostewart' , now() ,5 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(3, 'I agree', 'isjenkins' , now() ,1 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(3, 'FNBO rocks!', 'isjenkins' , now() ,6 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(4, 'Yay!', 'sostewart' , now() ,4 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(4, 'I am not at all happy with the bank. I will be taking my business elsewhere.', 'zolee' , now() ,6 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(4, 'I am not at all happy with the bank. I will be taking my business elsewhere.', 'sogarcia' , now() ,7 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I have to disagree', 'sostewart' , now() ,9 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I am not at all happy with the bank. I will be taking my business elsewhere.', 'dycox' , now() ,3 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I was at your branch on 16th & Dodge today and the staff were amazing', 'albrooks' , now() ,0 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I think this can turn out to be an amazing feature', 'strivera' , now() ,0 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'hmmm....Can you elaborate?', 'jehughes' , now() ,6 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I think this can turn out to be an amazing feature', 'isjenkins' , now() ,8 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'Wells Fargo sucks!', 'chking' , now() ,0 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'Is that typical for a bank?', 'lecampbell' , now() ,4 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I love you guys. You rock!', 'sohoward' , now() ,2 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I was at your branch on 16th & Dodge today and the staff were amazing', 'alscott' , now() ,6 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I am not at all happy with the bank. I will be taking my business elsewhere.', 'erwilson' , now() ,10 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'Having been an FNBO customer for 15 years, I have to honestly say that this is one of the best things you have done', 'lawilliams' , now() ,2 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I think this can turn out to be an amazing feature', 'cawright' , now() ,10 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I was at your branch on 16th & Dodge today and the staff were amazing', 'sostewart' , now() ,10 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'This is great.', 'chking' , now() ,9 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I agree', 'sogarcia' , now() ,6 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I agree', 'cotaylor' , now() ,6 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'Idea is good, not sure about the execution', 'cawright' , now() ,8 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I am not at all happy with the bank. I will be taking my business elsewhere.', 'albrooks' , now() ,8 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'I have to disagree', 'kemurphy' , now() ,3 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(5, 'Yay!', 'chdiaz' , now() ,1 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Go Big Red!', 'alscott' , now() ,10 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'FNBO rocks!', 'joedwards' , now() ,2 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Is that typical for a bank?', 'librooks' , now() ,6 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Status on this?', 'nomartin' , now() ,1 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'I was at your branch on 16th & Dodge today and the staff were amazing', 'saharris' , now() ,5 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'I agree', 'etparker' , now() ,7 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Has this been implemented?', 'etparker' , now() ,4 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'FNBO rocks!', 'chking' , now() ,7 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Status on this?', 'albrooks' , now() ,1 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'I think this can turn out to be an amazing feature', 'auanderson' , now() ,8 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'FNBO rocks!', 'joedwards' , now() ,3 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'I agree', 'rijones' , now() ,8 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'FNBO rocks!', 'nomartin' , now() ,8 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'hmmm....Can you elaborate?', 'scgarcia' , now() ,5 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Wells Fargo sucks!', 'chdiaz' , now() ,3 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Idea is good, not sure about the execution', 'chgray' , now() ,5 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Is that typical for a bank?', 'saprice' , now() ,6 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Having been an FNBO customer for 15 years, I have to honestly say that this is one of the best things you have done', 'kemurphy' , now() ,7 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Yay!', 'etparker' , now() ,4 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Is that typical for a bank?', 'magarcia' , now() ,9 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'I love you guys. You rock!', 'heedwards' , now() ,5 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'There are number of ways this can be improved', 'chking' , now() ,6 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Go Big Red!', 'sostewart' , now() ,6 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Is that typical for a bank?', 'anlee' , now() ,7 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'hmmm....Can you elaborate?', 'kemurphy' , now() ,5 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'I love it!', 'shhamilton' , now() ,0 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'I love you guys. You rock!', 'alhall' , now() ,9 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(6, 'Idea is good, not sure about the execution', 'hathompson' , now() ,2 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'not sure that is a good idea.', 'lawilliams' , now() ,5 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'Having been an FNBO customer for 15 years, I have to honestly say that this is one of the best things you have done', 'anlee' , now() ,0 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'Is that typical for a bank?', 'dycox' , now() ,6 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'Go Big Red!', 'elgriffin' , now() ,4 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'not sure that is a good idea.', 'rijones' , now() ,0 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'I agree', 'nomartin' , now() ,9 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'Is that typical for a bank?', 'rijones' , now() ,6 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'I agree', 'albrooks' , now() ,3 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'Wells Fargo sucks!', 'alhall' , now() ,9 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'FNBO rocks!', 'sostewart' , now() ,4 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'Yay!', 'erwilson' , now() ,7 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'Idea is good, not sure about the execution', 'cotaylor' , now() ,10 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'FNBO rocks!', 'gethompson' , now() ,9 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'not sure that is a good idea.', 'rimartin' , now() ,7 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'I love it!', 'zolee' , now() ,0 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'Wells Fargo sucks!', 'brallen' , now() ,3 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(7, 'Yay!', 'saprice' , now() ,0 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'I <3 FNBO ', 'librooks' , now() ,4 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'This is really confusing', 'luramirez' , now() ,3 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'FNBO rocks!', 'gethompson' , now() ,7 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'Idea is good, not sure about the execution', 'jehughes' , now() ,8 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'I <3 FNBO ', 'elgriffin' , now() ,5 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'Is that typical for a bank?', 'heedwards' , now() ,2 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'Wells Fargo sucks!', 'cawright' , now() ,7 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'Yay!', 'cawright' , now() ,3 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'I am not at all happy with the bank. I will be taking my business elsewhere.', 'rigriffin' , now() ,10 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'hmmm....Can you elaborate?', 'isjenkins' , now() ,10 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'There are number of ways this can be improved', 'mapowell' , now() ,1 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'Go Big Red!', 'anlee' , now() ,8 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'I love it!', 'saprice' , now() ,8 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'Is that typical for a bank?', 'rigriffin' , now() ,6 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'Is that typical for a bank?', 'sohoward' , now() ,9 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'FNBO rocks!', 'brdavis' , now() ,0 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'I am not at all happy with the bank. I will be taking my business elsewhere.', 'mapowell' , now() ,10 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'I was at your branch on 16th & Dodge today and the staff were amazing', 'cawright' , now() ,10 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'Idea is good, not sure about the execution', 'shhamilton' , now() ,10 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(8, 'hmmm....Can you elaborate?', 'isjenkins' , now() ,1 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(9, 'This is awful', 'isjenkins' , now() ,6 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(9, 'I love you guys. You rock!', 'cotaylor' , now() ,5 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(9, 'hmmm....Can you elaborate?', 'gamartinez' , now() ,5 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(9, 'I love it!', 'anwatson' , now() ,10 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(9, 'hmmm....Can you elaborate?', 'erwilson' , now() ,8 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(9, 'Go Big Red!', 'gethompson' , now() ,6 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'not sure that is a good idea.', 'cawright' , now() ,7 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'That is AWESOME!', 'cawright' , now() ,8 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'hmmm....Can you elaborate?', 'heedwards' , now() ,7 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'I think this can turn out to be an amazing feature', 'joedwards' , now() ,5 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'This is awful', 'gamartinez' , now() ,9 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'hmmm....Can you elaborate?', 'hajackson' , now() ,10 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'Yay!', 'luramirez' , now() ,1 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'I <3 FNBO ', 'jehughes' , now() ,7 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'This is really confusing', 'alhall' , now() ,2 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'I love it!', 'librooks' , now() ,7 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'Has this been implemented?', 'dycox' , now() ,8 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'I am not at all happy with the bank. I will be taking my business elsewhere.', 'heedwards' , now() ,5 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'hmmm....Can you elaborate?', 'brallen' , now() ,6 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'There are number of ways this can be improved', 'saharris' , now() ,0 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'I <3 FNBO ', 'gethompson' , now() ,4 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'There are number of ways this can be improved', 'gamartinez' , now() ,10 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'Wells Fargo sucks!', 'rijones' , now() ,0 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'hmmm....Can you elaborate?', 'sostewart' , now() ,10 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'This is really confusing', 'strivera' , now() ,2 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'I was at your branch on 16th & Dodge today and the staff were amazing', 'chking' , now() ,10 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'I <3 FNBO ', 'sadiaz' , now() ,7 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'hmmm....Can you elaborate?', 'alscott' , now() ,5 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'Wells Fargo sucks!', 'albrooks' , now() ,1 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'I love you guys. You rock!', 'anwatson' , now() ,5 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'I love it!', 'erwilson' , now() ,3 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'Idea is good, not sure about the execution', 'brallen' , now() ,7 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'Has this been implemented?', 'jacook' , now() ,1 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'That is AWESOME!', 'sohoward' , now() ,7 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'I <3 FNBO ', 'erwilson' , now() ,1 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(10, 'I agree', 'cawright' , now() ,4 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'Having been an FNBO customer for 15 years, I have to honestly say that this is one of the best things you have done', 'brdavis' , now() ,9 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'I was at your branch on 16th & Dodge today and the staff were amazing', 'isjenkins' , now() ,10 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'Go Big Red!', 'zolee' , now() ,7 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'This is great.', 'rigriffin' , now() ,4 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'Has this been implemented?', 'erwilson' , now() ,7 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'I have to disagree', 'scgarcia' , now() ,8 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'I was at your branch on 16th & Dodge today and the staff were amazing', 'sohoward' , now() ,4 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'I <3 FNBO ', 'luramirez' , now() ,9 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'I love you guys. You rock!', 'kemurphy' , now() ,8 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'I <3 FNBO ', 'samorgan' , now() ,4 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'not sure that is a good idea.', 'zolee' , now() ,4 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'not sure that is a good idea.', 'brdavis' , now() ,0 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'This is awful', 'sohoward' , now() ,0 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'I love you guys. You rock!', 'gethompson' , now() ,7 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'Status on this?', 'auanderson' , now() ,6 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'Yay!', 'cotaylor' , now() ,10 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(11, 'I agree', 'gamartinez' , now() ,6 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'hmmm....Can you elaborate?', 'mapowell' , now() ,2 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'I think this can turn out to be an amazing feature', 'sostewart' , now() ,3 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'Status on this?', 'lawilliams' , now() ,7 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'That is AWESOME!', 'etparker' , now() ,9 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'Terrific, I love it', 'hajackson' , now() ,5 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'I was at your branch on 16th & Dodge today and the staff were amazing', 'joedwards' , now() ,0 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'This is awful', 'sohoward' , now() ,4 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'hmmm....Can you elaborate?', 'elgriffin' , now() ,8 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'FNBO rocks!', 'scgarcia' , now() ,0 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'not sure that is a good idea.', 'gamartinez' , now() ,7 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'not sure that is a good idea.', 'zolee' , now() ,4 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'This is awful', 'isjenkins' , now() ,5 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'Is that typical for a bank?', 'alscott' , now() ,0 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'Wells Fargo sucks!', 'grking' , now() ,1 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'FNBO rocks!', 'rimartin' , now() ,8 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'I agree', 'scgarcia' , now() ,1 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(12, 'I agree', 'sohoward' , now() ,3 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(13, 'Wells Fargo sucks!', 'hajackson' , now() ,2 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(13, 'This is awful', 'hajackson' , now() ,4 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(13, 'Having been an FNBO customer for 15 years, I have to honestly say that this is one of the best things you have done', 'luramirez' , now() ,3 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(13, 'hmmm....Can you elaborate?', 'sogarcia' , now() ,0 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(13, 'not sure that is a good idea.', 'kemurphy' , now() ,10 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(13, 'Having been an FNBO customer for 15 years, I have to honestly say that this is one of the best things you have done', 'heedwards' , now() ,0 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(13, 'There are number of ways this can be improved', 'sostewart' , now() ,9 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(13, 'I love you guys. You rock!', 'scgarcia' , now() ,2 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(13, 'I am not at all happy with the bank. I will be taking my business elsewhere.', 'joedwards' , now() ,7 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'I love you guys. You rock!', 'chdiaz' , now() ,1 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'I agree', 'cotaylor' , now() ,2 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'I <3 FNBO ', 'samorgan' , now() ,7 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'I think this can turn out to be an amazing feature', 'etparker' , now() ,5 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'Is that typical for a bank?', 'saharris' , now() ,3 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'I agree', 'mapowell' , now() ,1 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'I am not at all happy with the bank. I will be taking my business elsewhere.', 'sohoward' , now() ,7 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'Yay!', 'albrooks' , now() ,10 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'Wells Fargo sucks!', 'shhamilton' , now() ,6 , 0);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'Has this been implemented?', 'anlee' , now() ,7 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'I am not at all happy with the bank. I will be taking my business elsewhere.', 'heedwards' , now() ,8 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'Is that typical for a bank?', 'lecampbell' , now() ,10 , 3);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'Yay!', 'hajackson' , now() ,10 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(14, 'Wells Fargo sucks!', 'grking' , now() ,8 , 2);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(15, 'Having been an FNBO customer for 15 years, I have to honestly say that this is one of the best things you have done', 'sohoward' , now() ,8 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(15, 'I <3 FNBO ', 'librooks' , now() ,4 , 4);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(15, 'I have to disagree', 'hajackson' , now() ,8 , 1);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(15, 'This is really confusing', 'hajackson' , now() ,3 , 5);",
						"insert into COMMENTS(IDEAID,COMMENTTEXT,AUTHOR,TIMSTMP,UPVOTES,DOWNVOTES) values(15, 'I love it!', 'chdiaz' , now() ,6 , 0);");

		foreach ($queries as $key => $value) {
			$res = mysql_query($value) or die(mysql_error());
			echo $res.'<br>';
		}
	*/



	/*for($i=1;$i<16;$i++){
		$h = rand(0,64800);
		$q = "update IDEAS set TMSTMP = date_sub(now(), interval -".$h." second) where IDEAID=".$i;
		$res = mysql_query($q) or die(mysql_error());
	}*/


	/*REDO. This is the comment timestamp stuff. Rerun it later*/

	/*for($i=1;$i<16;$i++)	{
		$q = "select TMSTMP as tmstmp from IDEAS where IDEAID=".$i;
		$res = mysql_query($q) or die(mysql_error());
		$row = mysql_fetch_assoc($res);
		$t = $row['tmstmp'];

		echo $t.'<br>';

		$commentCount = "select min(ID), max(ID) from COMMENTS where IDEAID=".$i;
		$resc = mysql_query($commentCount)or die(mysql_error());
		$crow = mysql_fetch_array($resc);
		var_dump($crow);
		$min = $crow[0]; $max = $crow[1];

		echo $min;

		for($j = $min;$j<$max+1;$j++){
			$h = rand(0,60*60*2);
			$cQuery = "UPDATE COMMENTS SET TIMSTMP=date_add(now(), interval +".$h." second) where ID=".$j;
			$result = mysql_query($cQuery) or die(mysql_error());
		}

	}*/

	//Adding badges to the DB

	/*	$badges = array("insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(1, 'Admin' , 'Admin badge', 'http://pbport.com/adi/badges/badge.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(2, 'Bolt' , 'Two ideas! On a roll', 'http://pbport.com/adi/badges/bolt.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(3, 'Brew' , 'Unlocked Level 3.Savour this moment', 'http://pbport.com/adi/badges/brew.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(4, 'Brush' , 'Posted 5 comments. Adding color', 'http://pbport.com/adi/badges/brush.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(5, 'Calendar' , 'Visited for 5 consecutive days', 'http://pbport.com/adi/badges/calendar.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(6, 'Eye' , 'Provided feedback. You have an eye for detail.', 'http://pbport.com/adi/badges/eye.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(7, 'Feather' , 'Posted 15 comments. Leaving a trail here.', 'http://pbport.com/adi/badges/feather.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(8, 'Goblet' , 'Unlocked Level 4.', 'http://pbport.com/adi/badges/goblet.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(9, 'Gold' , 'Idea implemented in labs. Whoo!', 'http://pbport.com/adi/badges/gold.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(10, 'Hat' , 'Posted 3 ideas. A beuatiful mind', 'http://pbport.com/adi/badges/hat.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(11, 'Heart' , 'Loving the ideas here :) ', 'http://pbport.com/adi/badges/heart.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(12, 'id' , '', 'http://pbport.com/adi/badges/id.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(13, 'Key' , 'Unlocked Level 1', 'http://pbport.com/adi/badges/key.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(14, 'Bug' , 'You are a lifesave. You caught a bug!', 'http://pbport.com/adi/badges/lifesaver.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(15, 'Bulb' , 'A smart idea posted', 'http://pbport.com/adi/badges/lightbulb.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(16, 'plugin' , 'Level 5 unlocked. One with us', 'http://pbport.com/adi/badges/plugin.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(17, 'Labs' , 'Unlocked Labs!', 'http://pbport.com/adi/badges/labs.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(18, 'Shoot' , 'Laying down your roots', 'http://pbport.com/adi/badges/shoot.png');",
						"insert into BADGES(BADGEID,BADGENAME,BADGEDESC,BADGEPATH) values(19, 'Shout' , 'Has 25 upvotes. Your voice is being heard', 'http://pbport.com/adi/badges/shout.png');");

		foreach ($badges as $key => $value) {
			$res = mysql_query($value) or die(mysql_error());
			echo $res;
		}*/

		/*$q = "alter table COMMENTS add column ISCHANGE tinyint(1) DEFAULT 0";
		$res = mysql_query($q) or die(mysql_error());
		echo $res;*/

		/*$q = "DESC COMMENTS";
		$res = mysql_query($q) or die(mysql_error());
		while($row=mysql_fetch_assoc($res)){
			var_dump($res);
		}*/
		/*
		$q = "CREATE TABLE USERUPVOTES(USERNAME VARCHAR(16) NOT NULL,IDEAID INT NOT NULL,PRIMARY KEY (USERNAME, IDEAID));";
		$q1 = "ALTER TABLE USERUPVOTES ADD FOREIGN KEY (IDEAID) REFERENCES IDEAS (IDEAID)	ON UPDATE RESTRICT	ON DELETE RESTRICT;";
		$q2 = "ALTER TABLE USERUPVOTES	ADD FOREIGN KEY (USERNAME)	REFERENCES USERS (USERNAME)	ON UPDATE RESTRICT	ON DELETE RESTRICT;";
		mysql_query($q) or die(mysql_error());
		mysql_query($q1) or die(mysql_error());
		mysql_query($q2) or die(mysql_error());*/

		/*
		$q = "select count(*) from USERUPVOTES";
		$r = mysql_query($q) or die(mysql_error());
		$r = mysql_fetch_array($r);
		var_dump($r);*/

		/*
		for($i=1;$i<16;$i++){

			$q = "Select UPVOTE from IDEAS where IDEAID =".$i;
			$res = mysql_query($q) or die(mysql_error());
			$row = mysql_fetch_assoc($res);
			$count = $row['UPVOTE'];

			$sanc = array();

			for($j=0;$j<$count;$j++){

				do{
					$index = rand(0,count($users)-1);
				}while(in_array($index,$sanc));

				$sanc[] = $index;
				$ins = "insert into USERUPVOTES values('".$users[$index]."' , ".$i.");";
				mysql_query($ins) or die(mysql_error());
			}

		}*/

		/*
				$q = "select count(*) as num, USERNAME from IDEAS group by USERNAME";
				$r = mysql_query($q) or die(mysql_error());
				while($row = mysql_fetch_assoc($r)){
					$iq = "update USERS set POINTS = POINTS +".($row["num"]*100)." where USERNAME='".$row["USERNAME"]."'";
					mysql_query($iq)or die(mysql_error());
				}
		

				$q = "select USERNAME,POINTS from USERS";
				$r = mysql_query($q) or die(mysql_error());
				while($row = mysql_fetch_assoc($r)){
					var_dump($row);
					echo '<br>';
				}
		*/

/*
		$q = "SELECT USERNAME,sum(UPVOTE) as total from IDEAS group by USERNAME";
		$res = mysql_query($q) or die(mysql_error());
		while($row = mysql_fetch_assoc($res)){
			$iq = "update USERS set POINTS = POINTS +".($row["total"]*30)." where USERNAME='".$row["USERNAME"]."'";
			mysql_query($iq)or die(mysql_error());
		}


		$q = "select USERNAME,POINTS from USERS";
				$r = mysql_query($q) or die(mysql_error());
				while($row = mysql_fetch_assoc($r)){
					var_dump($row);
					echo '<br>';
				}*/

	/*	$q = "SELECT USERNAME,count(*) as total from USERUPVOTES group by USERNAME";
		$res = mysql_query($q) or die(mysql_error());
			while($row = mysql_fetch_assoc($res)){
				$iq = "update USERS set POINTS = POINTS +".($row["total"]*10)." where USERNAME='".$row["USERNAME"]."'";
				mysql_query($iq)or die(mysql_error());
		}

		$q = "select USERNAME,POINTS from USERS";
				$r = mysql_query($q) or die(mysql_error());
				while($row = mysql_fetch_assoc($r)){
					var_dump($row);
					echo '<br>';
				}*/


		/*$q = "SELECT AUTHOR,count(*) as total from COMMENTS group by AUTHOR";
		$res = mysql_query($q) or die(mysql_error());
			while($row = mysql_fetch_assoc($res)){
				$iq = "update USERS set POINTS = POINTS +".($row["total"]*25)." where USERNAME='".$row["AUTHOR"]."'";
				mysql_query($iq)or die(mysql_error());
		}

		$q = "select USERNAME,POINTS from USERS";
				$r = mysql_query($q) or die(mysql_error());
				while($row = mysql_fetch_assoc($r)){
					var_dump($row);
					echo '<br>';
				}*/



?>
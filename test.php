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

	$qArray = array("insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values('credit card companies and banks had a minimal click option on their site & phone apps to let them know you are traveling internationally so their fraud protections do not automatically kick in and cancel/suspend your card?','samorgan',now(),0, 'idea');",


					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values('there were an app that allowed you to take a picture of what you purchased so when you looked at your bank statement you remembered what #xxxxx... referred to.','grking',now(),0, 'idea');",

					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values('your credit/debit card company or bank provided a service to email you a copy of your receipt for everything you purchase?','anmurphy',now(),0, 'idea');",

					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values('Banking websites I.E. Pnc, TD, Chase Etc. had a calculator on site so I would not have to keep flipping between my homescreen and dashboard when doing my finances','etparker',now(),0, 'idea');",

					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values( 'You could link your flybuys or any other loyalty card program to your credit/bank card to alleviate swiping twice & avoid clutter.','rijones',now(),0, 'idea');",

					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values( 'Order cheque books from the bank with the press of a button in an app.','magarcia',now(),0, 'feedback');",

					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values( 'Can you implement a system where merchants could send itemized receipts to your bank account directly instead of paper one.','dycox',now(),0, 'idea');",

					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values( 'I wish the bank implemented two factor authentication for security. We are  really worried about the security','The Anonymous',now(),0, 'feedback');",

					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values( 'Is there a better way to connect with your bank than calling customer service.','jehughes',now(),0, 'feedback');",

					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values( 'The banks website needs some design changes to improve the UI/UX','jacook',now(),0, 'feedback');",

					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values( 'Can the bank offer piggy bank accounts to kids to teach them dealing with finances?','anonymous',now(),0, 'idea');",

					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values( 'The banks mobile site is as good as the app','samorgan',now(),0, 'feedback');",

					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values( 'Just rolled out ability to tag expenses to easily categorize your spending','zolee',now(),0, 'update');",

					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values( 'I love the new website.','samorgan',now(),0, 'feedback');",

					"insert into IDEAS(IDEA,USERNAME,TMSTMP,ISIMPORTANT,TAG)values( 'It is hard to find the transfers page in the current design.','samorgan',now(),0, 'feedback');");

	foreach ($qArray as $key => $value) {
		$res = mysql_query($value);
		echo $res.'<br>';
	}

?>
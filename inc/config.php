<?php

define('DB_HOST','localhost');
define('DB_USER', 'root');
define('DB_PASS','root');
define('DB_NAME','test');

mysql_connect(DB_HOST,DB_USER,DB_PASS);

mysql_select_db(DB_NAME)
 or die( "Unable to select database");

?>
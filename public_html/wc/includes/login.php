<?php 
$db_hostname = 'localhost';
$db_database = 'samofitc_wc';
$db_username = 'samofitc_Q';
$db_password = '322300';

$db_server = mysql_connect($db_hostname, $db_username, $db_password);
	if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db($db_database)
	or die("Unable to select database: " . mysql_error());
?>
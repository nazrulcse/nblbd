<?php
$server = 'localhost';
$user = 'nblcom_mashfiq';
$pass = 't{(S8!d8M^8G';
$db_name = 'nblcom_neew';
$connReal = mysql_connect($server,$user,$pass) or die(mysql_error());
mysql_select_db($db_name);
?>
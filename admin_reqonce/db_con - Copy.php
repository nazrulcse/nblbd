<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'nbbbl_neeew';
$connReal = mysql_connect($server,$user,$pass) or die(mysql_error());
mysql_select_db($db_name);
?>
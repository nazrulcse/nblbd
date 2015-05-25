<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'nblbd_neew';
$connReal = mysql_connect($server,$user,$pass) or die(mysql_error());
mysql_select_db($db_name);
?>
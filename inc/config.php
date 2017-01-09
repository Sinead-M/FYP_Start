<?php

$db_host="localhost";
$db_name="first_db";
$db_username="root";
$db_password="";

$db_con=mysql_connect($db_host,$db_username,$db_password);
$connection_string=mysql_select_db($db_name);

mysql_connect($db_host,$db_username,$db_password)or die(mysql_error());
mysql_select_db($db_name)or die("Cannot connect to database");;

?>

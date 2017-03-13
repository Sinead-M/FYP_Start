<?php

$host = "localhost";
$user = "root";
$pass = "";

$databaseName = "kerry_flyer";
$tableName = "routes";

include 'inc/config.php';
$con = mysql_connect($host, $user, $pass);
$dbs = mysql_select_db($databaseName, $con);

$val = 'Route 3';
$result = mysql_query("SELECT * FROM $tableName where route_name ='$val'");
$array = mysql_fetch_array($result);

echo $array;
<?php

$host = "localhost";
$user = "root";
$pass = "";

$databaseName = "kerry_flyer";
$tableName = "routes";

include 'inc/config.php';
$con = mysql_connect($host, $user, $pass);
$dbs = mysql_select_db($databaseName, $con);

$val = $_POST['val'];
$result = mysql_query("SELECT * FROM $tableName where driver ='$val'");
$array = mysql_fetch_array($result);

echo json_encode($array);
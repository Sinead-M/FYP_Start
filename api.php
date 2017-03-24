<?php

include 'inc/config.php';


$route =$_POST['route'];
$driver = $_POST['driver'];

$query = mysql_query("SELECT * FROM routes WHERE route_name = '$route' AND driver = '$driver'") or die ("Select Id Error");
$array = mysql_fetch_row($query);
echo json_encode($array);


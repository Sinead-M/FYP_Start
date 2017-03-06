<?php
    include 'inc/config.php';
    if(issit($_POST['display'])){
        $result = mysql_query("SELECT * FROM routes");
    }

$result = mysql_query("SELECT * FROM $tableName where driver ='TJ Nelligan'");
$array = mysql_fetch_array($result);

echo json_encode($array);

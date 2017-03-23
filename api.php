<?php

include 'inc/config.php';


$route ="Carrick/ Fossa (Return)";
$driver = "TJ Nelligan";

$query = mysql_query("SELECT * FROM routes WHERE route_name = '$route' AND driver = '$driver'") or die ("Select Id Error");
//while ($row = mysql_fetch_array($query)){
//    echo "<p class='routeDetails'>Vehicle Number: </p><input type='text' style='width:100%' name ='vehicleNumber' value='" . $row['vehicle_no'] . "'/><p class='routeDetails'>Driver Name: </p>
//    <input type='text' style='width:100%' name='driverName' value='" . $row['driver'] . "'/><p class='routeDetails'>Route Name: </p>
//    <input type='text' style='width:100%' name='routeName' value='" . $row['route_name'] . "'/><p class='routeDetails'>Route Number: </p>
//    <input type='text' style='width:100%' name='routeNumber' value='" . $row['route_no'] . "'/><p class='routeDetails'>Time: </p>
//    <input type='text' style='width:100%' name='time' value='" . $row['time'] . "'/><p class='routeDetails'>Number of Passengers: </p>
//    <input type='text' style='width:100%' name='passNum' value='" . $row['passenger_no'] . "'/><p class='routeDetails'>Passenger Assist: </p>
//    <input type='text' style='width:100%' name='passAssist' value='" . $row['passenger_assist'] . "'/><p class='routeDetails'>Accessibility Requirements: </p>
//    <input type='text' style='width:100%' name='access' value='" . $row['access_req'] . "'/>";
//}
$array = mysql_fetch_row($query);
echo json_encode($array);


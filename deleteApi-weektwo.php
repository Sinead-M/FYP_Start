<?php

include 'inc/config.php';


$route =$_POST['route'];
$driver = $_POST['driver'];
$day = $_POST['weekday'];

if($day === "monday") {
    mysql_query("UPDATE `routestwo` SET `monday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
} else if($day === "tuesday") {
    mysql_query("UPDATE `routestwo` SET `tuesday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
} else if($day === "wednesday") {
    mysql_query("UPDATE `routestwo` SET `wednesday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
} else if($day === "thursday") {
    mysql_query("UPDATE `routestwo` SET `thursday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
} else if($day === "friday") {
    mysql_query("UPDATE `routestwo` SET `friday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
} else if($day === "saturday") {
    mysql_query("UPDATE `routestwo` SET `saturday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
} else if($day === "sunday") {
    mysql_query("UPDATE `routestwo` SET `sunday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
}
echo json_encode(array('success'=>$message));




<?php

include 'inc/config.php';

//gets the information from ajax for the first calendar
$route =$_POST['route'];
$driver = $_POST['driver'];
$day = $_POST['weekday'];

//Actually updates the routes and removes the day that it wants to be deleted from
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
//Returns a success message
echo json_encode(array('success'=>$message));




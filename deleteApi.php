<?php

include 'inc/config.php';

//gets the information from ajax for the second calendar
$route =$_POST['route'];
$driver = $_POST['driver'];
$day = $_POST['weekday'];

//Actually updates the routes and removes the day that it wants to be deleted from
if($day === "monday") {
    mysql_query("UPDATE `routes` SET `monday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
} else if($day === "tuesday") {
    mysql_query("UPDATE `routes` SET `tuesday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
} else if($day === "wednesday") {
    mysql_query("UPDATE `routes` SET `wednesday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
} else if($day === "thursday") {
    mysql_query("UPDATE `routes` SET `thursday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
} else if($day === "friday") {
    mysql_query("UPDATE `routes` SET `friday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
} else if($day === "saturday") {
    mysql_query("UPDATE `routes` SET `saturday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
} else if($day === "sunday") {
    mysql_query("UPDATE `routes` SET `sunday`= 'no' WHERE driver = '$driver' AND route_name = '$route'");
    $message ="Route Deleted Successfully!";
}
//Returns a success message
echo json_encode(array('success'=>$message));




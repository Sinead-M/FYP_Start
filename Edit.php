<?php
session_start();
if($_SESSION['user']){
}
else{
    header("location:index.php");
}

//Receives information for the form when a route is being edited and updates the data base Edit.php
if($_SERVER['REQUEST_METHOD'] = "POST") {
    $vehicle = $_POST['vehicleNumber'];
    $driverName = $_POST['driverName'];
    $routeName = $_POST['routeName'];
    $routeNumber = $_POST['routeNumber'];
    $time = $_POST['time'];
    $numberPass = $_POST['passNum'];
    $passAssist = $_POST['passAssist'];
    $access = $_POST['access'];

    mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("kerry_flyer") or die("Cannot connect to database");

    if ($_POST['Monday-true'] != null) {
        mysql_query("UPDATE routes SET route_no='$routeNumber', passenger_no='$numberPass', time='$time', passenger_assist='$passAssist', access_req='$access' WHERE  driver='$driverName' AND route_name='$routeName' AND monday='yes'");
        Print '<script>alert("This route has been updated");</script>';
    }else if ($_POST['Tuesday-true'] != null) {
        mysql_query("UPDATE routes SET route_no='$routeNumber', passenger_no='$numberPass', time='$time', passenger_assist='$passAssist', access_req='$access' WHERE  driver='$driverName' AND route_name='$routeName' AND tuesday='yes'");
        Print '<script>alert("This route has been updated");</script>';
    }else if ($_POST['Wednesday-true'] != null) {
        mysql_query("UPDATE routes SET route_no='$routeNumber', passenger_no='$numberPass', time='$time', passenger_assist='$passAssist', access_req='$access' WHERE  driver='$driverName' AND route_name='$routeName' AND wednesday='yes'");
        Print '<script>alert("This route has been updated");</script>';
    } else if ($_POST['Thursday-true'] != null) {
        mysql_query("UPDATE routes SET route_no='$routeNumber', passenger_no='$numberPass', time='$time', passenger_assist='$passAssist', access_req='$access' WHERE  driver='$driverName' AND route_name='$routeName' AND thursday='yes'");
        Print '<script>alert("This route has been updated");</script>';
    }else if ($_POST['Friday-true'] != null) {
        mysql_query("UPDATE routes SET route_no='$routeNumber', passenger_no='$numberPass', time='$time', passenger_assist='$passAssist', access_req='$access' WHERE  driver='$driverName' AND route_name='$routeName' AND friday='yes'");
        Print '<script>alert("This route has been updated");</script>';
    }else if ($_POST['Saturday-true'] != null) {
        mysql_query("UPDATE routes SET route_no='$routeNumber', passenger_no='$numberPass', time='$time', passenger_assist='$passAssist', access_req='$access' WHERE  driver='$driverName' AND route_name='$routeName' AND saturday='yes'");
        Print '<script>alert("This route has been updated");</script>';
    }else if ($_POST['Sunday-true'] != null) {
        mysql_query("UPDATE routes SET route_no='$routeNumber', passenger_no='$numberPass', time='$time', passenger_assist='$passAssist', access_req='$access' WHERE  driver='$driverName' AND route_name='$routeName' AND sunday='yes'");
        Print '<script>alert("This route has been updated");</script>';
    }
    Print '<script>window.location.assign("adminHome.php");</script>';


}


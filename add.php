<?php
    include 'inc/config.php';
    session_start();
    if($_SESSION['user']){
    }
    else{
        header("location:index.php");
    }

    if($_SERVER['REQUEST_METHOD'] = "POST") {
        $vehicle = $_POST['vehicleNumber'];
        $driverName = $_POST['driverName'];
        $routeName = $_POST['routeName'];
        $routeNumber = $_POST['routeNumber'];
        $time = $_POST['time'];
        $numberPass = $_POST['passNum'];
        $passAssist = $_POST['passAssist'];
        $access = $_POST['access'];
        $monday = "no";
        $tuesday = "no";
        $wednesday = "no";
        $thursday = "no";
        $friday = "no";
        $saturday = "no";
        $sunday = "no";


        if($_POST['Monday'] !=null ){
            $monday = "yes";
        }
        if($_POST['Tuesday'] !=null ){
            $tuesday = "yes";
        }
        if($_POST['Wednesday'] !=null ){
            $wednesday = "yes";
        }
        if($_POST['Thursday'] !=null ){
            $thursday = "yes";
        }
        if($_POST['Friday'] !=null ){
            $friday = "yes";
        }
        if($_POST['Saturday'] !=null ){
            $saturday = "yes";
        }
        if($_POST['Sunday'] !=null ){
            $sunday = "yes";
        }

        mysql_query("INSERT INTO routes (vehicle_no, driver, route_name, route_no, passenger_no, time, passenger_assist, access_req, monday, tuesday, wednesday, thursday, friday, saturday, sunday) VALUES ('$vehicle','$driverName','$routeName','$routeNumber','$numberPass','$time','$passAssist','$access','$monday', '$tuesday', '$wednesday','$thursday','$friday','$saturday','$sunday')");
        header('location: adminHome.php');
    }
    else
    {
        header("location:adminHome.php");
    }
?>

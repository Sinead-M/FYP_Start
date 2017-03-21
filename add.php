<?php
    session_start();
    if($_SESSION['user']){
    }
    else{
        header("location:index.php");
    }

    if($_SERVER['REQUEST_METHOD'] = "POST")
    {
        $vehicle = $_POST['vehicleNumber'];
        $driverName = $_POST['driverName'];
        $routeName = $_POST['routeName'];
        $routeNumber = $_POST['routeNumber'];
        $time = $_POST['time'];
        $numberPass = $_POST['passNum'];
        $passAssist = $_POST['passAssist'];
        $access = $_POST['access'];
        $decision ="no";

//        foreach ($_POST['public'] as $each_check)
//        {
//            if($each_check !=null ){
//                $decision = "yes";
//            }
//        }

        mysql_connect("localhost", "root", "") or die(mysql_error());
        mysql_select_db("kerry_flyer") or die("Cannot connect to database");

        mysql_query("INSERT INTO `routes`(`id`, `vehicle_no`, `driver`, `route_name`, `route_no`, `passenger_no`, `time`, `passenger_assist`, `access_req`) VALUES ('7',$vehicle,$driverName,$routeName,$routeNumber,$numberPass,$time,$passAssist,$access)");
        header('location: adminHome.php');
    }
    else
    {
        header("location:adminHome.php");
    }
?>

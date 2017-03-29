<html>
<head>
    <title>Kerry Flyer Timetables</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
include 'inc/config.php';
session_start();
if(isset($_SESSION['user'])){
    require_once("headerLoggedin.php");
}
else{
    require_once("header.php");
    header("location:index.php");
}
$user = $_SESSION['user'];
$namequery = mysql_query("Select full_name from admins WHERE user_name = '$user'");
$namearray = mysql_fetch_array($namequery);
$name = $namearray['full_name'];
?>
<body>
<h2 class="welcome" style="margin-left: 20px; text-align: inherit;">Hello <?php Print "$name"?>!</h2>
<a href="adminHome.php" style="margin-left: 20px; text-decoration: none; color: black"> << Show Previous Week </a><br/>
</body>
<br/>
<?php include 'AdminCalendar-weektwo.php'; ?>
<?php include 'logoutModal.php'?>
</html>


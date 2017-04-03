<html>
<head>
    <title>Kerry Flyer Timetables</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<!--Uses the logged in header if the user is logged in. If no user is logged in then the user is redirected back to the home page-->
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

//The users name is found from the session and a welcome message is displayed
$user = $_SESSION['user'];
$namequery = mysql_query("Select full_name from admins WHERE user_name = '$user'");
$namearray = mysql_fetch_array($namequery);
$name = $namearray['full_name'];
?>
<body>
<h1 id="week" style='margin-left: 20px'>Week 13</h1>
<h2 class="welcome" style="margin-left: 20px; text-align: inherit;">Hello <?php Print "$name"?>!</h2>
<a href="adminHome-week2.php" style="margin-left: 20px; text-decoration: none; color: black"> Show Next Week >> </a><br/>
</body>
<br/>
<!--The first calendar for the admin is displayed-->
<?php include 'AdminCalendar.php'; ?>
<?php include 'logoutModal.php'?>
</html>


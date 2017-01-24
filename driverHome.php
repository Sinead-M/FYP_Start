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
    $namequery = mysql_query("Select full_name from drivers WHERE user_name = '$user'");
    $namearray = mysql_fetch_array($namequery);
    $name = $namearray['full_name'];
    ?>
    <body>
        <h2 class="welcome">Hello <?php Print "$name"?>!</h2>
        <button id="changePassword" class="button">Change Password</button>
        <?php include 'driverCalendar.php'; ?>
        <?php include 'changePasswordModal.php'; ?>
        <?php include 'logoutModal.php'?>
    </body>
</html>

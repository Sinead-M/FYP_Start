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
    $namequery = mysql_query("Select full_name from drivers WHERE user_name = '$user'");
    $namearray = mysql_fetch_array($namequery);
    $name = $namearray['full_name'];
    ?>
    <body>
        <h1 id="week" style='margin-left: 20px'>Week 13</h1>
        <h2 class="welcome">Hello <?php Print "$name"?>!</h2>
        <a href="driverHome-weektwo.php" style="margin-left: 20px; text-decoration: none; color: black"> Show Next Week >> </a><br/>
    <br/>
        <button id="changePassword" class="button">Change Password</button>
        <!--The first calendar for the driver is displayed and the logout and change password modal are added-->
        <?php include 'driverCalendar.php'; ?>
        <?php include 'changePasswordModal.php'; ?>
        <?php include 'logoutModal.php'?>
    </body>
</html>

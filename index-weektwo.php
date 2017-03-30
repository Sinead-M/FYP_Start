<html>
    <head>
        <title>Kerry Flyer Timetables</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <?php
    //Checks if a user is logged in and uses the appropriate header
    session_start();
    if(isset($_SESSION['user'])){
        require_once("headerLoggedin.php");
        include 'logoutModal.php';
    }
    else{
        require_once("header.php");
    }
    ?>
    <body>
    <!--Week title and link to previous week -->
    <h1 style='margin-left: 20px'>Week 14</h1>
    <a href="index.php" style="margin-left: 20px; text-decoration: none; color: black"><< Show Previous week </a><br/>
    </body>
    <!--Includes the php file that contains the calendar for second week-->
    <?php include 'calendar-weektwo.php'; ?>
    <br/>
</html>

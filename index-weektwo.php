<html>
    <head>
        <title>Kerry Flyer Timetables</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <?php
    session_start();
    if(isset($_SESSION['user'])){
        require_once("headerLoggedin.php");
    }
    else{
        require_once("header.php");
    }
    ?>
    <body>
    <?php
        echo "<h1 style='margin-left: 20px'>Week 14</h1>";
    ?>
    <a href="index.php" style="margin-left: 20px; text-decoration: none; color: black"><< Show Previous week </a><br/>
    </body>
    <br/>
    <?php include 'calendar-weektwo.php'; ?>
    <?php include 'logoutModal.php' ?>
</html>

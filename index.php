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
        echo "<h1 style='margin-left: 20px'>Week 13</h1>";
    ?>
    <a href="register.php" style="margin-left: 20px; text-decoration: none; color: black"> Show next week >> </a><br/>
    </body>
    <br/>
    <?php include 'calendar.php'; ?>
    <?php include 'logoutModal.php'?>
</html>

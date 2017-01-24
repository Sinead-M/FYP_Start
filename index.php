<html>
    <head>
        <title>My first PHP Website</title>
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
        echo "<h1>Week 1</h1>";
    ?>
    <a href="register.php"> Click here to register </a><br/>
    </body>
    <br/>
    <?php include 'calendar.php'; ?>
    <?php include 'logoutModal.php'?>
</html>

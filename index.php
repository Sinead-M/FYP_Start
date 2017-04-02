<html>
    <head>
        <title>Kerry Flyer Timetables</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <?php
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
    <h1 id="week" style='margin-left: 20px'>Week 13</h1>
    <a id="link" href="index-weektwo.php" style="margin-left: 20px; cursor: pointer; text-decoration: none; color: black"> Show Next Week >> </a><br/>
    </body>
    <?php include 'calendar.php' ?>
    <br/>

</html>

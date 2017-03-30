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
<!--Week title and link to next week -->
    <h1 id="week" style='margin-left: 20px'>Week 13</h1>
    <a id="link" href="index-weektwo.php" style="margin-left: 20px; cursor: pointer; text-decoration: none; color: black" "> Show Next Week >> </a><br/>
    </body>
<!--Includes the php file that contains the calendar-->
    <?php include 'calendar.php' ?>
    <br/>

</html>

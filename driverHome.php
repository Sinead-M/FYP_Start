<html>
    <head>
        <title>My first PHP website</title>
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
        <h2>Driver Home Page</h2>
        <p>Hello <?php Print "$name"?>!</p>
        <button id="changePassword" class="button">Change Password</button>
        <?php include 'calendar.php'; ?>
        <?php include 'changePasswordModal.php'; ?>
    </body>
</html>

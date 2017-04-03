<html>
    <head>
        <title>Kerry Flyer Timetables</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!--Decides which header to use depending on if a user is logged in-->
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
    <!--    Form for user name and password and submits the data to be checked -->
        <h2 class="loginHeading">Drivers Login</h2>
        <div class="container">
            <form action="checklogin.php" method="post">
                <div class="form-input">
                    <input type="text" name="username" required="required" placeholder="Enter Username" />
                </div>
                <div class="form-input">
                    <input type="password" name="password" required="required" placeholder="Enter Password" />
                </div>
                <input type="submit" value="Login" class="btn-login1"/>
            </form>
        </div>
    </body>
</html>
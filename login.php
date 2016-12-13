<?php include 'header.php'; ?>
<html>
    <head>
        <title>My first PHP Website</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h2 class="heading">Drivers Login</h2>
<!--        <a href="index.php">Click here to go back</a><br/>-->
        <div class="container"
            <form action="checklogin.php" method="post">
                <div class="form-input">
                    <input type="text" name="username" required="required" placeholder="Enter Username" />
                </div>
                <div class="form-input">
                    <input type="password" name="password" required="required" placeholder="Enter Password" />
                </div>
                <input type="submit" value="Login" class="btn-login"/>
                <p>Forget Password?</p>
            </form>
        </div>
    </body>
</html>
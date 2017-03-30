<html>
    <head>
        <title>My first PHP Website</title>
        <link rel="stylesheet" type="text/css" href="css/header.css">
    </head>
    <body>
    <!--    Sets up the header displayed if the user is logged in-->
        <div class="header">
            <a href="index.php">
             <img src="img/logo.png">
            </a>
             <form action="driverLogin.php">
                 <input type="submit" value="Drivers Login" class="login"/>
             </form>
            <form action="adminLogin.php">
                <input type="submit" value="Admin Login" class="login2"/>
            </form>
        </div>
    </body>
</html>
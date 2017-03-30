<?php
//Logs out user by ending the session and redirects the user to the home page
    session_start();
    session_destroy();
    header("location:index.php");
?>

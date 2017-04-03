<?php
session_start();
include 'inc/config.php';
//Get information for the admin login form
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);

$query = mysql_query("SELECT * from admins WHERE user_name = '$username'");
$exists = mysql_num_rows($query);
$table_users = "";
$table_password = "";
//Checks if there are users in the database
if($exists > 0)
{
    //        Goes through all the users and see if there is a user name that matches the username entered
    while($row = mysql_fetch_assoc($query))
    {
        //            if one matches find get the username and password
        $table_users = $row['user_name'];
        $table_password = $row['user_password'];
    }
    //        Checks if the username and password from the database matches the username and password entered
    if(($username == $table_users) && ($password == $table_password))
    {
        if($password == $table_password)
        {
            //                Starts a session with the username and redirects the user to the driver home page
            $_SESSION['user'] = $username;
            header("location: adminHome.php");
        }
    }
    else
    {
        //        if the passwords don't match an error is displayed and the user is redirected to the login page
        Print '<script>alert("Incorrect Password!");</script>';
        Print '<script>window.location.assign("adminLogin.php");</script>';
    }
}
else
{
    //    If the username doesn't match a username in the database, an error is displayed and the user is redirected to the login page
    Print '<script>alert("Incorrect Username!");</script>';
    Print '<script>window.location.assign("adminLogin.php");</script>';
}
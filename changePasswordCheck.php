<?php
    session_start();
    include 'inc/config.php';
    $user = $_SESSION['user'];
    $password = $_POST['currentPassword'];
    $newpassword = $_POST['newPassword'];
    $confirmnewpassword = $_POST['confirmPassword'];
    $query = "SELECT user_password FROM drivers WHERE user_name = '$user'";
    $result = mysql_query($query) or die(mysql_error());
    $row = mysql_fetch_assoc($result);
    Print $row['user_password'];

    if($password == $row['user_password'])
    {
        if ($newpassword == $confirmnewpassword) {
            $sql = mysql_query("UPDATE drivers SET user_password='$newpassword' WHERE user_name='$user'");
            Print '<script>alert("Your password has been updated");</script>';
            Print '<script>window.location.assign("driverHome.php");</script>';

        } else {
            Print '<script>alert("Passwords do not match");</script>';
            header("location: driverHome.php");
        }

    }
    else {
        Print '<script>alert("Incorrect Password!");</script>';
        header("location: driverHome.php");
    }

?>
<html>
    <body>
    <p>Hello <?php Print "$user"?>!</p>
    <p>password <?php Print "$result"?>!</p>
    <p>entered password <?php Print "$password"?>!</p>
    <p>new password <?php Print "$newpassword"?>!</p>
    <p>confirmed password <?php Print "$confirmnewpassword"?>!</p>
    </body>
</html>


<?php
    session_start();
//The information is taken from the change password form
    include 'inc/config.php';
    $user = $_SESSION['user'];
    $password = $_POST['currentPassword'];
    $newpassword = $_POST['newPassword'];
    $confirmnewpassword = $_POST['confirmPassword'];
    $query = "SELECT user_password FROM drivers WHERE user_name = '$user'";
    $result = mysql_query($query) or die(mysql_error());
    $row = mysql_fetch_assoc($result);
    Print $row['user_password'];

//    If the current password entered matches the password in the database
    if($password == $row['user_password'])
    {
//        And the new password and the confirm password match
        if ($newpassword == $confirmnewpassword) {
//            Then the password is updated and an alert is shown and the user is redirected back to the driver home page
            $sql = mysql_query("UPDATE drivers SET user_password='$newpassword' WHERE user_name='$user'");
            Print '<script>alert("Your password has been updated");</script>';
            Print '<script>window.location.assign("driverHome.php");</script>';

        } else {
//            if the new password and confirm password don't match an error is shown and the password is not updated
            Print '<script>alert("Passwords do not match");</script>';
            Print '<script>window.location.assign("driverHome.php");</script>';
        }

    }
//    if the cureent password entered doesn't match the password in the database then an error is shown and the user is redirected back to the home page
    else {
        Print '<script>alert("Incorrect Password!");</script>';
        Print '<script>window.location.assign("driverHome.php");</script>';
    }

?>


<?php
    session_start();
    include 'inc/config.php';
    $user = $_SESSION['user'];
    $password = $_POST['currentPassword'];
    $newpassword = $_POST['newPassword'];
    $confirmnewpassword = $_POST['confirmPassword'];
    $result = mysql_query("SELECT 'password' FROM 'users' WHERE username = '$user'");

    if($password!= $result)
    {
        Print '<script>alert("Incorrect Password!");</script>';
    }
    else {
        if ($newpassword != $confirmnewpassword) {
            Print '<script>alert("Passwords do not match");</script>';
        } else {
            $sql = mysqli_query("UPDATE users SET password='$newpassword' WHERE username='$user'");
            echo "Congratulations You have successfully changed your password";
            //header("location: driverHome.php");
        }
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


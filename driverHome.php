<html>
    <head>
        <title>My first PHP website</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <?php
    session_start();
    if(isset($_SESSION['user'])){
        require_once("headerLoggedin.php");
    }
    else{
        require_once("header.php");
        header("location:index.php");
    }
    $user = $_SESSION['user'];
    ?>
    <body>
        <h2>Driver Home Page</h2>
        <p>Hello <?php Print "$user"?>!</p>
        <button id="changePassword" class="button">Change Password</button>
<!--        <form action ="add.php" method="POST">-->
<!--            Add more to list: <input type = "text" name="details"/><br/>-->
<!--            public post? <input type="checkbox" name="public[]" value = "yes"/><br/>-->
<!--            <input type = "submit" value="Add to list"/>-->
<!--        </form>-->
        <?php include 'calendar.php'; ?>
        <?php include 'changePasswordModal.php'; ?>
<!--        <h2 align="center"> My lists</h2>-->
<!--        <table border = "1px" width = "100%">-->
<!--            <tr>-->
<!--                <th>Id</th>-->
<!--                <th>Details</th>-->
<!--                <th>Post Time</th>-->
<!--                <th>Edit Time</th>-->
<!--                <th>Edit</th>-->
<!--                <th>Delete</th>-->
<!--                <th>Public Post</th>-->
<!--            </tr>-->
<!--            --><?php
//                mysql_connect("localhost", "root", "") or die(mysql_error());
//                mysql_select_db("first_db") or die("Cannot connect to database");
//                $query = mysql_query("Select * from list");
//                while($row = mysql_fetch_array($query))
//                {
//                    Print "<table border = '1px'>";
//                    Print "<tr>";
//                    Print '<td align = "center">'. $row['id'] . "</td>";
//                    Print "</tr>";
//                    Print "<tr>";
//                    Print '<td align = "center">'. $row['details'] . "</td>";
//                    Print "</tr>";
//                    Print "<tr>";
//                    Print '<td align = "center">'. $row['date_posted'] . " - ". $row['time_posted']."</td>";
//                    Print "</tr>";
//                    Print "<tr>";
//                    Print '<td align = "center">'. $row['date_edited'] . " - ". $row['time_edited']."</td>";
//                    Print "</tr>";
//                    Print "<tr>";
//                    Print '<td align = "center"><a href = "edit.php?id='.$row['id'].'">Edit</a></td>';
//                    Print "</tr>";
//                    Print "<tr>";
//                    Print '<td align = "center"><a href = "#" onclick="myFunction('.$row['id'].')">Delete</a></td>';
//                    Print "</tr>";
//                    Print "</table>";
//                }
//            ?>
<!--<!--        </table>-->-->
<!--        <script>-->
<!--            function myFunction(id)-->
<!--            {-->
<!--                var r = confirm("Are you sure you want to delete this record?");-->
<!--                if (r = true)-->
<!--                {-->
<!--                    window.location.assign("delete.php?id=" + id);-->
<!--                }-->
<!--            }-->
<!--        </script>-->
    </body>
</html>

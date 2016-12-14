<html>
    <head>
        <title>My first PHP Website</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
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
    <?php
        echo "<h1>Week 1</h1>";
    ?>
    <a href="register.php"> Click here to register </a><br/>
    </body>
    <br/>
    <?php include 'calendar.php'; ?>
</html>






<!--        --><?php
//            mysql_connect("localhost", "root", "") or die(mysql_error());
//            mysql_select_db("first_db") or die("Cannot connect to database");
//            $query = mysql_query("Select * from list Where public = 'yes'");
//            while($row = mysql_fetch_array($query))
//            {
//                Print "<tr>";
//                Print '<td align="center">'. $row['id'] . "</td>";
//                Print '<td align="center">'. $row['details'] . "</td>";
//                Print '<td align="center">'. $row['date_posted']. " - " . $row['time_posted']. "</td>";
//                Print '<td align="center">'. $row['date_edited']. " - " . $row['time_edited']. "</td>";
//                Print "</tr>";
//            }
//        ?>
<!--    </table>-->

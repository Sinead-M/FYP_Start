<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body>
    <?php
        echo "<p>Hello World!</p>";
    ?>
    <a href="login.php"> Click here to login</a><br/>
    <a href="register.php"> Click here to register </a><br/>
    </body>
    <br/>
    <h2 align="center">List</h2>
    <table width="100%" border="1px">
        <tr>
            <th>ID</th>
            <th>Details</th>
            <th>Post Time</th>
            <th>Edit Time</th>
        </tr>
        <?php
            mysql_connect("localhost", "root", "") or die(mysql_error());
            mysql_select_db("first_db") or die("Cannot connect to database");
            $query = mysql_query("Select * from list Where public = 'yes'");
            while($row = mysql_fetch_array($query))
            {
                Print "<tr>";
                Print '<td align="center">'. $row['id'] . "</td>";
                Print '<td align="center">'. $row['details'] . "</td>";
                Print '<td align="center">'. $row['date_posted']. " - " . $row['time_posted']. "</td>";
                Print '<td align="center">'. $row['date_edited']. " - " . $row['time_edited']. "</td>";
                Print "</tr>";
            }
        ?>
    </table>
</html>
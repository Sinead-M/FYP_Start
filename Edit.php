<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <?php
        session_start();
        if($_SESSION['user']){
        }
        else{
            header("location:index.php");
        }
        $user = $_SESSION['user'];
        $id_exists = false;
        ?>
        <body>
            <h2> Home Page </h2>
            <p> Hello <?php Print "$user" ?>!</p>
            <a href="logout.php">Click here to logout</a><br/><br/>
            <a href="home.php">Return to Home Page </a>
            <h2 align = "center"> Currently Selected </h2>
            <table border="1px" width="100%">
                <tr>
                    <th>Id</th>
                    <th>Details</th>
                    <th>Post Time</th>
                    <th>Edit Time</th>
                    <th>Public Post</th>
                </tr>
                <?php
                if(!empty($_GET['id']))
                {
                    $id = $_GET['id'];
                    $_SESSION['id'] = $id;
                    $id_exists = true;
                    mysql_connect("localhost", "root", "") or die(mysql_error());
                    mysql_select_db("first_db") or die("Cannot connect to database");
                    $query = mysql_query("Select * from list Where id='$id'");
                    $count = mysql_num_rows($query);
                    if($count > 0) {
                        while ($row = mysql_fetch_array($query)) {
                            Print "<tr>";
                            Print '<td align="center">' . $row['id'] . "</td>";
                            Print '<td align="center">' . $row['details'] . "</td>";
                            Print '<td align="center">' . $row['date_posted'] . " - " . $row['time_posted'] . "</td>";
                            Print '<td align="center">' . $row['date_edited'] . " - " . $row['time_edited'] . "</td>";
                            Print '<td align="center">' . $row['public'] . "</td>";
                            Print "</tr>";
                        }
                    }
                    else
                    {
                        $id_exists = false;
                    }

                }
                ?>
            </table>
            <br/>
            <?php
            if($id_exists)
            {
                Print '<form action="edit.php" method="POST"> 
                    Enter new detail: <input type="text" name="details"/><br/>
                    public post? <input type="checkbox" name="public[]" value="yes"/><br/>
                     <input type="submit" value="Update list"/>
                </form>
                ';
            }
            else
            {
                Print '<h2 align="center"> There is no data to data to be edited.</h2>';
            }
            ?>
        </body>
</html>

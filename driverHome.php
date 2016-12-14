<?php include 'header.php'; ?>
<html>
    <head>
        <title>My first PHP website</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <?php
    session_start();
    if($_SESSION['user']){
    }
    else{
        header("location:index.php");
    }
    $user = $_SESSION['user'];
    ?>
    <body>
        <h2>Driver Home Page</h2>
        <p>Hello <?php Print "$user"?>!</p>
        <a href="logout.php">Click here to logout</a><br/><br/>
        <button id="myBtn" class="button">Change Password</button>
        <form action ="add.php" method="POST">
            Add more to list: <input type = "text" name="details"/><br/>
            public post? <input type="checkbox" name="public[]" value = "yes"/><br/>
            <input type = "submit" value="Add to list"/>
        </form>
        <?php include 'calendar.php'; ?>
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
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Change Password</h2>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="checklogin.php" method="post">
                            <div class="form-input">
                                <input type="password" name="currentPassword" required="required" placeholder="Enter current Password" />
                            </div>
                            <div class="form-input">
                                <input type="password" name="newPassword" required="required" placeholder="Enter new Password" />
                            </div>
                            <div class="form-input">
                                <input type="password" name="confirmPassword" required="required" placeholder="Confirm new Password" />
                            </div>
                            <input type="submit" value="Change" class="btn-login"/>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <script>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </body>
</html>

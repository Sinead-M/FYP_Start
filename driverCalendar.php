<?php include 'inc/config.php'?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <script src="js/bootstrap.js"></script>
    <script src="jquery-3.1.1.min.js"></script>
</head>
<div class="calendarContainer">
    <div class="monday">
        <div class="weekdays">
            <h2>Monday</h2>
        </div>
        <?php
            $query = mysql_query("Select * from routes WHERE driver = '$name' AND monday = 'yes'");
            if (mysql_num_rows($query) > 0) {
                $column = mysql_fetch_array($query);
                Print "<table class='table'>";
                Print "<tr>";
                Print '<td class="heading">' . $column['vehicle_no'] . "</td>";
                Print "</tr>";
                Print "<tr>";
                Print '<td class="heading">' . $column['driver'] . "</td>";
                Print "</tr>";
                Print "<tr>";
                Print '<td class="heading">'. $column['route_name'] ."</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="heading">'. $row['route_name'] ."</td>";
                    Print "</tr>";
                }
                Print "</table>";
            } else {
                Print '<p style="text-align: center; font-weight: bold; font-size: larger">You have no routes assigned</p>';
            }
        ?>
    </div>
    <div class="tuesday">
        <div class="weekdays">
            <h2>Tuesday</h2>
        </div>
        <?php
        $query = mysql_query("Select * from routes WHERE driver = '$name' AND tuesday = 'yes'");
        if (mysql_num_rows($query) > 0) {
            $column = mysql_fetch_array($query);
            Print "<table class='table'>";
            Print "<tr>";
            Print '<td class="heading">' . $column['vehicle_no'] . "</td>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="heading">' . $column['driver'] . "</td>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="heading">'. $column['route_name'] ."</td>";
            Print "</tr>";
            while ($row = mysql_fetch_array($query)) {
                Print "<tr>";
                Print '<td class="heading"><input type="submit" name="name" class="routeButton" value="'. $row['route_name'] .'">';"</td>";
                Print "</tr>";
            }
            Print "</table>";
        } else {
            Print '<p style="text-align: center; font-weight: bold; font-size: larger">You have no routes assigned</p>';
        }
        ?>
    </div>
    <div class="wednesday">
        <div class="weekdays">
            <h2>Wednesday</h2>
        </div>
        <?php
        $query = mysql_query("Select * from routes WHERE driver = '$name' AND wednesday = 'yes'");
        if (mysql_num_rows($query) > 0) {
            $column = mysql_fetch_array($query);
            Print "<table class='table'>";
            Print "<tr>";
            Print '<td class="heading">' . $column['vehicle_no'] . "</td>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="heading">' . $column['driver'] . "</td>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="heading">'. $column['route_name'] ."</td>";
            Print "</tr>";
            while ($row = mysql_fetch_array($query)) {
                Print "<tr>";
                Print '<td class="heading">'. $row['route_name'] ."</td>";
                Print "</tr>";
            }
            Print "</table>";
        } else {
            Print '<p style="text-align: center; font-weight: bold; font-size: larger">You have no routes assigned</p>';
        }
        ?>
    </div>
    <div class="thursday">
        <div class="weekdays">
            <h2>Thursday</h2>
        </div>
        <?php
        $query = mysql_query("Select * from routes WHERE driver = '$name' AND thursday = 'yes'");
        if (mysql_num_rows($query) > 0) {
            $column = mysql_fetch_array($query);
            Print "<table class='table'>";
            Print "<tr>";
            Print '<td class="heading">' . $column['vehicle_no'] . "</td>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="heading">' . $column['driver'] . "</td>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="heading">'. $column['route_name'] ."</td>";
            Print "</tr>";
            while ($row = mysql_fetch_array($query)) {
                Print "<tr>";
                Print '<td class="heading">'. $row['route_name'] ."</td>";
                Print "</tr>";
            }
            Print "</table>";
        } else {
            Print '<p style="text-align: center; font-weight: bold; font-size: larger">You have no routes assigned</p>';
        }
        ?>
    </div>
    <div class="friday">
        <div class="weekdays">
            <h2>Friday</h2>
        </div>
        <?php
        $query = mysql_query("Select * from routes WHERE driver = '$name' AND friday = 'yes'");
        if (mysql_num_rows($query) > 0) {
            $column = mysql_fetch_array($query);
            Print "<table class='table'>";
            Print "<tr>";
            Print '<td class="heading">' . $column['vehicle_no'] . "</td>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="heading">' . $column['driver'] . "</td>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="heading">'. $column['route_name'] ."</td>";
            Print "</tr>";
            while ($row = mysql_fetch_array($query)) {
                Print "<tr>";
                Print '<td class="heading">'. $row['route_name'] ."</td>";
                Print "</tr>";
            }
            Print "</table>";
        } else {
            Print '<p style="text-align: center; font-weight: bold; font-size: larger">You have no routes assigned</p>';
        }
        ?>
    </div>
    <div class="saturday">
        <div class="weekdays">
            <h2>Saturday</h2>
        </div>
        <?php
        $query = mysql_query("Select * from routes WHERE driver = '$name' AND saturday = 'yes'");
        if (mysql_num_rows($query) > 0) {
            $column = mysql_fetch_array($query);
            Print "<table class='table'>";
            Print "<tr>";
            Print '<td class="heading">' . $column['vehicle_no'] . "</td>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="heading">' . $column['driver'] . "</td>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="heading">'. $column['route_name'] ."</td>";
            Print "</tr>";
            while ($row = mysql_fetch_array($query)) {
                Print "<tr>";
                Print '<td class="heading">'. $row['route_name'] ."</td>";
                Print "</tr>";
            }
            Print "</table>";
        } else {
            Print '<p style="text-align: center; font-weight: bold; font-size: larger">You have no routes assigned</p>';
        }
        ?>
    </div>
    <div class="sunday">
        <div class="weekdays">
            <h2>Sunday</h2>
        </div>
        <?php
        $query = mysql_query("Select * from routes WHERE driver = '$name' AND sunday = 'yes'");
        if (mysql_num_rows($query) > 0) {
            $column = mysql_fetch_array($query);
            Print "<table class='table'>";
            Print "<tr>";
            Print '<td class="heading">'. $column['vehicle_no'] ."</td>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="heading">' . $column['driver'] . "</td>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="heading">'. $column['route_name'] ."</td>";
            Print "</tr>";
            while ($row = mysql_fetch_array($query)) {
                Print "<tr>";
                Print '<td class="heading">'. $row['route_name'] ."</td>";
                Print "</tr>";
            }
            Print "</table>";
        } else {
            Print '<p style="text-align: center; font-weight: bold; font-size: larger">You have no routes assigned</p>';
        }
        ?>
    </div>
</div>
<div class="password-Modal" id="myModal3">
    <div class="modal-dialog">
        <div class="route-modal-content">
            <div class="password-modal-header">
                <p><input style="background: #8EB529; border: none; color: white; width: 100%;" type="text" class="input-sm" id="txtfname" readonly/></p>
            </div>
            <div class="modal-body">
                <div class="container">
                    <p class="routeDetails">Route Number: <input class="input-sm" style="margin-left: 272px" type="text" id="txtlname" readonly/></p>
                    <p class="routeDetails">Time: <input style="margin-left: 334px" type="text" readonly/></p>
                    <p class="routeDetails">Number of passengers: <input style="margin-left: 224px" type="text" readonly/></p>
                    <p class="routeDetails"> Passenger Assistant: <input style="margin-left: 240px" type="text" readonly/></p>
                    <p class="routeDetails">Accessibility Requirements: </p>
                    <input style="width: 100%;" class="routeInput" type="text" readonly/>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    $('table tr td').on('click',function(){
        $("#myModal3").modal("show");
        $("#txtfname").val($(this).closest('tr').children()[0].textContent);
        $("#txtlname").val($(this).closest('tr').children()[0].textContent);
    });
</script>
</html>
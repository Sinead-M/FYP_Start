<?php include 'inc/config.php'?>
<html xmlns="http://www.w3.org/1999/html">
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
                Print '<td class="heading"><input type="submit" name="name"  class="routeButton" value="'. $column['route_name'] .'">';"</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="heading"><input type="submit" name="name"  class="routeButton" value="'. $row['route_name'] .'">';"</td>";
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
            Print '<td class="heading"><input type="submit" name="name" class="routeButton" value="'. $column['route_name'] .'">';"</td>";
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
            Print '<td class="heading"><input type="submit" name="name" class="routeButton" value="'. $column['route_name'] .'">';"</td>";
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
            Print '<td class="heading"><input type="submit" name="name" class="routeButton" value="'. $column['route_name'] .'">';"</td>";
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
            Print '<td class="heading"><input type="submit" name="name" class="routeButton" value="'. $column['route_name'] .'">';"</td>";
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
            Print '<td class="heading"><input type="submit" name="name" class="routeButton" value="'. $column['route_name'] .'">';"</td>";
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
            Print '<td class="heading"><input type="submit" name="name" class="routeButton" value="'. $column['route_name'] .'">';"</td>";
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
</div>
</html>
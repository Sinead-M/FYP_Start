<?php include 'inc/config.php'?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <script src="jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
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
                Print '<th class="heading">' . $column['vehicle_no'] . "</th>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading">' . $column['driver'] . "</th>";
                Print "</tr>";
                Print "<tr>";
                Print '<td class="rows">'. $column['route_name'] ."</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">'. $row['route_name'] ."</td>";
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
            Print '<th class="heading">' . $column['vehicle_no'] . "</th>";
            Print "</tr>";
            Print "<tr>";
            Print '<th class="heading">' . $column['driver'] . "</th>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="rows">'. $column['route_name'] ."</td>";
            Print "</tr>";
            while ($row = mysql_fetch_array($query)) {
                Print "<tr>";
                Print '<td class="rows">'. $row['route_name'] ."</td>";
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
            Print '<th class="heading">' . $column['vehicle_no'] . "</th>";
            Print "</tr>";
            Print "<tr>";
            Print '<th class="heading">' . $column['driver'] . "</th>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="rows">'. $column['route_name'] ."</td>";
            Print "</tr>";
            while ($row = mysql_fetch_array($query)) {
                Print "<tr>";
                Print '<td class="rows">'. $row['route_name'] ."</td>";
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
            Print '<th class="heading">' . $column['vehicle_no'] . "</th>";
            Print "</tr>";
            Print "<tr>";
            Print '<th class="heading">' . $column['driver'] . "</th>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="rows">'. $column['route_name'] ."</td>";
            Print "</tr>";
            while ($row = mysql_fetch_array($query)) {
                Print "<tr>";
                Print '<td class="rows">'. $row['route_name'] ."</td>";
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
            Print '<th class="heading">' . $column['vehicle_no'] . "</th>";
            Print "</tr>";
            Print "<tr>";
            Print '<th class="heading">' . $column['driver'] . "</th>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="rows">'. $column['route_name'] ."</td>";
            Print "</tr>";
            while ($row = mysql_fetch_array($query)) {
                Print "<tr>";
                Print '<td class="rows">'. $row['route_name'] ."</td>";
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
            Print '<th class="heading">' . $column['vehicle_no'] . "</th>";
            Print "</tr>";
            Print "<tr>";
            Print '<th class="heading">' . $column['driver'] . "</th>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="rows">'. $column['route_name'] ."</td>";
            Print "</tr>";
            while ($row = mysql_fetch_array($query)) {
                Print "<tr>";
                Print '<td class="rows">'. $row['route_name'] ."</td>";
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
            Print '<th class="heading">'. $column['vehicle_no'] ."</th>";
            Print "</tr>";
            Print "<tr>";
            Print '<th class="heading">' . $column['driver'] . "</th>";
            Print "</tr>";
            Print "<tr>";
            Print '<td class="rows">'. $column['route_name'] ."</td>";
            Print "</tr>";
            while ($row = mysql_fetch_array($query)) {
                Print "<tr>";
                Print '<td class="rows">'. $row['route_name'] ."</td>";
                Print "</tr>";
            }
            Print "</table>";
        } else {
            Print '<p style="text-align: center; font-weight: bold; font-size: larger">You have no routes assigned</p>';
        }
        ?>
    </div>
</div>
<?php include 'routePopUp.php'?>
<script>
    $(document).ready(function(){
        $('table tr td').click(function() {
            var routeName = $(this).text();
            $("#txtrname").val(routeName);
            var driverName = $(this).closest('table').find('th').text();
            $.ajax({
                type: "POST",
                url: "api.php",
                data: {route: routeName,
                    driver: driverName },
                dataType: 'json',
                success: function (data) {
                    $("#myModal").modal('show');
                    var vname = data[1];
                    var driver = data[2];
                    var rname = data[3];
                    var rnum = data[4];
                    var passnum = data[5];
                    var time = data[6];
                    var passassist = data[7];
                    var access = data[8];

                    $("#vehicleNumber").val(vname);
                    $("#driverName").val(driver);
                    $("#routeName").val(rname);
                    $("#routeNumber").val(rnum);
                    $("#time").val(time);
                    $("#passNum").val(passnum);
                    $("#passAssist").val(passassist);
                    $("#access").val(access);

                }
            });

        });
    });
</script>
</html>
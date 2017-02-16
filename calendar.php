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
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routes WHERE driver = '$drivername' AND monday = 'yes'");
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
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "</table>";
            }
        }
        ?>
    </div>
    <div class="tuesday">
        <div class="weekdays">
            <h2>Tuesday</h2>
        </div>
        <?php
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routes WHERE driver = '$drivername' AND tuesday = 'yes'");
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
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "</table>";
            }
        }
        ?>
    </div>
    <div class="wednesday">
        <div class="weekdays">
            <h2>Wednesday</h2>
        </div>
        <?php
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routes WHERE driver = '$drivername' AND wednesday = 'yes'");
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
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "</table>";
            }
        }
        ?>
    </div>
    <div class="thursday">
        <div class="weekdays">
            <h2>Thursday</h2>
        </div>
        <?php
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routes WHERE driver = '$drivername' AND thursday = 'yes'");
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
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "</table>";
            }
        }
        ?>
    </div>
    <div class="friday">
        <div class="weekdays">
            <h2>Friday</h2>
        </div>
        <?php
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routes WHERE driver = '$drivername' AND friday = 'yes'");
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
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "</table>";
            }
        }
        ?>
    </div>
    <div class="saturday">
        <div class="weekdays">
            <h2>Saturday</h2>
        </div>
        <?php
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routes WHERE driver = '$drivername' AND saturday = 'yes'");
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
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "</table>";
            }
        }
        ?>
    </div>
    <div class="sunday">
        <div class="weekdays">
            <h2>Sunday</h2>
        </div>
        <?php
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routes WHERE driver = '$drivername' AND sunday = 'yes'");
            if (mysql_num_rows($query) > 0) {
                $column = mysql_fetch_array($query);
                Print "<table class='table'>";
                Print "<tr>";
                Print '<th class="heading">' . $column['vehicle_no'] . "</th>";
                Print "</tr>";
                Print "<tr>";
                Print '<td class="heading">' . $column['driver'] . "</td>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="rows">' . $column['route_name'] . "</th>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "</table>";
            }
        }
        ?>
    </div>
</div>
<div class="password-Modal" id="myModal">
    <div class="modal-dialog">
        <div class="route-modal-content">
            <div class="password-modal-header">
                <p><input style="background: #8EB529; border: none; color: white; width: 100%;" type="text" class="input-sm" id="txtrname" readonly/></p>
            </div>
            <div class="modal-body">
                <div class="container">
                    <p class="routeDetails">Route Number: <input id="txtrno" class="input-sm" style="margin-left: 272px" type="text" id="txtlname" readonly/></p>
                    <p class="routeDetails">Time: <input id="txtrtime" style="margin-left: 334px" type="text" readonly/></p>
                    <p class="routeDetails">Number of passengers: <input id="txtpno" style="margin-left: 224px" type="text" readonly/></p>
                    <p class="routeDetails"> Passenger Assistant: <input id="txtpassist" style="margin-left: 240px" type="text" readonly/></p>
                    <p class="routeDetails">Accessibility Requirements: </p>
                    <input id="txtraccess" style="width: 100%;" class="routeInput" type="text" readonly/>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    $('table tr td').on('click',function(){
        $("#myModal").modal("show");
        var routeName = $(this).closest('tr').children()[0].textContent;
        $.ajax({
            url: 'api.php',
            data: "route_name=" + routeName,
            dataType:'json'
            success: function(data){
                var routeNo = data[4];
                var time = data[5];
                var passNo = data[6];
                var passAssist = data[7];
                var access = data[8];

                $("#txtrname").val(routeName);
                $("#txtrno").val(routeNo);
                $("#txtrtime").val(time);
                $("#txtpno").val(passNo);
                $("#txtpassist").val(passAssist);
                $("#txtraccess").val(access);
            }
        })
    });
</script>
</html>
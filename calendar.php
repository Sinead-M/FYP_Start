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
        include 'inc/config.php';
        $noresult = 0;
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
            } else {
                $noresult = 1;
            }
        }
        ?>
    </div>
    <div class="tuesday">
        <div class="weekdays">
            <h2>Tuesday</h2>
        </div>
        <?php
        include 'inc/config.php';
        $noresult = 0;
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
            } else {
                $noresult = 1;
            }
        }
        ?>
    </div>
    <div class="wednesday">
        <div class="weekdays">
            <h2>Wednesday</h2>
        </div>
        <?php
        include 'inc/config.php';
        $noresult = 0;
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
            } else {
                $noresult = 1;
            }
        }
        ?>
    </div>
    <div class="thursday">
        <div class="weekdays">
            <h2>Thursday</h2>
        </div>
        <?php
        include 'inc/config.php';
        $noresult = 0;
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
            } else {
                $noresult = 1;
            }
        }
        ?>
    </div>
    <div class="friday">
        <div class="weekdays">
            <h2>Friday</h2>
        </div>
        <?php
        include 'inc/config.php';
        $noresult = 0;
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
            } else {
                $noresult = 1;
            }
        }
        ?>
    </div>
    <div class="saturday">
        <div class="weekdays">
            <h2>Saturday</h2>
        </div>
        <?php
        include 'inc/config.php';
        $noresult = 0;
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
            } else {
                $noresult = 1;
            }
        }
        ?>
    </div>
    <div class="sunday">
        <div class="weekdays">
            <h2>Sunday</h2>
        </div>
        <?php
        include 'inc/config.php';
        $noresult = 0;
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
            } else {
                $noresult = 1;
            }
        }
        ?>
    </div>
</div>
<div id="routeModal" class="password-Modal">
    <!-- Modal content -->
    <div class="password-modal-content">
        <div class="password-modal-header">
            <p><input type="text" class="input-sm" id="txtfname" readonly/></p>
        </div>
        <div class="password-modal-body">
            <div class="container">
                <p class="routeDetails">Route Number: <input class="routeInput" type="text" readonly/></p>
                <p class="routeDetails">Time: <input class="routeInput" type="text" readonly/></p>
                <p class="routeDetails">Number of passengers: <input class="routeInput" type="text" readonly/></p>
                <p class="routeDetails"> Passenger Assistant: <input class="routeInput" type="text" readonly/></p>
                <p class="routeDetails">Accessibility Requirements: <input class="routeInput" type="text" readonly/></p>
            </div>
        </div>
    </div>

</div><script>
    $('table tr td').on('click',function(){
        $("#routeModal").modal("show");
        $("#textfname").val($(this).closest('tr').children()[0].textContent);
        $("#textlname").val($(this).closest('tr').children()[0].textContent);
    });
</script>
</html>
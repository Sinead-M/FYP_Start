<!--THIS IS THE ADMIN CALENDAR FOR THE SECOND WEEK AND BEHAVES EXACTLY AS THE FIRST CALENDAR DOES-->
<?php include 'inc/config.php'?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <script src="jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
<div class="calendarContainer">
    <div class="calendarDays">
        <div class="weekdays">
            <h2>Monday</h2>
        </div>
        <?php
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routestwo WHERE driver = '$drivername' AND monday = 'yes'");
            if (mysql_num_rows($query) > 0) {
                $column = mysql_fetch_array($query);
                Print "<table class='monday'>";
                Print "<tr>";
                Print '<td class="heading"><p class="vehicle">' . $column['vehicle_no'] . "</p></td>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">' . $column['driver'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "<tr>";
                Print "<td class='noModal'> <button class='addRoute'> Add Route </button> </td>";
                Print "</tr>";
                Print "</table>";
            }
        }Print "<button class='addBus'> Add Bus </button>";
        ?>
    </div>
    <div class="calendarDays">
        <div class="weekdays">
            <h2>Tuesday</h2>
        </div>
        <?php
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routestwo WHERE driver = '$drivername' AND tuesday = 'yes'");
            if (mysql_num_rows($query) > 0) {
                $column = mysql_fetch_array($query);
                Print "<table class='tuesday'>";
                Print "<tr>";
                Print '<td class="heading">' . $column['vehicle_no'] . "</td>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">' . $column['driver'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "<tr>";
                Print "<td class='noModal'> <button class='addRoute'> Add Route </button> </td>";
                Print "</tr>";
                Print "</table>";
            }
        }Print "<button class='addBus'> Add Bus </button>";
        ?>
    </div>
    <div class="calendarDays">
        <div class="weekdays">
            <h2>Wednesday</h2>
        </div>
        <?php
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routestwo WHERE driver = '$drivername' AND wednesday = 'yes'");
            if (mysql_num_rows($query) > 0) {
                $column = mysql_fetch_array($query);
                Print "<table class='wednesday'>";
                Print "<tr>";
                Print '<td class="heading">' . $column['vehicle_no'] . "</td>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">' . $column['driver'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "<tr>";
                Print "<td class='noModal'> <button class='addRoute'> Add Route </button> </td>";
                Print "</tr>";
                Print "</table>";
            }
        }Print "<button class='addBus'> Add Bus </button>";
        ?>
    </div>
    <div class="calendarDays">
        <div class="weekdays">
            <h2>Thursday</h2>
        </div>
        <?php
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routestwo WHERE driver = '$drivername' AND thursday = 'yes'");
            if (mysql_num_rows($query) > 0) {
                $column = mysql_fetch_array($query);
                Print "<table class='thursday'>";
                Print "<tr>";
                Print '<td class="heading">' . $column['vehicle_no'] . "</td>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">' . $column['driver'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "<tr>";
                Print "<td class='noModal'><button class='addRoute'> Add Route </button> </td>";
                Print "</tr>";
                Print "</table>";
            }
        }Print "<button class='addBus'> Add Bus </button>";
        ?>
    </div>
    <div class="calendarDays">
        <div class="weekdays">
            <h2>Friday</h2>
        </div>
        <?php
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routestwo WHERE driver = '$drivername' AND friday = 'yes'");
            if (mysql_num_rows($query) > 0) {
                $column = mysql_fetch_array($query);
                Print "<table class='friday'>";
                Print "<tr>";
                Print '<td class="heading">' . $column['vehicle_no'] . "</td>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">' . $column['driver'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "<tr>";
                Print "<td class='noModal'><button class='addRoute'> Add Route </button> </td>";
                Print "</tr>";
                Print "</table>";
            }
        }Print "<button class='addBus'> Add Bus </button>";
        ?>
    </div>
    <div class="calendarDays">
        <div class="weekdays">
            <h2>Saturday</h2>
        </div>
        <?php
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routestwo WHERE driver = '$drivername' AND saturday = 'yes'");
            if (mysql_num_rows($query) > 0) {
                $column = mysql_fetch_array($query);
                Print "<table class='saturday'>";
                Print "<tr>";
                Print '<td class="heading">' . $column['vehicle_no'] . "</td>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">' . $column['driver'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "<tr>";
                Print "<td class='noModal'><button class='addRoute'> Add Route </button> </td>";
                Print "</tr>";
                Print "</table>";
            }
        }Print "<button class='addBus'> Add Bus </button>";
        ?>
    </div>
    <div class="calendarDays">
        <div class="weekdays">
            <h2>Sunday</h2>
        </div>
        <?php
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routestwo WHERE driver = '$drivername' AND sunday = 'yes'");
            if (mysql_num_rows($query) > 0) {
                $column = mysql_fetch_array($query);
                Print "<table class='sunday'>";
                Print "<tr>";
                Print '<td class="heading">' . $column['vehicle_no'] . "</td>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">' . $column['driver'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "<tr>";
                Print "<td class='noModal'><button class='addRoute'> Add Route </button></td>";
                Print "</tr>";
                Print "</table>";
            }
        }
        Print "<button class='addBus'> Add Bus </button>";
        ?>
    </div>
</div>
<?php include 'AdminRoutePopUp-weektwo.php' ?>
<?php include 'addBusModal.php'?>
<?php include 'addRouteModal.php'?>
<script>
    $(document).ready(function(){
        $('table tr td').on('click' ,function() {
            var routeName = $(this).text();
            $("#txtrname").val(routeName);
            var driverName = $(this).closest('table').find('th').text();
            var weekday = $(this).closest('table').attr('class');
            if(weekday === "monday"){
                $("#Monday").attr('checked', true);
                $("#Monday-true").attr('checked', true);
            } else if(weekday === "tuesday"){
                $("#Tuesday").attr('checked', true);
                $("#Tuesday-true").attr('checked', true);
            } else if(weekday === "wednesday"){
                $("#Wednesday").attr('checked', true);
                $("#Wednesday-true").attr('checked', true);
            } else if(weekday === "thursday"){
                $("#Thursday").attr('checked', true);
                $("#Thursday-true").attr('checked', true);
            } else if(weekday === "friday"){
                $("#Friday").attr('checked', true);
                $("#Friday-true").attr('checked', true);
            } else if(weekday === "saturday"){
                $("#Saturday").attr('checked', true);
                $("#Saturday-true").attr('checked', true);
            } else if(weekday === "sunday"){
                $("#Sunday").attr('checked', true);
                $("#Sunday-true").attr('checked', true);
            }
            $.ajax({
                type: "POST",
                url: "api-weektwo.php",
                data: {route: routeName,
                    driver: driverName },
                dataType: 'json',
                success: function (data) {
                    $("#myAdminModal2").modal('show');
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

    $(".addRoute").on('click', function(){
        var driverNameadmin = $(this).closest('table').find('th').text();
        var vehicle = $(this).closest('table').find('#vehicle').text();
        $('#myAdminModal2').on('shown.bs.modal', function () {
            $('#myAdminModal2').modal('hide');
        });
        $("#addRouteModal").modal("show");
        $("#driverNameadd").val(driverNameadmin);
    });

    $(".addBus").on('click', function() {
        $("#addBusModal").modal("show");
    });

    $(document).ready(function () {
        $('.driver').each(function(){
            if($(this).text() == 'Michael Shanahan'){
                $(this).css({backgroundColor: 'coral'});
            }else if ($(this).text() == 'Neil Crowley'){
                $(this).css({backgroundColor: 'aquamarine'});
            } else if($(this).text() == 'Anthony Walsh'){
                $(this).css({backgroundColor: 'bisque'});
            } else if($(this).text() == 'Danny O Sullivan'){
                $(this).css({backgroundColor: 'cornflowerblue'});
            } else if($(this).text() == 'Charlie Nelligan'){
                $(this).css({backgroundColor: 'red'});
            } else if($(this).text() == 'John O Donoghue'){
                $(this).css({backgroundColor: 'yellow'});
            } else if($(this).text() == 'TJ Nelligan'){
                $(this).css({backgroundColor: 'chartreuse'});
            } else if($(this).text() == 'John Fitzgerald'){
                $(this).css({backgroundColor: 'pink'});
            } else if($(this).text() == 'Tommy Templeman'){
                $(this).css({backgroundColor: 'blueviolet'});
            } else if($(this).text() == 'Breda Breen'){
                $(this).css({backgroundColor: 'aqua'});
            } else if($(this).text() == 'Gerry Lenihan'){
                $(this).css({backgroundColor: 'darksalmon'});
            } else if($(this).text() == 'James Clifford') {
                $(this).css({backgroundColor: 'fuchsia'});
            } else if($(this).text() == 'Donal Forde') {
                $(this).css({backgroundColor: 'cadetblue'});
            } else if($(this).text() == 'Pat Galvin') {
                $(this).css({backgroundColor: 'thistle'});
            } else if($(this).text() == 'Jimmy Kearney') {
                $(this).css({backgroundColor: 'darkcyan'});
            } else if($(this).text() == 'Matt O Donoghue') {
                $(this).css({backgroundColor: 'darkgrey'});
            } else if($(this).text() == 'Frank Neylon') {
                $(this).css({backgroundColor: 'deeppink'});
            } else if($(this).text() == 'Michael Nolan') {
                $(this).css({backgroundColor: 'forestgreen'});
            } else if($(this).text() == 'Michael Brosnan') {
                $(this).css({backgroundColor: 'gold'});
            } else if($(this).text() == 'Gerard Brosnan'){
                $(this).css({backgroundColor: 'brown'});
            }

        });

    });
</script>

</body>
</html>
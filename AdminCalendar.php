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
//      Sql request retrieves all the drivers names for the drivers table
        $alldrivers = mysql_query("Select * from drivers");
        while ($alldriversArray = mysql_fetch_array($alldrivers)) {
//            While loops through all the names and requests all routes assigned to the driver name and the particular day of the week
            $drivername = $alldriversArray['full_name'];
            $query = mysql_query("Select * from routes WHERE driver = '$drivername' AND monday = 'yes'");
            if (mysql_num_rows($query) > 0) {
                $column = mysql_fetch_array($query);
                Print "<table class='monday'>";
                Print "<tr>";
//                The vehicle number and driver name are displayed on the table once
                Print '<td class="vehicle" style="font-weight: bold; border: 1px solid #dddddd; text-align: center; padding: 8px;"><p>' . $column['vehicle_no'] . "</p></td>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">' . $column['driver'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
//                Each route name is displayed after the driver name in seperate <TR>
                Print '<td class="rows">' . $column['route_name'] . "</td>";
                Print "</tr>";
                while ($row = mysql_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td class="rows">' . $row['route_name'] . "</td>";
                    Print "</tr>";
                }
                Print "<tr>";
//                After the last route name is displayed an add route button is displayed
                Print "<td class='noModal'> <button class='addRoute'> Add Route </button> </td>";
                Print "</tr>";
                Print "</table>";
            }
//            After the table is finished an add bus button is displayed
        }Print "<button class='addBus'> Add Bus </button>";
        ?>
    </div>

<!--THESE STEPS ARE REPEATED FOR EACH DAY OF THE WEEK    -->
    <div class="calendarDays">
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
            $query = mysql_query("Select * from routes WHERE driver = '$drivername' AND wednesday = 'yes'");
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
            $query = mysql_query("Select * from routes WHERE driver = '$drivername' AND thursday = 'yes'");
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
            $query = mysql_query("Select * from routes WHERE driver = '$drivername' AND friday = 'yes'");
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
            $query = mysql_query("Select * from routes WHERE driver = '$drivername' AND saturday = 'yes'");
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
            $query = mysql_query("Select * from routes WHERE driver = '$drivername' AND sunday = 'yes'");
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
<!--THE PHP FILES CONTAINING THE EXTRA MODALS ARE INCLUDED HERE-->
<?php include 'AdminRoutePopUp.php' ?>
<?php include 'addBusModal.php'?>
<?php include 'addRouteModal.php'?>
<script>
    $(document).ready(function(){
//        Whenever a <td> is clicked the text in that <TD> and the closest <TH> are saved in variables
        $('table tr td').on('click' ,function() {
            var routeName = $(this).text();
            $("#txtrname").val(routeName);
            var driverName = $(this).closest('table').find('th').text();
            var weekday = $(this).closest('table').attr('class');
//            checking what day the table clicked belongs to and sets the appropiate check box in the forms to "checked"
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
//            Using ajax here Data can be requested and filled into the modal content without the page refreshing
            $.ajax({
                type: "POST",
                url: "api.php",
                data: {route: routeName,
                    driver: driverName },
                dataType: 'json',
                success: function (data) {
                    $("#myAdminModal").modal('show');
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

    //    When the add route button is clicked the addroute modal is displayed and the usual modal is closed
    $(".addRoute").on('click', function(){
        var driverNameadmin = $(this).closest('table').find('th').text();
        $('#myAdminModal').on('shown.bs.modal', function () {
            $('#myAdminModal').modal('hide');
        });
        $("#addRouteModal").modal("show");
        $("#driverNameadd").val(driverNameadmin);
    });

    //    When the add route button is clicked the addroute modal is displayed
    $(".addBus").on('click', function() {
        $("#addBusModal").modal("show");
    });

    //This sets the color of the driver name depending on who the driver is
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
            } else if($(this).text() == 'James Clifford'){
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
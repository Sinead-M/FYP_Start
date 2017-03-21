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
                Print '<th class="heading"><p>Vehicle: ' . $column['vehicle_no'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">Driver: ' . $column['driver'] . "</p></th>";
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
                Print '<th class="heading"><p>Vehicle: ' . $column['vehicle_no'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">Driver: ' . $column['driver'] . "</p></th>";
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
                Print '<th class="heading"><p>Vehicle: ' . $column['vehicle_no'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">Driver: ' . $column['driver'] . "</p></th>";
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
                Print '<th class="heading"><p>Vehicle: ' . $column['vehicle_no'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">Driver: ' . $column['driver'] . "</p></th>";
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
                Print '<th class="heading"><p>Vehicle: ' . $column['vehicle_no'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">Driver: ' . $column['driver'] . "</p></th>";
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
                Print '<th class="heading"><p>Vehicle: ' . $column['vehicle_no'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">Driver: ' . $column['driver'] . "</p></th>";
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
                Print '<th class="heading"><p>Vehicle: ' . $column['vehicle_no'] . "</p></th>";
                Print "</tr>";
                Print "<tr>";
                Print '<th class="heading"><p class="driver">Driver: ' . $column['driver'] . "</p></th>";
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
<!--    <button id="infobutton"> Get information</button>-->
<?php include 'routePopUp.php'?>
<script>
    $('table tr td').click(function() {
        var routeName = $(this).text();
        $("#txtrname").val(routeName);
    });

//    $('#infobutton').on('click', function(){
//        $(function () {
//            $.ajax({
//                url: 'api.php',
//                data: {},
//                dataType: 'json',
//                success: function (data) {
//                    var rname = data[4];              //get id
//                    var time = data[6];
//                    var passn = data[5];
//                    var passist = data[7];
//                    var access = data[8];//get name
//                    //--------------------------------------------------------------------
//                    // 3) Update html content
//                    //--------------------------------------------------------------------
//                    $('#container').html("<p>Route Number: <input type='text' value='"+rname+"'readonly/></p><p> Time: <input type='text' value='"+time+"' readonly/></p><p> Number of passengers: <input type='text' value='"+passn+"'readonly/></p><p> Passenger Assistant: <input type='text' value='"+passist+"' readonly/></p><p> Accessibility Requirements: <input type='text' value='"+access+"' readonly/></p>"); //Set output element html
//                    //$('#myModal').find('#container').html("<p>Route Number: <input type='text' value='"+rname+"'readonly/></p><p> Time: <input type='text' value='"+time+"' readonly/></p><p> Number of passengers: <input type='text' value='"+passn+"'readonly/></p><p> Passenger Assistant: <input type='text' value='"+passist+"' readonly/></p><p> Accessibility Requirements: <input type='text' value='"+access+"' readonly/></p>");
//                }
//            });
//            //$('#myModal').modal('show');
//        });
//    });
    $(document).ready(function () {
        $('.driver').each(function(){
            if($(this).text() == 'Driver: Michael Shanahan'){
                $(this).css({backgroundColor: 'coral'});
            }else if ($(this).text() == 'Driver: Neil Crowley'){
                $(this).css({backgroundColor: 'aquamarine'});
            } else if($(this).text() == 'Driver: Anthony Walsh'){
                $(this).css({backgroundColor: 'bisque'});
            } else if($(this).text() == 'Driver: Danny O Sullivan'){
                $(this).css({backgroundColor: 'cornflowerblue'});
            } else if($(this).text() == 'Driver: Charlie Nelligan'){
                $(this).css({backgroundColor: 'red'});
            } else if($(this).text() == 'Driver: John O Donoghue'){
                $(this).css({backgroundColor: 'yellow'});
            } else if($(this).text() == 'Driver: TJ Nelligan'){
                $(this).css({backgroundColor: 'chartreuse'});
            } else if($(this).text() == 'Driver: John Fitzgerald'){
                $(this).css({backgroundColor: 'pink'});
            } else if($(this).text() == 'Driver: Tommy Templeman'){
                $(this).css({backgroundColor: 'blueviolet'});
            } else if($(this).text() == 'Driver: Breda Breen'){
                $(this).css({backgroundColor: 'aqua'});
            } else if($(this).text() == 'Driver: Gerry Lenihan'){
                $(this).css({backgroundColor: 'darksalmon'});
            } else if($(this).text() == 'Driver: James Clifford'){
                $(this).css({backgroundColor: 'fuchsia'});
            }

        });

    });
//    $('.heading').each(function(){
//        var driver = document.getElementById("driver").value;
//        //alert(driver);
//        if(driver =="undefined"){
//            $(".table").addClass("green");
//        }
//    });
</script>
</html>
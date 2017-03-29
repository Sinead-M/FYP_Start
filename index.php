<html>
    <head>
        <title>Kerry Flyer Timetables</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <?php
    session_start();
    if(isset($_SESSION['user'])){
        require_once("headerLoggedin.php");
         include 'logoutModal.php';
    }
    else{
        require_once("header.php");
    }
    ?>
    <body>
    <h1 id="week" style='margin-left: 20px'>Week 13</h1>
    <a id="link" href="index-weektwo.php" style="margin-left: 20px; cursor: pointer; text-decoration: none; color: black" "> Show Next Week >> </a><br/>
    </body>
    <?php include 'calendar.php' ?>
    <br/>
<!--    <script>-->
<!--        function changeCalendar(){-->
<!--            alert($("#week").text());-->
<!--            if($("#week").text() == "Week 13") {-->
<!--                $("#week").html("Week 14");-->
<!--                $("#link").html("<< Show Previous Week");-->
<!--            } else if($("#week").text() == "Week 14"){-->
<!--                $("#week").html("Week 13");-->
<!--                $("#link").html("Show Next Week >>");-->
<!--            }-->
<!--        }-->
<!--    </script>-->
</html>

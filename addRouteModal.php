<html xmlns="http://www.w3.org/1999/html">
<body>
<div id="addRouteModal" class="password-Modal">

    <!-- Creates the modal that holds the add route form-->
    <div class="password-modal-content">
        <div class="password-modal-header">
            <h2 style="width: 100%;">Add Route</h2>
        </div>
        <div class="password-modal-body" >
            <div class="container">
                <form id="addRouteForm" action="add.php" method="post">
                    <p class="routeDetails">Vehicle Number: </p>
                    <input type="text" style="width:100%" id="vehicleNumber" name="vehicleNumber" required="required" />

                    <p class="routeDetails">Driver Name: </p>
                    <input type="text" style="width:100%" id="driverNameadd" name="driverName" required="required" readonly/>

                    <p class="routeDetails">Route Name: </p>
                    <input type="text" style="width:100%"name="routeName" required="required"/>

                    <p class="routeDetails">Route Number: </p>
                    <input type="text" style="width:100%"name="routeNumber"/>

                    <p class="routeDetails">Time: </p>
                    <input type="time" style="width:100%"name="time" required="required"/>

                    <p class="routeDetails">Number of passengers: </p>
                    <input type="text" style="width:100%"name="passNum"/>

                    <p class="routeDetails">Passenger Assistant: </p>
                    <input type="text" style="width:100%"name="passAssist"/>

                    <p class="routeDetails">Accessibility Requirements: </p>
                    <input type="text" style="width:100%"name="access"/>

                    <input type="checkbox" name="Monday"> Monday
                    <input type="checkbox" name="Tuesday"> Tuesday
                    <input type="checkbox" name="Wednesday"> Wednesday
                    <input type="checkbox" name="Thursday"> Thursday
                    <input type="checkbox" name="Friday"> Friday <br>
                    <input type="checkbox" name="Saturday"> Saturday
                    <input type="checkbox" name="Sunday"> Sunday

                    <input type="submit" style="margin-top: 40px" value="Add" class="btn-login"/>
                </form>
                <button id="closeAddModal" style="margin-top: 5px" class="btn-cancel">Cancel</button>
            </div>
        </div>
    </div>

</div>
<script>
    // Get the modal and close button by the ID
    var addRoutemodal = document.getElementById('addRouteModal');

    var cancelbtn = document.getElementById("closeAddModal");


    //    If the close button is clicked the modal will be hidden
    cancelbtn.onclick = function() {
        $('#addRouteModal').modal('hide');
        $('#myAdminModal').modal('hide');
        $('#myAdminModal2').modal('hide');
    };

    // if the user clicks outside the modal, the modal is hidden
    window.onclick = function(event) {
        if (event.target == addRoutemodal) {
            addRoutemodal.style.display = "none";
            $('#myAdminModal').modal('hide');
        }
    };

    //    When the modal is hidden, the form is reset to be empty
    $("#addRouteModal").on('hidden.bs.modal', function () {
        document.getElementById('addRouteForm').reset();
    });

    //    When the modal appears again the focus is on the first input so the scroll position is reset.
    $('#addRouteModal').on('shown.bs.modal', function () {
        $('#vehicleNumber').focus();
    });
</script>
</body>
</html>
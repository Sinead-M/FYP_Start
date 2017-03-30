<html xmlns="http://www.w3.org/1999/html">
<body>
<div id="addBusModal" class="password-Modal">

    <!-- Modal content -->
    <div class="addBus-modal-content">
        <div class="password-modal-header">
            <h2 style="width: 100%">Add Bus</h2>
        </div>
        <div class="password-modal-body">
            <div class="container">
                <form id="addBusForm" action="add.php" method="post">
                    <p class="routeDetails">Vehicle Number: </p>
                    <input type="text" style="width:100%" id="vehicleNumber" name="vehicleNumber" required="required"/>

                    <p class="routeDetails">Driver Name: </p>
                    <input type="text" style="width:100%" name="driverName" required="required"/>

                    <p class="routeDetails">Route Name: </p>
                    <input type="text" style="width:100%" name="routeName" required="required"/>

                    <p class="routeDetails">Route Number: </p>
                    <input type="text" style="width:100%" name="routeNumber"/>

                    <p class="routeDetails">Time: </p>
                    <input type="time" style="width:100%" name="time" required="required"/>

                    <p class="routeDetails">Number of passengers: </p>
                    <input type="text" style="width:100%" name="passNum"/>

                    <p class="routeDetails">Passenger Assistant: </p>
                    <input type="text" style="width:100%" name="passAssist"/>

                    <p class="routeDetails">Accessibility Requirements: </p>
                    <input type="text" style="width:100%" name="access"/>

                    <input type="checkbox" name="Monday"> Monday
                    <input type="checkbox" name="Tuesday"> Tuesday
                    <input type="checkbox" name="Wednesday"> Wednesday
                    <input type="checkbox" name="Thursday"> Thursday
                    <input type="checkbox" name="Friday"> Friday <br>
                    <input type="checkbox" name="Saturday"> Saturday
                    <input type="checkbox" name="Sunday"> Sunday

                    <input type="submit" style="margin-top: 40px" value="Add" class="btn-login"/>
                </form>
                <button id="closeBusModal" style="margin-top: 5px"class="btn-cancel">Cancel</button>
            </div>
        </div>
    </div>

</div>
<script>
    // Get the modal
    var addBusmodal = document.getElementById('addBusModal');

    var cancelbtn = document.getElementById("closeBusModal");


    // When the user clicks on <span> (x), close the modal
    cancelbtn.onclick = function() {
        $("#addBusModal").modal('hide');
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == addBusmodal) {
            addBusmodal.style.display = "none";
        }
    };

    $("#addBusModal").on('hidden.bs.modal', function () {
        document.getElementById('addBusForm').reset();
    });

    $('#addBusModal').on('shown.bs.modal', function () {
        $('#vehicleNumber').focus();
    });
</script>
</body>
</html>
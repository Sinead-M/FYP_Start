<htmlxmlns="http://www.w3.org/1999/html">
<body>
<!--Details modal to provide the user with extra details about each route-->
<div class="password-Modal" id="myDetailsModal">
        <div class="addBus-modal-content">
            <div class="password-modal-header">
                <p style="width: 100%;"><input style="background: #8EB529; border: none; color: white; width: 100%;" type="text" class="input-sm" id="txtrname" readonly/></p>
            </div>
            <div class="password-modal-body">
                <div class="container">
                    <p class="routeDetails">Vehicle Number: </p>
                    <input type="text" style="width:100%" id="vehicleNumber" readonly/>

                    <p class="routeDetails">Driver Name: </p>
                    <input type="text" style="width:100%" id="driverName" readonly/>

                    <p class="routeDetails">Route Name: </p>
                    <input type="text" style="width:100%" id="routeName" readonly/>

                    <p class="routeDetails">Route Number: </p>
                    <input type="text" style="width:100%" id="routeNumber" readonly/>

                    <p class="routeDetails">Time: </p>
                    <input type="text" style="width:100%" id="time" readonly/>

                    <p class="routeDetails">Number of passengers: </p>
                    <input type="text" style="width:100%" id="passNum" readonly/>

                    <p class="routeDetails">Passenger Assistant: </p>
                    <input type="text" style="width:100%" id="passAssist" readonly/>

                    <p class="routeDetails">Accessibility Requirements: </p>
                    <input type="text" style="width:100%" id="access" readonly/>
                </div>
            </div>
        </div>
</div>

<script>
    // Get the modal
    var routeModal = document.getElementById('myDetailsModal');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == routeModal) {
            $("#myDetailsModal").modal('hide');
        }
    };

//    When the modal is opened the scroll position is reset back to the top each time
    $('#myDetailsModal').on('shown.bs.modal', function () {
        $('#vehicleNumber').focus();
    });
</script>
</body>
</html>
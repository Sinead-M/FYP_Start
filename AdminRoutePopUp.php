<html>
<div class="password-Modal" id="myModal">
    <div class="modal-dialog">
        <div class="route-modal-content">
            <div class="password-modal-header">
                <a href="index.php">
                    <img class="edit" src="img/pencil.png">
                </a>
                <p><input style="background: #8EB529; border: none; color: white; width: 100%;" type="text" class="input-sm" id="txtrname" readonly/></p>
                <a href="index.php">
                    <img class="delete" src="img/bin.png">
                </a>
            </div>
            <div class="modal-body">
                <div class="container">
                    <p class="routeDetails">Vehicle Number: </p>
                    <input type="text" style="width:100%" id="vehicleNumber"/>

                    <p class="routeDetails">Driver Name: </p>
                    <input type="text" style="width:100%" id="driverName"/>

                    <p class="routeDetails">Route Name: </p>
                    <input type="text" style="width:100%" id="routeName"/>

                    <p class="routeDetails">Route Number: </p>
                    <input type="text" style="width:100%" id="routeNumber"/>

                    <p class="routeDetails">Time: </p>
                    <input type="text" style="width:100%" id="time"/>

                    <p class="routeDetails">Number of passengers: </p>
                    <input type="text" style="width:100%" id="passNum"/>

                    <p class="routeDetails">Passenger Assistant: </p>
                    <input type="text" style="width:100%" id="passAssist"/>

                    <p class="routeDetails">Accessibility Requirements: </p>
                    <input type="text" style="width:100%" id="access"/>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</html>
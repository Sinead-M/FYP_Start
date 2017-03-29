<html xmlns="http://www.w3.org/1999/html">
<body>
<div class="password-Modal" id="myAdminModal">
        <div class="addBus-modal-content">
            <div class="password-modal-header">
                <img class="edit" id="editButton" style="cursor: pointer; margin-top: 22px; margin-left: 18px" src="img/pencil.png">
                <p style="width: 100%;"><input style="background: #8EB529; border: none; color: white; width: 100%;" type="text" class="input-sm" id="txtrname" readonly/></p>
                <img class="delete" onclick="deleteRoute()" style="cursor: pointer; margin-top: 22px; margin-right: 18px" src="img/bin.png">
            </div>
            <div class="password-modal-body">
                <div class="container">
                    <form action="Edit.php" method="post">
                        <p class="routeDetails">Vehicle Number: </p>
                        <input type="text" style="width:100%" id="vehicleNumber" name="vehicleNumber"  readonly/>

                        <p class="routeDetails">Driver Name: </p>
                        <input type="text" style="width:100%" id="driverName" name="driverName" readonly/>

                        <p class="routeDetails">Route Name: </p>
                        <input type="text" style="width:100%" id="routeName" name="routeName" readonly/>

                        <p class="routeDetails">Route Number: </p>
                        <input type="text" style="width:100%" id="routeNumber" name="routeNumber" readonly/>

                        <p class="routeDetails">Time: </p>
                        <input type="text" style="width:100%" id="time" name="time" readonly required/>

                        <p class="routeDetails">Number of passengers: </p>
                        <input type="text" style="width:100%" id="passNum" name="passNum" readonly/>

                        <p class="routeDetails">Passenger Assistant: </p>
                        <input type="text" style="width:100%" id="passAssist" name="passAssist" readonly/>

                        <p class="routeDetails">Accessibility Requirements: </p>
                        <input type="text" style="width:100%" id="access" name="access" readonly/>

                        <input type="checkbox" id="Monday" name="Monday" disabled> Monday
                        <input type="checkbox" id="Tuesday" name="Tuesday" disabled> Tuesday
                        <input type="checkbox" id="Wednesday" name="Wednesday" disabled> Wednesday
                        <input type="checkbox" id="Thursday" name="Thursday" disabled> Thursday
                        <input type="checkbox" id="Friday" name="Friday" disabled> Friday <br>
                        <input type="checkbox" id="Saturday" name="Saturday" disabled> Saturday
                        <input type="checkbox" id="Sunday" name="Sunday" disabled> Sunday

                        <input type="checkbox" id="Monday-true" name="Monday-true" hidden>
                        <input type="checkbox" id="Tuesday-true" name="Tuesday-true" hidden>
                        <input type="checkbox" id="Wednesday-true" name="Wednesday-true" hidden>
                        <input type="checkbox" id="Thursday-true" name="Thursday-true" hidden>
                        <input type="checkbox" id="Friday-true" name="Friday-true" hidden>  <br>
                        <input type="checkbox" id="Saturday-true" name="Saturday-true" hidden>
                        <input type="checkbox" id="Sunday-true" name="Sunday-true" hidden>

                        <input id="edit" type="submit"  value="Change" class="btn-login" style="visibility: hidden;"/>
                        <button id="closeModal" class="btn-cancel" style="visibility: hidden">Cancel</button>

                    </form>
                </div>
            </div>
        </div>
</div>

<script>

    var adminModal = document.getElementById("myAdminModal");
    var cancelBtn = document.getElementById("closeModal");
    var editBtn = document.getElementById("editButton");

    editBtn.onclick = function() {
        document.getElementById('routeNumber').removeAttribute('readonly');
        document.getElementById('time').removeAttribute('readonly');
        document.getElementById('passNum').removeAttribute('readonly');
        document.getElementById('passAssist').removeAttribute('readonly');
        document.getElementById('access').removeAttribute('readonly');
        document.getElementById('closeModal').style.visibility='visible';
        document.getElementById('edit').style.visibility='visible';

    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == adminModal) {
            $("#myAdminModal").modal('hide');
        }
    };

    cancelBtn.onclick = function() {
        document.getElementById('closeModal').style.visibility='hidden';
        document.getElementById('edit').style.visibility='hidden';
        document.getElementById('routeName').setAttribute('readonly', 'readonly');
        document.getElementById('routeNumber').setAttribute('readonly', 'readonly');
        document.getElementById('time').setAttribute('readonly', 'readonly');
        document.getElementById('passNum').setAttribute('readonly', 'readonly');
        document.getElementById('passAssist').setAttribute('readonly', 'readonly');
        document.getElementById('access').setAttribute('readonly', 'readonly');
    };

    $("#myAdminModal").on('hidden.bs.modal', function () {
        document.getElementById('routeName').setAttribute('readonly', 'readonly');
        document.getElementById('routeNumber').setAttribute('readonly', 'readonly');
        document.getElementById('time').setAttribute('readonly', 'readonly');
        document.getElementById('passNum').setAttribute('readonly', 'readonly');
        document.getElementById('passAssist').setAttribute('readonly', 'readonly');
        document.getElementById('access').setAttribute('readonly', 'readonly');
        document.getElementById('closeModal').style.visibility='hidden';
        document.getElementById('edit').style.visibility='hidden';
        $("#Monday").attr('checked', false);
        $("#Monday-true").attr('checked', false);
        $("#Tuesday").attr('checked', false);
        $("#Tuesday-true").attr('checked', false);
        $("#Wednesday").attr('checked', false);
        $("#Wednesday-true").attr('checked', false);
        $("#Thursday").attr('checked', false);
        $("#Thursday-true").attr('checked', false);
        $("#Friday").attr('checked', false);
        $("#Friday-true").attr('checked', false);
        $("#Saturday").attr('checked', false);
        $("#Saturday-true").attr('checked', false);
        $("#Sunday").attr('checked', false);
        $("#Sunday-true").attr('checked', false);
    });

    $('#myAdminModal').on('shown.bs.modal', function () {
        $('#vehicleNumber').focus();
    });

    function deleteRoute() {
        var day ="";
        var driverName = $('#driverName').val();
        var routeName = $('#routeName').val();
        if(document.getElementById('Monday').checked){
            day = "monday";
        } else if(document.getElementById('Tuesday').checked){
             day = "tuesday";
        } else if(document.getElementById('Wednesday').checked){
             day = "wednesday";
        } else if(document.getElementById('Thursday').checked){
             day = "thursday";
        } else if(document.getElementById('Friday').checked){
             day = "friday";
        } else if(document.getElementById('Saturday').checked){
             day = "saturday";
        } else if(document.getElementById('Sunday').checked){
             day = "sunday";
        }
        $.ajax({
            type: "POST",
            url: "deleteApi.php",
            data: {route: routeName,
                driver: driverName,
                weekday: day },
            dataType: 'json',
            success: function (data) {
                alert(data.success);
                window.location.reload();
            }
        });

    }
</script>
</body>
</html>
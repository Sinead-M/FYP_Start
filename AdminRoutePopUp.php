<html xmlns="http://www.w3.org/1999/html">
<body>
<div class="password-Modal" id="myAdminModal">
        <div class="addBus-modal-content">
            <div class="password-modal-header">
                <img class="edit" id="editButton" style="cursor: pointer;" src="img/pencil.png">
                <p><input style="background: #8EB529; border: none; color: white; width: 100%;" type="text" class="input-sm" id="txtrname" readonly/></p>
<!--                <img class="delete" onclick="deleteRoute()" src="img/bin.png">-->
            </div>
            <div class="password-modal-body">
                <div class="container">
                    <form action="edit.php" method="post">
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

                        <input id="edit" type="submit"  value="Change" class="btn-login" style="visibility: hidden;"/>
                    </form>
                    <button id="close" class="btn-cancel" style="visibility: hidden">Cancel</button>
                </div>
            </div>
        </div>
</div>

<script>
    document.getElementById('editButton').onclick = function() {
        document.getElementById('routeNumber').removeAttribute('readonly');
        document.getElementById('time').removeAttribute('readonly');
        document.getElementById('passNum').removeAttribute('readonly');
        document.getElementById('passAssist').removeAttribute('readonly');
        document.getElementById('access').removeAttribute('readonly');
        document.getElementById('close').style.visibility='visible';
        document.getElementById('edit').style.visibility='visible';
    };

    var routeModal = document.getElementById('myAdminModal');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == routeModal) {
            routeModal.style.display = "none";
            document.getElementById('routeName').removeAttribute('readonly');
            document.getElementById('routeNumber').removeAttribute('readonly');
            document.getElementById('time').removeAttribute('readonly');
            document.getElementById('passNum').removeAttribute('readonly');
            document.getElementById('passAssist').removeAttribute('readonly');
            document.getElementById('access').removeAttribute('readonly');
            document.getElementById('close').style.visibility='hidden';
            document.getElementById('edit').style.visibility='hidden';
        }
    }

    document.getElementById('close').onclick = function(){
        routeModal.style.display = "none";
        document.getElementById('routeName').removeAttribute('readonly');
        document.getElementById('routeNumber').removeAttribute('readonly');
        document.getElementById('time').removeAttribute('readonly');
        document.getElementById('passNum').removeAttribute('readonly');
        document.getElementById('passAssist').removeAttribute('readonly');
        document.getElementById('access').removeAttribute('readonly');
        document.getElementById('close').style.visibility='hidden';
        document.getElementById('edit').style.visibility='hidden';

    }
</script>
</body>
</html>
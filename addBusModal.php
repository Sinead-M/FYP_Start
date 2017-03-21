<html>
<body>
<div id="addBusModal" class="password-Modal">

    <!-- Modal content -->
    <div class="logout-modal-content">
        <div class="password-modal-header">
            <h2>Add Bus</h2>
        </div>
        <div class="password-modal-body">
            <div class="container">
                <form action="add.php" method="post">
                    <div class="form-input">
                        <input type="text" name="vehicleNumber" required="required" placeholder="Vehicle Number" />
                    </div>
                    <div class="form-input">
                        <input type="text" name="driverName" required="required" placeholder="Driver Name" />
                    </div>
                    <div class="form-input">
                        <input type="text" name="routeName" required="required" placeholder="Route Name" />
                    </div>
                    <div class="form-input">
                        <input type="text" name="routeNo" placeholder="Route Number" />
                    </div>
                    <div class="form-input">
                        <input type="text" name="passNo" required="required" placeholder="Number of Passengers" />
                    </div>
                    <div class="form-input">
                        <input type="time" name="time" placeholder="Time" />
                    </div>
                    <div class="form-input">
                        <input type="text" name="assPass" placeholder="Passenger Assistant" />
                    </div>
                    <div class="form-input">
                        <input type="text" name="access" placeholder="Access Requirements" />
                    </div>
                    <input type="submit" value="Add" class="btn-login"/>
                    <button id="close" class="btn-cancel">Cancel</button>
                </form>
            </div>
        </div>
    </div>

</div>
<script>
    // Get the modal
    var addBusmodal = document.getElementById('addBusModal');
    // Get the button that opens the modal
    var addBusbtn = document.getElementById("addBusBtn");

    var cancelbtn = document.getElementById("close");

    // When the user clicks the button, open the modal
    addBusbtn.onclick = function() {
        addBusmodal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    cancelbtn.onclick = function() {
        addBusmodal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == addBusmodal) {
            addBusmodal.style.display = "none";
        }
    }
</script>
</body>
</html>
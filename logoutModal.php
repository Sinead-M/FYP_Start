<html>
<body>
<!--Modal for the logout feature contains confirmation question and cancel and confirm button-->
    <div id="logoutModal" class="password-Modal">

        <!-- Modal content -->
        <div class="logout-modal-content">
            <div class="password-modal-header">
                <h2 style="width: 100%;">Are you sure you want to logout?</h2>
            </div>
            <div class="modal-body">
                <div style="height: 103px" class="container">
                    <form action="logout.php" method="post">
                        <input type="submit" value="Logout" class="btn-login"/>
                    </form>
                    <button id="cancel" class="btn-cancel">Cancel</button>
                </div>
            </div>
        </div>

    </div>
    <script>
        // Get the modal
        var logoutmodal = document.getElementById('logoutModal');

        // Get the button that opens the modal
        var logoutbtn = document.getElementById("logout");

        var cancelbtn = document.getElementById("cancel");

        // When the user clicks the button, open the modal
        logoutbtn.onclick = function() {
            logoutmodal.style.display = "block";
        };

        // When the user clicks on <span> (x), close the modal
        cancelbtn.onclick = function() {
            logoutmodal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == logoutmodal) {
                logoutmodal.style.display = "none";
            }
        }
    </script>
</body>
</html>
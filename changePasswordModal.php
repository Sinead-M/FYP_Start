<html>
    <body>
    <div id="passwordModal" class="password-Modal">

        <!-- Modal content -->
        <div class="password-modal-content">
            <div class="password-modal-header">
                <h2 style="width: 100%">Change Password</h2>
            </div>
            <div class="password-modal-body">
                <div class="container">
                    <form action="changePasswordCheck.php" method="post">
                        <p class="routeDetails">Current Password: </p>
                        <input type="password" name="currentPassword" required="required" style="width: 100%;" />

                        <p class="routeDetails">New Password: </p>
                        <input type="password" name="newPassword" required="required" style="width: 100%;" />

                        <p class="routeDetails">Confirm Password </p>
                        <input type="password" name="confirmPassword" required="required" style="width: 100%;" />

                        <input style="margin-top: 150px;" type="submit" value="Change" class="btn-login"/>
                        <button style="margin-top: 150px;" id="close" class="btn-cancel">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script>
        // Get the modal
        var passwordmodal = document.getElementById('passwordModal');

        // Get the button that opens the modal
        var passwordbtn = document.getElementById("changePassword");

        // Get the <span> element that closes the modal
        var closebtn = document.getElementById("close");

        // When the user clicks the button, open the modal
        passwordbtn.onclick = function() {
            passwordmodal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        closebtn.onclick = function() {
            passwordmodal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == passwordmodal) {
                passwordmodal.style.display = "none";
            }
        }
    </script>
    </body>
</html>
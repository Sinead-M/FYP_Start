<html>
    <body>
    <div id="passwordModal" class="password-Modal">

        <!-- Modal content -->
        <div class="password-modal-content">
            <div class="password-modal-header">
                <h2>Change Password</h2>
            </div>
            <div class="password-modal-body">
                <div class="container">
                    <form action="checklogin.php" method="post">
                        <div class="form-input">
                            <input type="password" name="currentPassword" required="required" placeholder="Enter current Password" />
                        </div>
                        <div class="form-input">
                            <input type="password" name="newPassword" required="required" placeholder="Enter new Password" />
                        </div>
                        <div class="form-input">
                            <input type="password" name="confirmPassword" required="required" placeholder="Confirm new Password" />
                        </div>
                        <input type="submit" value="Change" class="btn-login"/>
                        <button id="close" class="btn-cancel">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('passwordModal');

        // Get the button that opens the modal
        var btn = document.getElementById("changePassword");

        // Get the <span> element that closes the modal
        var btn2 = document.getElementById("close");

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        btn2.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    </body>
</html>
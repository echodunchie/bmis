<!-- ========================= MODAL ======================= -->
<div id="addZoneModal" class="modal fade">
    <form method="post">
        <div class="modal-dialog modal-sm" style="width:300px !important;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Manage Barangay Staff</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>First Name:</label> <span style="color:red;">*</span>
                                <input name="txt_fname" required="" class="form-control input-sm" type="text" placeholder="First Name" onkeyup="this.value = this.value.toUpperCase();" />
                            </div>
                            <div class="form-group">
                                <label>Middle Name:</label>
                                <input name="txt_mname" class="form-control input-sm" type="text" placeholder="Middle Name" onkeyup="this.value = this.value.toUpperCase();" />
                            </div>
                            <div class="form-group">
                                <label>Last Name:</label> <span style="color:red;">*</span>
                                <input name="txt_lname" required="" class="form-control input-sm" type="text" placeholder="Last Name" onkeyup="this.value = this.value.toUpperCase();" />
                            </div>
                            <div class="form-group">
                                <label>Position:</label> <span style="color:red;">*</span>
                                <input name="ddl_pos" required="" class="form-control input-sm" type="text" placeholder="Last Name" onkeyup="this.value = this.value.toUpperCase();" />
                            </div>
                            <div class="form-group">
                                <label>Username:</label> <span style="color:red;">*</span>
                                <input name="txt_uname" id="username" required="" class="form-control input-sm" type="text" onfocus="this.value=''" placeholder="Username" />
                                <label id="username_label" style="color:#CC0000;"></label>
                            </div>
                            <div class="form-group">
                                <label>Password :</label> <span style="color:red;">*</span>
                                <input name="txt_pass" id="txt_pass" required="" class="form-control input-sm" type="password" onfocus="this.value=''" placeholder="*******">
                                <label id="password_label" style="color:#CC0000;"></label> <br>
                                <input type="checkbox" style="margin-top: 10px; margin-top: 10px;" onclick="myFunction()"> Show Password

                                <script>
                                    function myFunction() {
                                        var x = document.getElementById("txt_pass");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel" />
                    <input type="submit" class="btn btn-primary btn-sm" name="btn_add" value="Add" id="btn_add" />

                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        var timeOut = null; // this used for hold few seconds to made ajax request
        var timeOut1 = null; // this used for hold few seconds to made ajax request

        var loading_html = '<img src="../../img/ajax-loader.gif" style="height: 20px; width: 20px;"/>'; // just an loading image or we can put any texts here

        //when button is clicked
        $('#username').keyup(function(e) {

            // when press the following key we need not to make any ajax request, you can customize it with your own way
            switch (e.keyCode) {
                //case 8:   //backspace
                case 9: //tab
                case 13: //enter
                case 16: //shift
                case 17: //ctrl
                case 18: //alt
                case 19: //pause/break
                case 20: //caps lock
                case 27: //escape
                case 33: //page up
                case 34: //page down
                case 35: //end
                case 36: //home
                case 37: //left arrow
                case 38: //up arrow
                case 39: //right arrow
                case 40: //down arrow
                case 45: //insert
                    //case 46:  //delete
                    return;
            }
            if (timeOut != null)
                clearTimeout(timeOut);
            timeOut = setTimeout(is_available, 500); // delay delay ajax request for 1000 milliseconds
            $('#username_label').html(loading_html); // adding the loading text or image
        });

        $('#txt_pass').keyup(function(e) {

            // when press the following key we need not to make any ajax request, you can customize it with your own way
            switch (e.keyCode) {
                //case 8:   //backspace
                case 9: //tab
                case 13: //enter
                case 16: //shift
                case 17: //ctrl
                case 18: //alt
                case 19: //pause/break
                case 20: //caps lock
                case 27: //escape
                case 33: //page up
                case 34: //page down
                case 35: //end
                case 36: //home
                case 37: //left arrow
                case 38: //up arrow
                case 39: //right arrow
                case 40: //down arrow
                case 45: //insert
                    //case 46:  //delete
                    return;
            }
            if (timeOut1 != null)
                clearTimeout(timeOut1);
            timeOut1 = setTimeout(is_validate, 500); // delay delay ajax request for 1000 milliseconds
            $('#password_label').html(loading_html); // adding the loading text or image
        });
    });

    function is_available() {
        //get the username
        var username = $('#username').val();

        //make the ajax request to check is username available or not
        $.post("check_username.php", {
                username: username
            },
            function(result) {
                console.log(result);
                if (result > 0) {
                    $('#username_label').html('Not Available');
                    document.getElementById("btn_add").disabled = true;
                } else {
                    $('#username_label').html('<span style="color:#006600;">Available</span>');
                    document.getElementById("btn_add").disabled = false;
                }
            });

    }


    function is_validate() {
        var password = $('#txt_pass').val();

        var decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

        if (password.length < 8 || password.length > 15) {
            $('#password_label').html('Password must contain 8 or 15 characters');
            document.getElementById("btn_add").disabled = true;
        } else if (!password.match(decimal)) {
            $('#password_label').html('Password must contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character');
            document.getElementById("btn_add").disabled = true;
        } else {
            $('#password_label').html('');
            document.getElementById("btn_add").disabled = false;
        }

    }
</script>
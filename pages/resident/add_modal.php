<script type='text/javascript'>
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<style>
    body {
        width: 100%;
        margin: 0 auto;
        padding: 0px;
        font-family: helvetica;
        background-color: #0B3861;
    }

    #output_image {
        padding-top: 10px;
        max-width: 200px;
    }
</style>


<div id="addCourseModal" class="modal fade">
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-sm" style="width:1000px !important;">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Manage Residents</h4>
                </div>

                <div class="modal-header">
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Household #" name="input_search_household_number" />
                            <div class="input-group-btn">
                                <button class="btn btn-primary" type="button" id="btn_search_household_number">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        </div>
                        <span class="message_search_household_number text-center" style="display: none; margin-top:8px; font-size: 12px;">error message</span>
                    </div>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="container-fluid">

                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">Household Number: </label> <span style="color:red;">*</span> <br>
                                    <div class="col-sm-4">
                                        <input onkeyup="show_head()" id="txt_householdno" name="txt_householdno" class="form-control input-sm" type="number" placeholder="Household #" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input id="txt_totalmembers" disabled name="txt_totalmembers" class="form-control input-sm" type="hidden" placeholder="Total Number of Members" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Name: </label> <span style="color:red;">*</span> <br>

                                    <div class="col-sm-4">
                                        <input name="txt_lname" required="" class="form-control input-sm" type="text" placeholder="Lastname" onkeyup="this.value = this.value.toUpperCase();" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input name="txt_fname" required="" class="form-control input-sm col-sm-4" type="text" placeholder="Firstname" onkeyup="this.value = this.value.toUpperCase();" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input name="txt_mname" class="form-control input-sm col-sm-4" type="text" placeholder="Middlename" onkeyup="this.value = this.value.toUpperCase();" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Sitio / Zone : </label> <span style="color:red;">*</span> <br>

                                    <div class="col-sm-6">
                                        <select name="txt_brgy" required="" class="form-control input-sm">
                                            <option>Bongsuran</option>
                                            <option>Minuro</option>
                                            <option>Centro</option>
                                            <option>Crossing</option>
                                            <option>Cagmanok</option>
                                            <option>Caunda</option>
                                            <option>Tawagan</option>
                                            <option>Pito, River Side, Rauqitan</option>
                                            <option>Ilawod</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <select name="txt_zone" required="" class="form-control input-sm col-sm-4" placeholder="Zone #">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="control-label">Contact Info: </label> <span style="color:red;">*</span> <br>
                                    <div class="col-sm-6">
                                        <input name="txt_email" required="" class="form-control input-sm" type="email" placeholder="Email" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="txt_mobile" required="" class="form-control input-sm col-sm-4" type="number" placeholder="Mobile Number" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Birthday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birthplace:</label> <span style="color:red;">*</span> <br>
                                    <div class="col-sm-6">
                                        <input name="txt_bdate" required="" class="form-control input-sm" type="date" placeholder="Birthdate" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="txt_bplace" required="" class="form-control input-sm col-sm-4" type="text" placeholder="Birthplace" onkeyup="this.value = this.value.toUpperCase();" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Since when(Residency):(in Months)&nbsp;&nbsp;&nbsp;&nbsp;Civil Status: </label> <span style="color:red;">*</span> <br>
                                    <div class="col-sm-6">
                                        <input name="txt_length" required="" class="form-control input-sm" type="number" min="0" placeholder="Since when" />
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="txt_cstatus" required="" class="form-control input-sm col-sm-4">
                                            <option>Married</option>
                                            <option>single</option>
                                            <option>divorced</option>
                                            <option>widowed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Religion: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Educational Attainment:</label> <span style="color:red;">*</span> <br>
                                    <div class="col-sm-6">
                                        <input name="txt_religion" class="form-control input-sm" type="text" placeholder="Religion" />
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="ddl_eattain" required="" class="form-control input-sm col-sm-4">
                                            <option>No schooling completed</option>
                                            <option>Elementary</option>
                                            <option>High school, undergrad</option>
                                            <option>High school graduate</option>
                                            <option>College, undergrad</option>
                                            <option>Vocational</option>
                                            <option>Bachelor’s degree</option>
                                            <option>Master’s degree</option>
                                            <option>Doctorate degree</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Account Credentials:</label><br>
                                    <div class="col-sm-6 mt-2">
                                        <input name="txt_uname" id="username" class="form-control input-sm" type="text" onfocus="this.value=''" placeholder="Username" />
                                        <label id="user_msg" style="color:#CC0000;"></label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="txt_upass" id="txt_upass" class="form-control input-sm" onfocus="this.value=''" type="password" placeholder="Password">
                                        <label id="password_label" style="color:#CC0000;"></label> <br>
                                        <input type="checkbox" style="margin-top: 10px; margin-top: 10px;" onclick="myFunction()">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">Nationality: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender: </label> <span style="color:red;">*</span> <br>
                                    <div class="col-sm-6">
                                        <input name="txt_national" required="" class="form-control input-sm" type="text" placeholder="Nationality" onkeyup="this.value = this.value.toUpperCase();" />
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="ddl_gender" required="" class="form-control input-sm col-sm-4">
                                            <option value="Male">M</option>
                                            <option value="Female">F</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Nutritional health Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Head of the family:</label> <span style="color:red;">*</span> <br>
                                    <div class="col-sm-6">
                                        <select name="txt_dperson" required="" class="form-control input-sm col-sm-4">
                                            <option selected="" disabled="">-Health Status-</option>
                                            <option>Normal</option>
                                            <option>Overweight</option>
                                            <option>Severly Underweight</option>
                                            <option>Breast-Feeding Mother</option>
                                            <option>PWD/Differently Abled Person</option>
                                            <option>Underweight</option>
                                            <option>Pregnant</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="radio" id="no" name="txt_rthead" value="no">
                                          <label for="no">NO</label>
                                          <input type="radio" id="yes" name="txt_rthead" value="yes">
                                          <label for="yes">YES</label><br>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Occupation: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Economic Status:</label> <span style="color:red;">*</span> <br>
                                    <div class="col-sm-6">
                                        <input name="txt_occp" required="" class="form-control input-sm" type="text" placeholder="Occupation" />
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="ddl_gender" required="" class="form-control input-sm col-sm-4">
                                            <option selected="" disabled="">-Economic Stat-</option>
                                            <option>Employed</option>
                                            <option>Unemployed</option>
                                            <option>Retired</option>
                                            <option>Student</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Monthly Income:</label> <span style="color:red;">*</span> <br>
                                    <input name="txt_income" required="" class="form-control input-sm" type="number" min="1" placeholder="Monthly Income" />
                                </div>


                                <div class="form-group" id="wrapper">
                                    <label class="control-label">Image:</label>
                                    <input name="txt_image" class="form-control input-sm" type="file" accept="image/*" onchange="preview_image(event)">
                                    <br />
                                    <img id="output_image" />
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel" />
                    <input type="submit" class="btn btn-primary btn-sm" name="btn_add" id="btn_add" value="Add Resident" />
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        var timeOut = null;
        var timeOut1 = null;

        var loading_html = '<img src="../../img/ajax-loader.gif" style="height: 20px; width: 20px;"/>';

        //when button is clicked
        $('#username').keyup(function(e) {

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
            $('#user_msg').html(loading_html); // adding the loading text or image
        });

        $('#txt_upass').keyup(function(e) {

            switch (e.keyCode) {
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
                    return;
            }
            if (timeOut1 != null)
                clearTimeout(timeOut1);
            timeOut1 = setTimeout(is_validate, 500);
            $('#password_label').html(loading_html);
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
                    $('#user_msg').html('Not Available');
                    document.getElementById("btn_add").disabled = true;
                } else {
                    $('#user_msg').html('<span style="color:#006600;">Available</span>');
                    document.getElementById("btn_add").disabled = false;
                }
            });

    }

    function is_validate() {
        var password = $('#txt_upass').val();

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

<script>
    $('#addCourseModal').on('show.bs.modal', function(e) {
        toggleAddCoursModalForm('hide');
    })

    const message_search_household_number = document.querySelector('.message_search_household_number');
    const addCourseModal = document.querySelector('#addCourseModal');

    document.querySelector('#btn_search_household_number').addEventListener('click', function() {


        const input_search_household_number = document.querySelector('[name="input_search_household_number"]');

        message_search_household_number.textContent = '';
        message_search_household_number.style.display = 'none';


        if (!input_search_household_number.value) {
            message_search_household_number.style.color = '#a94442';
            message_search_household_number.textContent = 'Please fill up the household number';
            message_search_household_number.style.display = 'block';

            toggleAddCoursModalForm('hide');

            return;
        }

        $.ajax({
            type: 'GET',
            url: '/bmis/pages/resident/search_household_number.php',
            data: {
                'q': input_search_household_number.value,
            },
            success: function(data) {
                const household = JSON.parse(data);

                document.querySelector('[name="txt_householdno"]').value = household.householdno;

                message_search_household_number.style.color = '#008000';
                message_search_household_number.innerHTML = `<a href="/bmis/pages/resident/resident.php?household_no='${household.householdno}'">  Household ${household.householdno} found </a>`;
                message_search_household_number.style.display = 'block';

                toggleAddCoursModalForm('show');
            },
            error: function(err) {

                if (err.responseText == 'not_found') {

                    message_search_household_number.style.color = '#a94442';
                    message_search_household_number.innerHTML = `
                        Household was not found.<br>
                        <a href="/bmis/pages/household/household.php?isCreate=` + input_search_household_number.value + `"> Create household </a>`;

                    message_search_household_number.style.display = 'block';
                }

                toggleAddCoursModalForm('hide');
            }
        });

    });

    function toggleAddCoursModalForm(toggle) {
        const modal = document.querySelector('#addCourseModal');

        if (toggle == 'show') {
            modal.querySelector('.modal-body').style.display = 'block';
            modal.querySelector('.modal-footer').style.display = 'block';

            return;
        }

        modal.querySelector('.modal-body').style.display = 'none';
        modal.querySelector('.modal-footer').style.display = 'none';
    }
</script>


<script>
    function show_head() {
        var householdID = $('#txt_householdno').val();
        console.log(householdID);
        if (householdID) {
            $.ajax({
                type: 'POST',
                url: 'household_dropdown.php',
                data: 'total_id=' + totalID,
                success: function(html) {
                    $('#txt_totalmembers').html(html);
                }
            });
        }
    }


    function show_total() {
        var totalID = $('#txt_hof').val();
        console.log(totalID);
        if (totalID) {
            $.ajax({
                type: 'POST',
                url: 'household_dropdown.php',
                data: 'total_id=' + totalID,
                success: function(html) {
                    $('#txt_totalmembers').html(html);
                }
            });
        }
    }
</script>
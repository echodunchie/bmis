<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
  function SingleFileHandler(evt) {
    var file = evt.target.files;

    var f = file[0]

    if (!f.type.match('image.*')) {
      alert("Please Select Image.");
    }

    var file_reader = new FileReader();

    file_reader.onload = (function(theFile) {
      return function(e) {
        var span = document.createElement('span');
        span.innerHTML = ['<img class="img-thumbnail" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
        document.getElementById('outputSingle').innerHTML = "";
        document.getElementById('outputSingle').insertBefore(span, null);
      };
    })(f);

    file_reader.readAsDataURL(f);
  }

  function MultipleFilehandler(evt) {
    var files = evt.target.files; // FileList object
    document.getElementById('outputMultiple').innerHTML = "";
    for (var i = 0, f; f = files[i]; i++) {

      if (!f.type.match('image.*')) {
        alert("Please select Images only.");
      }

      var file_reader = new FileReader();

      file_reader.onload = (function(theFile) {
        return function(e) {
          var span = document.createElement('span');
          span.innerHTML = ['<img class="img-thumbnail" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('outputMultiple').insertBefore(span, null);
        };
      })(f);

      file_reader.readAsDataURL(f);
    }
  }

  $(document).ready(function() {
    var multifilediv = document.getElementById('fileMultiple');
    if (multifilediv) {
      multifilediv.addEventListener('change', MultipleFilehandler, false);
    }

    var filediv = document.getElementById('fileSingle');
    if (filediv) {
      filediv.addEventListener('change', SingleFileHandler, false);
    }
  });
</script>
<style>
  .img-thumbnail {
    height: 100px;
  }
</style>
<!-- ========================= MODAL ======================= -->
<div id="addCourseModal" class="modal fade">

  <form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="modal-dialog modal-sm" style="width:400px !important;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Manage Officials</h4>
        </div>


        <div class="modal-body">

          <?php
          $positions = [
            "captain" => "Captain",
            "kagawad_ordinance" => "Kagawad Ordinance",
            "kagawad_publicsafety" => "Kagawad_Public Safety",
            "kagawad_tourism" => "Kagawad Tourism",
            "kagawad_budgetfinance" => "Kagawad Budget Finance",
            "kagawad_agriculture" => "Kagawad Agriculture",
            "kagawad_education" => "Kagawad Education",
            "kagawad_infrastracture" => "Kagawad Infrastracture",
            "sk_chairman" => "Sk Chairman"
          ];

          $squery = mysqli_query($con, "SELECT DISTINCT sPosition AS position FROM tblofficial");
          $existingPositions = [];

          while ($row = mysqli_fetch_array($squery)) {
            $existingPositions[] = $row['position'];
          }

          foreach ($existingPositions as  $existingPosition) {
            if (array_key_exists($existingPosition, $positions)) {
              unset($positions[$existingPosition]);
            }
          }

          ?>

          <div class="row">
            <div class="container-fluid">
              <div class="col-md-12 col-sm-19">

                <div class="form-group">
                  <label>Position:</label> <span style="color:red;">*</span>
                  <select name="ddl_pos" class="form-control input-sm" onchange="getSelectValue(this.value) ;">

                    <?php foreach ($positions as $key => $value) : ?>

                      <option value="<?php echo $key ?>">

                        <?php echo $value ?>
                      </option>
                    <?php endforeach; ?>

                  </select>
                </div>

                <div class="form-group">
                  <label>Name:</label> <span style="color:red;">*</span>
                  <input name="txt_cname" required="" class="form-control input-sm" type="text" placeholder="Lastname, Firstname Middlename" onkeyup="this.value = this.value.toUpperCase();" />
                </div>
                <div class="form-group">
                  <label>Contact #:</label> <span style="color:red;">*</span>
                  <input name="txt_contact" required="" class="form-control input-sm" type="number" placeholder="Contact #" />
                </div>
                <div class="form-group">
                  <label>Address:</label> <span style="color:red;">*</span>
                  <input name="txt_address" required="" class="form-control input-sm" type="text" placeholder="Address" onkeyup="this.value = this.value.toUpperCase();" />
                </div>
                <div class="form-group">
                  <label>Start Term:</label><span style="color:red;">*</span>
                  <input id="txt_sterm" required="" name="txt_sterm" class="form-control input-sm" type="date" placeholder="Start Term" />
                </div>
                <div class="form-group">
                  <label>End Term:</label> <span style="color:red;">*</span>
                  <input name="txt_eterm" required="" class="form-control input-sm" type="date" placeholder="End Term" />
                </div>

                <div class="form-group">
                  <label class="control-label">Image:</label>
                  <input name="txt_image" class="form-control input-sm" type="file" id="fileSingle" name="fileSingle" />


                </div>



                <div class="row">
                  <span id="outputSingle"></span>
                </div>

                <br><br>



              </div>

            </div>
          </div>

        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel" />
          <input type="submit" class="btn btn-primary btn-sm" name="btn_add" id="btn_add" value="Add officials" />
        </div>
      </div>
    </div>
  </form>
</div>


<script type="text/javascript">
  $(document).ready(function() {

    var timeOut = null; // this used for hold few seconds to made ajax request

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
      $('#user_msg').html(loading_html); // adding the loading text or image
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
</script>
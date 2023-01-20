<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Staff Info</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>Position: </label>
                    <input class="form-control input-sm" type="text" value="'.$row['sPosition'].'" readonly/>
                </div>
                <div class="form-group">
                    <label>First Name: <span style="color:gray; font-size: 10px;">(First Name)</span></label>
                    <input name="txt_edit_fname" class="form-control input-sm" type="text" value="'.ucfirst($row['fname']).'"/>
                </div>
                <div class="form-group">
                    <label>Middle Name: <span style="color:gray; font-size: 10px;">(Middle Name)</span></label>
                    <input name="txt_edit_mname" class="form-control input-sm" type="text" value="'.ucfirst($row['mname']).'"/>
                </div>
                    <div class="form-group">
                    <label>Last Name: <span style="color:gray; font-size: 10px;">(Last name)</span></label>
                    <input name="txt_edit_lname" class="form-control input-sm" type="text" value="'.ucfirst($row['lname']).'"/>
                </div>

                <div class="form-group">
                    <label>Username: </label>
                    <input name="txt_edit_uname" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input name="txt_edit_pass" class="form-control input-sm" type="password" value="'.$row['password'].'" />
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>
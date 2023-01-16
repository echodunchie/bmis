<?php echo '<div id="editModal'.$row['pid'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Indigency</h4>
        </div>

        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['pid'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                   
                <div class="form-group">
                    <label>Purpose : </label>
                    <input name="txt_edit_purpose" class="form-control input-sm" type="text" value="'.$row['purpose'].'" />
                </div>
                <div class="form-group mb-4">
                        <label class="control-label">Claim Status:</label>
                        <label class="checkbox-inline" style="padding-bottom: 10px;"><input name="txt_edit_claim" type="checkbox" checked>Yes</label>
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
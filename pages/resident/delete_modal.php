<?php echo 
'<div id="deleteModal' . $row['id'] . '" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Delete Barangay Staff</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="' . $row['id'] . '" name="hidden_id" id="hidden_id"/>
                Remove ' . $row['fname'] . " " . $row['lname'] . '?
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_delete" value="Delete"/>
        </div>
    </div>
  </div>
</form>
</div>';
?>
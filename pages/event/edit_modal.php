
<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:400px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit here</h4>
        </div>
        
    
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>Date </label>
                    <input name="txt_edit_tdate" class="form-control input-sm" type="text" value="'.$row['tdate'].'" />
                </div>
                <div class="form-group">
                    <label>Title: </label>
                    <input name="txt_edit_title" class="form-control input-sm" type="text" value="'.$row['title'].'" />
                </div>
                <div class="form-group">
                <label>Category:</label>
                    <input name="txt_edit_category" class="form-control input-sm" type="text" value="'.$row['category'].'" />
                </div>
                <div class="form-group">
                <label>Description: </label>
                    <textarea name="txt_edit_descrip" class="form-control input-sm">'.$row['descrip'].'</textarea>
                </div>
                <div class="form-group">
                <label>URL:</label>
                    <input name="txt_edit_url" class="form-control input-sm" type="text" value="'.$row['url'].'" />
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
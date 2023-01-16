
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
                    <label>COVID: </label>
                    <input name="txt_edit_phonea" class="form-control input-sm" type="text" value="'.$row['phonea'].'" />
                </div>
                <div class="form-group">
                    <label>MESU: </label>
                    <input name="txt_edit_phoneb" class="form-control input-sm" type="text" value="'.$row['phoneb'].'" />
                </div>
                <div class="form-group">
                <label>PSO: </label>
                    <input name="txt_edit_phonec" class="form-control input-sm" type="text" value="'.$row['phonec'].'" />
                </div>
                <div class="form-group">
                <label>BERT: </label>
                    <input name="txt_edit_phoned" class="form-control input-sm" type="text" value="'.$row['phoned'].'" />
                </div>
                <div class="form-group">
                <label>MDRRMO: </label>
                    <input name="txt_edit_phonee" class="form-control input-sm" type="text" value="'.$row['phonee'].'" />
                </div>
                <div class="form-group">
                <label>PNP: </label>
                    <input name="txt_edit_phonef" class="form-control input-sm" type="text" value="'.$row['phonef'].'" />
                </div>
                <div class="form-group">
                <label>FIRE STATION: </label>
                    <input name="txt_edit_phoneg" class="form-control input-sm" type="text" value="'.$row['phoneg'].'" />
                </div>
                <div class="form-group">
                <label>BARANGAY: </label>
                    <input name="txt_edit_phoneh" class="form-control input-sm" type="text" value="'.$row['phoneh'].'" />
                </div>
                <div class="form-group">
                    <label>Email: </label>
                    <input name="txt_edit_email" class="form-control input-sm" type="text" value="'.$row['email'].'" />
                </div>
                <div class="form-group">
                   <label>Objective : </label>
                    <textarea name="txt_edit_objective" class="form-control input-sm">'.$row['objective'].'</textarea>
                </div>
                <div class="form-group">
                   <label>Mission : </label>
                    <textarea name="txt_edit_mission" class="form-control input-sm">'.$row['mission'].'</textarea>
                </div>
                <div class="form-group">
                   <label>Vision : </label>
                    <textarea name="txt_edit_vision" class="form-control input-sm">'.$row['vision'].'</textarea>
                </div>
                <div class="form-group">
                   <label>Goals : </label>
                    <textarea name="txt_edit_goal" class="form-control input-sm">'.$row['goal'].'</textarea>
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
<?php echo '<div id="viewModal'.$row['id'].'" class="modal fade">
<form method="post"  enctype="multipart/form-data">
  <div class="modal-dialog">
    <div class="modal-content">
        
        <div class="modal-footer">
            <input type="submit" class="btn btn-danger btn-sm" name="btn_remove" value="Remove Selected"/>
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Close"/>
        </div>
    </div>
  </div>
</form>
</div>';?>
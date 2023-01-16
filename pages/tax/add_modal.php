<!-- ========================= MODAL ======================= -->
            <div id="addModal" class="modal fade">
            <form method="post" enctype="multipart/form-data">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Tax Ordinance</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Purposes:</label> <span style="color:red;">*</span>
                                    <input name="txt_Purposes" required="" class="form-control input-sm" type="text" placeholder="Purposes"/>
                                </div>
                                <div class="form-group"> <span style="color:red;">*</span>
                                    <label>fees:</label>
                                    <input name="txt_fees" required="" class="form-control input-sm" type="text" placeholder="fees"/>
                                </div>
                               
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_add" value="Add Tax Ordinance"/>
                    </div>
                </div>
              </div>
              </form>
            </div>
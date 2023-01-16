<!-- ========================= MODAL ======================= -->
            <div id="reqModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Residency</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                   
                                    <div class="form-group">
                                    <label>Status of Residency:</label> <span style="color:red;">*</span>
                                    <input name="txt_sor" required="" class="form-control input-sm" type="text" placeholder=""/>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_req" value="Request Residency"/>
                    </div>
                </div>
              </div>
              </form>
            </div>
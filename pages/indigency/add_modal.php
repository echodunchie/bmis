<!-- ========================= MODAL ======================= -->
            <div id="addModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Indigency</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="form-group">
                                    <label>Resident:</label>
                                   <select name="ddl_resident" class="select2 form-control input-sm" style="width:100%;">
                                        <option selected="" disabled="">-- Select Resident -- </option>
                                        <?php
                                            $squery = mysqli_query($con,"SELECT id,lname,fname,mname from tblresident");
                                            while ($row = mysqli_fetch_array($squery)){
                                                echo '
                                                    <option value="'.$row['id'].'">'.ucfirst($row['lname']).', '.ucfirst($row['fname']).' '.ucfirst($row['mname']).'</option>    
                                                ';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Purpose:</label> <span style="color:red;">*</span>
                                    <input name="txt_purpose" required="" class="form-control input-sm" type="text" placeholder="Purpose"/>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_add" value="Add Indigency"/>
                    </div>
                </div>
              </div>
              </form>
            </div>
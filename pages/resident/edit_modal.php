<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">
 <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="modal-dialog modal-sm" style="width:1000px !important;">
             
                <div class="modal-content">
                    <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Resident Information</h4>
        </div>
        <div class="modal-body">';

        $edit_query = mysqli_query($con,"SELECT * from tblresident where id = '".$row['id']."' ");
        $erow = mysqli_fetch_array($edit_query);

        if($erow['differentlyabledperson'] == 'on') {
            echo '
             <div class="row">
                            <div class="container-fluid">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                    <input type="hidden" value="'.$erow['id'].'" name="hidden_id" id="hidden_id"/>
                            <label class="control-label">Name:</label><br>
                                        <label class="control-label" >Name: </label> <span style="color:red;">*</span> <br>
                                       
                                        <div class="col-sm-4">
                                            <input name="txt_edit_lname" class="form-control input-sm" type="text"  value="'.$erow['lname'].'"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="txt_edit_fname" class="form-control input-sm col-sm-4" type="text" value="'.$erow['fname'].'"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="txt_edit_mname" class="form-control input-sm col-sm-4" type="text" value="'.$erow['mname'].'"/>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <label class="control-label" >Sitio / Zone / Household #: </label> <span style="color:red;">*</span> <br>
                                       
                                        <div class="col-sm-4">
                                             <select name="txt_edit_brgy" required="" class="form-control input-sm input-size">
                                            <option>Bongsuran</option>
                                            <option>Minuro</option>
                                            <option>Centro</option>
                                            <option>Crossing</option>
                                            <option>Cagmanok</option>
                                            <option>Caunda</option>
                                            <option>Tawagan</option>
                                            <option>Pito, River Side, Rauqitan</option>
                                            <option>Ilawod</option>
                                        </select>
                                    </div>

                                        <div class="col-sm-4">
                                             <select name="txt_edit_zone" required="" class="form-control input-sm input-size"
                                          placeholder="Zone #">
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           <option>6</option>
                                           <option>7</option>
                                           <option>8</option>
                                           <option>9</option></select>
                                    </div>
                                        <div class="col-sm-4">
                                            <input name="txt_edit_householdnum" required="" class="form-control input-sm input-size" type="number" min="1" value="'.$erow['householdnum'].'"/>
                                    </div>
                                    </div>
                        <div class="form-group">
                            <label class="control-label" >Contact Info: </label> <span style="color:red;">*</span> <br>
                            <div class="col-sm-6">
                                <input name="txt_edit_email" required="" class="form-control input-sm" type="email"  placeholder="Email" value="'.$erow['email'].'"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="txt_edit_mobile" required="" class="form-control input-sm col-sm-4" type="number" placeholder="Mobile Number" value="'.$erow['mobile_number'].'"/>
                            </div>
                        </div>
                           <div class="form-group">
                                        <label class="control-label" >Birthdate:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birthplace:</label> <span style="color:red;">*</span> <br>
                                        <div class="col-sm-6">
                                            <input name="txt_edit_bdate" required="" class="form-control input-sm" type="date"  alue="'.$erow['bdate'].'"/> 
                                        </div>
                                        <div class="col-sm-6">
                                            <input name="txt_bplace" required="" class="form-control input-sm col-sm-4" type="text" placeholder="Birthplace"/>
                                        </div>
                                    </div>
                        


                        <div class="form-group">
                                        <label class="control-label">(Sitio/Zone/Household #)</label> <span style="color:red;">*</span> <br>
                                        <div class="col-sm-4">
                                        <select name="txt_brgy" required="" class="form-control input-sm input-size">
                                            <option>Bongsuran</option>
                                            <option>Minuro</option>
                                            <option>Centro</option>
                                            <option>Crossing</option>
                                            <option>Cagmanok</option>
                                            <option>Caunda</option>
                                            <option>Tawagan</option>
                                            <option>Pito, River Side, Rauqitan</option>
                                            <option>Ilawod</option>
                                        </select>
                                    </div>
                                   <div class="col-sm-4">
                                     <select name="txt_zone" required="" class="form-control input-sm input-size"
                                          placeholder="Zone #">
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           <option>6</option>
                                           <option>7</option>
                                           <option>8</option>
                                           <option>9</option></select>
                                    </div>

                                    

                                   <div class="col-sm-4">
                                        <input name="txt_householdnum" required="" class="form-control input-sm input-size" type="number" min="1" placeholder="Household #"/>
                                    </div>
                                    </div>

                        <div class="form-group">
                            <label class="control-label">Household #:</label>
                            <input name="txt_edit_householdnum" class="form-control input-sm" type="number" min="1" value="'.$erow['householdnum'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Differently-abled Person:</label>
                            <label class="checkbox-inline"><input type="checkbox" name="txt_edit_dperson" checked>Differently-abled Person</label>
                        </div>

                       

                        <div class="form-group">
                            <label class="control-label">Civil Status:</label>
                                        <select name="txt_edit_cstatus" class="form-control input-sm input-size"><option>Married</option><option>single</option><option>divorced</option><option>widowed</option> </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Since when(Residency): (in Months)</label>
                            <input name="txt_edit_length" class="form-control input-sm" type="number" min="1" value="'.$erow['lengthofstay'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nationality:</label>
                            <input name="txt_edit_national" class="form-control input-sm" type="text" value="'.$erow['nationality'].'"/>
                        </div>

                     

                        <div class="form-group">
                            <label class="control-label">Educational Attainment:</label>
                            <select name="ddl_edit_eattain" class="form-control input-sm">
                                <option selected>'.$erow['highestEducationalAttainment'].'</option>
                                <option>No schooling completed</option>
                                <option>Elementary</option>
                                <option>High school, undergrad</option>
                                <option>High school graduate</option>
                                <option>College, undergrad</option>
                                <option>Vocational</option>
                                <option>Bachelor’s degree</option>
                                <option>Master’s degree</option>
                                <option>Doctorate degree</option>
                            </select>
                        </div>

                       

                        <div class="form-group">
                            <label class="control-label">Account Credentials:</label><br>
                            <div class="col-sm-6 mt-2">
                                <input name="txt_edit_uname" class="form-control input-sm" type="text" value="'.$erow['username'].'" placeholder="Username"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="txt_edit_upass" class="form-control input-sm" type="password" value="'.$erow['password'].'" placeholder="Password"/>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Gender:</label>
                            <select name="ddl_edit_gender" class="form-control input-sm">
                                <option value="'.$erow['gender'].'" selected="">'.$erow['gender'].'</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Birthplace:</label>
                            <input name="txt_edit_bplace" class="form-control input-sm" type="text" value="'.$erow['bplace'].'"/>
                        </div>

                       

                        <div class="form-group">
                            <label class="control-label">Total Household Member:</label>
                            <input name="txt_edit_householdmem" class="form-control input-sm" type="number" min="1" value="'.$erow['totalhousehold'].'"/>
                        </div>

                        <div class="form-group">

                                       <label class="control-label">Head of the family:</label><br>
                                      <input type="radio" name="txt_edit_rthead" value="'.$erow['relationtohead'].'">
                                      <label for="yes">Yes</label>
                                      <input type="radio" name="txt_edit_rthead" value="'.$erow['relationtohead'].'">
                                      <label for="no">No</label><br>
                                    </div>
                            

                        <div class="form-group">
                            <label class="control-label">Occupation:</label>
                            <input name="txt_edit_occp" required=""class="form-control input-sm" type="text" placeholder="Occupation">
                        </div>
                         <div class="form-group">
                                        <label class="control-label">Economic Status:</label>  <span style="color:red;">*</span> <br>
                                        <select name="txt_edit_es" required=""class="form-control input-sm">
                                            <option selected="" disabled="">-Economic Stat-</option>
                                            <option>Employed</option>
                                            <option>Unemployed</option>
                                            <option>Retired</option>
                                            <option>Student</option>
                                           
                                        </select>
                        <div class="form-group">
                            <label class="control-label">Monthly Income:</label>
                            <input name="txt_edit_income" class="form-control input-sm" type="number" min="1" value="'.$erow['monthlyincome'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Religion:</label>
                            <input name="txt_edit_religion" class="form-control input-sm" type="text" value="'.$erow['religion'].'"/>
                        </div>

                       
                        <div class="form-group">
                            <label class="control-label">Image:</label>
                            <input name="txt_edit_image" class="form-control input-sm" type="file" />
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
</div>';
        } else {
            echo '
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">

                        <input type="hidden" value="'.$erow['id'].'" name="hidden_id" id="hidden_id"/>
                            <label class="control-label">Name:</label><br>
                            <div class="col-sm-4">
                                <input name="txt_edit_lname" class="form-control input-sm" type="text" value="'.$erow['lname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_fname" class="form-control input-sm" type="text" value="'.$erow['fname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_mname" class="form-control input-sm" type="text" value="'.$erow['mname'].'"/>
                            </div> <br><br>
                        </div>
                         <div class="form-group">
                                        <label class="control-label" >Sitio / Zone / Household #: </label> <span style="color:red;">*</span> <br>
                                       
                                        <div class="col-sm-4">
                                             <select name="txt_edit_brgy" required="" class="form-control input-sm col-sm-4">
                                            <option>Bongsuran</option>
                                            <option>Minuro</option>
                                            <option>Centro</option>
                                            <option>Crossing</option>
                                            <option>Cagmanok</option>
                                            <option>Caunda</option>
                                            <option>Tawagan</option>
                                            <option>Pito, River Side, Rauqitan</option>
                                            <option>Ilawod</option>
                                        </select>
                                    </div>

                                        <div class="col-sm-4">
                                             <select name="txt_edit_zone" required="" class="form-control input-sm col-sm-4"
                                          placeholder="Zone #">
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           <option>6</option>
                                           <option>7</option>
                                           <option>8</option>
                                           <option>9</option></select>
                                    </div>
                                        <div class="col-sm-4">
                                            <input name="txt_edit_householdnum" required="" class="form-control input-sm col-sm-4" type="number" min="1" value="'.$erow['householdnum'].'"/>
                                    </div>
                                    </div><br><br>
                        <div class="form-group">
                            <label class="control-label" >Contact Info: </label> <span style="color:red;">*</span> <br>
                            <div class="col-sm-6">
                                <input name="txt_edit_email" required="" class="form-control input-sm" type="email"  placeholder="Email" value="'.$erow['email'].'"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="txt_edit_mobile" required="" class="form-control input-sm col-sm-4" type="number" placeholder="Mobile Number" value="'.$erow['mobile_number'].'"/>
                            </div>
                        </div><br><br>
                           <div class="form-group">
                                        <label class="control-label" >Birthdate:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birthplace:</label> <span style="color:red;">*</span> <br>
                                        <div class="col-sm-6">
                                            <input name="txt_edit_bdate" required="" class="form-control input-sm" type="date"  value="'.$erow['bdate'].'"/> 
                                        </div>
                                        <div class="col-sm-6">
                                            <input name="txt_edit_bplace" required="" class="form-control input-sm col-sm-4" type="text" placeholder="Birthplace" value="'.$erow['bplace'].'"/> 
                                        </div>
                                    </div><br><br>
                        <div class="form-group">
                            <label class="control-label" >Since when(Residency):(in Months)&nbsp;&nbsp;&nbsp;&nbsp;Civil Status:  </label> <span style="color:red;">*</span> <br>
                             <div class="col-sm-6">
                                            <input name="txt_edit_length" required="" class="form-control input-sm" type="number" min="0" placeholder="Since when" value="'.$erow['lengthofstay'].'"/> 
                                        </div>
                                        <div class="col-sm-6">
                                            <select name="txt_edit_cstatus" required="" class="form-control input-sm col-sm-4" value="'.$erow['civilstatus'].'"/> 
                                            <option>Married</option><option>single</option><option>divorced</option><option>widowed</option> </select>
                                        </div>
                                    </div><br><br>
                                   <div class="form-group">
                                        <label class="control-label" >Religion: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Educational Attainment:</label> <span style="color:red;">*</span> <br>
                                        <div class="col-sm-6">
                                            <input name="txt_edit_religion" class="form-control input-sm" type="text"  placeholder="Religion"value="'.$erow['religion'].'"/> 
                                        </div>
                                        <div class="col-sm-6">
                                            <select name="ddl_edit_eattain" required="" class="form-control input-sm col-sm-4" value="'.$erow['highestEducationalAttainment'].'"/> >
                                            <option>No schooling completed</option>
                                            <option>Elementary</option>
                                            <option>High school, undergrad</option>
                                            <option>High school graduate</option>
                                            <option>College, undergrad</option>
                                            <option>Vocational</option>
                                            <option>Bachelor’s degree</option>
                                            <option>Master’s degree</option>
                                            <option>Doctorate degree</option>
                                        </select>
                                        </div>
                                    </div><br><br>
                       

                        <div class="form-group">
                            <label class="control-label">Account Credentials:</label><br>
                            <div class="col-sm-6 mt-2">
                                <input name="txt_edit_uname" class="form-control input-sm" type="text" value="'.$erow['username'].'" placeholder="Username"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="txt_edit_upass" class="form-control input-sm" type="password" value="'.$erow['password'].'" placeholder="Password"/>
                            </div>
                        </div>

                    </div>


                  <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label" >Nationality: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender: </label> <span style="color:red;">*</span> <br>
                                        <div class="col-sm-6">
                                            <input name="txt_edit_national" required="" class="form-control input-sm" type="text" placeholder="Nationality" value="'.$erow['nationality'].'"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <select name="ddl_edit_gender" required="" class="form-control input-sm col-sm-4" value="'.$erow['gender'].'"/>
                                            <option value="Male">M</option>
                                            <option value="Female">F</option></select>
                                        </div>
                                    </div><br><br>
                                     
                                   <div class="form-group">
                                        <label class="control-label" >Occupation: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Economic Status:</label> <span style="color:red;">*</span> <br>
                                        <div class="col-sm-6">
                                            <input name="txt_occp" required="" class="form-control input-sm" type="text" placeholder="Occupation" value="'.$erow['occupation'].'"/>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <select name="ddl_edit_gender" required="" class="form-control input-sm col-sm-4" value="'.$erow['es'].'"/>
                                            <option selected="" disabled="">-Economic Stat-</option>
                                            <option>Employed</option>
                                            <option>Unemployed</option>
                                            <option>Retired</option>
                                            <option>Student</option></select>
                                        </div>
                                    </div><br><br>
                                    <div class="form-group">
                                        <label class="control-label" >Head of the family:</label> <span style="color:red;">*</span> <br>
                                        
                                         
                                        <div class="col-sm-6">
                                        <input type="radio" name="txt_edit_rthead"  name="txt_rthead" >
                                            <label for="yes">Yes</label>
                                            <input type="radio" name="txt_edit_rthead"  name="txt_rthead" >
                                            <label for="no">No</label>
                                        </div>
                                    </div><br><br>
                                   
                                    <div class="form-group">
                                        <label class="control-label">Nutritional health Status:</label>  <span style="color:red;">*</span> <br>
                                        <select name="txt_edit_dperson" required=""class="form-control input-sm" value="'.$erow['differentlyabledperson'].'"/>
                                            <option selected="" disabled="">-Health Status-</option>
                                            <option>Normal</option>
                                            <option>Overweight</option>
                                            <option>Severly Underweight</option>
                                            <option>Breast-Feeding Mother</option>
                                            <option>PWD/Differently Abled Person</option>
                                            <option>Underweight</option>
                                            <option>Pregnant</option>
                                        </select>
                                    </div><br>
                                    <div class="form-group">
                                        <label class="control-label">Monthly Income:</label>  <span style="color:red;">*</span> <br>
                                        <input name="txt_edit_income" required="" class="form-control input-sm" type="number" min="1" placeholder="Monthly Income" value="'.$erow['monthlyincome'].'"/>
                                    </div><br>
                                    <div class="form-group">
                                        <label class="control-label">Image:</label>
                                        <input name="txt_edit_image" class="form-control input-sm" type="file" type="file" id="fileSingle" name="fileSingle" value="'.$erow['image'].'"/>
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
</div>';
        }
?>

<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">

<form class="form-horizontal" method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Resident Information</h4>
        </div>
        <div class="modal-body">';

        $edit_query = mysqli_query($con,"SELECT * from tblresident where id = '".$row['id']."' ");
        $erow = mysqli_fetch_array($edit_query);

        if($erow['differentlyabledperson'] == 'on') {
            echo '
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <input type="hidden" value="'.$erow['id'].'" name="hidden_id" id="hidden_id"/>
                            <label class="control-label">Name:</label><br>
                            <div class="col-sm-4">
                                <input name="txt_edit_lname" class="form-control input-sm" type="text" value="'.$erow['lname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_fname" class="form-control input-sm" type="text" value="'.$erow['fname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_mname" class="form-control input-sm" type="text" value="'.$erow['mname'].'"/>
                            </div> <br>
                        </div>

                        <div class="form-group">
                            <label class="control-label" >Contact Info: </label> <span style="color:red;">*</span> <br>
                            <div class="col-sm-6">
                                <input name="txt_edit_email" required="" class="form-control input-sm" type="email"  placeholder="Email" value="'.$erow['email'].'"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="txt_edit_mobile" required="" class="form-control input-sm col-sm-4" type="number" placeholder="Mobile Number" value="'.$erow['mobile_number'].'"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" style="margin-top:10px;">Birthdate:</label>
                            <input name="txt_edit_bdate" class="form-control input-sm" type="date" value="'.$erow['bdate'].'"/> 
                        </div>


                        <div class="form-group">
                                        <label class="control-label">(Sitio/Zone/Household #)</label> <span style="color:red;">*</span> <br>
                                        <div class="col-sm-4">
                                        <select name="txt_brgy" required="" class="form-control input-sm input-size">
                                            <option>Bongsuran</option>
                                            <option>Minuro</option>
                                            <option>Centro</option>
                                            <option>Crossing</option>
                                            <option>Cagmanok</option>
                                            <option>Caunda</option>
                                            <option>Tawagan</option>
                                            <option>Pito, River Side, Rauqitan</option>
                                            <option>Ilawod</option>
                                        </select>
                                    </div>
                                   <div class="col-sm-4">
                                     <select name="txt_zone" required="" class="form-control input-sm input-size"
                                          placeholder="Zone #">
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           <option>6</option>
                                           <option>7</option>
                                           <option>8</option>
                                           <option>9</option></select>
                                    </div>

                                    

                                   <div class="col-sm-4">
                                        <input name="txt_householdnum" required="" class="form-control input-sm input-size" type="number" min="1" placeholder="Household #"/>
                                    </div>
                                    </div>

                        <div class="form-group">
                            <label class="control-label">Household #:</label>
                            <input name="txt_edit_householdnum" class="form-control input-sm" type="number" min="1" value="'.$erow['householdnum'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Differently-abled Person:</label>
                            <label class="checkbox-inline"><input type="checkbox" name="txt_edit_dperson" checked>Differently-abled Person</label>
                        </div>

                       

                        <div class="form-group">
                            <label class="control-label">Civil Status:</label>
                                        <select name="txt_edit_cstatus" class="form-control input-sm input-size"><option>Married</option><option>single</option><option>divorced</option><option>widowed</option> </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Since when(Residency): (in Months)</label>
                            <input name="txt_edit_length" class="form-control input-sm" type="number" min="1" value="'.$erow['lengthofstay'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nationality:</label>
                            <input name="txt_edit_national" class="form-control input-sm" type="text" value="'.$erow['nationality'].'"/>
                        </div>

                     

                        <div class="form-group">
                            <label class="control-label">Educational Attainment:</label>
                            <select name="ddl_edit_eattain" class="form-control input-sm">
                                <option selected>'.$erow['highestEducationalAttainment'].'</option>
                                <option>No schooling completed</option>
                                <option>Elementary</option>
                                <option>High school, undergrad</option>
                                <option>High school graduate</option>
                                <option>College, undergrad</option>
                                <option>Vocational</option>
                                <option>Bachelor’s degree</option>
                                <option>Master’s degree</option>
                                <option>Doctorate degree</option>
                            </select>
                        </div>

                       

                        <div class="form-group">
                            <label class="control-label">Account Credentials:</label><br>
                            <div class="col-sm-6 mt-2">
                                <input name="txt_edit_uname" class="form-control input-sm" type="text" value="'.$erow['username'].'" placeholder="Username"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="txt_edit_upass" class="form-control input-sm" type="password" value="'.$erow['password'].'" placeholder="Password"/>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Gender:</label>
                            <select name="ddl_edit_gender" class="form-control input-sm">
                                <option value="'.$erow['gender'].'" selected="">'.$erow['gender'].'</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Birthplace:</label>
                            <input name="txt_edit_bplace" class="form-control input-sm" type="text" value="'.$erow['bplace'].'"/>
                        </div>

                       

                        <div class="form-group">
                            <label class="control-label">Total Household Member:</label>
                            <input name="txt_edit_householdmem" class="form-control input-sm" type="number" min="1" value="'.$erow['totalhousehold'].'"/>
                        </div>

                        
                            

                        <div class="form-group">
                            <label class="control-label">Occupation:</label>
                            <input name="txt_edit_occp" required=""class="form-control input-sm" type="text" placeholder="Occupation">
                        </div>
                         <div class="form-group">
                                        <label class="control-label">Economic Status:</label>  <span style="color:red;">*</span> <br>
                                        <select name="txt_edit_es" required=""class="form-control input-sm">
                                            <option selected="" disabled="">-Economic Stat-</option>
                                            <option>Employed</option>
                                            <option>Unemployed</option>
                                            <option>Retired</option>
                                            <option>Student</option>
                                           
                                        </select>
                        <div class="form-group">
                            <label class="control-label">Monthly Income:</label>
                            <input name="txt_edit_income" class="form-control input-sm" type="number" min="1" value="'.$erow['monthlyincome'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Religion:</label>
                            <input name="txt_edit_religion" class="form-control input-sm" type="text" value="'.$erow['religion'].'"/>
                        </div>

                       
                        <div class="form-group">
                            <label class="control-label">Image:</label>
                            <input name="txt_edit_image" class="form-control input-sm" type="file" />
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
</div>';
        } else {
            echo '
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">

                        <input type="hidden" value="'.$erow['id'].'" name="hidden_id" id="hidden_id"/>
                            <label class="control-label">Name:</label><br>
                            <div class="col-sm-4">
                                <input name="txt_edit_lname" class="form-control input-sm" type="text" value="'.$erow['lname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_fname" class="form-control input-sm" type="text" value="'.$erow['fname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_mname" class="form-control input-sm" type="text" value="'.$erow['mname'].'"/>
                            </div> <br>
                        </div>

                        <div class="form-group">
                            <label class="control-label" >Contact Info: </label> <span style="color:red;">*</span> <br>
                            <div class="col-sm-6">
                                <input name="txt_edit_email" required="" class="form-control input-sm" type="email"  placeholder="Email" value="'.$erow['email'].'"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="txt_edit_mobile" required="" class="form-control input-sm col-sm-4" type="number" placeholder="Mobile Number" value="'.$erow['mobile_number'].'"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" style="margin-top:10px;">Birthdate:</label>
                            <input name="txt_edit_bdate" class="form-control input-sm" type="date" value="'.$erow['bdate'].'"/> 
                        </div>


                          <div class="form-group">
                                        <label class="control-label">(Sitio/Zone/Household #)</label> <span style="color:red;">*</span> <br>
                                        <div class="col-sm-4">
                                        <select name="txt_edit_brgy" required="" class="form-control input-sm input-size">
                                            <option>Bongsuran</option>
                                            <option>Minuro</option>
                                            <option>Centro</option>
                                            <option>Crossing</option>
                                            <option>Cagmanok</option>
                                            <option>Caunda</option>
                                            <option>Tawagan</option>
                                            <option>Pito, River Side, Rauqitan</option>
                                            <option>Ilawod</option>
                                        </select>
                                    </div>
                                   <div class="col-sm-3">
                                     <select name="txt_edit_zone" required="" class="form-control input-sm input-size"
                                          placeholder="Zone #">
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           <option>6</option>
                                           <option>7</option>
                                           <option>8</option>
                                           <option>9</option></select>
                                    </div>

                                    

                                   <div class="col-sm-3">
                                        <input name="txt_edit_householdnum" required="" class="form-control input-sm input-size" type="number" min="1" placeholder="Household #"/>
                                    </div>
                                    </div>
                        
                         <div class="form-group">
                                        <label class="control-label">Nutritional health Status:</label>  <span style="color:red;">*</span> <br>
                                        <select name="txt_edit_dperson" required=""class="form-control input-sm">
                                            <option selected="" disabled="">-Health Status-</option>
                                            <option>Normal</option>
                                            <option>Overweight</option>
                                            <option>Severly Underweight</option>
                                            <option>Breast-Feeding Mother</option>
                                            <option>PWD/Differently Abled Person</option>
                                            <option>Underweight</option>
                                            <option>Pregnant</option>
                                           
                                        </select>
                                    </div>

                        

                        <div class="form-group">
                            <label class="control-label">Civil Status:</label>
                                        <select name="txt_edit_cstatus" class="form-control input-sm input-size"><option>Married</option><option>single</option><option>divorced</option><option>widowed</option> </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Length of Stay: (in Months)</label>
                            <input name="txt_edit_length" class="form-control input-sm" type="number" min="1" value="'.$erow['lengthofstay'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nationality:</label>
                            <input name="txt_edit_national" class="form-control input-sm" type="text" value="'.$erow['nationality'].'"/>
                        </div>

                     

                        <div class="form-group">
                            <label class="control-label">Educational Attainment:</label>
                            <select name="ddl_edit_eattain" class="form-control input-sm">
                                <option selected>'.$erow['highestEducationalAttainment'].'</option>
                                <option>No schooling completed</option>
                                <option>Elementary</option>
                                <option>High school, undergrad</option>
                                <option>High school graduate</option>
                                <option>College, undergrad</option>
                                <option>Vocational</option>
                                <option>Bachelor’s degree</option>
                                <option>Master’s degree</option>
                                <option>Doctorate degree</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Account Credentials:</label><br>
                            <div class="col-sm-6 mt-2">
                                <input name="txt_edit_uname" class="form-control input-sm" type="text" value="'.$erow['username'].'" placeholder="Username"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="txt_edit_upass" class="form-control input-sm" type="password" value="'.$erow['password'].'" placeholder="Password"/>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Gender:</label>
                            <select name="ddl_edit_gender" class="form-control input-sm">
                                <option value="'.$erow['gender'].'" selected="">'.$erow['gender'].'</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Birthplace:</label>
                            <input name="txt_edit_bplace" class="form-control input-sm" type="text" value="'.$erow['bplace'].'"/>
                        </div>

                       

                        <div class="form-group">
                            <label class="control-label">Total Household Member:</label>
                            <input name="txt_edit_householdmem" class="form-control input-sm" type="number" min="1" value="'.$erow['totalhousehold'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Relationship to Head:</label>
                            <input name="txt_edit_rthead" class="form-control input-sm" type="text" value="'.$erow['relationtohead'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Occupation:</label>
                            <select name="txt_edit_occp" class="form-control input-sm">
                                <option>Agriculture, Food, and Natural Resources</option>
                                <option>Architecture and Construction</option>
                                <option>Arts, Audio/Video Technology, and Communication</option>
                                <option>Business and Finance</option>
                                <option>Education and Training</option>
                                <option>Government and Public Administration.
                                            Health Science</option>
                                <option>Information Technology</option>
                                <option >Student</option>
                                <option >None</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Monthly Income:</label>
                            <input name="txt_edit_income" class="form-control input-sm" type="number" min="1" value="'.$erow['monthlyincome'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Religion:</label>
                            <input name="txt_edit_religion" class="form-control input-sm" type="text" value="'.$erow['religion'].'"/>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Image:</label>
                            <input name="txt_edit_image" class="form-control input-sm" type="file" />
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
</div>';
        }
?>

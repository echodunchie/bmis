
                <section class="content">

                    <?php
                    if($_SESSION['role'] == "Administrator" || isset($_SESSION['staff']))
                    {
                    ?>

                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">
                                        
                                        <!-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Residency</button>  
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>  -->
                                        
                                    </div>                                
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                <ul class="nav nav-tabs" id="myTab">
                                      <li class="active"><a data-target="#approved" data-toggle="tab">Approved</a></li>
                                      <li><a data-target="#disapproved" data-toggle="tab">Disapproved</a></li>
                                </ul>

                                

                                <form method="post">
                                    <div class="tab-content">
                                    <div id="approved" class="tab-pane active in">
                                        <table id="table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <?php // if(!isset($_SESSION['staff'])) {  ?>
                                                    <!-- <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th> -->
                                                    <?php // } ?>
                                                    <th>Residency #</th>
                                                    <th>Resident Name</th>
                                                   
                                                    <th>Purpose</th>
                                                    <th>Year</th>
                                                    <th>Amount</th>
                                                    <!-- <th style="width: 15% !important;">Option</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                if(!isset($_SESSION['staff']))
                                                {
                                                    $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblresidency p left join tblresident r on r.id = p.residentid  where status = 'Approved' AND `statusArchive`=1") or die('Error: ' . mysqli_error($con));
                                                    while($row = mysqli_fetch_array($squery))
                                                    {
                                                        echo '
                                                        <tr>
                                                            <td class="hidden"><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['pid'].'" /></td>
                                                            <td>'.$row['residencyNo'].'</td>
                                                            <td>'.$row['residentname'].'</td>
                                                        
                                                            <td>'.$row['purpose'].'</td>
                                                            <td>'.$row['year'].'</td>
                                                            <td>??? '.number_format($row['samount'],2).'</td>
                                                            <td class="hidden"><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                            <a target="_blank" href="residency_form.php?resident='.$row['residentid'].'&residency ='.$row['residencyNo'].'&val='.base64_encode($row['residencyNo'].'|'.$row['residentname'].'|'.$row['dateRecorded']).' class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Generate</a></td>
                                                        </tr>
                                                        ';

                                                        // include "edit_modal.php";
                                                    }
                                                }
                                                else{
                                                    $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblresidency p left join tblresident r on r.id = p.residentid  where status = 'Approved'AND `statusArchive`=1 ")or die('Error: ' . mysqli_error($con));
                                                    while($row = mysqli_fetch_array($squery))
                                                    {
                                                        echo '
                                                        <tr>
                                                            <td>'.$row['residencyNo'].'</td>
                                                            <td>'.$row['residentname'].'</td>
                                                            
                                                            <td>'.$row['purpose'].'</td>
                                                            <td>'.$row['year'].'</td>
                                                            <td>??? '.number_format($row['samount'],2).'</td>
                                                            <td class="hidden"><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                            <a target="_blank" href="residency_form.php?resident='.$row['residentid'].'&residency='.$row['residencyNo'].'&val='.sha1($row['residencyNo'].'|'.$row['residentname'].'|'.$row['dateRecorded']).'" onclick="location.reload();" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Generate</a></td>
                                                        </tr>
                                                        ';

                                                        // include "edit_modal.php";
                                                    }
                                                }
                                                ?>
                                                 <form method="post">                                        
                                        <table id="table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <!-- <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th> -->
                                                    <th>Resident Name</th>
                                                    <th>Purpose</th>
                                                    <!-- <th style="width: 25% !important;">Option</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblresidency p left join tblresident r on r.id = p.residentid  where status = 'New' AND `statusArchive`=1 ") or die('Error: ' . mysqli_error($con));
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td class="hidden"><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['pid'].'" /></td>
                                                        <td>'.$row['residentname'].'</td>
                                                        <td>'.$row['purpose'].'</td>
                                                        <td class="hidden">
                                                            <button class="btn btn-success btn-sm" data-target="#approveModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Approve</button>
                                                            <button class="btn btn-danger btn-sm" data-target="#disapproveModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Disapprove</button>
                                                        </td>
                                                    </tr>
                                                    ';
                                                    // include "approve_modal.php";
                                                    // include "disapprove_modal.php";
                                                }
                                                ?>
                                            </tbody>
                                        </table>


                                    </form>
                                            </tbody>
                                        </table>

                                        </div>

                                        <div id="disapproved" class="tab-pane">
                                        <table id="table1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <?php // if(!isset($_SESSION['staff'])){ ?>
                                                    <!-- <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th> -->
                                                    <?php // } ?>
                                                    <th>Resident Name</th>
                                                    <th>Purpose</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(!isset($_SESSION['staff']))
                                                {

                                                    $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblresidency p left join tblresident r on r.id = p.residentid where status = 'Disapproved' AND `statusArchive`=1") or die('Error: ' . mysqli_error($con));
                                                    while($row = mysqli_fetch_array($squery))
                                                    {
                                                        echo '
                                                        <tr>
                                                            <td class="hidden"><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['pid'].'" /></td>
                                                            <td>'.$row['residentname'].'</td>
                                                            
                                                            <td>'.$row['purpose'].'</td>
                                                        </tr>
                                                        ';

                                                        // include "edit_modal.php";
                                                    }
                                                }
                                                else{
                                                    $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblresidency  p left join tblresident r on r.id = p.residentid where status = 'Disapproved' AND `statusArchive`=1") or die('Error: ' . mysqli_error($con));
                                                    while($row = mysqli_fetch_array($squery))
                                                    {
                                                        echo '
                                                        <tr>
                                                            <td>'.$row['residentname'].'</td>
                                                          
                                                            <td>'.$row['purpose'].'</td>
                                                        </tr>
                                                        ';

                                                        // include "edit_modal.php";
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                        </div>


                                        </div>
                                    <?php // include "../deleteModal.php"; ?>

                                    </form>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <?php // include "../edit_notif.php"; ?>

                            <?php // include "../added_notif.php"; ?>

                            <?php // include "../delete_notif.php"; ?>

                            <?php // include "../duplicate_error.php"; ?>

            <?php // include "add_modal.php"; ?>

            <?php // include "function.php"; ?>


                    </div>   <!-- /.row -->
                    <?php
                    }
                    elseif($_SESSION['role'] == "Zone Leader")
                    {
                    ?>
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                
                                <div class="box-body table-responsive">
                                
                                <form method="post">                                        
                                        <table id="table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <!-- <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th> -->
                                                    <th>Resident Name</th>
                                                    <th>Purpose</th>
                                                    <!-- <th style="width: 25% !important;">Option</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblresidency p left join tblresident r on r.id = p.residentid  where status = 'New' AND `statusArchive`=1") or die('Error: ' . mysqli_error($con));
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td class="hidden"><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['pid'].'" /></td>
                                                        <td>'.$row['residentname'].'</td>
                                                        <td>'.$row['purpose'].'</td>
                                                        <td class="hidden">
                                                            <button class="btn btn-success btn-sm" data-target="#approveModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Approve</button>
                                                            <button class="btn btn-danger btn-sm" data-target="#disapproveModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-thumbs-down" aria-hidden="true"></i> Disapprove</button>
                                                        </td>
                                                    </tr>
                                                    ';
                                                    // include "approve_modal.php";
                                                    // include "disapprove_modal.php";
                                                }
                                                ?>
                                            </tbody>
                                        </table>


                                    </form>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                    <?php include "function.php"; ?>


                    </div>   <!-- /.row -->

                    <?php
                    }
                    else
                    {
                    ?>

                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                    <div class="box-header">
                                    <div style="padding:10px;">
                                        
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#reqModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Request Residency</button>  

                                    </div>                                
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                <ul class="nav nav-tabs" id="myTab">
                                      <li class="active"><a data-target="#new" data-toggle="tab">New</a></li>
                                      <li><a data-target="#approved" data-toggle="tab">Approved</a></li>
                                      <li><a data-target="#disapproved" data-toggle="tab">Disapproved</a></li>
                                </ul>
                                <form method="post">
                                 <div class="tab-content">
                                    <div id="new" class="tab-pane active in">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Purpose</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "SELECT * FROM tblresidency p left join tblresident r on r.id = p.residentid where r.id = ".$_SESSION['userid']." AND status = 'New' AND `statusArchive`=1") or die('Error: ' . mysqli_error($con));
                                            if(mysqli_num_rows($squery) > 0)
                                            {
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['purpose'].'</td>
                                                        
                                                    </tr>
                                                    ';

                                                }
                                            }
                                            else{
                                                echo '
                                                <tr>
                                                <td colspan="5" style="text-align: center;">No record found</td>
                                                </tr>
                                                ';
                                            }

                                                    
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                    </div>

                                    <div id="approved" class="tab-pane ">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Residency #</th>
                                                
                                                <th>Purpose</th>
                                             
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "SELECT * FROM tblresidency p left join tblresident r on r.id = p.residentid where r.id = ".$_SESSION['userid']." AND status = 'Approved' AND `statusArchive`=1") or die('Error: ' . mysqli_error($con));
                                            if(mysqli_num_rows($squery) > 0)
                                            {
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['residencyNo'].'</td>
                                                   
                                                        <td>'.$row['purpose'].'</td>
                                                       
                                                        <td>??? '.number_format($row['samount'],2).'</td>
                                                    </tr>
                                                    ';

                                                }
                                            }
                                            else{
                                                echo '
                                                <tr>
                                                <td colspan="5" style="text-align: center;">No record found</td>
                                                </tr>
                                                ';
                                            }

                                                    
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                    </div>

                                    <div id="disapproved" class="tab-pane">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                
                                                <th>Purpose</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "SELECT * FROM tblresidency p left join tblresident r on r.id = p.residentid where r.id = ".$_SESSION['userid']." AND status = 'Disapproved' AND `statusArchive`=1") or die('Error: ' . mysqli_error($con));
                                            if(mysqli_num_rows($squery) > 0)
                                            {
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                       
                                                        <td>'.$row['purpose'].'</td>
                                                    </tr>
                                                    ';

                                                }
                                            }
                                            else{
                                                echo '
                                                <tr>
                                                <td colspan="5" style="text-align: center;">No record found</td>
                                                </tr>
                                                ';
                                            }

                                                    
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                    </div>

                                    </div>

                                    </form>
                                    <?php
                                    include "../duplicate_error.php";
                                    
                                    include "req_modal.php";
                                     include "function.php";
                                      ?>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                    </div>   <!-- /.row -->

                    <?php
                    }
                    ?>
                </section><!-- /.content -->
<script type="text/javascript">

    <?php 
    if(!isset($_SESSION['staff']))
    {
    ?>
        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,7 ] } ],"aaSorting": []
            });
            $("#table1").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,3 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php
    }
    else{
    ?>
        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 6 ] } ],"aaSorting": []
            });
            $("#table1").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 2 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php
    }
    ?>
</script>

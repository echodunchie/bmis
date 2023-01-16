<section class="content">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <div style="padding:10px;">
                    <button class="btn btn-primary btn-sm hidden" data-toggle="modal" data-target="#addModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Activity</button>  
                    <?php if(!isset($_SESSION['staff'])) { ?>
                        <button class="btn btn-danger btn-sm hidden" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    <?php } ?>
                </div>                                
            </div>
            <div class="box-body table-responsive">
            <form method="post">
                <table id="table_activity" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <?php // if(!isset($_SESSION['staff'])) { ?>
                            <!-- <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th> -->
                            <?php // } ?>
                            <th>Date of Activity</th>
                            <th>Activity</th>
                            <th>Description</th>
                            <!-- <th style="width: 40px !important;">Option</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if($_SESSION['role'] == "Administrator")
                        {   
                            $squery = mysqli_query($con, "SELECT * from tblactivity WHERE `statusArchive` = 1");
                            while($row = mysqli_fetch_array($squery))
                            {
                                echo '
                                <tr>
                                    <td class="hidden"><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                    <td>'.$row['dateofactivity'].'</td>
                                    <td>'.$row['activity'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td class="hidden"><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                    <button class="btn btn-primary btn-sm" data-target="#viewModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-search" aria-hidden="true"></i> Photo</button>
                                    </td>
                                </tr>
                                ';
                                // include "edit_modal.php";
                                // include "view_modal.php";
                            }

                        } elseif(isset($_SESSION['resident'])){
                            $squery = mysqli_query($con, "select * from tblactivity");
                            while($row = mysqli_fetch_array($squery))
                            {
                                echo '
                                <tr>
                                    <td>'.$row['dateofactivity'].'</td>
                                    <td>'.$row['activity'].'</td>
                                    <td>'.$row['description'].'</td>
                                    <td class="hidden"><button class="btn btn-primary btn-sm" data-target="#viewModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-search" aria-hidden="true"></i> Photo</button></td>
                                </tr>
                                ';

                                // include "view_modal.php";
                            }
                        }
                        else{
                            $squery = mysqli_query($con, "SELECT * from tblactivity WHERE `statusArchive` = 1");
                            while($row = mysqli_fetch_array($squery))
                            {
                                echo '
                                <tr>
                                    <td>'.$row['dateofactivity'].'</td>
                                    <td>'.$row['activity'].'</td>
                                    <td >'.$row['description'].'</td>
                                    <td class="hidden">
                                        <button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                        <button class="btn btn-primary btn-sm" data-target="#viewModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-search" aria-hidden="true"></i> Photo</button>
                                    </td>
                                </tr>
                                ';
                               // include "edit_modal.php";
                               // include "view_modal.php";
                            }
                        }
                        ?>
                    </tbody>
                </table>

                <?php // include "../deleteModal.php"; ?>

                </form>
            </div>
        </div>

    <?php // include "../edit_notif.php"; ?>

    <?php // include "../added_notif.php"; ?>

    <?php // include "../delete_notif.php"; ?>

    <?php // include "../duplicate_error.php"; ?>

    <?php // include "add_modal.php"; ?>

    <?php // include "function.php"; ?>

</section>

<script type="text/javascript">

    <?php if($_SESSION['role'] == "Administrator") { ?>
        $(function() {
            $("#table_activity").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,4 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php } elseif(isset($_SESSION['resident'])) { ?>
        $(function() {
            $("#table_activity").dataTable({
               "aoColumnDefs": [ { "bSortable": false } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php } else{ ?>
        $(function() {
            $("#table_activity").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 4 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php } ?>

    var select_all = document.getElementById("cbxMainphoto");
    var checkboxes = document.getElementsByClassName("chk_deletephoto"); 

    select_all.addEventListener("change", function(e){
        for (i = 0; i < checkboxes.length; i++) { 
            checkboxes[i].checked = select_all.checked;
        }
    });

    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].addEventListener('change', function(e){ 
            if(this.checked == false){
                select_all.checked = false;
            }
            if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
                select_all.checked = true;
            }
        });
    }
    
</script>

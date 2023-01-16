<section class="content">
    <div class="row">
        <form method="post">
            <table id="table_tax" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <?php // if((!isset($_SESSION['staff'])) && (!isset($_SESSION['resident']))) { ?>
                        <!-- <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th> -->
                        <?php // } ?>
                        <th>Purposes</th>
                        <th>Fees</th>
                        <!-- <th style="width: 140px !important;">Option</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($_SESSION['role'] == "Administrator")
                    {   
                        $squery = mysqli_query($con, "SELECT * from tbltax WHERE `statusArchive` = 1");
                        while($row = mysqli_fetch_array($squery))
                        {
                            echo '
                            <tr>
                                <td class="hidden"><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                <td>'.$row['Purposes'].'</td>
                                <td>'.$row['fees'].'</td>
                                <td class="hidden">
                                    <button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                </td>
                            </tr>
                            ';
                            // include "edit_modal.php";
                            // include "view_modal.php";
                        }

                    }
                    elseif(isset($_SESSION['tax'])){
                        $squery = mysqli_query($con, "SELECT * from tbltax WHERE `statusArchive` = 1");
                        while($row = mysqli_fetch_array($squery))
                        {
                            echo '
                            <tr>
                                <td>'.$row['Purposes'].'</td>
                                <td>'.$row['tax'].'</td>
                                <td class="hidden"><button class="btn btn-primary btn-sm" data-target="#viewModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-search" aria-hidden="true"></i> Photo</button></td>
                            </tr>
                            ';
                            // include "view_modal.php";
                        }
                    }
                    else{
                        $squery = mysqli_query($con, "SELECT * from tbltax WHERE `statusArchive` = 1");
                        while($row = mysqli_fetch_array($squery))
                        {
                            echo '
                            <tr>
                                <td>'.$row['Purposes'].'</td>
                                <td>'.$row['fees'].'</td>
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
                            
            <?php //include "../deleteModal.php"; ?>

        </form>

        <?php // include "../edit_notif.php"; ?>

        <?php // include "../added_notif.php"; ?>

        <?php // include "../delete_notif.php"; ?>

        <?php // include "../duplicate_error.php"; ?>

        <?php // include "add_modal.php"; ?>

        <?php // include "function.php"; ?>
   
    </div>
</section>

<script type="text/javascript">

    <?php if($_SESSION['role'] == "Administrator") { ?>
        $(function() {
            $("#table_tax").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,4 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php } elseif(isset($_SESSION['tax'])) { ?>
        $(function() {
            $("#table_tax").dataTable({
               "aoColumnDefs": [ { "bSortable": false } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php } else{ ?>
        $(function() {
            $("#table_tax").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 4 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php } ?>


    select_all.addEventListener("change", function(e){
        for (i = 0; i < checkboxes.length; i++) { 
            checkboxes[i].checked = select_all.checked;
        }
    });

    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].addEventListener('change', function(e){ //".checkbox" change 
            //uncheck "select all", if one of the listed checkbox item is unchecked
            if(this.checked == false){
                select_all.checked = false;
            }
            //check "select all" if all checkbox items are checked
            if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
                select_all.checked = true;
            }
        });
    }


</script>

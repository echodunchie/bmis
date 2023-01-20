
<section class="content">
    <div class="row">
            <div class="box">
                <div class="box-header">
                    <div style="padding:10px;">
                        <button class="btn btn-primary btn-sm hidden" data-toggle="modal" data-target="#addModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Staff</button>  
                        <button class="btn btn-danger btn-sm hidden" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Archive</button> 
                    </div>                                
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                <form method="post">
                    <table id="table_staff" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <!-- <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th> -->
                                <th>Name</th>
                                <th>Username</th>
                                <!-- <th style="width: 40px !important;">Option</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $squery = mysqli_query($con, "SELECT * from tblbstaff WHERE `statusArchive` = 1");
                            while($row = mysqli_fetch_array($squery))
                            {
                                echo '
                                <tr>
                                    <td class="hidden"><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                    <td>'.ucfirst($row['fname']). ' ' . ucfirst($row['mname']) . ', ' . ucfirst($row['lname']) .'</td>
                                    <td>'.$row['username'].'</td>
                                    <td class="hidden"><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
                                </tr>
                                ';
                                // include "edit_modal.php";
                            }
                            ?>
                        </tbody>
                    </table>

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
    </div> 
</section>

<script type="text/javascript">
    $(function() {
        $("#table_staff").dataTable({
           "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,3 ] } ],"aaSorting": []
        });
    });
</script>

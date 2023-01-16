
<section class="content">
    <div class="row">
        <div class="box">
            <div class="box-header hidden">
                <div style="padding:10px;">
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addZoneModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Census Worker</button>  
                    <?php if(!isset($_SESSION['staff'])) { ?>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> 
                    <?php  } ?>
                </div>                                
            </div>
            <div class="box-body table-responsive">
            <form method="post">
                <table id="table_census" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <?php // if(!isset($_SESSION['staff'])) { ?>
                            <!-- <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th> -->
                            <?php // } ?>
                            <th>Name</th>
                            <th>Username</th>
                            <!-- <th style="width: 40px !important;">Option</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $squery = mysqli_query($con, "SELECT * from tblcensus WHERE `statusArchive` = 1");
                            while($row = mysqli_fetch_array($squery))
                            {
                                echo '
                                <tr>
                                    <td class="hidden"><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['id'].'" /></td>
                                    <td>'.$row['name'].'</td>
                                    <td>'.$row['username'].'</td>
                                    <td class="hidden"><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
                                </tr>
                                ';
                              //  include "edit_modal.php";
                            };
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

    </div>
</section>

<script type="text/javascript">
    $(function() {
        $("#table_census").dataTable({
           "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,3 ] } ],"aaSorting": []
        });
    });
</script>

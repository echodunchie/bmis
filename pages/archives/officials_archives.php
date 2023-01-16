<?php if (!isset($_GET['resident'])) { ?>
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="box-header">
                    <div style="padding:10px;">
                        <button class="btn btn-primary btn-sm hidden" data-toggle="modal" data-target="#addCourseModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Officials</button>
                        <button class="btn btn-danger btn-sm hidden" data-toggle="modal" data-target="#archive_confirmation_modal"><i class="fa fa-trash-o" aria-hidden="true"></i> Archive</button>
                        <?php
                        if (!isset($_SESSION['staff'])) { ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <form method="post" enctype="multipart/form-data">
                        <table id="table_officials" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <?php // if (!isset($_SESSION['staff'])) { ?>
                                        <!-- <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)" /></th> -->
                                    <?php // } ?>
                                    <th>Image</th>
                                    <th>Position</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Start of Term</th>
                                    <th>End of Term</th>
                                    <th style="width: 40px !important; display:none">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!isset($_SESSION['staff'])) {
                                    $squery = mysqli_query($con, "SELECT * from tblofficial WHERE `statusArchive` = 1");
                                    while ($row = mysqli_fetch_array($squery)) {
                                        echo '
                                    <tr>
                                        <td class="hidden"><input type="checkbox" name="chk_delete[]" class="chk_delete" value="' . $row['id'] . '" /></td>
                                        <td style="width:70px;"><image src="image/' . basename($row['image']) . '" style="width:60px;height:60px;"/></td>
                                        <td>' . $row['sPosition'] . '</td>
                                            <td>' . $row['completeName'] . '</td>
                                            <td>' . $row['pcontact'] . '</td>
                                            <td>' . $row['paddress'] . '</td>
                                            <td>' . $row['termStart'] . '</td>
                                            <td>' . $row['termEnd'] . '</td>
                                        <td><button class="btn btn-primary btn-sm hidden" data-target="#editModal' . $row['id'] . '" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
                                    </tr>
                                    ';
                                        // include "edit_modal.php";
                                    }
                                } else {
                                    $squery = mysqli_query($con, "SELECT * from tblofficial WHERE status = 'Ongoing Term' AND `statusArchive` = 1 group by termend");
                                    while ($row = mysqli_fetch_array($squery)) {
                                        echo 's
                                        <tr>
                                            value="' . $row['id'] . '" /></td>
                                            <td style="width:70px;"><image src="image/' . basename($row['image']) . '" style="width:60px;height:60px;"/></td>
                                            <td>' . $row['sPosition'] . '</td>
                                            <td>' . $row['completeName'] . '</td>
                                            <td>' . $row['pcontact'] . '</td>
                                            <td>' . $row['paddress'] . '</td>
                                            <td>' . $row['termStart'] . '</td>
                                            <td>' . $row['termEnd'] . '</td>
                                            <td><button class="btn btn-primary btn-sm hidden" data-target="#editModal' . $row['id'] . '" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
                                        </tr>
                                        ';

                                        include "edit_modal.php";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <?php // include "../archive_confirmation_modal.php"; ?>
                        <?php // include "../deleteModal.php"; ?>

                    </form>
                </div>
            </div>

            <?php // include "../edit_notif.php"; ?>

            <?php // include "../archive_notif.php"; ?>

            <?php // include "../added_notif.php"; ?>

            <?php // include "../delete_notif.php"; ?>

            <?php // include "../duplicate_error.php"; ?>

            <?php //include "add_modal.php"; ?>

            <?php // include "function.php"; ?>

        </div>
    </section>
<?php } ?>

<script type="text/javascript">
    $(function() {
        $("#table_officials").dataTable({
            "aoColumnDefs": [{
                "bSortable": false,
                "aTargets": [0, 6]
            }],
            "aaSorting": []
        });
    });
</script>
                              
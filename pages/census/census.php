<!DOCTYPE html>
<html>

<?php
session_start();
if (!isset($_SESSION['role'])) {
    header("Location: ../../main/login.php");
} else {
    ob_start();
    include('../head_css.php'); ?>

    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php

        include "../connection.php";
        ?>
        <?php include('../header.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('../sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Health Worker
                    </h1>

                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="box">
                            <div class="box-header">
                                <div style="padding:10px;">

                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addZoneModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Health Worker</button>
                                    <?php
                                    if (!isset($_SESSION['staff'])) {
                                    ?>
                                        <!-- <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> -->
                                        <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#archive_confirmation_modal"><i class="fa fa-archive" aria-hidden="true"></i> Archive</button>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <form method="post">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <?php
                                                if (!isset($_SESSION['staff'])) {
                                                ?>
                                                <?php
                                                }
                                                ?>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th style="width: 40px !important;">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!isset($_SESSION['staff'])) {
                                                $squery = mysqli_query($con, "select * from tblcensus ");
                                                while ($row = mysqli_fetch_array($squery)) {
                                                    echo '
                                                    <tr>
                                                        <td>' . $row['fname'] . '</td>
                                                        <td>' . $row['mname'] . '</td>
                                                        <td>' . $row['lname'] . '</td>
                                                        <td>' . $row['username'] . '</td>
                                                        <td style="display: flex; gap: 2px;">
                                                            <button class="btn btn-warning btn-sm col-6" data-target="#editModal' . $row['id'] . '" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button><button class="btn btn-danger btn-sm col-6" data-target="#deleteModal' . $row['id'] . '" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                                        </td>
                                                    </tr>
                                                    ';

                                                    include "delete_modal.php";
                                                    include "edit_modal.php";
                                                }
                                            } else {
                                                $squery = mysqli_query($con, "select * from tblcensus ");
                                                while ($row = mysqli_fetch_array($squery)) {
                                                    echo '
                                                    <tr>
                                                        <td>' . $row['fname'] . '</td>
                                                        <td>' . $row['mname'] . '</td>
                                                        <td>' . $row['lname'] . '</td>
                                                        <td>' . $row['username'] . '</td>
                                                        <td style="display: flex; gap: 2px;">
                                                            <button class="btn btn-warning btn-sm col-6" data-target="#editModal' . $row['id'] . '" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button><button class="btn btn-danger btn-sm col-6" data-target="#deleteModal' . $row['id'] . '" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                                        </td>
                                                    </tr>
                                                    ';

                                                    include "delete_modal.php";
                                                    include "edit_modal.php";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                    <?php include "../deleteModal.php"; ?>
                                    <?php include "../archive_confirmation_modal.php"; ?>

                                </form>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->

                        <?php include "../edit_notif.php"; ?>

                        <?php include "../added_notif.php"; ?>

                        <?php include "../delete_notif.php"; ?>
                        <?php include "../duplicate_error.php"; ?>

                        <?php include "add_modal.php"; ?>

                        <?php include "function.php"; ?>


                    </div> <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
    <?php }
include "../footer.php"; ?>
    <script type="text/javascript">
        $(function() {
            $("#table").dataTable({
                "aoColumnDefs": [{
                    "bSortable": false,
                    "aTargets": [0, 3]
                }],
                "aaSorting": []
            });
        });
    </script>
    </body>

</html>
<!DOCTYPE html>
<html>

<?php
session_start();


if (!isset($_SESSION['role'])) {
    header("Location: ../../main/login.php");
} else {

    ob_start();
    
    include('../head_css.php'); ?>
    <style>
        .input-size {
            width: 418px;
        }
    </style>

    <body class="skin-black">
        <?php

        include "../connection.php";
        ?>
        <?php include('../header.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <?php include('../sidebar-left.php'); ?>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Resident
                    </h1>

                </section>

                <?php
                if (!isset($_GET['resident'])) {
                ?>
                    <section class="content">
                        <div class="row">
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">

                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addCourseModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Residents</button>
                                        <?php
                                        if (!isset($_SESSION['staff'])) {
                                        ?>

                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="box-body table-responsive">
                                    <form method="post" enctype="multipart/form-data">
                                        <table id="table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Images</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>Age</th>
                                                    <th>Email</th>
                                                    <th>Phone #</th>
                                                    <th>Zone</th>
                                                    <th style="width: 40px !important;">Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (!isset($_SESSION['staff'])) {

                                                    if (isset($_GET['household_no'])) {
                                                        $squery = mysqli_query($con, "SELECT * FROM tblresident WHERE householdno = " . $_GET['household_no'] .  " order by zone");
                                                    } else {
                                                        $squery = mysqli_query($con, "SELECT * FROM tblresident order by zone");
                                                    }

                                                    while ($row = mysqli_fetch_array($squery)) {
                                                        echo '
                                                    <tr>
                                                        <td style="width:70px;"><image src="image/' . basename($row['image']) . '" style="width:80px;height:80px;"/></td>
                                                        <td><b>' . ucfirst($row['fname']) . '</b></td>
                                                        <td><b>' . ucfirst($row['mname']) . '</b></td>
                                                        <td><b>' . ucfirst($row['lname']) . '</b></td>
                                                        <td>' . $row['age'] . '</td>
                                                        <td>' . $row['email'] . '</td>
                                                        <td>' . $row['mobile_number'] . '</td>
                                                        <td>' . $row['zone'] . '</td>
                                                        <td style="display: flex; gap: 2px;">
                                                            <button class="btn btn-warning btn-sm col-6" data-target="#editModal' . $row['id'] . '" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button><button class="btn btn-danger btn-sm col-6" data-target="#deleteModal' . $row['id'] . '" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                                        </td>
                                                    </tr>
                                                    ';

                                                        include "delete_modal.php";
                                                        include "edit_modal.php";
                                                    }
                                                } else {

                                                    // $query = mysqli_query($con, "SELECT * FROM `ishousehold` WHERE `id` = 1;");

                                                    // if ($query) {
                                                    //     while ($row = mysqli_fetch_array($query)) {
                                                    //         $household_no = $row['household_no'];
                                                    //     }
                                                    // } else {
                                                    //     $household_no = '';
                                                    // }

                                                    if (isset($_GET['household_no'])) {
                                                        $squery = mysqli_query($con, "SELECT * FROM tblresident WHERE householdno = " . $_GET['household_no'].  " order by zone");
                                                    } else {
                                                        $squery = mysqli_query($con, "SELECT * FROM tblresident order by zone");
                                                    }
                                                    while ($row = mysqli_fetch_array($squery)) {
                                                        echo '
                                                    <tr>
                                                        <td style="width:70px;"><image src="image/' . basename($row['image']) . '" style="width:80px;height:80px;"/></td>
                                                        <td><b>' . ucfirst($row['fname']) . '</b></td>
                                                        <td><b>' . ucfirst($row['mname']) . '</b></td>
                                                        <td><b>' . ucfirst($row['lname']) . '</b></td>
                                                        <td>' . $row['age'] . '</td>
                                                        <td>' . $row['email'] . '</td>
                                                        <td>' . $row['mobile_number'] . '</td>
                                                        <td>' . $row['zone'] . '</td>
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

                                    </form>
                                </div>
                            </div>

                            <?php include "../edit_notif.php"; ?>

                            <?php include "../added_notif.php"; ?>

                            <?php include "../delete_notif.php"; ?>

                            <?php include "../duplicate_error.php"; ?>

                            <?php include "add_modal.php"; ?>

                            <?php include "function.php"; ?>


                        </div> <!-- /.row -->
                    </section><!-- /.content -->
                <?php
                } else {
                ?>
                    <section class="content">
                        <div class="row">
                            <!-- left column -->
                            <div class="box">

                                <div class="box-body table-responsive">
                                    <form method="post" enctype="multipart/form-data">
                                        <table id="table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Age</th>
                                                    <th>Email</th>
                                                    <th>Phone #</th>
                                                    <th>Zone</th>
                                                    <th style="width: 40px !important;">Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                // $query = mysqli_query($con, "SELECT * FROM `ishousehold` WHERE `id` = 1;");

                                                // if ($query) {
                                                //     while ($row = mysqli_fetch_array($query)) {
                                                //         $household_no = $row['household_no'];
                                                //     }
                                                // } else {
                                                //     $household_no = '';
                                                // }

                                                if (isset($_GET['household_no'])) {
                                                    $squery = mysqli_query($con, "SELECT * FROM tblresident WHERE householdno = " . $_GET['household_no'].  " order by zone");
                                                } else {
                                                    $squery = mysqli_query($con, "SELECT * FROM tblresident order by zone");
                                                }
                                                while ($row = mysqli_fetch_array($squery)) {
                                                    echo '
                                                    <tr>
                                                        <td style="width:70px;"><image src="image/' . basename($row['image']) . '" style="width:80px;height:80px;"/></td>
                                                        <td><b>' . ucfirst($row['fname']) . '</b></td>
                                                        <td><b>' . ucfirst($row['mname']) . '</b></td>
                                                        <td><b>' . ucfirst($row['lname']) . '</b></td>
                                                        <td>' . $row['age'] . '</td>
                                                        <td>' . $row['email'] . '</td>
                                                        <td>' . $row['mobile_number'] . '</td>
                                                        <td>' . $row['zone'] . '</td>
                                                        <td style="display: flex; gap: 2px;">
                                                            <button class="btn btn-warning btn-sm col-6" data-target="#editModal' . $row['id'] . '" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button><button class="btn btn-danger btn-sm col-6" data-target="#deleteModal' . $row['id'] . '" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                                        </td>
                                                </tr>
                                                ';

                                                    include "delete_modal.php";
                                                    include "edit_modal.php";
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                        <?php include "../deleteModal.php"; ?>
                                        <?php include "../duplicate_error.php"; ?>

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div> <!-- /.row -->
                    </section><!-- /.content -->
                <?php
                }
                ?>
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
                    "aTargets": [0, 6]
                }],
                "aaSorting": []
            });
        });
    </script>
    </body>

</html>
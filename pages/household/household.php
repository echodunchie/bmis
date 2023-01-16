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
                        Household
                    </h1>

                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="box">
                            <div class="box-header">
                                <div style="padding:10px;">
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Household</button>
                                    <?php
                                    if (!isset($_SESSION['staff'])) {
                                    ?>

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
                                                <th>Household #</th>
                                                <th>Head of Family</th>
                                                <th>Total Members</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!isset($_SESSION['staff'])) {

                                                $squery = mysqli_query($con, "SELECT householdno AS householdnum, (SELECT CONCAT(lname, ' ', fname, ' ', mname) FROM tblresident WHERE householdnum = hh.householdno AND relationtohead = 'yes' LIMIT 1) AS head_family, (SELECT COUNT(id) FROM tblresident WHERE householdnum = hh.householdno) AS total_members FROM tblhousehold as hh");
                                                $counter = 0;
                                                while ($row = mysqli_fetch_array($squery)) {
                                                    echo '
                                                    <tr>
                                                        <td><a href="/bmis/pages/resident/resident.php?household_no='. $row['householdnum'].'"> ' .  $row['householdnum'] . '</a></td>
                                                        <td>' . $row['head_family'] . '</td>
                                                        <td>' . $row['total_members'] . '</td>
                                                    </tr>
                                                    ';
                                                    $counter++;
                                                }
                                            } else {
                                                $squery = mysqli_query($con, "select *,CONCAT(r.lname, ', ', r.fname, ' ', r.mname) as hname  from tblhousehold h left join tblresident r on r.id = h.headoffamily");
                                                $counter = 0;
                                                while ($row = mysqli_fetch_array($squery)) {
                                                    echo '
                                                    <tr>
                                                        <td><a href="/bmis/pages/resident/resident.php?household_no=' . $row['householdno'] . '"> ' . $row['householdno'] . '</a></td>
                                                        <td>' . $row['hzone'] . '</td>
                                                        <td>' . $row['totalhousehold'] . '</td>
                                                        <td>' . $row['hname'] . '</td>
                                                    </tr>
                                                    ';
                                                    $counter++;
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
        <?php
        if (!isset($_SESSION['staff'])) {
        ?>
            $(function() {
                $("#table").dataTable({
                    "aoColumnDefs": [{
                        "bSortable": false,
                        "aTargets": [0, 5]
                    }],
                    "aaSorting": []
                });
                $(".select2").select2();
            });
        <?php
        } else {
        ?>
            $(function() {
                $("#table").dataTable({
                    "aoColumnDefs": [{
                        "bSortable": false,
                        "aTargets": [4]
                    }],
                    "aaSorting": []
                });
                $(".select2").select2();
            });
        <?php
        }
        ?>
    </script>
    

    <?php 
        
        if (isset($_GET['isCreate'])){
            echo '<script>
                    $(document).ready(function() {
                        $("#addModal").modal("show")  
                        $("#txt_householdno").val('.$_GET['isCreate'] .'); 
                    });
                    </script>';
        } 

    ?>
        

    </body>

</html>
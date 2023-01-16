<!DOCTYPE html>
<html>

    <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../main/login.php"); 
    }
    else
    {
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
                        Edit here!
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                                                   
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                <form method="post">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <?php 
                                                if((!isset($_SESSION['staff'])) && (!isset($_SESSION['resident'])))
                                                {
                                                ?>
                                              
                                                <?php
                                                    }
                                                ?>
                                                <th>COVID</th>
                                                <th>MESU</th>
                                                <th>PSO</th>
                                                <th>BERT</th>
                                                <th>MDRRMO</th>
                                                <th>PNP</th>
                                                <th>FIRE STATION</th>
                                                <th>BARANGAY HOTLINE</th>
                                                <th style="width: 140px !important;">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if($_SESSION['role'] == "Administrator")
                                            {   

                                                $squery = mysqli_query($con, "select * from settings");
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                       

                                                        <td>'.$row['phonea'].'</td>
                                                        <td>'.$row['phoneb'].'</td>
                                                        <td>'.$row['phonec'].'</td>
                                                        <td>'.$row['phoned'].'</td>
                                                        <td>'.$row['phonee'].'</td>
                                                        <td>'.$row['phonef'].'</td>
                                                        <td>'.$row['phoneg'].'</td>
                                                        <td>'.$row['phoneh'].'</td>

                                                        <td>
                                                            <button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                        </td>
                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                    include "view_modal.php";
                                                }

                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                    <?php include "../deleteModal.php"; ?>

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <?php include "../edit_notif.php"; ?>

                            <?php include "../added_notif.php"; ?>

                            <?php include "../delete_notif.php"; ?>

                            <?php include "../duplicate_error.php"; ?>



            <?php include "function.php"; ?>
            <form method="post">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <?php 
                                                if((!isset($_SESSION['staff'])) && (!isset($_SESSION['resident'])))
                                                {
                                                ?>
                                              
                                                <?php
                                                    }
                                                ?>
                                                <th>Email</th>
                                                <th style="width: 140px !important;">Option</th>
                                            </tr>

                                        </thead>
 <?php
                                            if($_SESSION['role'] == "Administrator")
                                            {   

                                                $squery = mysqli_query($con, "select * from settings");
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['email'].'</td>

                                                        <td>
                                                            <button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                        </td>
                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                    include "view_modal.php";
                                                }

                                            }
                                            ?>

                                             <form method="post">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <?php 
                                                if((!isset($_SESSION['staff'])) && (!isset($_SESSION['resident'])))
                                                {
                                                ?>
                                              
                                                <?php
                                                    }
                                                ?>
                                                <th>objective</th>
                                                <th style="width: 140px !important;">Option</th>
                                            </tr>

                                        </thead>
 <?php
                                            if($_SESSION['role'] == "Administrator")
                                            {   

                                                $squery = mysqli_query($con, "select * from settings");
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['objective'].'</td>

                                                        <td>
                                                            <button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                        </td>
                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                    include "view_modal.php";
                                                }

                                            }
                                            ?>

                                            <form method="post">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <?php 
                                                if((!isset($_SESSION['staff'])) && (!isset($_SESSION['resident'])))
                                                {
                                                ?>
                                              
                                                <?php
                                                    }
                                                ?>
                                                <th>Mission</th>
                                                <th>Vision</th>
                                                <th>Goals</th>
                                                <th style="width: 140px !important;">Option</th>
                                            </tr>

                                        </thead>
 <?php
                                            if($_SESSION['role'] == "Administrator")
                                            {   

                                                $squery = mysqli_query($con, "select * from settings");
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['mission'].'</td>
                                                        <td>'.$row['vision'].'</td>
                                                        <td>'.$row['goal'].'</td>

                                                        <td>
                                                            <button class="btn btn-primary btn-sm" data-target="#editModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                        </td>
                                                    </tr>
                                                    ';

                                                    include "edit_modal.php";
                                                    include "view_modal.php";
                                                }

                                            }
                                            ?>

                    </div>   <!-- /.row -->
                </section><!-- /.content -->

            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <?php }
        include "../footer.php"; ?>
<script type="text/javascript">

var select_all = document.getElementById("cbxMainphoto"); //select all checkbox
var checkboxes = document.getElementsByClassName("chk_deletephoto"); //checkbox items

//select all checkboxes
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

    <?php
    if($_SESSION['role'] == "Administrator")
    {
    ?>
        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,4 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php
    }
    elseif(isset($_SESSION['resident']))
    {
    ?>
        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php
    }
    else{
    ?>
        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 4 ] } ],"aaSorting": []
            });
            $(".select2").select2();
        });
    <?php
    }
    ?>
</script>
    </body>
</html>

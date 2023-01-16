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
                        Barangay Certificates
                    </h1>
                    <br>

                  <section class="content">
                  <div class="row">
                    <div class="box">
                      <div class="col-md-3 col-sm-6 col-xs-12"><br>
                        <div class="info-box">
                          <a href="../Indigency/indigency.php"><span class="info-box-icon bg-blue"><i class="fa fa-file"></i></span></a>
                          <div class="info-box-content">
                            <span class="info-box-text">Barangay Indigency</span>
                            <span class="info-box-number">
                              <?php
                                  $q = mysqli_query($con,"SELECT * from tblindigency");
                                  $num_rows = mysqli_num_rows($q);
                                  echo $num_rows;?>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12"><br>
                        <div class="info-box">
                          <a href="../clearance/clearance.php"><span class="info-box-icon bg-blue"><i class="fa fa-file"></i></span></a>
                          <div class="info-box-content">
                            <span class="info-box-text">Barangay Clearance</span>
                            <span class="info-box-number">
                              <?php
                                  $q = mysqli_query($con,"SELECT * from tblclearance");
                                  $num_rows = mysqli_num_rows($q);
                                  echo $num_rows;?>
                            </span>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-6 col-xs-12"><br>
                        <div class="info-box">
                          <a href="../residency/residency.php"><span class="info-box-icon bg-blue"><i class="fa fa-file"></i></span></a>
                          <div class="info-box-content">
                            <span class="info-box-text">Barangay Residency</span>
                            <span class="info-box-number">
                              <?php
                                  $q = mysqli_query($con,"SELECT * from tblresidency");
                                  $num_rows = mysqli_num_rows($q);
                                  echo $num_rows;?>
                            </span>
                          </div>
                        </div>
                      </div>
                       





                </section>
 <?php }
        include "../footer.php"; ?>
<script type="text/javascript">

    <?php
    if(!isset($_SESSION['staff']))
    {
    ?>
        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": []
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
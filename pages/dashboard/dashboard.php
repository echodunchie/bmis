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
                        Dashboard
                    </h1>
                
                    
                </section>

                <section class="content">
                  <div class="row">
                    <div class="box">
                      
                      <div class="col-md-3 col-sm-6 col-xs-12"><br>
                        <div class="info-box">
                          <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span></a>

                          <div class="info-box-content">
                            <span class="info-box-text">Total Resident</span>
                            <span class="info-box-number">
                              <?php
                                  $q = mysqli_query($con,"SELECT * from tblresident");
                                  $num_rows = mysqli_num_rows($q);
                                  echo $num_rows;
                              ?>
                            </span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12"><br>
                        <div class="info-box">
                          <a href="../clearance/clearance.php"><span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span></a>

                          <div class="info-box-content">
                            <span class="info-box-text">Total Clearance</span>
                            <span class="info-box-number">
                              <?php
                                  $q = mysqli_query($con,"SELECT * from tblclearance where status = 'Approved' ");
                                  $num_rows = mysqli_num_rows($q);
                                  echo $num_rows;
                              ?>
                            </span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12"><br>
                        <div class="info-box">
                          <a href="../indigency/indigency.php"><span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span></a>
                          <div class="info-box-content">
                            <span class="info-box-text">Total Indigency</span>
                            <span class="info-box-number">
                              <?php
                                  $q = mysqli_query($con,"SELECT * from tblindigency where status = 'Approved' ");
                                  $num_rows = mysqli_num_rows($q);
                                  echo $num_rows;
                              ?>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12"><br>
                      <div class="info-box">
                        <a href="../residency/residency.php"><span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span></a>
                        <div class="info-box-content">
                          <span class="info-box-text">Total Residency</span>
                          <span class="info-box-number">
                            <?php
                                $q = mysqli_query($con,"SELECT * from tblresidency where status = 'Approved' ");
                                $num_rows = mysqli_num_rows($q);
                                echo $num_rows;
                            ?>
                          </span>
                        </div>
                      </div>
                    </div>
                    
                       <div class="col-md-3 col-sm-6 col-xs-12"><br>
                        <div class="info-box">
                          <a href="../census/census.php"><span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span></a>

                          <div class="info-box-content">
                            <span class="info-box-text">Total Health Worker</span>
                            <span class="info-box-number">
                              <?php
                                  $q = mysqli_query($con,"SELECT * from tblcensus");
                                  $num_rows = mysqli_num_rows($q);
                                  echo $num_rows;
                              ?>
                            </span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                    <div class="col-md-3 col-sm-6 col-xs-12"><br>
                      <div class="info-box">
                        <a href="../bstaff/bstaff.php"><span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span></a>

                        <div class="info-box-content">
                          <span class="info-box-text">Total Staff</span>
                          <span class="info-box-number">
                            <?php
                                $q = mysqli_query($con,"SELECT * from tblbstaff");
                                $num_rows = mysqli_num_rows($q);
                                echo $num_rows;
                            ?>
                          </span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                        </div>
                      
                    </div>
                  </div> 
                <div class="row">    
                <div class="box">
                    <div class="box-header">
                      <div style="padding:10px;">
                          <form action="export.php" method="post">
                              
                          </form>
                        </div>                            
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive">
                        
                        <div class="row">  
                              <div class="col-md-12 col-sm-12 col-xs-12">                     
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Economic Status
                                    </div>
                                    <div class="panel-body">
                                        <div id="morris-bar-chart5"></div>
                                    </div>
                                </div>            
                            </div>       
                            </div>                      
                            <div class="col-md-12 col-sm-12 col-xs-12">                     
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Resident Income Level
                                    </div>
                                    <div class="panel-body">
                                        <div id="morris-bar-chart4"></div>
                                    </div>
                                </div>          
                            </div>   
                            <div class="col-md-6 col-sm-12 col-xs-12">                     
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Resident Educational Attainment
                                    </div>
                                    <div class="panel-body">
                                        <div id="morris-donut-chart"></div>
                                    </div>
                                </div>            
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">                     
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Population per Zone
                                    </div>
                                    <div class="panel-body">
                                        <div id="morris-bar-chart3"></div>
                                    </div>
                                </div>            
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">                     
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Age
                                </div>
                                <div class="panel-body">
                                    <div id="morris-bar-chart2"></div>
                                </div>
                            </div>            
                        </div> 
                      </div>
                  </div>
                </div>
                </section>
            </aside>
        </div>

        <?php }
        include "../footer.php"; 
        include "donut-chart.php";
        include "bar-chart.php"; 
        ?>
        

<script type="text/javascript">
    $(function() {
        $("#table").dataTable({
           "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": []
        });
    });
</script>
    </body>
</html>
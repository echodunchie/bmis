
<?php
	echo '
	<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        
                        <div class="pull-left info" style= margin-top:80px;>
                            <h4 style="text-transform: capitalize;">Hello, '.$_SESSION['username']. '</h4>
                            <p style="text-transform:uppercase;">'.$_SESSION['role']. '</p>

                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    ';
                    if($_SESSION['role'] == "Administrator"){
                        echo '
                    <ul class="sidebar-menu">
                            <li>
                                <a href="../dashboard/dashboard.php">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                            
                            <li>
                                <a href="../officials/officials.php">
                                    <i class="fa fa-user"></i> <span>Barangay Officials</span>
                                </a>
                            </li>
                           
                            <li>
                                <a href="../bstaff/bstaff.php">
                                    <i class="fa fa-user"></i> <span>Barangay Staff</span>
                                </a>
                            </li>
                            <li>
                                <a href="../census/census.php">
                                    <i class="fa fa-user"></i> <span>Barangay Health Worker</span>
                                </a>
                            </li>
                             <li>
                                <a href="../resident/resident.php">
                                    <i class="fa fa-users"></i> <span>Resident</span>
                                </a>
                            </li>
                            <li>
                                <a href="../household/household.php">
                                    <i class="fa fa-home"></i> <span>Household</span>
                                </a>
                            </li>
                            
                            <li class="hidden">
                                <a href="../bcertificates/bcertificates.php">
                                    <i class="fa fa-home"></i> <span>Barangay Certificates</span>
                                </a>
                            </li>
                            <li>
                            <details>
                            <summary><h5>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-home" style="color:white;"></i> <span style="color:white;">&nbsp;&nbsp;Barangay Certificates</span></h5></summary>
  
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-file" style="color:white;"></i><span style="width: 120px; border-radius: 50%; text-align: center; font-size: 10px; border: 3px solid red; color: white; background-color: red;">'.$_SESSION['indigency_counter'].'</span><a href="../indigency/indigency.php"> Barangay Indigency </a> <br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-file" style="color:white;"></i><span style="width: 120px; border-radius: 50%; text-align: center; font-size: 10px; border: 3px solid red; color: white; background-color: red;">'. $_SESSION['clearance_counter'].'</span><a href="../clearance/clearance.php"> Barangay Clearance </a> <br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-file" style="color:white;"></i><span style="width: 120px; border-radius: 50%; text-align: center; font-size: 10px; border: 3px solid red; color: white; background-color: red;">'. $_SESSION['residency_counter'].'</span><a href="../residency/residency.php"> Barangay Residency </a> <br><br>
  
                            </details> </li>
                        
                           
                            <li class="hidden">
                                <a href="../report/report.php">
                                    <i class="fa fa-file"></i> <span>Report</span>
                                </a>
                            </li>
                             <li>
                                <a href="../tax/tax.php">
                                    <i class="fa fa-file"></i> <span>Tax ordinance</span>
                                </a>
                            </li>
                            <li>
                                <a href="../announcement/announcement.php">
                                    <i class="fa fa-file"></i> <span>announcement</span>
                                </a>
                            </li>
                             <li>
                                <a href="../event/event.php">
                                    <i class="fa fa-file"></i> <span>Events</span>
                                </a>
                            </li>
                            <li>
                            
                            <li>

                                <a href="../logs/logs.php">
                                    <i class="fa fa-history"></i> <span>Logs</span>
                                </a>
                            </li>   
                            <li>
                                <a href="../archives/archives.php">
                                    <i class="fa fa-archive"></i> <span>Archives</span>
                                </a>
                            </li>   
                            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>                         
                            
                    </ul>';
                    }
                    elseif($_SESSION['role'] == "Census"){
                        echo '
                        <ul class="sidebar-menu">
                           <li>
                                <a href="../resident/resident.php">
                                    <i class="fa fa-users"></i> <span>Resident</span>
                                </a>
                            </li>
                            
                        </ul>';
                    }
                    
                   elseif($_SESSION['role'] == "bstaff"){
                        echo '
                        <ul class="sidebar-menu">
                          
                            <li>
                                <a href="../resident/resident.php">
                                    <i class="fa fa-users"></i> <span>Resident</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="../clearance/clearance.php">
                                    <i class="fa fa-file"></i> <span>Clearance</span>
                                </a>
                            </li>
                            <li>
                                <a href="../indigency/indigency.php">
                                    <i class="fa fa-file"></i> <span>Indigency</span>
                                </a>
                            </li>
                            <li>
                                <a href="../residency/residency.php">
                                    <i class="fa fa-file"></i> <span>Residency</span>
                                </a>
                            </li>
                            <li>
                                <a href="../tax/tax.php">
                                    <i class="fa fa-file"></i> <span>Tax ordinance</span>
                                </a>
                            </li>
                            
                        </ul>';
                    }

                    else{
                        echo '
                        <ul class="sidebar-menu">
                            <li>
                               
                            </li>
                            <li>
                                <a href="../clearance/clearance.php">
                                    <i class="fa fa-file"></i> <span>Clearance</span>
                                </a>
                            </li>
                            <li>
                                <a href="../indigency/indigency.php">
                                    <i class="fa fa-file"></i> <span>Indigency</span>
                                </a>
                            </li>
                            <li>
                                <a href="../residency/residency.php">
                                    <i class="fa fa-file"></i> <span>Residency</span>
                                </a>
                            </li>
                            <li>
                                <a href="../officials/off.php">
                                    <i class="fa fa-calendar"></i> <span>Barangay Official</span>
                                </a>
                            
                            <li>
                            <li>
                                <a href="../tax/taxo.php">
                                    <i class="fa fa-dashboard"></i> <span>Tax Ordinance</span>
                                </a>
                            </li>
                           
                             
                            <li>
                             <script> 
   
    function profile() {
    window.location.href = "resident_profile.php";
    }
</script></li>
                        </ul>';

                    }
                echo '
                </section>
                <!-- /.sidebar -->
            </aside>
	';
?>
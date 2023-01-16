<?php
include "admin/conn.php";

//fetch settings
$settings = mysqli_query($con, "SELECT * FROM settings");
$setting  = mysqli_fetch_array($settings);
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <title> BSBMIS | Barangay Sagrada</title>
    <!-- responsive tags for screen compatibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <!-- custom css -->
    <link href="index.css" rel="stylesheet" type="text/css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- fontawesome icons -->
    <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #2a4576 !important;
        }

        .input-container {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            width: 100%;
            margin-bottom: 20px;
        }

        .icon {
            padding: 15px;
            background: #2a4576;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }

        .input-field:focus {
            border: 2px solid dodgerblue;
        }

        /* Set a style for the submit button */
        .btn {
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }
    </style>

</head>



<body>

    <!-- This is the heading and card section -->
    <section class="main-section">
        <div class="container-fluid">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align:center;">
                        <img src="assets/images/s.png" style="height:100px;" />
                    </div>
                    <div class="background-text">

                        <div class="col-sm"></div>
                        <div class="col-sm main-heading text-center text-white">
                            <h3> Barangay Sagrada Buhi Management Information System </h3>
                            <p1> Maray na aldaw! Dagos po kamo </p1>
                        </div>
                        <div class="col-sm"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                            <div class="card main-card mtop">
                                <div class="card-body">
                                    <form method="post">

                                        <label for="txt_username"> Username </label>
                                        <div class="input-container">
                                            <i class="fa fa-envelope icon"></i>
                                            <input class="input-field" type="text" placeholder="Enter Email" name="txt_username" onfocus="this.value=''" placeholder="Enter Username" required>
                                        </div>

                                        <label for="txt_password"> Password </label>
                                        <div class="input-container">
                                            <i class="fa fa-key icon"></i>
                                            <input type="password" class="input-field" type="password" placeholder="Enter Password" id="myInput" name="txt_password" onfocus="this.value=''" placeholder="" required>
                                        </div>

                                        <br>

                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" onclick="myFunction()" class="custom-control-input" id="switch1">
                                            <label class="custom-control-label" for="switch1">Show Password</label>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <button type="submit" class="btn btn-primary login-button " name="userLogin">Log in</button>
                                            <center>
                                                <div class="alert alert-danger mt-4" style="display: none" role="alert" id="error_message"></div>
                                            </center>
                                        </div>
                                    </form>

                                    <hr>

                                    <!-- <div class="registration-section"> 
                                    <p1> <strong> Haven't registered yet? </strong> </p1> 

                                    <br>

                                    <p1> Hindi ka pa rehistrado? </p1> 

                                    <br>

                                    <button class="btn btn-success create-button" onclick="trying();"> Create Account </button> 
                                </div>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm"></div>
                    </div>

                </div>

    </section>

    <!-- Footer -->

    <footer id="footer" class="bg-primary text-white d-flex-column text-center">

        <!--Copyright-->

        <div class="py-3 text-center">
            BSIT 4D-
            <script>
                document.write(new Date().getFullYear())
            </script>
            Team Hanabi
        </div>

    </footer>

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function trying() {
            window.location.href = "resident_registration.php";
        }
    </script>

</body>



<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

</body>


<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/script.js"></script>

</html>


<?php
include "../pages/connection.php";
if (isset($_POST['userLogin'])) {
    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];

    $_SESSION['indigency_counter'] = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tblindigency"));
    $_SESSION['clearance_counter'] = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tblclearance"));
    $_SESSION['residency_counter'] = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tblresidency"));
    $_SESSION['household'] = '';

    $admin = mysqli_query($con, "SELECT * from tbluser where username = '$username'");
    $zone = mysqli_query($con, "SELECT * from tblcensus where username = '$username'");
    $staff = mysqli_query($con, "SELECT * from tblstaff where username = '$username'");
    $bstaff = mysqli_query($con, "SELECT * from tblbstaff where username = '$username'");
    $user = mysqli_query($con, "SELECT * from tblresident where username = '$username'");

    if (mysqli_num_rows($admin) > 0) {
        
        $row =  mysqli_fetch_array($admin);

        if (password_verify($password, $row['password'])) {
            $_SESSION['role'] = "Administrator";
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            header('location: ../pages/officials/officials.php');

        } else {
            echo '<script type="text/javascript">
                    document.getElementById("error_message").innerHTML = "Invalid Account";
                    document.getElementById("error_message").style = "block"
                </script>';
        }
        
    }else if (mysqli_num_rows($zone) > 0) {
        
        $row =  mysqli_fetch_array($zone);

        if (password_verify($password, $row['password'])) {
          
            $_SESSION['role'] = "Census";
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            header('location: ../pages/resident/resident.php');
        } else {
            echo '<script type="text/javascript">
                    document.getElementById("error_message").innerHTML = "Invalid Account";
                    document.getElementById("error_message").style = "block"
                </script>';
        }
    } else if (mysqli_num_rows($staff) > 0) {

        $row =  mysqli_fetch_array($staff);

        if (password_verify($password, $row['password'])) {
            $_SESSION['role'] = $row['name'];
            $_SESSION['staff'] = "Staff";
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header('location: ../pages/resident/resident.php');
        } else {
            echo '<script type="text/javascript">
                    document.getElementById("error_message").innerHTML = "Invalid Account";
                    document.getElementById("error_message").style = "block"
                </script>';
        }
    } else if (mysqli_num_rows($bstaff) > 0) {

        $row =  mysqli_fetch_array($bstaff);

        if (password_verify($password, $row['password'])) {
            $_SESSION['role'] = "bstaff";
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header('location: ../pages/resident/resident.php');
        } else {
            echo '<script type="text/javascript">
                    document.getElementById("error_message").innerHTML = "Invalid Account";
                    document.getElementById("error_message").style = "block"
                </script>';
        }
    } else if (mysqli_num_rows($user) > 0) {

        $row =  mysqli_fetch_array($user);

        if (password_verify($password, $row['password'])) {
            $_SESSION['role'] = $row['fname'];
            $_SESSION['resident'] = 1;
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header('location: ../pages/activity/act.php');
        } else {
            echo '<script type="text/javascript">
                    document.getElementById("error_message").innerHTML = "Invalid Account";
                    document.getElementById("error_message").style = "block"
                </script>';
        }
    }
  
}
?>

</html>

<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Barangay Sagrada Buhi Management Information System</title>
        <!-- Favicon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
        <style type="text/css">
            header.mastheads {
              position: relative;
              background:linear-gradient(rgba(0,37,84,0.6), rgba(0,37,84,0.6)), url("assets/img/sagrada.jpg")no-repeat center center;
              background-size: cover;
              padding-top: 8rem;
              background-attachment: fixed;
              padding-bottom: 8rem;
              height: 100vh;
            }
            .navbar{padding: 10px;}

            .call-to-action {
              position: relative;
              background: url("assets/img/topb1.jpg") no-repeat center center;
              background-size: cover;
              padding-top: 7rem;
              padding-bottom: 7rem;
            }

        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <a class="navbar-brand" href="#"><img src="assets/img/logo.jpg" height="60"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mission">Mission</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#vision">Vision</a>
              </li>

              <right>
                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
              <li class="nav-item"><a href="../login.php">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Administration
                            </button> </a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Masthead-->
        <header class="mastheads">
            <div class="container position-relative">
                <div class="row" style="margin-top:50px;">
                    <div class="col-md-6">
                        <div class="text-white">
                            <!-- Page heading-->
                            <h1 style="font-size: 50px;margin-top: 70px;">Barangay Sagrada Buhi Management Information System</h1>
                           
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="card" style="padding:20px;margin-left: 40px;box-shadow: 0 2px 5px rgba(0, 0, 0, 1.0);">
                            <div class="card-header" style="margin-bottom: 30px;">
                                <h3>Residents Login</h3>
                            </div>
                            <div class="card-content">
                                <form role="form" method="post" action="../pages/resident/login.php">
                                    <div class="form-group">
                                      <label for="txt_username" style="font-weight:600;">Username</label>
                                      <input type="text" class="form-control" style="border-radius:0px" name="txt_username" required placeholder="Enter Username">
                                    </div>
                                    <div class="form-group">
                                      <label for="txt_password" style="font-weight:600;">Password</label>
                                      <input type="password" required class="form-control" style="border-radius:0px" name="txt_password" placeholder="Enter Password">
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary btn-lg" name="btn_login">Log in</button>
                                    <label id="error" class="label label-danger pull-right"></label> 
                                  </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
         <?php
        include "connection.php";
        if(isset($_POST['btn_login']))
        { 
            $username = $_POST['txt_username'];
            $password = $_POST['txt_password'];



            $user = mysqli_query($con, "SELECT * from tblresident where username = '$username' and password = '$password' ");
            $numrow_user = mysqli_num_rows($user);

            if($numrow_user > 0)
            {
                while($row = mysqli_fetch_array($user)){
                  $_SESSION['role'] = $row['fname'];
                  $_SESSION['resident'] = 1;
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['username'] = $row['username'];
                }    
                header ('location: ../activity/activity.php');
            }
            else
            {
              echo '<script type="text/javascript">document.getElementById("error").innerHTML = "Invalid Account";</script>';
               
            }
             
        }
        
      ?>
        
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    
                    <h3>About Us</h3>
                </div>
            </div>
        </section>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-1.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Objective</h2>
                        <p class="lead mb-0" style="text-align:justify;">To inform our constituents of hazards within our barangay by putting ews signatures and training of the leaders and residents as well on how to be prepared when disaster occur. A well planned routes and prepared goods to respond the needs of the affected people and a livelihood programs and seminars to overcome trauma and poverty.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-2.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Our Goals</h2>
                        <p class="lead mb-0">
                            > A community-based oriented barangay<br>
                            > Malnutrition and Poverty reduction<br>
                            > Gender Equality<br>
                            > Environmental protection<br>
                            > Peace and unity<br>
                            > Accountability and transparency<br>
                            > Citizen Participation<br>
                            > Youth and Sports Development<br>
                            > Calamity Awareness<br>
                            > Contentment and Happiness<br>
                        </p>
                    </div>
                </div>
                <div class="row g-0" id="mission">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-3.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Mission</h2>
                        <p class="lead mb-0">
                            To deliver the basic services to our constituents effectivety   and effecienly,particularly:<br><br>

                            * The Children- To prepare them in their formal schooling.<br>
                            * The Familiy- To provide them to live in a healthy and happy homes.<br>
                            * The Community- A community which is environmental friendly, drug free,god fearing,peaceful,safe and a progressive Sagrada Familia.<br>


                        </p>
                    </div>
                </div>
                <div class="row g-0" id="vision">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-2.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Vision</h2>
                        <p class="lead mb-0 text-justify">
                          A council that is indefendent,effecient and worthy of public trust and confidence,educate and maintain proper communication and relay disaster management to the contituents to lessen its vulnerabilities
                
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">Barangay Officials</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                            <h5>Hon. Miguela M. Martinez</h5>
                            <p class="font-weight-light mb-0">Punong Barangay</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                            <h5>Hon. Dores S. Fabrega</h5>
                            <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg" alt="..." />
                            <h5>Hon. Anita O. Morada</h5>
                            <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                            <h5>Hon. Amado F. Ramboyong</h5>
                            <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                            <h5>Hon. Arnold Silverio T. San Antonio</h5>
                            <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg" alt="..." />
                            <h5>Hon. Facundo P. Zaballa</h5>
                            <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                            <h5>Hon. Laarni C. Sarto</h5>
                           <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                            <h5>Hon. Efren A. Levina</h5>
                            <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                            <h5>Hon. Jeffrey A. Sarto</h5>
<p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Contact Us</h2>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        

                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Admin Area</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container" style="margin-top:30px">
                  <div class=" col-md-offset-4">
                      <div class="panel panel-default">
                    <div class="panel-heading" style="text-align:center;">
                        <img src="../../img/logo.jpg" style="height:100px;"/>
                      <h3 class="panel-title">
                        <strong>
                            Welcome Administration!
                        </strong>
                      </h3>
                    </div>
                    <div class="panel-body">
                      <form role="form" method="post" action="http://localhost/bmis/login.php">
                        <div class="form-group">
                          <label for="txt_username">Username</label>
                          <input type="text" class="form-control" style="border-radius:0px" name="txt_username" required placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                          <label for="txt_password">Password</label>
                          <input type="password" required class="form-control" style="border-radius:0px" name="txt_password" placeholder="Enter Password">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary" name="btn_login">Log in</button>
                        <label id="error" class="label label-danger pull-right"></label> 
                      </form>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              
          </div>
        </div>

        <script type="text/javascript">
            /*$(document).ready(function(){
                $("#myBtn").click(function(){
                    $("#myBtn").modal();
                });
            });*/
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

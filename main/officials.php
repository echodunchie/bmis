<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>BSBMIS - <?php echo $setting['site_name']; ?></title>
<meta name="description" content="Welcome to Barangay Sagrada Familia Buhi Camarines Sur!">
   
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script>

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
<?php include "header.php"; ?>
    <!-- Hidden Sidebar -->

    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href=""><img src="assets/images/s.png" alt=""></a></div>
                    <div class="text">Welcome to the Fascinating Barangay of Buhi </div>
                </div>
                <!-- PDF Widget -->
               
           
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i> </span></a></div>
            </div>
        </div>
    </section>
    
    <!--Search Popup-->
    
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/sagrada.jpg);" >
       <div class="background-text">
            <div data-parallax='{"x": 80}'>
                <div class="text-1">Sagrada</div>
                <div class="text-2">Sagrada</div>
            </div>       

        </div>
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title"><br><br>
                        <h1></h1>
                    </div>
                        



                         <ul class="bread-crumb style-two">
                       
                        
                    </ul> 
                   
                </div>                    
            </div>
        </div>
    </section>
    <br>
    <br>
      

<section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">Barangay Officials</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/images/miguela.jpeg" width="200" height="200" />
                            <h5>Hon. Miguela M. Martinez</h5>
                            <p class="font-weight-light mb-0">Punong Barangay</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/images/doris.jpeg" width="150" height="150" />
                            <h5>Hon. Dores S. Fabrega</h5>
                            <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/images/anita.jpeg" width="150" height="150" />
                            <h5>Hon. Anita O. Morada</h5>
                            <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/images/amado.jpeg" width="150" height="150"/>
                            <h5>Hon. Amado F. Ramboyong</h5>
                            <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/images/arnold.jpeg" width="150" height="150"/>
                            <h5>Hon. Arnold Silverio T. San Antonio</h5>
                            <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/images/facundo.jpeg" width="150" height="150" />
                            <h5>Hon. Facundo P. Zaballa</h5>
                            <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/images/laarni.jpeg" width="150" height="150" />
                            <h5>Hon. Laarni C. Sarto</h5>
                           <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/images/efren.jpeg" width="150" height="150" />
                            <h5>Hon. Efren A. Levina</h5>
                            <p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/images/jeffrey.jpeg" width="150" height="150"/>
                            <h5>Hon. Jeffrey A. Sarto</h5>
<p class="font-weight-light mb-0">Barangay Kagawad</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/images/felrose.jpeg" width="150" height="150"/>
                            <h5>Ma. Felrose C. Sarto</h5>
<p class="font-weight-light mb-0">Barangay Secretary</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/images/noimy.jpeg" width="150" height="150" />
                            <h5>Noemy N. Fabcricante</h5>
<p class="font-weight-light mb-0">Barangay Treasurer</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/images/laarni.jpeg"width="150" height="150" />
                            <h5>Imelda N. Caceres</h5>
<p class="font-weight-light mb-0">Barangay Record keeper</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
       



</div></body></html>
 <?php include "footer.php"; ?>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

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


</body>


</html>

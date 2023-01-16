<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>
<?php
$images = mysqli_query($con,"SELECT * FROM images");
    $images  = mysqli_fetch_array($images);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>BSBMIS | Barangay Sagrada</title>

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
  

  
    <!-- End Main Header -->
<?php include "header.php"; ?>
    <!-- Hidden Sidebar -->

    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href=""><img src="assets/images/s.png"></a></div>
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
               
            </div>
        </div>
    </section>

    <!-- Who we are -->
    <section class="who-we-are-section">
        <div class="top-content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sec-title mb-30">
                            
                            <h2>Barangay <br> Sagrada Familia <br> Buhi <br> Camarines Sur</h2>
                            <h4><ul>Zone 1 - Sitio Bongsoran</ul>
                                <ul>Zone 2 - Sitio Minuro</ul>
                                <ul>Zone 3 - Sitio Centro</ul>
                                <ul>Zone 4 - Sitio Crossing</ul>
                                <ul>Zone 5 - Sitio Cagmanok</ul>
                                <ul>Zone 6 - Sitio Caunda</ul>
                                <ul>Zone 7 - Sitio Tawagan</ul>
                                <ul>Zone 8 - Sitio Pito, River side & Raquitan</ul>
                                <ul>Zone 9 - Sitio Ilawod</ul>
                            </h4>

                        </div>
                        <div class="experience-year">
                       
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-8">
                        <div class="image mb-30"><img src="assets/images/map.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overview">
            <div class="auto-container">
                <div class="wrapper-box">
                    <h2>OBJECTIVE</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text">
                                 <p href="objective:<?php  echo $setting['objective']; ?>"></p><?php  echo $setting['objective']; ?></div>

                           
                             <div class="col-lg-8">
                        <div class="image mb-30"></div>
                  
                           
                                <div class="video-btn">
                                    <a href="https://youtu.be/YwIzG8ho09M&amp;t=28s" class="overlay-link lightbox-image video-fancybox"><i class="flaticon-play-arrow"></i></a>
                                </div></div>
                               
                        </div>
                        <div class="col-lg-6">
                            <div class="row m-10">
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span></span>
                                            </div>
                                            <h4><br> 
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span></span>
                                            </div>
                                            <h5></h5>
                                            <div class="icon"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="icon"></div>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="309.7">0</span><span>ft</span>
                                            </div>
                                            <h5>Above Sea Level</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="94.4">0</span>                    <span>Meters</span>                        </div>
                                            <h5>Estimated Elevation </h5>
                                            <div class="icon"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Whychooseus section four -->
   


    <!-- Statement -->
     <div class="overview">
    <section class="statement-section pt-0">
        <div class="auto-container">
           
                        
                        <!-- Tab panes -->
                        <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Mission Statement</h2>
                                    </div>
                                   
                                    <div class="text">
                                        <div class="background-text">
                                        <div data-parallax='{"x": 80}'>
                                    <p href="mission<?php  echo $setting['mission']; ?>"></p><?php  echo $setting['mission']; ?></div>
 
                                    </div></div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Vision Statement</h2>
                                    </div>
                                    <div class="text">
                                        <div class="background-text">
                                        <div data-parallax='{"x": 80}'>
                                    <p href="vision<?php  echo $setting['vision']; ?>"></p><?php  echo $setting['vision']; ?></div>
                                    </div></div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Our Goals</h2>
                                    </div>
                                   <div class="text">
                                    <div class="background-text">
                                    <div data-parallax='{"x": 80}'>
                                    <p href="goal<?php  echo $setting['goal']; ?>"></p><?php  echo $setting['goal']; ?></div>
                                    </div></div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                                    <h4><i class="flaticon-up-arrow"></i>Mission</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Vision</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Goals</h4>
                                </a>
                            </li>
      
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
            </section>
</div>
   
   


    <!--Main Footer-->
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














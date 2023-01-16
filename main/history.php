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
    <br><br>
  
<section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('kids.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>SAGRADA FAMILIA</h2>
                        <p class="lead mb-0" style="text-align:justify;">As it was been told by our ancestor to our grand grandfather, to our lolos & lolas that our Barangay Sagrada Familia was the mother barangay of
Monte Calvario, San Jose Baybayon , San Rafael and Barangay Lourdes but we don’t have data of when it was segregated to the mother barangay
w/c is Sagrada. We just base it from some old folks. There are people who lives in Monte Calvario, San Rafael, Lourdes, San Jose Baybayon
studied and graduated at Sagrada Elementary School. In that time only the Barangay Sagrada Familia has an Elementary School. Even the Teniente
Del Barrio before and now Punong Barangay of Sagrada has no document papers or record pertaining to the segregation Barangay Monte Calvario
,Barangay San Rafael , San Jose Baybayon and Barangay Lourdes to Mother Barangay.</p>
                    </div>
                </div><br><br><br.
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('front.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2></h2>
                        <p>
Sagrada Familia is a barangay in the municipality of Buhi, in the province of Camarines Sur. Its population as determined by the 2020 Census was 4,577. This represented 5.63% of the total population of Buhi.

According to the 2015 Census, the age group with the highest population in Sagrada Familia is 10 to 14, with 517 individuals. Conversely, the age group with the lowest population is 80 and over, with 47 individuals.
                        </p>
                    </div>
                </div><br><br><br>
                <div class="row g-0" id="mission">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('3.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2></h2>
                        <p> The computed Age Dependency Ratios mean that among the population of Sagrada Familia, there are 65 youth dependents to every 100 of the working age population; there are 12 aged/senior citizens to every 100 of the working population; and overall, there are 77 dependents (young and old-age) to every 100 of the working population.
</p>

                        <p>The population of Sagrada Familia grew from 3,121 in 1990 to 4,577 in 2020, an increase of 1,456 people over the course of 30 years. The latest census figures in 2020 denote a positive growth rate of 1.74%, or an increase of 360 people, from the previous population of 4,217 in 2015.Sagrada Familia is situated at approximately 13.4159, 123.5140, in the island of Luzon. Elevation at these coordinates is estimated at 94.4 meters or 309.7 feet above mean sea level.


                        </p>
                    </div>
                </div><br><br>

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

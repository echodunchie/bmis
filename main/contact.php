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
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">



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
   

    <!-- Main Header -->
    <?php  include "header.php"; ?>

    <!-- End Main Header -->

    <!-- Hidden Sidebar -->
    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="index.php"><img src="assets/images/" alt=""></a></div>
                    <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that they cannot foresees the pain.</div>
                </div>
                <!-- PDF Widget -->
                <div class="pdf-widget sidebar-widget">
                    <div class="row">
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                    </div>                            
                </div>
                <!-- Contact Widget -->
                <div class="contact-widget">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-cursor"></span></div>
                        
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-calling"></span></div>
                        <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790"><?php $setting['map']; ?></a></div>
                    </div>
                   
                </div>
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Welcome! </span></a></div>
            </div>
        </div>
    </section>
    
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://st.ourhtmldemo.com/new/Transida2/index.php">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <section class="map-section">
        <div class="contact-map">
            <?php echo $setting['map'];  ?>
        </div>
    </section> 
    

    <!-- Contact Info section two -->
    <section class="contact-info-section-two">
        <div class="auto-container">
            <div class="nav-tabs-wrapper">
                <div class="nav nav-tabs tab-btn-style-two">
                    <div class="theme_carousel owl-theme owl-carousel" >
                    
                    </div>
                </div>
            </div>
            
            <div class="tab-content">
            
                <div class="tab-pane fadeInUp animated active" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="outer-box">
                                <h4><span class="flaticon-cursor"></span><?php echo $setting['address']; ?></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wrapper-box">
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-calling"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Phone</strong><a href="tel:<?php echo $setting['phoneh']; ?>"><?php echo $setting['phoneh']; ?></a></div>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon"><span class="flaticon-mail"></span></div>
                                                <div class="text-area">
                                                    <div class="text"><strong>Email</strong><a style="" href="mail:<?php echo $setting['email']; ?>"><?php echo $setting['email']; ?></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-box">
                                            
                                            <div class="text-area">
                                                <div class="text"><strong>Mon - Friday</strong>08.00 am to 5.00pm</div>
                                                
                                            </div>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        
      
        </div>
    </section>

    <!-- Contact form section -->
    <section class="contact-form-section" id="cform">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Drop a line</div>
                <h2>Hello Residents!</h2>
                <div class="text">Please do not hesitate to contact us if you require further information about our Barangay</div>
            </div>
            <center>
            <h4>COVID-19 HOTLINE</h4>
            <h6>
            <div class="phone-number"><i class="flaticon-calling"></i><a href="Phone #:<?php  echo $setting['phonea']; ?>"></a><?php  echo $setting['phonea']; ?></div></center><h6>
            
            <center><br>
             <h4>MUNICIPAL EPIDEMEOLOGICAL SURVEILLANCE UNIT (MESU)</h4>
             <h6>
            <div class="phone-number"><i class="flaticon-calling"></i><a href="Phone #:<?php  echo $setting['phoneb']; ?>"></a><?php  echo $setting['phoneb']; ?></div></center>
            </div></h6>
            <center><br>
            <h4>PUBLIC SAFETY OFFICE</h4>
            <h6>
            <div class="phone-number"><i class="flaticon-calling"></i><a href="Phone #:<?php  echo $setting['phonec']; ?>"></a><?php  echo $setting['phonec']; ?></div></center></h6>
            <center><br>
            <h4>BUHI EMERGENCY RESPONSE TEAM (BERT)</h4>
            <h6>
            <div class="phone-number"><i class="flaticon-calling"></i><a href="Phone #:<?php  echo $setting['phoned']; ?>"></a><?php  echo $setting['phoned']; ?></div></center></h6>
            
             <center><br>
            <h4>MUNICIPAL RISK REDUCTION MANAGEMENT OFFICE (MDRRMO)</h4>
            <h6>
            <div class="phone-number"><i class="flaticon-calling"></i><a href="Phone #:<?php  echo $setting['phonee']; ?>"></a><?php  echo $setting['phonee']; ?></div></center></h6>
             <center><br>
            <h4>BUHI PNP</h4>
            <h6>
            <div class="phone-number"><i class="flaticon-calling"></i><a href="Phone #:<?php  echo $setting['phonef']; ?>"></a><?php  echo $setting['phonef']; ?></div></center></h6>
            <center><br>
            <h4>BUHI FIRE STATION</h4>
            <h6>
            <div class="phone-number"><i class="flaticon-calling"></i><a href="Phone #:<?php  echo $setting['phoneg']; ?>"></a><?php  echo $setting['phoneg']; ?></div></center></h6>
            <center><br>
            <h4>BARANGAY HOTLINE</h4>
            <h6>
            <div class="phone-number"> <i class="flaticon-calling"></i><a href="Phone #:<?php  echo $setting['phoneh']; ?>"></a><?php  echo $setting['phoneh']; ?></div></center></h6>
            </div></center>
            <!--End Contact Form-->
        </div>
    </section>

  
    <!--Main Footer-->
<?php include "footer.php"; ?>

 
	
</div>
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














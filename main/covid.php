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

<!--covid tracker-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Simple Covid-19 cases tracker including number of deaths and recoveries."> 
        <meta name="keywords" content="covid-19 tracker, covid-19, covid-19 cases">
         <meta name="author" content="@RalphGutz_17"> 
         <title>COVID-19 Tracker</title> 
         <link rel="icon" type="img/png" href="icon/icon-2.png"> <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"> <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--> 
        <link rel="stylesheet" href="css/main.css"> 
        <script src="js/axios/axios.min.js"></script> 
        <script src="js/chartjs/chart-2.8.0.js"></script>
   
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="https://iamramengirl.github.io./gridlayout.css" />

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


<!---style--->
<style>
            @font-face {
                font-family: "MuseoSans";
                src: url("") format("opentype"),;
            }
            
            * { margin: 0; padding: 0; }
            #page-wrap { width: 960px; margin: 100px auto; }
            h1 { font: 36px Georgia, Serif; margin: 20px 0; }
            .group:after { visibility: hidden; display: block; font-size: 0; content: " "; clear: both; height: 0; }
            p { margin: 0 0 10px 0; }

            .tabs { list-style: none; }
            .tabs li { display: inline; }
            .tabs li a { color: black; float: left; display: block; padding: 4px 10px; margin-left: -1px; position: relative; left: 1px; background: white; text-decoration: none; }
            .tabs li a:hover { background: #ccc; }

            /* Generic styles & example one */
            .tabbed-area { margin: 0 0 120px 0; }
            .box-wrap { position: relative; min-height: 250px; }
            .tabbed-area div div { background: white; padding: 20px; min-height: 250px; position: absolute; top: -1px; left: 0; width: 100%; }
            .tabbed-area div div, .tabs li a { border: 1px solid #ccc; }
            #box-one:target, #box-two:target, #box-three:target { z-index: 1; }

            /* Stuff for example two */
            .cur-nav-fix { margin-top: 60px; }
            .cur-nav-fix .tabs { position: absolute; bottom: 100%; left: -1px; }
            .cur-nav-fix .tabs li a { background: -moz-linear-gradient(top, white, #eee); }
            #box-linear { z-index: 1; }
            #box-linear:target .tabs,
            #box-newcases:target .tabs,
            #box-confirmed-sma:target .tabs,
            #box-recoveries-sma:target .tabs,
            #box-deaths-sma:target .tabs { z-index: 5; }
            #box-linear:target, #box-newcases:target, #box-confirmed-sma:target,  #box-recoveries-sma:target, #box-deaths-sma:target { z-index: 5; }
            .cur-nav-fix .tabs li.cur a { border-bottom: 1px solid white; background: white; }
            
            .content {
                background: #fff;
                padding: 10px;
            }
            .title-text{ 
                font-family: 'Helvetica';
                font-size: 27px;
                margin-left: 10%;
            } 
            .updated-text{
                font-family: 'Helvetica';
                font-size: 12px;
                margin-left: 45%
            } 
            .date-text{ 
                font-family: 'Helvetica';
                font-size: 25px;
                font-weight: bold;
                margin-left: 30%
            }
            .box { 
                width: 150px; 
                height: 110px;
                border-radius:15px; 
                border-style: solid; 
                border-width: thin;
                margin: 0 auto;
                text-align:center;              
            }
            .confirmed { 
                background: rgb(235, 87, 87); 
                color: #fff; 
                border-style: solid; 
            } 
            .deaths { 
                background: rgb(255, 255, 255); 
                color: rgb(149, 163, 174); 
            }     
            .recovered { 
                background: rgb(255, 255, 255); 
                color: rgb(39, 174, 96); 
            }
            .active { 
                background: rgb(255, 255, 255); 
                color: rgb(66, 132, 247); 
            }
            .tests { 
                background: rgb(255, 255, 255); 
                color: rgb(240, 191, 43);
            }
            .counter-header { 
                font-family: 'Century Gothic'; 
                font-size: 14px; 
                font-weight: bold; 
                padding-top: 5px;
                white-space: nowrap;
            } 
            .counter-data { 
                font-family: 'Century Gothic'; 
                font-size: 35px; 
                font-weight: bold; 
                padding-top: 5px;
            }
            .counter-sub-data { 
                font-family: 'Century Gothic'; 
                font-size: 11px; 
                font-weight: bold; 
            }
            .map-widget {
                border: solid 1px;
                width: 900px;
                height: 460px;
                border-radius:8px;
                border-color: #d1d7db;
                overflow:hidden;
                font-size: 0;
                margin-left:8%;
            }
            .casesperday-widget {
                border: solid 1px;
                width: 1050px;
                height: 600px;
                border-radius:8px;
                border-color: #d1d7db;
                overflow:hidden;
                font-size: 0;
                margin-left:4%;
            }
            .percountrytrajectory-widget {
                border: solid 1px;
                width: 1000px;
                height: 500px;
                border-radius:8px;
                border-color: #d1d7db;
                overflow:hidden;
                font-size: 0;
                margin-left:4%;
            }
            .gender-box {
                width: 100%; 
                height: 170px;
                border-radius:10px; 
                border-style: solid; 
                border-width: thin;
                border-color:#d1d7db;
                margin-left:10%;
                padding: 3px;
            }
            .age-box {
                width: 110%; 
                height: 175px;
                border-radius:10px; 
                border-style: solid; 
                border-width: thin;
                border-color:#d1d7db;
            }
            .pct-header { 
                font-family: 'Century Gothic'; 
                font-size: 18px; 
                font-weight: bold; 
                padding-top: 10px;
                padding-left: 10px;
                white-space: nowrap;
                text-align: left;
            } 
            .pct-data-gender { 
                font-family: 'Century Gothic'; 
                font-size: 40px; 
                font-weight: bold;
                padding-top: 10px;
                text-align: center;
            }
            .pct-data-age { 
                font-family: 'Century Gothic'; 
                font-size: 40px; 
                font-weight: bold;
                padding-top: 40px;
                padding-left: 20px;
                text-align: left;
            }
            .pct-data-age-label { 
                font-family: 'Century Gothic'; 
                font-size: 12px; 
                text-align: left;
                font-weight: normal;
                padding-top: 0px;
                margin-top: 0px;
            }
            .barchartage-widget {
                width: 530px;
                height: 160px;
                position: relative;
                top: -120px;
                left: 130px;
                background: transparent
            }
            .pct-sign {
                font-family: 'Helvetica'; 
                font-size: 30px; 
            }
            .pct-gt {
                font-size: 55px;
                color: #eb5757;
                font-weight: bold;
            }
            a {text-decoration: none;}
            a:visited{
                color:#474641;
            }
            .footer{
                font-size: 12px;
                color: #474641;
                font-weight: normal;
                text-align: center;
            }
        </style>
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
        </div> -->
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title"><br><br>
                        
                    </div>
                        
                    </ul> 
                   
                </div>                    
            </div>
        </div>
    </section>
    <br>
    <br>

<div class="grid grid-pad">
            <div class="col-1-2 mobile-col-1-2">
                <div class="content">
                    <div class='updated-text'>&nbsp;</div>
                    <div class="title-text">PHILIPPINES COVID-19 STATISTICS</div>
                </div>
            </div>
           
        <!-- Heatmap -->
        <div class="grid grid-pad">
            <div class="col-1-1 mobile-col-1-1 push-1-1">
                <div class="content">
                    <div class="map-widget">
                        <iframe src="https://iamramengirl.github.io./heatmap.html" style="margin:0; padding:0; left:-10px; top:-10px; position:relative; width:960px; height: 470px; background-color: transparent;" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cases Per Day -->
        <center>
         <a href="https://www.statista.com/statistics/1100765/philippines-coronavirus-covid19-cases/" rel="nofollow"><img src="https://www.statista.com/graphic/1/1100765/philippines-coronavirus-covid19-cases.jpg" alt="Statistic: Key figures of the coronavirus (COVID-19) in the Philippines as of September 23, 2022 (in 1,000s) | Statista" style="width: 100%; height: auto !important; max-width:1000px;-ms-interpolation-mode: bicubic;"/></a><br />
</center>
   
        <!-- Footer -->
        <div class="grid grid-pad">
            <div class="col-1-1">
                <div class="content">
                    <div class="footer">
                        Data Source: <a href="https://www.worldometers.info/coronavirus/">Worldometers</a>&nbsp;&#9671;&nbsp;<a href="https://github.com/CSSEGISandData/COVID-19"></a>
                    </div>
                    
                </div>
            </div>
        </div>

        <script>
            // Date
            document.getElementById("lastupdatedt").innerHTML = "(Thur) May 14, 2020";
            // Stats
            var statsjson = '{"confirmed":"11,876", "recovered":"2,337", "deaths":"790", "active":"8,749", "tests": "189,469", "pop":"0.011", "cfr":"6.65", "crr":"19.68", "pctfemale":46, "pctmale":54, "youngest":0, "oldest":101}';
            var statsobj = JSON.parse(statsjson);
            document.getElementById("confirmed").innerHTML = statsobj.confirmed;
            document.getElementById("pop").innerHTML = statsobj.pop;
            document.getElementById("deaths").innerHTML    = statsobj.deaths;
            document.getElementById("recovered").innerHTML = statsobj.recovered;
            document.getElementById("active").innerHTML = statsobj.active;
            document.getElementById("tests").innerHTML = statsobj.tests;
            document.getElementById("cfr").innerHTML = statsobj.cfr;
            document.getElementById("crr").innerHTML = statsobj.crr;
            document.getElementById("pctfemale").innerHTML = statsobj.pctfemale;
            document.getElementById("pctmale").innerHTML = statsobj.pctmale;
            document.getElementById("youngest").innerHTML = statsobj.youngest;
            document.getElementById("oldest").innerHTML = statsobj.oldest;
        </script>



        <iframe src="https://www.worldometers.info/coronavirus/" width="1150" height="1150"></iframe>
        <style="margin: 50px;">
         <div class="row"> <div class="col-md-9"> <h3>What is Covid-19?</h3> <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p> <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment. Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p> <br> <h3>Prevention is better than cure</h3> <p>To prevent infection and to slow transmission of COVID-19, do the following:</p> <ul> <li>Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.</li> <li>Maintain at least 1 metre distance between you and people coughing or sneezing.</li> <li>Avoid touching your face.</li> <li>Cover your mouth and nose when coughing or sneezing.</li> <li>Stay home if you feel unwell.</li> <li>Refrain from smoking and other activities that weaken the lungs.</li> <li>Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people.</li> </ul> </div> <div class="col-md-3"> <img src="images/coronavirus-vector.png" class="img-fluid" alt=""> </div> </div> <br> <hr> </style="margin:>


           


    </body>




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

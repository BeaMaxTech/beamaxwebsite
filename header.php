<?php 

$companyName = "BeaMaxTech ICT";
$companyEmail = "support@beamaxtech.com";
$companyPhone1 = "09168815815";
$companyPhone2 = "09074771141";
$companyAddress = "26 Enugu road opposite keystone Bank Nsukka";
$company_name = $companyName;
$company_logo = "https://beamaxtech.com/assets/images/beamax_logo.png";



?>



<!DOCTYPE html>
<html lang="zxx">  
    
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title><?php echo $companyName ?></title>
        <meta name="description" content="BeaMaxTech ICT ACADEMY, 
        <br> Web developmet, App Development,Softeware Development, Animation, Tech Services">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="assets/css/rsmenu-main.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="defult-home">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container"></div>
        </div>
        <!--Preloader area End here--> 
     
		<!-- Main content Start -->
        <div class="main-content">
            
            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header style2 btn-style">
                    <!-- Topbar Area Start -->
                    <div class="topbar-area style2">
                       <div class="container">
                           <div class="row y-middle">
                               <div class="col-lg-8">
                                   <ul class="topbar-contact">
                                       <li>
                                           <i class="flaticon-email"></i>
                                           <a href="mailto:<?php echo $companyEmail ?>"><?php echo $companyEmail ?></a>
                                       </li>
                                       <li>
                                           <i class="flaticon-call"></i>
                                           <a href="tel:<?php echo $companyPhone1 ?>"> <?php echo $companyPhone1 ?></a>
                                       </li>
                                       <li>
                                           <i class="flaticon-location"></i>
                                           <?php echo $companyAddress ?>
                                       </li>
                                   </ul>
                               </div>
                               <div class="col-lg-4 text-right">
                                   <div class="toolbar-sl-share">
                                       <ul>
                                            <li class="opening"> <em><i class="flaticon-clock"></i> 08:00am-5:00pm</em> </li>
                                            <li><a href="https://web.facebook.com/profile.php?id=100092396434963"><i class="fa fa-facebook"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                    <!-- Topbar Area End -->
                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="logo-part">
                                        <a href="index"><img src="assets/images/beamax_logo.png" alt=""></a>
                                    </div>
                                    <div class="mobile-menu">
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close secondary">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-right">
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <nav class="rs-menu pr-90 md-pr-0">
                                               <ul class="nav-menu">
                                                    <li class="rs-mega-menu  current-menu-item"> 
                                                        <a href="index">Home</a>
                                                       
                                                    </li>
                                                   <li>
                                                       <a href="about">About</a>
                                                   </li>
                                                   <li class="menu-item-has-children">
                                                       <a href="#">Services</a>
                                                       <ul class="sub-menu">
                                                           <li><a class="ml-3" href="ict_academy">ICT Academy</a> </li>
                                                           <li><a class="ml-3" href="web_development">Web Development</a> </li>
                                                           <li><a class="ml-3" href="app_development">App Development</a> </li>
                                                           <li><a class="ml-3" href="graphic_design">Graphics Design</a></li>
                                                           <li><a class="ml-3" href="consultancy">Consultancy</a> </li>
                                                          
                                                       </ul>
                                                   </li>
                                                   
                                                   
                                                   <li>
                                                      <a href="contact_us">Contact</a>
                                                   </li>
                                               </ul> <!-- //.nav-menu -->
                                            </nav>                                         
                                        </div> <!-- //.main-menu -->
                                        <div class="expand-btn-inner search-icon hidden-md">
                                            <ul>
                                                <!-- <li class="sidebarmenu-search">
                                                    <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                        <i class="flaticon-search"></i>
                                                    </a>
                                                </li> -->
                                                <li><a class="quote-btn" href="tel:<?php echo $companyPhone1 ?>">Call us</a></li>
                                            </ul>
                                        </div>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End --> 
                </header>
                <!--Header End-->
                    <!-- Canvas Menu start -->
                    <nav class="right_menu_togle hidden-md">
                    <div class="close-btn"><span id="nav-close" class="text-center"><i class="fa fa-close"></i></span></div>
                    <div class="canvas-logo">
                        <a href="index"><img src="assets/images/beamax_logo.png" alt="logo"></a>
                    </div>
                    <!-- <div class="offcanvas-text">
                        <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English.</p>
                    </div> -->
                    <div class="canvas-contact">
                        <h5 class="canvas-contact-title">Contact Info</h5>
                        <ul class="contact">
                            <li><i class="fa fa-globe"></i><?php echo $companyAddress ?></li>
                            <li><i class="fa fa-phone"></i><?php echo $companyPhone1 ?></li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $companyEmail ?>"><?php echo $companyEmail ?></a></li>
                            <li><i class="fa fa-clock-o"></i>8:00 AM - 5:00 PM</li>
                        </ul>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </div>
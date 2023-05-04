<?php
require "header.php";
?>
            <!--Full width header End-->
         
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img3">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Web Development</h1>
                    <ul>
                        <li title="<?php echo $companyName ?> - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="index">Home</a>
                        </li>
                        <li title="Go To Services">
                            <a class="active" href="index">Services</a>
                        </li>
                        <li>Graphics Design</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Services Single Start -->

            <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
               <div class="container">
                    <div class="row">
                        <div class="col-lg-8 md-mb-50">
                            <!-- <div class="services-img">
                                <img src="assets/images/services/single/1.jpg" alt="">
                            </div> -->
                            <h2 class="mt-34">Graphics Design</h2>
                            <p>
                            Graphics design is the art of creating visual content to communicate messages to a specific audience. 
                            It is a broad field that encompasses a range of techniques and mediums, including digital design, print design, advertising, branding, packaging, and web design.

                            </p>
                            <p>
                            Overall, graphics design is an exciting and rewarding field that requires a combination of creativity, technical skill, and a strong understanding of the target audience.
                             Whether you are designing a logo, creating a website, or developing an advertising campaign, the goal of graphic design is always the same: to communicate a message effectively through visual content.
                            </p>
                            <p>
                            The field of graphic design is constantly evolving, with new technologies and trends emerging all the time.
                            </p>
                            <b>
                                At <?php echo $companyName ?>, we design and teach how to design banners, logos, motion graphics etc with different graphic design tools
                            </b>
                            <div class="container row">
                                <div class="col-md-6">
                            <ul class="listing-style">                              
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span>ADOBE ILLUSTRATOR</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span>COREL DRAW</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span>PHOTOSHOP </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    <span>AFTER EFFECT</span>
                                </li> 
                                
                                                               
                            </ul>

                            </div>

                            <div class="col-md-6">
                            <!-- content goes here -->

                            </div>


                            </div>
                          
                             <!-- Skillbar Section Start -->
                             <?php
                             
                             require "rating.php";
                             
                             ?>
                           
           
                            <!-- Skillbar Section End -->
                           
                            
                            <!-- Testimonial Section Start -->
                           
                            <!-- Testimonial Section End -->
                        </div>
                        <?php

                        require "side_bar.php";
                        
                        ?>
                        
                    </div> 
               </div> 
            </div>
            <!-- Services Single End -->

            <!-- Cta section start -->
            
            <!-- Cta section end -->

        </div> 
        <!-- Main content End -->
     
        <!-- Footer Start -->
        <?php

        require "footer.php";
        
        ?>
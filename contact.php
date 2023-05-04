<?php 

require "header.php";


$name = "";
$subject = "";
$phone = "";
$email = "";
$message1 = "";
$msg = "";


if(isset($_POST['submit-form'])){
  $email = $_POST['email'];
  $message1 = $_POST['message'];
 $body = $_POST['message'];
   $subject ="Enquiry"; //$_POST['subject'];
   $phone = $_POST['phone'];
   $name = $_POST['name'];
   if(strlen($subject) > 2 && strlen($body)>2){
//$email =  $company_email; // enter the users email here
$subject = 'Enquiry ';

   $msg2 = "<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title></title>
    <style type='text/css'>
        body{
            margin: 20px;
        }
        .head{
            height: 50px;
            padding: 20px;
            background-color: #152238;

        }
        .body{
            padding: 20px;
            background-color: #F8F4E6;
        }
        .logo{
            height: 50px;
        }
        .footer{
            background-color: #152238;
            height: 100px;
            color: white;
            padding: 20px;

        }
        .block{
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class='head'>
       $company_logo
        
    </div>
    <div class='body'>
        
        
        <h2>
            Hello Admin, a user sent a message

        </h2>

        <h4>
            VargoFarm
        </h4>

        <p class='block'>
            <b></b>
                 Email : $email,
                 <br>
                 Name : $name,
                 <br>
                 Message : $body
                 
                    
</p>

        
    </div>

    <div class='footer'>
        <p>
            
        </p>
        
    </div>

</body>
</html>";

require 'mail.php';



$sent = 1;

 if($sent){

    echo $msg = "<div class='alert alert-success text-center'>Message sent successfully</div>";

//  echo  $msg = "
//                 <script>
//                 alert('Message successfully sent')
//                 </script>
//                 ";
 }else{
    echo $msg = "<div class='alert alert-danger text-center'>Message sending failed</div>";

//   echo  $msg = "
//                 <script>
//                 alert('Message sending failed')
//                 </script>
//                 ";

}

}else{
   echo $msg = "<div class='alert alert-danger text-center'>Please fill the fields</div>";

}
}

?>



            <!--Full width header End-->
         
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img3">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Contact</h1>
                    <ul>
                        <li title="BeaMaxTech - IT Solutions and Technology">
                            <a class="active" href="index">Home</a>
                        </li>
                       <li>Contact</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Contact Section Start -->
            <div class="rs-contact pt-120 md-pt-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 md-mb-60">
                           <div class="contact-box">
                                <div class="sec-title mb-45">
                                    <span class="sub-text new-text white-color">Let's Talk</span>
                                    <h2 class="title white-color">Speak With Our Experts.</h2>
                                </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-home"></i>
                                   </div>
                                   <div class="address-text">
                                        <span class="label">Email:</span>
                                        <a href="tel:<?php echo $companyEmail ?>"><?php echo $companyEmail ?></a>
                                   </div>
                               </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-phone"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Phone:</span>
                                       <a href="mailto:<?php echo $companyPhone1 ?>"><?php echo $companyPhone1 ?></a>
                                   </div>
                               </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-phone"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Phone2:</span>
                                       <a href="mailto:<?php echo $companyPhone2 ?>"><?php echo $companyPhone2 ?></a>
                                   </div>
                               </div>
                               <div class="address-box">
                                   <div class="address-icon">
                                       <i class="fa fa-map-marker"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Address:</span>
                                       <div class="desc"><?php echo $companyAddress ?></div>
                                   </div>
                               </div>
                           </div>
                        </div> 
                        <div class="col-lg-8 pl-70 md-pl-15">
                            <div class="contact-widget">
                               <div class="sec-title2 mb-40">
                                   <span class="sub-text contact mb-15">Get In Touch</span>
                                   <h2 class="title testi-title">Fill The Form Below</h2>

                               </div>
                                <div id="form-messages"></div>
                                <form id="contact-fo" method="post" action="">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div> 
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                            </div>   
                                            <div class="col-lg-12 mb-30 col-md-12 col-sm-12">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                            </div>   
                                            <!-- <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="website" name="website" placeholder="Your Website" required="">
                                            </div> -->
                                      
                                            <div class="col-lg-12 mb-30">
                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">                                            
                                            <div class="form-group mb-0">
                                                <input class="readon learn-more submit" type="submit" name="submit-form" value="Submit Now">
                                            </div>
                                        </div> 
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="map-canvas pt-120 md-pt-80">
                    <iframe src="https://maps.google.com/maps?q=rstheme&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                </div>  -->
            </div>
            <!-- Contact Section Start -->

        </div> 
        <!-- Main content End -->
     
        <!-- Footer Start -->

        <?php
      require "footer.php";

      ?>
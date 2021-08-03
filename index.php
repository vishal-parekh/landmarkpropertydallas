<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sell your home now! | DFW</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="static/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->


    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/owl.carousel.min.css">
    <link rel="stylesheet" href="static/css/magnific-popup.css">
    <link rel="stylesheet" href="static/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/themify-icons.css">
    <link rel="stylesheet" href="static/css/nice-select.css">
    <link rel="stylesheet" href="static/css/flaticon.css">
    <link rel="stylesheet" href="static/css/gijgo.css">
    <link rel="stylesheet" href="static/css/animate.css">
    <link rel="stylesheet" href="static/css/slick.css">
    <link rel="stylesheet" href="static/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="static/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                    <img src="static/img/logored.png" alt="" height ="65px" width = "250px">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block" >
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="#home">home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#our-services">Our Services</a></li>
                                        <li><a href="#contact-us">Sell Your Home</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            <div class="social_wrap d-flex align-items-center justify-content-end">
                                <div class="number">
                                    <p>Call us at:  <a href="#">214-727-0201</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area" id ="home">
        <div class="slider_active owl-carousel">
            <div class="single_slider align-items-center slider_bg_1 overlay" text-align-center”>
                        <div class="col-md-x">
                            <div class="slider_text" id ="contact-us">
                                <span></span>
                                <h3>Need To Sell Your Dallas - Fort Worth House Fast?</h3>
                                    <ul>
                                      <li>NO fees or commissions</li>
                                      <li>We can close quickly (as soon as 5 days if necessary)</li>
                                      <li>We buy AS-IS… so no repairs necessary</li>
                                    </ul>
                            </div>
                        </div>
                
                        <div class="col-md-x" >
                            <form class="form-contact contact_form" action="contactform.php" method="post" id="contactForm" novalidate="novalidate">
                                <?php 
                                $Msg = "";
                                if(isset($_GET['error']))
                                {
                                    $Msg = " Please Fill in the Blanks ";
                                    echo '<div class="alert alert-danger">'.$Msg.'</div>';
                                }

                                if(isset($_GET['success']))
                                {
                                    $Msg = " Your Message Has Been Sent ";
                                    echo '<div class="alert alert-success">'.$Msg.'</div>';
                                }
                            
                                ?> 
                                <div class="col-12x">
                                    <div class="form-group">
                                        <div style="text-align: center;">
                                        <span style="text-decoration: underline;display: inline-block" ><h6>No hassles</h6></span>.&nbsp;
                                        <span style="text-decoration: underline;display: inline-block"><h6> No obligation </h6></span>.&nbsp;
                                        <span style="text-decoration: underline;display: inline-block"><h6>Fair Offer Guarantee</h6></span>.&nbsp;
                                        </div>
                                        <h6><strong>Just Complete This Quick Form!</strong></h6>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group" >
                                        <input class="form-control"  id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name*'" placeholder="Name*" class ="asterisk" name = "name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group" >
                                        <input class="form-control" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number*'" placeholder="Phone Number*" name = "phonenumber">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control"id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email*'" placeholder="Email*" name ="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Home Address*'" placeholder="Full Home Address*" name ="homeaddress">
                                    </div>
                                </div>
                            <div class="form-group mt-3">
                                <ul style="text-align:center;"><button type="submit" name = "submit" class="button button-contactForm boxed-btn">Send</button></ul>
                            </div>
                        </form>
                        </div>
        </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <!-- about_area_start  -->
    <div class="about_area" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about_exp d-flex align-items-center justify-content-center">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_info pl-70">
                        <div class="section_title mb-55">
                            <h3>Landmark <br>
                                <span>Property Group</span></h3>
                            <div class="devider">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="info_inner">
                            <h2>We can:</h2>
                            <ul>
                                <li>Buy your home for a fair price</li>
                                <li>Save you from forclosure</li>
                                <li>Help pay your down payment</li>
                            </ul>
                            <div class="customer_info d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end  -->

    <!-- our_facilitics_area_start  -->
    <div class="our_facilitics_area" id ="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center white_title mb-80">
                        <h3>Our Services</h3>
                        <div class="devider">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-sketch"></i>
                        </div>
                        <h3>Quick & Simple Solution</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-hotel"></i>
                        </div>
                        <h3>Temporary Relocation</h3>
                        <p>We can provide you temporary housing after you sell your home to help you readjust.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-headset"></i>
                        </div>
                        <h3>Experience & Trust</h3>
                        <p>Prompt, response communication for every seller and buyer.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_facilitics_area_end  -->


    <!-- quotation_area_start  -->
    <div class="quotation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quotation_text d-flex align-items-center justify-content-between">
                        <div class="quotation_info">
                            <h3>Get an offer on  <br>your home today!
                                </h3>
                                <p>Fill out the contact form via the link below</p>
                            <a href="#" class="boxed-btn3">Contact Us</a>
                        </div>
                        <div class="sayhello d-flex align-items-center">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="num">
                                <span>Call us now:</span>
                                <h3>214-727-0201</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- testimonial_area  -->
        <div class="testimonial_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_active owl-carousel">
                            <div class="single_carousel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <div class="single_testmonial text-center">
                                            <div class="author_thumb">
                                                <img src="static/img/circle-cropped.png" alt="">
                                            </div>
                                            <div class="testmonial_author">
                                                <h3>Nayan Parekh</h3>
                                                <span>Real Estate Agent</span>
                                            </div>
                                            <p>“We value building trust through clear communication and use that as leverage to drive our business relationships. I am personally involved in each stage of the process from first contact to closing.”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /testimonial_area  -->
    <!-- footer_start  -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        
                    </div>

                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget ">
                            <h3 class="footer_title">
                                Quick Links
                            </h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Newsletter
                            </h3>
                            <p class="newsletter_text">
                                Sign up for great deals on homes in the DFW area!
                            </p>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit"> <i class="fa fa-paper-plane"></i> </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-lg-8">
                        <p class="copy_right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->


    <!-- JS here -->

    <!--contact js-->

    <script>
    jQuery(document).ready(function(){
        var content = jQuery('input:text').attr('placeholder');
        jQuery('input:text').attr('placeholder',content+'*');
      });
    </script>
    <script src="{% static 'js/contact.js' %}"></script>
    <script src="{% static 'js/jquery.ajaxchimp.min.js' %}"></script>
    <script src="{% static 'js/jquery.form.js' %}"></script>
    <script src="{% static 'js/jquery.validate.min.js' %}"></script>
    <script src="{% static 'js/mail-script.js' %}"></script>


    <script src="static/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="static/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="static/js/popper.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/owl.carousel.min.js"></script>
    <script src="static/js/isotope.pkgd.min.js"></script>
    <script src="static/js/ajax-form.js"></script>
    <script src="static/js/waypoints.min.js"></script>
    <script src="static/js/jquery.counterup.min.js"></script>
    <script src="static/js/imagesloaded.pkgd.min.js"></script>
    <script src="static/js/scrollIt.js"></script>
    <script src="static/js/jquery.scrollUp.min.js"></script>
    <script src="static/js/wow.min.js"></script>
    <script src="static/js/nice-select.min.js"></script>
    <script src="static/js/jquery.slicknav.min.js"></script>
    <script src="static/js/jquery.magnific-popup.min.js"></script>
    <script src="static/js/plugins.js"></script>
    <script src="static/js/gijgo.min.js"></script>
    <script src="static/js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="static/js/contact.js"></script>
    <script src="static/js/jquery.ajaxchimp.min.js"></script>
    <script src="static/js/jquery.form.js"></script>
    <script src="static/js/jquery.validate.min.js"></script>
    <script src="static/js/mail-script.js"></script>


    <script src="static/js/main.js"></script>
</body>
</html>
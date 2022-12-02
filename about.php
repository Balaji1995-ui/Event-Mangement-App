<?php 
include "admin/conn.php";

$cats= mysqli_query($con,"SELECT*FROM header where id='1'");
 $cat =mysqli_fetch_array($cats);


$settings= mysqli_query($con,"select * from settings where id='1'");
$setting =mysqli_fetch_array($settings);
?>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>About | <?php echo $setting['site_name']?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/<?php echo $setting['title_logo']?> ">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                        <a href="index.php"><img src="assets/img/logo/<?php echo $setting['header_logo']?>" alt="<?php  echo $setting['site_name']; ?>" width="60%"/></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="Event.php">Gallery</a></li>
                                            <li><a href="schedule.php">Schedule</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                            
                                            <li><a href="about.php">About</a>
                                                <ul class="submenu">
                                                <li><a href="Service.php">Services</a></li>
                                                
                                                </ul>
                                            </li>
                                 
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                            </div>

   

                            <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                <a data-toggle="modal" data-target="#myModal"  class="btn header-btn text-white">Get Your Ticket</a>
                            </div>
                        </div>
                    </div>   
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>


<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                   <a href="index.php"><img src="assets/img/logo/<?php echo $setting['header_logo']?>" alt="<?php  echo $setting['site_name']; ?>" width="60%"/></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? About Law Start-->
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>MSK (MOMENTS SAPPHIRE KIOSK)</h2>
                            <span class="text-bold"> ISO Certified company as a professional event
management company</span>
                        </div>
                        <p class="text-justify">Our MSK team develops ideas and concepts to translate and connect with your
audiences. We specialise in Branding events , exhibition stands, Corporate parties,
Birthday parties, Wedding management, Theme parties, School and college events, In
wedding Ganga Aarti and many more.
</p>
                        <p class="text-justify">Our hand holds you through the process of selecting unique work techniques and
pinnacle class entertainment to make your events memorable and perfect. We create
the most impactful experience possible for your audience and Guests.
MSK provides a perfection level of Moments planning and hospitality including
innovating concepts, positive approach, work ethics and integrity. We are uplift for
creating themes as per requirement and within a tight budget and assigned time.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <!-- <div class="caption-icon">
                                    <span class="flaticon-communications-1"></span>
                                </div> -->
                                <!-- <div class="caption">
                                    <h5>Where</h5>
                                    <p></p>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <!-- <div class="caption-icon">
                                    <span class="flaticon-education"></span>
                                </div> -->
                                <!-- <div class="caption">
                                    <h5>When</h5>
                                    <p></p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="btn mt-50">Get Your Ticket</a> -->
                </div>
                    <!-- about-img -->
                <div class="col-lg-6 col-md-12">
                
                    <div class="about-img ">
                    <div class="about-font-img d-none d-lg-block">
                            <img src="assets/img/header/<?php echo $cat['blog_img1']?>" alt="">
                        </div>
                        <div class="about-back-img ">
                            <img src="assets/img/header/<?php echo $cat['blog_img2']?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_area section-padding">
            <div class="container">
       <h1 class="text-center m-0 p-2"> </h1>
          
                <div class="row">
                
                    <div class="col-lg-5 mb-3 mb-lg-0">
                        <div class="blog_left_sidebar">
                  

                            <article class="blog_item">
                                <div class="blog_item_img">
                                  
                                    <h2>VISION AND MISSION</h2>
                                    <p class="text-justify">MSK has a clear vision itself as the first choice of every one when a person comes to the
planning of their big Day, ensuring the client's satisfaction and loyalty. As every event
has to be a perfect social, technical and creative fit.
</p>
<p class="text-justify">To be the International leading Event Organisation Company, that delivers high quality,
value driven services while focusing on the uniqueness of the way our clients project.
</p>
                                </div>
                               
                            </article>
                        
                           
                            
                             
                            
                        </div>
                    </div>
                    <div class="col-lg-2"></div>

                  <div class="col-lg-5">
                        <div class="blog_right_sidebar">
                            <aside class="search_widget">
                            <div class="blog_item_img">
                        <h2>Why Choose MSK (Moments Sapphire Kiosk)</h2>
<p class="text-justify">

Outstanding and Long-lasting client relation.
We work with Accuracy and have 100% work attention the whole of the event.
Premium Quality and Innovation solutions.
No surprise regarding Budget and Time, we have full Financial control.
The members of our team have good and long term experience in this industry.

</p>
                                    
                                </div>
                            </aside>
                            <br/>
                        
                            <!--   <asside class="p-1">
                            <div class="blog_item_img">
                            <!-- <video width="780" height="450" controls>
                  <source src="assets/videos.mp4" type="video/mp4">
                  <source src="videos.mp4" type="video/ogg">

                      </video> -->
                      <!-- <iframe width="780" height="450"src="https://www.youtube.com/embed/rD3e6avEOKc" 
                        title="RISK Conference 2019 - Official Event Highlight Video" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                         allowfullscreen></iframe>
                                </div>
                            </aside>
                           
                            <asside class="p-1">
                            <div class="blog_item_img">
                            <img class="card-img rounded-0" src="assets/img/blog/single_blog_5.png" alt="">
                                    
                                </div>
                            </aside>
                        </div>
                      
                    </div> -->
                                              
                    <!-- <asside class="p-1 col-lg-4">
                            <div class="blog_item_img">
                            
                            <img class="card-img rounded-0 " src="assets/img/blog/single_blog_4.png" alt="">
                                </div>
                            </aside>
                           
                        
                           
                           
                         
                         
                </div>
            </div> --> 
            
        </section>


    <!-- About Law End-->
    <!-- accordion End -->
    <!--? gallery Products Start -->
    <div class="gallery-area fix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/<?php echo $cat['Event_Day1a']; ?>);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/<?php echo $cat['Event_Day1_con1']; ?>);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/<?php echo $cat['Event_Day1']; ?>);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/<?php echo $cat['Event']; ?>);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                             <div class="gallery-img " style="background-image: url(assets/img/gallery/<?php echo $cat['Event_Day1_para']; ?>);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/<?php echo $cat['Event_Day1_sha']; ?>);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery Products End -->
    <!--? Pricing Card Start -->
    <!-- <section class="pricing-card-area section-padding2">
        <div class="container">
            <!-- Section Tittle -->
            <!-- <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="section-tittle text-center mb-100">
                        <h2>Program Pricing</h2>
                        <p>There arge many variations ohf passages of sorem gp ilable, but the majority have ssorem gp iluffe.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <span>Day - 1</span>
                            <h4>$ 05.00</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Increase traffic 50%</li>
                                <li>E-mail support</li>
                                <li>10 Free Optimization</li>
                                <li>24/7  support</li>
                            </ul>
                            <a href="services.html" class="black-btn">View Spackert</a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card active text-center mb-30">
                        <div class="card-top">
                            <span>Day - 1,2,3</span>
                            <h4>$ 08.00</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Increase traffic 50%</li>
                                <li>E-mail support</li>
                                <li>10 Free Optimization</li>
                                <li>24/7  support</li>
                            </ul>
                            <a href="services.html" class="black-btn">View Spackert</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <span>Day - 1,2</span>
                            <h4>$ 06.00</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Increase traffic 50%</li>
                                <li>E-mail support</li>
                                <li>10 Free Optimization</li>
                                <li>24/7  support</li>
                            </ul>
                            <a href="services.html" class="black-btn">View Spackert</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --> 
    <!-- Pricing Card End -->


    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">

      <form method="post" action="login.php">
        <h1 class="text-center">Login</h1>
        <div class="card-header">
             <div class="form-group">
                 
                <input class="form-control" name="email"  type="text" class="form-control" placeholder="EMail or Phone">
                   
      </input>
                </div>
                <br/>
                <div class="form-group">
                 
                 <input class="form-control" name="pass"  type="password" class="form-control" placeholder="password">
                    
       </input>
                 </div>
                 <br/>
                 <input type="submit"  name="submit" class="btn-secondary"></input><br/> <br/> <span class="fs-3 text-danger">Are you new user?</span>
<a  href="Signup.php" type="button" class="btn-danger">Sign Up</a>
            </div>
</form>

        </div>
        <div class="modal-footer">
          <button type="button  text-dark" class="bg-warning" data-dismiss="modal">Close</button>
        </div>
      </div>
    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-20">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>About Us</h4>
                                 <div class="footer-pera">
                                     <p><?php echo $setting['fot_about']; ?></p>
                                </div>
                             </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                        <p>Address :<?php echo $setting['address']; ?></p>
                                    </li>
                                    <li><a href="#">Phone :<?php echo $setting['phone']; ?></a></li>
                                    <li><a href="#">Email : <?php echo $setting['email']; ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-0">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="about.php"> View Project</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                 <p><?php echo $setting['footer_desc']?></p>
                             </div>
                             <!-- Form -->
                             <div class="footer-form" >
                                 <div id="mc_embed_signup">
                                     <form target="_blank" action="sendmail.php"
                                     method="get" class="subscribe_form relative mail_part">
                                         <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = ' Email Address '">
                                         <div class="form-icon">
                                             <button type="submit" name="submit" id="newsletter-submit"
                                             class="p-3 email_icon newsletter-submit button-contactForm"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                         </div>
                                         <div class="mt-10 info"></div>
                                     </form>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  -->
               <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <!-- logo -->
                        <div class="footer-logo mb-20">
                        <a href="index.html"><img src="assets/img/logo/<?php echo $setting['footer_logo']?>" alt="" width="40%"/></a>
                        </div>
                    </div>
             
                    </div> 
               </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-8 ">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script><?php echo $setting['copyr']?> </a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-4">
                             <div class="footer-social f-right">
                                <a href="<?php echo $setting['twitter']?>"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo $setting['facebook']?>"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?php echo $setting['youtube']?>"><i class="fas fa-globe"></i></a>
                                <a href="<?php echo $setting['linkedin']?>"><i class="fab fa-behance"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    
        <!-- footer-bottom area -->
     
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- counter , waypoint -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>
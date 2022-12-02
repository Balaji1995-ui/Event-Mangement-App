<?php
include "admin/conn.php";

$services = mysqli_query($con,"SELECT * FROM services ORDER BY id DESC");


?>

 <?php
   require 'admin/conn.php';
   $settings= mysqli_query($con,"select * from settings where id='1'");
      while ($setting=mysqli_fetch_array($settings)) {
        
        ?>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gallery | <?php echo $setting['site_name']?>  </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/<?php echo $setting['title_logo']?> ">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <!--? Preloader Start -->
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
    <main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Schedule</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class='container p-6'>
  
        <!-- <h1 class='text-center'>EVENTS UPDATES</h2> -->
          
        <section class="about-low-area section-padding2">
        <?php
                        while($row=mysqli_fetch_array($services)){
                    ?>
        <div class="container">
            <div class="row">
            
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                  
                        <div class="section-tittle mb-35 ">
                        <h2><?php echo $row['title']?></h2>
                        </div>
                  
                        <p><?php echo $row['descrip']?></p>
                    </div>
                  
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-communications-1"></span>
                                </div>
                                <div class="caption">
                                    <h5>Where</h5>
                                    <p><?php echo $row['Venue']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-education"></span>
                                </div>
                                <div class="caption">
                                    <h5>When</h5>
                                    <p><?php echo $row['Create_time']?></p>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <a data-toggle="modal" data-target="#myModal" href="booking.php" class="btn mt-80">Get Your Ticket</a>
                </div>


                
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <!-- <div class="about-font-img d-none d-lg-block">
                        <img width="50%" src="assets/img/logo/<?php echo $row['img']?>" alt="">
                        </div> -->
                        <div class="about-back-img ">
                        <img width="50%" src="assets/img/logo/<?php echo $row['img']?>" alt="">
                        </div>
                    </div>

        
                </div>
            </div>
        </div>
        <hr>
        <?php }?>
       

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
      
    </div>
  </div>
  
</div>

    </section>
   
      

       
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
    
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

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
<?php }  ?>
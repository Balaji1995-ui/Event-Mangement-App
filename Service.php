<?php
include "admin/conn.php";


$settings= mysqli_query($con,"select * from settings where id='1'");
$setting =mysqli_fetch_array($settings);
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Service | <?php echo $setting['site_name']?>  </title>
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
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Our Service</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
       <h1 class="text-center m-0 p-2"> CORPORATE EVENTS  </h1>
          
       <div class="row mt-3">
                
<div class="col-lg-7 mb-3 mb-lg-0">


<article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/correpert.png" alt="">
                                    
                                </div>
                                                          </article>

</div>


<div class="col-lg-5 mb-3 mb-lg-0">
<h2>We Organise Peak level of corporate events.</h2>
<p class="text-justify">Corporate entertainment describes Private events held by Corporations or Businesses
for their staff, Clients or stakeholders. These events can be for large audiences such as
conventions and conferences, or smaller events such as retreats, holiday Parties or
even private Concerts.</p>
                               

</div>
<div class="row">
    <h1>Types Of Corporate events :-</h1>
There are various types of Corporate events that make use of entertainment. An
opening general session may include entertainment.
    </div>
<div class="col-lg-5 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/cor.png" alt="">
                                    
                                </div>
                                                          </article>

</div>
<div class="col-lg-5 mb-3  pt-3 mb-lg-0">
<h2>Corporate Team Building</h2>
<p class="text-justify">Corporate entertainment can also include a day of team building activities. These
include traditional camp activities like tug of war, scavenger hunts, and relay recess.
They could also include sports. The goal of team building Corporate events is to have
employees recognize how the challenges of the activities relate to the workplace.</p>
                               

</div>
<div class="col-lg-5 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/award.png" alt="">
                                    
                                </div>
                                </article>
</div>
<div class="col-lg-5 mb-3  pt-3 mb-lg-0">
<h2>Corporate Awards Events</h2>
<p class="text-justify">Awards or gala events are usually lavish events that celebrate accomplishments or
milestones of a person or group of people in similar industries. In addition to celebrating
and recognizing achievements, it allows attendees to network with others with similar
backgrounds or professions.
</p>
                               

</div>
<div class="col-lg-5 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/birth.png" alt="">
                                    
                                </div>
                                </article>
</div>


<div class="col-lg-5 mb-3  pt-3 mb-lg-0">
<h2>Corporate Holiday Celebration Events</h2>
<p class="text-justify">A Holiday celebration events are ways for companies or departments to celebrate holidays
and to show appreciation to employees. Entertainment at these events vary from raffles
and prizes, mystery dinner, music and an overall casual, social setting that can build
social relationships.

</p>
                               

</div>

<div class="col-lg-5 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/sem.png" alt="">
                                    
                                </div>
                                </article>
</div>

<div class="col-lg-5 mb-3  pt-3 mb-lg-0">
<h2> Corporate Seminars and Educational Events</h2>
<p class="text-justify">Corporate seminars, workshops, symposiums, and conferences are more informative in
nature and often focussed on educational purposes. A conference refers to a formal
meeting where participants exchange their views on various topics. A seminar is a form
of academic instruction, either at a university or offered by a commercial or professional
organisation.

</p>
                               

</div>
<div class="col-lg-5 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/des.png" alt="">
                                    
                                </div>
                                </article>
</div>

<div class="col-lg-5 mb-3  pt-3 mb-lg-0">
<h2> Corporate charity events</h2>
<p class="text-justify">Corporate charity events, whether concerts, golf tournaments, or anything else, play an
important role in how businesses interact with the community. Corporate charity events
unite people from all levels of the organisation, such events are another form of team
building which positively influence other aspects of work.

</p>
                               

</div>

<div class="col-lg-5 mb-3  pt-3 mb-lg-0">
<!-- <h2> Corporate Seminars and Educational Events</h2>
<p class="text-justify">Corporate seminars, workshops, symposiums, and conferences are more informative in
nature and often focussed on educational purposes. A conference refers to a formal
meeting where participants exchange their views on various topics. A seminar is a form
of academic instruction, either at a university or offered by a commercial or professional
organisation.

</p> -->
                               

</div>
<div class="col-lg-5 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/des1.png" alt="">
                                    
                                </div>
                                </article>
</div>
             </div>
<div class="container">
<div class="row">
<h1>Cocktails and Mocktails
</h1>
<div>
<p>MSK provides you Best Cocktail and Mocktail <Strong>Bar setup </strong> and India’s Top Bartenders for
you…….
All Bartenders are very professional and they have good long term experiences. They
provide you with the best service in their profession.
</p>
<br/>
<p>
A Cocktail is a mixed drink typically made with a distilled liquor such as<br/>
Arrack<br/>
Brandy<br/>
Gin<br/>
Rum<br/>
Tequila<br/>
Vodka<br/>
Cachaca<br/>
Whiskey or<br/>
Wine as its base ingredient that is then mixed with other ingredients or garnishments.<br/>
Sweetened liqueurs<br/>
Wine<br/>
Beer may also serve as the base or be added. Beer is one of the ingredients, the drink is
called a beer cocktail. Cocktails often also contain one or more type of<br/>
Juice<br/>
Fruit<br/>
Honey<br/>
Milk<br/>
Cream<br/>
Spices and<br/>
other flavourings.<br/>
Two creations may have the same name but taste very different because of differences
in how the drinks are prepared.<br/>
Some of the Most Popular Cocktails worldwide.<br/>
<h5>Beer<br/> <Span>These cocktails are made with beer called beer cocktails.</span></h5> 

</p>
</div>
<br/>

<div class="col-lg-4 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
    <h6>SHANDY
</h6>
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/wine.png" alt="">
                                    
                                </div>
                                </article>
</div>
<div class="col-lg-4 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
    <h6>BLACK VELVET
</h6>
                                <div class="blog_item_img">
                                    <img class="card-img rounded w-75" src="assets/img/service/wine1.png" alt="">
                                    
                                </div>
                                </article>
</div>

<div class="col-lg-4 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
    <h6>SAKE BOMB
</h6>
                                <div class="blog_item_img">
                                    <img class="card-img rounded " src="assets/img/service/wine2.png" alt="">
                                    
                                </div>
                                </article>
</div>
<div class="col-lg-4 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
    <h6><strong>Brandy</strong>
Some popular Brandy Cocktails.

</h6>
                                <div class="blog_item_img">
                                    <img class="card-img rounded " src="assets/img/service/wine4.png" alt="">
                                    
                                </div>
                                </article>
</div>
<div class="col-lg-4 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
    <h6>
    SIDECAR

</h6>
                                <div class="blog_item_img">
                                    <img class="card-img rounded " src="assets/img/service/win6.png" alt="">
                                    
                                </div>
                                </article>
</div>
<div class="col-lg-4 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
    <h6>BRANDY SOUR</h6>
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/win5.png" alt="">
                                    
                                </div>
                                </article>
</div>
<div class="col-lg-4 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
    <h6><strong>GIN</strong>
Some GIN based Cocktails <strong>MARTINI
</strong></h6>
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/win8.png" alt="">
                                    
                                </div>
                                </article>
</div>
<div class="col-lg-4 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
    <h6>PINK LADY</h6>
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/wine9.png" alt="">
                                    
                                </div>
                                </article>
</div>
<div class="col-lg-4 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
    <h6>MONKEY GLAND</h6>
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/win10.png" alt="">
                                    
                                </div>
                                </article>
</div>
<div class="col-lg-4 mt-4 mb-3 mb-lg-0">


<article class="blog_item">
    <h6>CASINO</h6>
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/win12.png" alt="">
                                    
                                </div>
                                </article>
</div>
<div class="col-lg-4 mt-4 mb-3 mb-lg-0">
<article class="blog_item">
    <h6><strong>RUM
</strong>
There are some RUM based Cocktails.
<strong>DAIQUIRI

</strong></h6>
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/win14.png" alt="">
                                    
                                </div>
                                </article>
                                </div>
                                <div class="col-lg-4 mt-4 mb-3 mb-lg-0">
<article class="blog_item">
    <h6>COJITO


</h6>
                                <div class="blog_item_img">
                                    <img class="card-img rounded" src="assets/img/service/win15.png" alt="">
                                    
                                </div>
                                </article>
                                </div>
</div>
<div>


</div>

</div>

</div>



       </div>
            
        </section>


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
      

        <!--================Blog Area =================-->
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
                                             class="email_icon newsletter-submit button-contactForm"><img src="assets/img/gallery/form.png" alt=""></button>
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

<?php 

include "admin/conn.php";

 //fetch header

 $cats= mysqli_query($con,"SELECT*FROM header");
 $cat =mysqli_fetch_array($cats);

 //fetch Admins Terminals

 $median = mysqli_query($con,"SELECT * FROM testimonials ORDER BY id DESC");
//fetch settings
$settings= mysqli_query($con,"select * from settings");
$setting =mysqli_fetch_array($settings);
// $setting =mysqli_fetch_array($settings);
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <title> Home | <?php echo $setting['site_name']; ?></title>
 
    <meta name="description" content=" MSK is an Event Management Company. Event Planners for all Corporate, wedding, Birthday Events">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/<?php echo $setting['title_logo']?>">
  
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
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
   
</head>
<style>
.card-container {
   display: inline-block;
   position: relative;
   width: 20%;
}
.imag{
   opacity: 1;
   display: block;
   width: 100%;
   transition: .5s ease;
   backface-visibility: hidden;
}
.hoverText {
   transition: .5s ease;
   opacity: 0;
   position: absolute;
   top: 50%;
   left: 20%;
   text-align: center;
}
.card-container:hover .imag {
   opacity: 0.4;
}
.card-container:hover .hoverText {
   opacity: 1;
}
.captions {
   background-color: rgb(8, 53, 131);
   color: white;
   font-size: 20px;
   padding: 10px;
   border-radius: 6px;
   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   font-weight: bolder;
}
</style>

<body>

    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img class="lozad" src="assets/img/logo/<?php echo $setting['header_logo']?>" width="60%" alt="">
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
                        <a href="index.php"><img  src="assets/img/logo/<?php echo $setting['header_logo']?>" alt="<?php  echo $setting['site_name']; ?>" width="60%"/></a>
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

    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-9 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s"><?php echo $cat['sub_title']?></span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s"><?php echo $cat['title']?></h1>
                                <!-- Hero-btn -->
                                <div class="slider-btns">
                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="schedule.php" class="btn hero-btn">Download</a>
                                    <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn" href="<?php echo $setting['video']?>">
                                        <i class="fas fa-play"></i></a>
                                    <p class="video-cap d-none d-sm-blcok" data-animation="fadeInRight" data-delay="1.0s">Story Vidoe<br> Watch</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-9 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s"><?php echo $cat['sub_title']?></span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s"><?php echo $cat['title']?></h1>
                                <!-- Hero-btn -->
                                <div class="slider-btns">
                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="industries.html" class="btn hero-btn">Download</a>
                                    <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn"  href="https://www.youtube.com/watch?v=up68UAfH0d0">
                                        <i class="fas fa-play"></i></a>
                                    <p class="video-cap d-none d-sm-blcok" data-animation="fadeInRight" data-delay="1.0s">Story Vidoe<br> Watch</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
        <!-- Counter Section Begin -->
        <div class="counter-section d-none d-sm-block">
            <div class="cd-timer" id="countdown" >
                <div class="cd-item">
                    <span>96</span>
                    <p>Days</p>
                </div>
                <div class="cd-item">
                    <span>15</span>
                    <p>Hrs</p>
                </div>
                <div class="cd-item">
                    <span>07</span>
                    <p>Min</p>
                </div>
                <div class="cd-item">
                    <span>02</span>
                    <p>Sec</p>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->
       
    </div>
    <!-- slider Area End-->
   <section class="container mt-40">
<div class="row">
    <div class="col-md-4">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <a href="<?php echo $cat['links']?>">  <img  class="d-block w-100 lozad" src="assets/img/header/<?php echo $cat['silder4']?>"alt="First slide"></a>
    </div>
    <div class="carousel-item">
      <a href="<?php echo $cat['links']?>">  <img class="d-block w-100 lozad" src="assets/img/header/<?php echo $cat['silder5']?>"alt="First slide"></a>
    </div>
    <div class="carousel-item">
 <a href="<?php echo $cat['links']?>">  <img class="d-block w-100 lozad" src="assets/img/header/<?php echo $cat['silder6']?>"alt="First slide"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- <img src="assets/img/header/heads2.png" alt="" data-aos="fade-up" data-aos-delay="100" width="100%"/> -->
</div>
<div class="col-md-4">
 <h1><?php echo $cat['silder_Head']?></h1>
 <p class="text-jusfity"><?php echo $cat['silder_blog']?></p>
</div>
<div class="col-md-4">
<div id="carouselExampleIndicatorss" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
   <a href="<?php echo $cat['links']?>">  <img class="d-block w-100 lozad" src="assets/img/header/<?php echo $cat['silder1']?>"alt="First slide"></a>
    </div>
    <div class="carousel-item">
    <a href="<?php echo $cat['links']?>">  <img class="d-block w-100 lozad" src="assets/img/header/<?php echo $cat['silder2']?>"alt="First slide"></a>
    </div>
    <div class="carousel-item">
 <a href="<?php echo $cat['links']?>">  <img class="d-block w-100 lozad" src="assets/img/header/<?php echo $cat['silder3']?>"alt="First slide"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicatorss" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicatorss" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- <img src="assets/img/header/heads1.png" alt="" width="100%"/> -->
</div>
 

</div>

<!--<hr/>-->
<!--<div class="row p-5">-->

<!--<div class="col-sm-4">-->
<!--<div class="card">-->
<!--   <a href="<?php echo $cat['links']?>"> <img src="assets/img/header/sample.png"/></a>-->

<!--</div>-->
<!--<hr/>-->
<!--</div>-->
<!--<div>-->

</section>


    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2><?php echo $cat['blog_head']?></h2>
                        </div>
                        <p><?php echo $cat['blog_para']?></p>
                        <p><?php echo $cat['blog_para_sub']?></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-communications-1"></span>
                                </div>
                                <div class="caption">
                                    <h5>Where</h5>
                                    <p><?php echo $cat['Address']?></p>
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
                                    <p><p><?php echo $cat['whendate']?></p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="schedule.php" class="btn btn mt-50">Get Your Ticket</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="assets/img/header/<?php echo $cat['blog_img1']?>" alt=""/>
                        </div>
                        <div class="about-back-img ">
                        <img src="assets/img/header/<?php echo $cat['blog_img2']?>" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Law End-->
    <!--? Brand Area Start -->
    <section class="team-area pt-180 pb-100 section-bg" data-background="assets/img/gallery/section_bg01.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-50">
                        <h2>The Most Importent Speakers.</h2>
                        <p>There arge many variations ohf passages of sorem gpsum ilable, but the majority have suffered alteration in.</p>
                        <a href="#" class="btn  mt-30">View Spackert</a>
                    </div>
                </div>
                <?php
                        while($row=mysqli_fetch_array($median)){
                    ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img" >
                        <img src="assets/img/logo/<?php echo $row['img']?>" alt="">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption" >
                            <h3><a href="#"><?php echo $row['title']?></a></h3>
                            <p> <?php echo $row['designation']?>r</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
    
    </section>

        <div class="container">
   
        </div>
    </section>


    
    <!-- accordion End -->
    <!--? gallery Products Start -->
    <div class="gallery-area fix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 col-sm-6 card-container" >
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img imag " style="background-image: url(assets/img/gallery/<?php echo $cat['Event_Day1_sha']; ?>);"></div>
                            <div class="hoverText">
               
                <a type="button" href="Event.php" class=" btn btn mt-50"> View Gallery</a>
                       </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img lozad " style="background-image: url(assets/img/gallery/<?php echo $cat['Event_Day1a']; ?>);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img lozad " style="background-image: url(assets/img/gallery/<?php echo $cat['Event_Day1_con1']; ?>);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img lozad " style="background-image: url(assets/img/gallery/<?php echo $cat['Event_Day1']; ?>);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                             <div class="gallery-img lozad " style="background-image: url(assets/img/gallery/<?php echo $cat['Event']; ?>);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img lozad " style="background-image: url(assets/img/gallery/<?php echo $cat['Event_Day1_para']; ?>);"></div>
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
                </div> -->
                <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
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
        </div> -->
    </section>
    <!-- Pricing Card End -->
    <!--? Brand Area Start-->
    <section class="work-company section-padding30" style="background-image: url(assets/img/gallery/section_bg01.png)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-8">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-50">
                        <h2><?php echo $cat['Event_Day2']?></h2>
                        <p><?php echo $cat['Event_para']?></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="logo-area">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img class="lozad" src="assets/img/gallery/<?php echo $cat['Event_Day1_con2']?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img class="lozad"  src="assets/img/gallery/<?php echo $cat['Event_Day3']?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img  class="lozad" src="assets/img/gallery/<?php echo $cat['Event_Day4']?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img class="lozad"  src="assets/img/gallery/<?php echo $cat['Event_Day1b']?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img  class="lozad" src="assets/img/gallery/<?php echo $cat['sponsor1']?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-logo mb-30">
                                    <img  class="lozad" src="assets/img/gallery/<?php echo $cat['sponsor2']?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
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
      

    <!-- Blog Area End -->
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
    <script src="./assets/js/slick.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    
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
    <script>
lozed('.lozed' ,{
load:function(el){
el.src=el.dataset.src;
el.onload=function(){
}

}

}
).observe()
</script>


    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    </body>
</html>
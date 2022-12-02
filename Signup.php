
<?php
require './admin/conn.php';
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');

$today = date("D d M Y");
$edit = $_GET['id'];
 $resultt = mysqli_query($con,"SELECT * FROM users where id='$edit'");
//  $roww = mysqli_fetch_array($resultt);

 if(isset($_POST['publise'])){
	
   $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $state =$_POST['state'];
    $address=$_POST['address'];
    $country= $_POST['country'];
    $pincode=$_POST['pincode'];

if($edit ==''){
    
    //   move_uploaded_file($tempname, $folder);
    $insertdata = mysqli_query($con,"INSERT INTO users(`name`, `email`, `password`, `address`, `city`, `state`,  `phone`,  `country`, `pincode`)VALUES('$name', '$email', '$password', '$address', '$city', '$state', '$phone','$country','$pincode')");
  //  $insertdata = mysqli_query($con, "INSERT INTO users ( name, email, password, address, city, state, img, status, phone, Event_Book_ticket, Even_Category, Venue, BOOK_date, bookcode, country, pincode)VALUES( '$name', '$email', '$password', '$address', '$city', '$state', '$phone','$country',$pincode')");
    echo "<script>alert('SignUp Successfully');</script>
        <script>window.location.href = 'schedule.php'</script>";
   
}
    else{
    //   move_uploaded_file($tempname, $folder);
    // $insertdata = mysqli_query($con,"UPDATE blog SET title='$title',category='$category',descrip='$descrip',img='$lis_img',url='$url',date='$today' where id=".$edit."");
    // echo "<script>alert('Updated Successfully');</script>
    //     <script>window.location.href = 'add-blog.php'</script>";
    }
    
// //     // function compressImage($source, $destination, $quality) {
    
// //     //   $info = getimagesize($source);
    
// //     //   if ($info['mime'] == 'image/jpeg') 
// //     //     $image = imagecreatefromjpeg($source);
    
// //     //   elseif ($info['mime'] == 'image/gif') 
// //     //     $image = imagecreatefromgif($source);
    
// //     //   elseif ($info['mime'] == 'image/png') 
// //     //     $image = imagecreatefrompng($source);
    
// //     //   imagejpeg($image, $destination, $quality);
    
    // }
    }
    
//     // Compress image
    
    
//     ?>
    
 

<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Signup | <?php echo $setting['site_name'] ?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/<?php echo $setting['title_logo'] ?>">

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
    <link rel="stylesheet" href="assets/css/gallery.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
</head>





<div class="signup-page">
    <div class="form">
        <h2>Create Account </h2>
        <br>
        <p class="alert alert-info">
            <marquee behavior="" scrollamount="2" direction="">You need to create an account to Contact/view Book!
            </marquee>
        </p>
        <form class="login-form" method="post" role="form" enctype="multipart/form-data"  action=""
            autocomplete="off">
            <!-- json response will be here -->
            <div id="errorDiv"></div>
            <!-- json response will be here -->
            <div class="col-md-12">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" required minlength="5" name="name">
                </div>
     
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" required  name="email">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" required  name="password">
                </div>
                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                    <label>Contact</label>
                    <input type="text" required  name="phone">
                </div>
                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" required  name="address">
                </div>
                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                    <label>City</label>
                    <input type="text" required  name="city">
                </div>
                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                    <label>State</label>
                    <input type="text" required  name="state">
                </div>
                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                    <label>Country</label>
                    <input type="text" required  name="country">
                </div>
                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                    <label>Pincode</label>
                    <input type="text" required  name="pincode">
                </div>
                    </div>
                    </div>
            
            
        
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" name="publise" id="btn-signup">
                        CREATE ACCOUNT
                    </button>
                </div>
            </div>
            <h6 class="message">
                <a href="index.php">Go Back</a><br>
</h6>
        </form>
    </div>
</div>
</div>
<script src="assets/js/jquery-1.12.4-jquery.min.js"></script>
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
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>
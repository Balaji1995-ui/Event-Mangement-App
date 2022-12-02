<?php
include "admin/conn.php";

// error_reporting(0);


	
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $state =$_POST['state'];
    $address=$_POST['address'];
    $country=$_POST['country'];
    $pincode=$_POST['pincode'];
    // if($_FILES['img']['name']!=''){
    //     $img = rand().$_FILES['img']['name'];
    //     }
    //     else{
    //         $img = $roww["img"];
    //     }
    //     $tempname = $_FILES['img']['tmp_name'];
    //     $folder = "../assets/img/users/".$img;
    
 
//     // $valid_ext = array('png','jpeg','jpg');
//     // file extension
//     // $file_extension = pathinfo($folder, PATHINFO_EXTENSION);
//     // $file_extension = strtolower($file_extension);
//     // Check extension
//     // if(in_array($file_extension,$valid_ext)){
//     // // Compress Image
//     //   // compressImage($tempname,$folder,60);
//     // }
$con = new mysqli('localhost','loapnaghar_root','n@=nsH,vrcOL','loapnaghar_mybook');
if($con-> connect_error){
    die( 'connect_error:'.$con->error);
}
else
   {
    
    $insertdata = mysqli_query($con,"INSERT INTO users( name, email, password, address, city, state, phone,country,pincode)VALUES( '$name', '$email', '$password', '$address', '$city', '$state',  '$phone','$country','$pincode')");
    echo "<script>alert('SignUp Successfully');</script>
        <script>window.location.href = 'schedule.php'</script>";
    }

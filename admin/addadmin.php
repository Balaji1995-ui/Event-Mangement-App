<?php
include 'conn.php'  ;
session_start();

if(isset($_POST['publise'])){
	extract($_POST);	

    $ad_password=$_POST['ad_password'];
    $ad_name=$_POST['ad_name'];
    $ad_email=$_POST['ad_email'];

    if(!$ad_name==""){

        $insertdata = mysqli_query($con,"INSERT INTO admin(ad_name, ad_email, ad_password)VALUES('$ad_name','$ad_email','$ad_password')");
        echo "<script>alert('Added Successfully');</script>
            <script>window.location.href = 'index.php'</script>";


    }
    else{

        echo"<script>alert('Invaild Password...!!!');</script>
        <script>window.location.href = 'index.php'</script>";
        // $insertdata = mysqli_query($con,"UPDATE admin set ad_password='$ad_password'  where ad_id=".$edit."");
        // echo "<script>alert('Updated Successfully');</script>
        //     <script>window.location.href = 'dashboard.php'</script>";
    }




}

?>
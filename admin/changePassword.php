<?php
include 'conn.php'  ;
session_start();
// $edit = $_GET['edit'];
 $resultt = mysqli_query($con,"SELECT * FROM  admin where ad_id='".$_SESSION['ad_id']."'");
 $roww = mysqli_fetch_array($resultt);
if(isset($_POST['publise'])){
	extract($_POST);	

    $ad_password=$_POST['ad_password'];
    $ad_old=$_POST['oldpassword'];
    $ad_olds=$_POST['oldpasswords'];

    if($ad_old == $ad_olds){

        $insertdata = mysqli_query($con,"UPDATE admin set  ad_password='$ad_password' where ad_id='".$_SESSION['ad_id']."'");
        echo "<script>alert('Updated Successfully');</script>
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

<?php
include 'conn.php';
$resultt = mysqli_query($con,"SELECT * FROM  admin where ad_id='".$_SESSION['ad_id']."'");
$roww = mysqli_fetch_array($resultt);

?>




<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link">Welcome to Admin Panel!!</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" target="_blank" href="http://eventz.loapnaghar.com/">
         <h4>Go to Site</h4>
        </a>
        <!--  -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">

        </a>
      </li>
      <li class="nav-item">
      <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="index.php" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <!-- <img class="img-profile rounded-circle"
                                    src="img/logo.jpg"> -->
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Profile
                                </a> -->

                                <a class="dropdown-item" href="changePassword.php" data-toggle="modal" data-target="#changeModals">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Add Admin 
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="changePassword.php" data-toggle="modal" data-target="#changeModal">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Change Password
                                </a>
                                
                              
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
        <!-- <a class="nav-link" href="logout.php">
         Logouts
        </a> -->
      </li>




    </ul>
  </nav>

  <div class="modal fade" id="changeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabels"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabels">Change Password</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
        
                 <form method="post" action="changePassword.php" enctype="multipart/form-data">
                 <input  class="form-control" type="hidden" name="oldpasswords" value="<?php echo $roww['ad_password']?>" placeholder="Enter Old Password" />
                   
                        <label>Old Password</label>
                        <input  class="form-control" type="password" name="oldpassword" placeholder="Enter Old Password" />
                
                        <label>New Password</label>
                        <input  class="form-control"  type="password" name="ad_password" placeholder="Enter New Password" />
<br/>
                <button class="btn btn-success" name="publise" type="submit">Change</button>

                 
                <button class="btn btn-danger" data-dismiss="modal">close</button>
                 </form>
                 

                </div>
               
            </div>
        </div>
    </div>

    <!-- /.add admin users -->
    <div class="modal fade" id="changeModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabels"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabels">Add Admin</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
        
                 <form method="post" action="addadmin.php" enctype="multipart/form-data">

                   
                        <label>Name</label>
                        <input  class="form-control" type="text" name="ad_name" placeholder="Enter Name" />
                        <label>Email</label>
                        <input  class="form-control"  type="email" name="ad_email" placeholder="Enter Email" />
                
                        <label>Password</label>
                        <input  class="form-control"  type="password" name="ad_password" placeholder="Enter Password" />
<br/>
                <button class="btn btn-success" name="publise" type="submit">Add</button>

                 
                <button class="btn btn-danger" data-dismiss="modal">close</button>
                 </form>
                 

                </div>
               
            </div>
        </div>
    </div>

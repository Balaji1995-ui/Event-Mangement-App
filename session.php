<!-- <?php


  @session_start();
  if (!isset($_SESSION['id'])) {
    echo "<script>alert('You are not logged in!'); window.location='../index.php';</script>";
    exit;
  }

  $user_id = $_SESSION['id'];
  $email = $_SESSION['email'];
  if (!isset($con)) require '.admin/conn.php';
  $exist = $con->query("SELECT * FROM users WHERE id = '$user_id'")->num_rows;
  if ($exist != 1) {
    echo "<script>window.location='userlogin.php';</script>";
    exit;
  }
  ?> -->
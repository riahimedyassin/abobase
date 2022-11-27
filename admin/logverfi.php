<?php 

  session_start();
  if (isset($_SESSION["admins"])) {
    header("Location: dashboard.php");
  }
  if (isset($_POST["logme"])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $con=mysqli_connect("localhost","root","","admin");
    $sql="SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $res=mysqli_query($con,$sql);
    $rows=mysqli_num_rows($res);
    if ($rows===1) {
      $_SESSION["admins"]=$username;
      header("Location: dashboard.php");
    }
    $error=true;
    mysqli_query($con,$sql);
    mysqli_close($con);
  }

?>
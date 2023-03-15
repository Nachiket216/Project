<?php 
include "db.php";
  
  $user_name=$_POST['username'];
  $user_pass=$_POST['password'];
  
  $sql="SELECT * FROM user WHERE user_name='$user_name' AND password='$user_pass'";

  if(mysqli_query($con,$sql))
  {
    echo 'Logged in successfully .. !';

    //header('location:home.php');
  }
  else
  {
    echo 'Password or username is incorrect!';
  }


mysqli_close($con);

 ?>

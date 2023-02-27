<?php
include "db.php";




$user_name=$_POST['username'];
$user_email=$_POST['useremail'];
$user_password=$_POST['userpassword'];
$cpassword=$_POST['cpassword'];



$sql="INSERT INTO user(user_name,user_email,password,c_password) VALUES('".$user_name."','".$user_email."','".$user_password."','".$cpassword."')";
if(mysqli_query($con,$sql))
{
	echo "data has been inserted into database successfully";
	//header('location:home.php');
}
else
{
	//echo "error creating record".mysqli_error($con);
}
mysqli_close($con);

?>
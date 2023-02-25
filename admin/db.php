<?php

$sev="localhost";
$user="root";
$pwd="";
$dbname="easymart";

$con=mysqli_connect($sev,$user,$pwd,$dbname);
if(!$con)
{
	die("connection faild".mysqli_connect_error());
}
//echo "connected successfully"; 


?>
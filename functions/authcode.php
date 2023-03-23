<?php
session_start();

include('../config/dbcon.php');

    if(isset($_POST['register_btn'])){
        $name = mysqli_real_escape_string($con,$_POST['name']); 
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password= mysqli_real_escape_string($con,$_POST['password']);
        $cpassword= mysqli_real_escape_string($con,$_POST['cpassword']);
        
        // check if email already registered
        $check_email_query = "SELECT email FROM users WHERE email='$email'";

        $check_email_query_run = mysqli_query($con,$check_email_query);

        // if(mysqli_num_rows($check_email_query_run)>0){
        //     $_SESSION['message'] = "Email already registered";
        // header('Location : ../signup.php');
        // }else{

            if($password == $cpassword){
    
                // Insert user data
                $insert_query = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
                $insert_query_run = mysqli_query($con,$insert_query);
    
    
    
        
                if($insert_query_run){
                    $_SESSION['message'] = "Registered SUccessfully";
                    header('Location : ../login.php');
                }else{
                    $_SESSION['message'] = "Something went wrong";
                    header('Location : ../signup.php');
                }
            }else{
                $_SESSION['message'] = "Passowrods do not match";
                header('Location : ../signup.php');
            }
        // }
    }
?>
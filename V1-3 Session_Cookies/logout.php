<?php  
    setcookie('email',$email,time() - 10);
    setcookie('password',$password,time() - 10);
    header('location:signin.php');
    session_start();
    session_unset();
    session_destroy();
    header("location:signin.php");
?>
<?php 
  session_start();
  if(!isset($_SESSION['usear'])){
       header("location:signin.php");
    }
?>
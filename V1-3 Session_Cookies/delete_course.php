<?php
    include 'connection.php';
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];
        $Query = "delete from courses where id=$id";
        $result = mysqli_query($con,$Query);
        if ($result) {
           header('location:courses.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>
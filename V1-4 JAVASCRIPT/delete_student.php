<?php
    include 'connection.php';
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];
        $Query = "delete from student where id=$id";
        $result = mysqli_query($con,$Query);
        if ($result) {
           header('location:student.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>
<?php 
    /*---------connection database----*/
    include 'connection.php';
    $id=$_GET['updateid'];
    $query="select * from student where id=$id";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $phone=$row['phone'];
    $enroll_number=$row['enroll_number'];
    $date_of_admission=$row['date_of_admission'];
    /*---------verification submit--------*/
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $enroll_number = $_POST['enroll_number'];
        $date_of_admission = $_POST['date_of_admission'];
        /*------------- Query ----------*/
        $requete ="UPDATE `student` SET `name`='$name',`email`='$email',`phone`='$phone', 
                          `enroll_number`='$enroll_number',`date_of_admission`='$date_of_admission' WHERE `student`.`id`=$id ";
        /*------------execute query--------*/
        $result = mysqli_query($con,$requete);
        if($result){
            header('location:student.php');
            echo "updated successfully !";
        }else{die(mysqli_error($con));}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="E-LEARNING APPLICATION V1.0  E-Classe">
    <link rel="stylesheet" href="assets/css/Normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>APPLICATION V1.3</title>
</head>
<body>
<div class="container my-5">
        <form method = "post">
            <div class="form-group my-3">
                <label> Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" class="form-control" required value="<?php echo $name;?>">
            </div>
            <div class="form-group my-3">
                <label> Email </label>
                <input type="email" name="email" placeholder="Enter your email" class="form-control" required value="<?php echo $email;?>">
            </div>
            <div class="form-group my-3">
                <label> Phone </label>
                <input type="phone" name="phone" placeholder="Enter your phone" class="form-control" required value="<?php echo $phone;?>">
            </div>
            <div class="form-group my-3">
                <label> Number </label>
                <input type="number" name="enroll_number" placeholder="Enter enroll number" class="form-control" required value="<?php echo $enroll_number;?>">
            </div>
            <div class="form-group my-3">
                <label> Date : </label>
                <input type="date" name="date_of_admission" placeholder="Enter date of admission" required value="<?php echo $date_of_admission;?>">
            </div>
            <div class="form-group my-3">
                <input type="submit" value="Update" name="submit" class="btn-info text-white btn-outline-primary border-0 rounded-3 px-5 py-1">
            </div>
        </form>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

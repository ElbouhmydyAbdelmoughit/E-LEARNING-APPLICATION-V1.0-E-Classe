<?php include'connection.php';?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2" style="background-color:#FAFFC1;">
                <?php include 'sidebar.php' ?>
            </div>
            <div class="col-10">
                <div>
                    <?php include 'navbar.php' ?>
                </div>
                <div class="col-12 mt-4 d-flex flex-wrap">
                    <div class="p-2 col-lg-3 col-md-6 col-12">
                        <div class="col-12 px-3 py-2  rounded-3" style=" background-color: #F0F9FF;">
                            <i class="bi bi-mortarboard text-info fs-1"></i>
                            <p class="lead text-secondary">Students</p>
                            <h3 class="fw-bold text-end">
                                <?php 
                                    $req = "SELECT * FROM student;";
                                    $sql = mysqli_query($con,$req);
                                    $res = mysqli_num_rows($sql);
                                    echo $res;
                                ?>
                            </h3>
                        </div>
                    </div>
                    <div class="p-2 col-lg-3 col-md-6 col-12">
                        <div class="col-12 px-3 py-2  rounded-3" style=" background-color:#FEF6FB;">
                            <i class="bi bi-bookmark fs-1" style="color: #EE95C5;"></i>
                            <p class="lead text-secondary">Course</p>
                            <h3 class="fw-bold text-end">
                                <?php
                                    $req = "SELECT * FROM courses;";
                                    $sql = mysqli_query($con,$req);
                                    $res = mysqli_num_rows($sql);
                                    echo $res;
                                 ?>
                            </h3>
                        </div>
                    </div>
                    <div class="p-2 col-lg-3 col-md-6 col-12">
                        <div class="col-12 px-3 py-2  rounded-3" style=" background-color: #FEFBEC;">
                            <i class="bi bi-currency-dollar fs-1 text-info"></i>
                            <p class="lead text-secondary">Payments</p>
                            <h3 class="fw-bold text-end"><span class="h6 fw-bold"> DHS</span>
                            <?php
                                $req="SELECT * FROM payment_details;";
                                $result=mysqli_query($con,$req);
                                $sum=0;
                                while ($row = mysqli_fetch_assoc($result)){
                                    $sum += $row['amount_paid'];
                                }
                                
                                echo $sum;
                            ?>
                            </h3>
                        </div>
                    </div>
                    <div class="p-2 col-lg-3 col-md-6 col-12">
                        <div class="col-12 px-3 py-2  rounded-3" style=" background-image: linear-gradient(110deg,#00C1FE,#2ccafa,#FAFFC1);">
                            <i class="bi bi-person fs-1 text-white"></i>
                            <p class="lead text-white">Users</p>
                            <h3 class="fw-bold text-end">
                            <?php 
                                    $req = "SELECT * FROM student;";
                                    $sql = mysqli_query($con,$req);
                                    $res = mysqli_num_rows($sql);
                                    echo $res;
                            ?>
                            </h3>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
   


















    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
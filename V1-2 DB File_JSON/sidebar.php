<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>sidebar</title>
</head>
<body>
    
    <h4 class="border-start border-5 border-info fw-bold ms-3 mt-2 ps-2">E-class</h4>
    <div class="text-center">
        <img src="assets/img/youcode.png" alt="image" class="w-50 rounded-circle mx-auto mt-4">
        <h5 class="mx-auto mt-3 fs-6">Admin name</h5>
        <h6 class="mx-auto text-info">Admin</h6>
    </div>
    <div class="pt-3 d-flex">
        <ul class="nav nav-link mx-auto">
            <li class="nav-item">
                <a href="#" class="btn border-0 btn-outline-info text-dark">
                    <i class="bi bi-house-door"></i> <span class="ps-2 d-none d-md-inline">Home</span>
                </a>
            </li>
            <li>
                <a href="#" class="btn border-0 btn-outline-info text-dark">
                    <i class="bi bi-bookmark"></i> <span class="ms-2 d-none d-md-inline">Course</span></a>
            </li>
            <li>
                <a href="student.php" class="btn border-0 btn-outline-info text-dark">
                    <i class="bi bi-mortarboard"></i> <span class="ms-2 d-none d-md-inline">Students</span></a>
            </li>
            <li>
                <a href="payment.php" class="btn border-0 btn-outline-info text-dark">
                    <i class="border border-dark bi bi-currency-dollar"></i> <span class="ms-2 d-none d-md-inline">Payment</span> </a>
            </li>
            <li>
                <a href="#" class="btn border-0 btn-outline-info text-dark">
                    <i class="bi bi-file-earmark-bar-graph"></i> <span class="ms-2 d-none d-md-inline">Report</span> </a>
            </li>
            <li>
                <a href="#" class="btn border-0 btn-outline-info text-dark">
                    <i class="bi bi-sliders"></i> <span class="ms-2 d-none d-md-inline">Settings</span> </a>
            </li>
            <li>        
                <a href="signin.php" class="btn border-0 btn-outline-info text-dark mt-5">
                    <span class="me-2 d-none d-md-inline">Logout</span> <i class="bi bi-box-arrow-right"></i> </a>
            </li>
        </ul>
    </div>

        
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
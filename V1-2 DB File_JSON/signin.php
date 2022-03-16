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
    <title>APPLICATION V1.0</title>
</head>
<body>
    <div class="p-5" id="div_nbr_1" style=" background-image: linear-gradient(60deg,#00C1FE,#2ccafa,#FAFFC1); background-repeat: no-repeat;">
        <div class="container bg-white py-5 col-md-6 ps-4" id="div_nbr_2" style="border-radius: 20px;">
            <h1 class="border-start border-5 border-info fw-bold ps-2 ms-5">E-class</h1>
           <h6 class="fw-bold text-center mt-5">SIGN IN</h6>
            <p class="text-center text-secondery lead mb-5 text-ms-start" id="first_p" style=" color: grey;">
            Enter your credentials to access your account</p>
            <label for="email" class="mb-2">Email</label><br>
            <input type="email" id="email" value="elbouhmydyabdelmoughit@gmail.com" class="ps-3 py-2 border-secondery form-control fw-light" placeholder="Enter your email"><br>
            <label for="password" class="mb-2">Password</label><br>
            <input type="password" id="password" value="1234" class=" ps-3 py-2 border-secondery form-control fw-light" placeholder="Enter your password">
            <a href="dashboard.php" class="btn bg-info form-control mt-3">SIGN IN</a>
            <p class="mt-4 text-center text-secondery fw-normal mb-0" style=" color: grey;">Forgot your password? <a href="dashboard.php" class="d-f text-info mt-0">Reset Password</a></p>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
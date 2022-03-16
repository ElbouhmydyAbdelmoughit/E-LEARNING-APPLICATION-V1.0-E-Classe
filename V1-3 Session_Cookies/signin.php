<?php 
    session_start();
    if (isset($_POST['submit'])) {
        //getting the data
        //$name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        //SQL statement
        $sql = "SELECT * FROM comptes WHERE email='$email' && password_C='$password'";
        //making connection
        include('connection.php');
        //making a query 
        $qry=mysqli_query($con,$sql) or die("Login problem") ;
        $requete=mysqli_fetch_assoc($qry);
        $count=mysqli_num_rows($qry);
        if ($count==1) {
            $_SESSION['usear']=$email; 
            $_SESSION['username']=$requete['name']; 
            header('location:dashboard.php');
            if (isset($_POST['remember'])) {
                setcookie('email',$email,time() + 10);
                setcookie('password',$password,time() + 10);
            }
        }
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
    <title>APPLICATION V1.0</title>
</head>
<body>
    <form method="POST" action="#">
        <div class="p-5" id="div_nbr_1" style=" background-image: linear-gradient(60deg,#00C1FE,#2ccafa,#FAFFC1); background-repeat: no-repeat;">
            <div class="container bg-white py-5 col-md-6 ps-4" id="div_nbr_2" style="border-radius: 20px;">
                <h1 class="border-start border-5 border-info fw-bold ps-2 ms-5">E-class</h1>
            <h6 class="fw-bold text-center mt-5">SIGN IN</h6>
                <p class="text-center text-secondery lead mb-5 text-ms-start" id="first_p" style=" color: grey;">
                Enter your credentials to access your account</p>
                <label for="email" class="mb-2">Email</label><br>
                <input type="email" name="email" value="elbouhmydyabdelmoughit@gmail.com" class="ps-3 py-2 border-secondery form-control fw-light" placeholder="Enter your email" required><br>
                <label for="password" class="mb-2">Password</label><br>
                <input type="password" name="password" class=" ps-3 py-2 border-secondery form-control fw-light" placeholder="Enter your password" required>
                <input type="submit" name="submit" value="SIGN IN" class="btn form-control mt-3 bg-info text-white">
                <label class="my-2 form-check-label text-muted">
                    <input type="checkbox" name="remember" value="1" class="form-check-input">
                    Keep me signed in
                </label>
                <p class="mt-4 text-center text-secondery fw-normal mb-0" style=" color: grey;">Forgot your password? <a href="dashboard.php" class="d-f text-info mt-0">Reset Password</a></p>
            </div>
        </div>
    </form>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
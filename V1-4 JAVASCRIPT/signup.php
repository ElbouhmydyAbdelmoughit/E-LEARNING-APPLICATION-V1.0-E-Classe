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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>APPLICATION V1.0</title>
</head>
<body>
<form method="POST" action="#">
        <div class="p-5 " id="div_nbr_1" style=" background-image: linear-gradient(60deg,#00C1FE,#2ccafa,#FAFFC1); background-repeat: no-repeat;">
            <div class="w-50 container bg-white py-5 col-md-6 ps-4" id="div_nbr_2" style="border-radius: 20px;">
                <h1 class="border-start border-5 border-info fw-bold ps-2 ms-5">E-class</h1>
            <h6 class="fw-bold text-center mt-5">SIGN UP</h6>
                <label for="email" class="mb-2">Name</label><br>
                <input type="text" id="name" name="name"  class="ps-3 py-2 border-secondery form-control fw-light" placeholder="Enter your name"><br>
                <label for="email" class="mb-2">Email</label><br>
                <input type="email" id="email" name="email"  class="ps-3 py-2 border-secondery form-control fw-light" placeholder="Enter your email"><br>
                <label for="password" class="mb-2">Password</label><br>
                <input type="password" id="password" name="password" class=" ps-3 py-2 border-secondery form-control fw-light" placeholder="Enter your password">
                <label for="password" class="mb-2 mt-3">Replay Password</label><br>
                <input type="password" id="replay_password" name="replay_password" class=" ps-3 py-2 border-secondery form-control fw-light" placeholder="Replay your password">
                <input type="submit" name="submit" value="SIGN UP" class="btn form-control mt-5 bg-info text-white">
                </label>
            </div>
        </div>
    </form>
    
    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
    include 'connection.php';
    if (isset($_POST["submit"])) {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $replay_password=$_POST['replay_password'];
        if ( $password==$replay_password) {
            $query = "SELECT * FROM comptes WHERE email = '$email'";
            $SQL = mysqli_query($con,$query);
            if (mysqli_num_rows($SQL) == 0) {
                $requette="INSERT INTO comptes VALUES('','$name','$email','$password')";
                $sql=mysqli_query($con,$requette);
                    echo "<script>
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Your account added successfully !',
                                showConfirmButton: false,
                                timer: 1800
                            })
                        </script>";
                        header('refresh:2; url=signin.php');
                
            }else{
                echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "This Email already taken !",
                        })
                     </script>';
            }
                
        }else{
            echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Password OR Replay Password incorrect !"
                    })
                  </script>';
        }
        
        
    }
   
?>
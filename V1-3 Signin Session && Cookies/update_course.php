<?php 
    /*---------connection database----*/
    include 'connection.php';
    $id=$_GET['updateid'];
    $query= "select * from courses where id=$id";
    $result=mysqli_query($con,$query); 
    $row =mysqli_fetch_assoc($result);
    $id=$row['id'];
    $name=$row['name'];
    /*---------verification submit--------*/
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        /*------------- Query ----------*/
        $requete ="update courses set id=$id,name='$name' where id=$id";
        /*------------execute query--------*/
        $result = mysqli_query($con,$requete);
        if($result){
            header('location:courses.php');
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
                <input type="text" name="name" class="form-control" placeholder="Enter your name" value="<?php echo $name;?>" class="form-control" required>
            </div>
            <div class="form-group my-3">
                <input type="submit" value="Update" name="submit" class="btn-info text-white btn-outline-primary border-0 rounded-3 px-5 py-1" required>
            </div>
        </form>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

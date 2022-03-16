<?php 
    /*---------connection database----*/
    include 'connection.php';
    /*---------verification submit--------*/
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $payment_schedule =$_POST['payment_schedule'];
        $bill_number =$_POST['bill_number'];
        $amount_paid =$_POST['amount_paid'];
        $balance_amount =$_POST['balance_amount'];
        $date_payment =$_POST['date_payment'];
        /*------------- Query ----------*/
        $requete = "insert into payment_details(name,payment_schedule,bill_number,amount_paid,balance_amount,date_payment) 
                    values('$name','$payment_schedule','$bill_number','$amount_paid','$balance_amount','$date_payment')";
        /*------------execute query--------*/
        $result = mysqli_query($con,$requete);
        if($result){
            header('location:payment.php');
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
    <title>APPLICATION V1.0</title>
</head>
<body>
    <div class="container my-5">
        <form method = "post">
            <div class="form-group my-3">
                <label> Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" class="form-control" required>
            </div>
            <div class="form-group my-3">
                <label> Payment Schedule </label>
                <input type="text" name="payment_schedule" placeholder="Enter your Payment Schedule" class="form-control" required>
            </div>
            <div class="form-group my-3">
                <label> Bill Number </label>
                <input type="text" name="bill_number" placeholder="Enter your Bill Number" class="form-control" required>
            </div>
            <div class="form-group my-3">
                <label> Amount Paid </label>
                <input type="text" name="amount_paid" placeholder="Enter Amount Paid" class="form-control" required>
            </div>
            <div class="form-group my-3">
                <label> Balance Amount </label>
                <input type="text" name="balance_amount" placeholder="Enter Balance Amount" class="form-control" required>
            </div>
            <div class="form-group my-3">
                <label> Date Payment </label>
                <input type="date" name="date_payment" placeholder="Enter Date Payment" required>
            </div>
            <div class="form-group my-3">
                <input type="submit" value="Send" name="submit" class="btn-info text-white btn-outline-primary border-0 rounded-3 px-5 py-1" required>
            </div>
        </form>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

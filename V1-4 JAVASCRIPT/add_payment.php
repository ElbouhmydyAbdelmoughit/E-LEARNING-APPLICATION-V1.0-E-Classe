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
    }
?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
            </div>
        </div>
        </div>

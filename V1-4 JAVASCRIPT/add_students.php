<?php 
    /*---------connection database----*/
    include 'connection.php';
    /*---------verification submit--------*/
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email =$_POST['email'];
        $phone =$_POST['phone'];
        $enroll =$_POST['enroll_number'];
        $d_admission =$_POST['date_of_admission'];
        /*------------- Query ----------*/
        $requete = "insert into student(name,email,phone,enroll_number,date_of_admission) 
                    values('$name','$email','$phone','$enroll','$d_admission')";
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
                    <label> Email </label>
                    <input type="email" name="email" placeholder="Enter your email" class="form-control" required>
                </div>
                <div class="form-group my-3">
                    <label> Phone </label>
                    <input type="phone" name="phone" placeholder="Enter your phone" class="form-control" required>
                </div>
                <div class="form-group my-3">
                    <label> Number </label>
                    <input type="number" name="enroll_number" placeholder="Enter enroll number" class="form-control" required>
                </div>
                <div class="form-group my-3">
                    <label> Date : </label>
                    <input type="date" name="date_of_admission" placeholder="Enter date of admission" required>
                </div>
                <div class="form-group my-3">
                    <input type="submit" value="Send" name="submit" class="btn-info text-white btn-outline-primary border-0 rounded-3 px-5 py-1" required>
                </div>
                    </form>
            </div>
            </div>
        </div>
        </div>
        

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
    <div class="container-fluid">
        <div class="row">
            <div class="col-2" style="background-color: #FAFFC1;">
                <div>
                    <?php include 'sidebar.php'; ?>
                </div>
            </div>
            <div class="col-10 bg-light">
                <div>
                    <?php include 'navbar.php'?>
                    <div>
                        <div class="d-flex justify-content-between m-3 ">
                            <p class="fw-sm-bold h4 fs-light">Students list</p>
                            <div class="d-flex">
                                <div class="flex-column">
                                    <img src="assets/img/next.svg" class="btn" alt="image next">
                                </div>
                                <a href="add_students.php" class="btn  btn-info ">ADD NEW STUDENT</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mx-2">
                <div style=" overflow-x: auto;">
                    <div class="mx-3" style="min-width: 800px;">
                        <table class="table" style="border-collapse:separate;">
                            <thead>
                                <tr style="color: gray;">
                                    <td scopre="col">Image</td>
                                    <td scopre="col">Id</td>
                                    <td scopre="col">Name</td>
                                    <td scopre="col">Email</td>
                                    <td scopre="col">Phone</td>
                                    <td scopre="col">Enroll Number</td>
                                    <td scopre="col">Date of admission</td>
                                    <td scopre="col">Operation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include "table_student.php"; ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
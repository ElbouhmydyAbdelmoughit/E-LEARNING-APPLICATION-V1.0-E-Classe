<?php  
    include("session.php"); 
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
    <title>APPLICATION V1.3</title>
</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>






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
                            <p class="fw-sm-bold h4 fs-light">LIST COURSES</p>
                            <div class="d-flex">
                                <div class="flex-column">
                                    <img src="assets/img/next.svg" class="btn" alt="image next">
                                </div>
                                <a href="add_course.php" class="btn  btn-info ">ADD NEW COURSE</a>
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
                                    <td scopre="col">Id</td>
                                    <td scopre="col">Name</td>
                                </tr> 
                            </thead>
                            <tbody>
                                <?php include "table_course.php"; ?> 
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
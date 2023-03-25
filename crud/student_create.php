<?php 

require('dbcon.php');
session_start();

?>


<?= include('include/header.php'); ?>

  <div class="container mt-5 " >

  <?php
    include('message.php');
  ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h4>
              Student Add
              <a href="index.php" class="btn btn-danger float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">
            <form action="code.php" method="POST">

              <div class="mb-3">
                <label for="">Student Name</label>
                <input type="text" name="name" placeholder="Enter Name..." class="form-control">
              </div>
              <div class="mb-3">
                <label for="">Student Email</label>
                <input type="email" name="email" placeholder="Enter Email..." class="form-control">
              </div>
              <div class="mb-3">
                <label for="">Student Phone-No</label>
                <input type="number" name="phone" placeholder="Enter Phone..." class="form-control">
              </div>
              <div class="mb-3">
                <label for="">Student Course</label>
                <input type="text" name="course" placeholder="Enter Course..." class="form-control">
              </div>
              <div class="mb-3">
                <label for="">Student Address</label>
                <input type="text" name="address" placeholder="Enter address..." class="form-control">
              </div>
              <div class="mb-3">
                  <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?= include('include/footer.php'); ?>
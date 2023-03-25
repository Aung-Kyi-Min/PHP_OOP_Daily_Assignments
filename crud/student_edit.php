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
              Student Edit
              <a href="index.php" class="btn btn-danger float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">
            <?php 
            //var_dump($_GET['id']);
                if(isset($_GET['id'])){
                  $student_id = $_GET['id'];
                
                  $query = "SELECT * FROM students.students_info WHERE id='$student_id'";
                  $query_run = mysqli_query($con,$query);

                  if(mysqli_num_rows($query_run) > 0){
                    $student = mysqli_fetch_array($query_run);
                
                    ?>
                      <form action="code.php" method="POST">

                      <input type="hidden" name="stu_id" placeholder="Enter Name..." class="form-control" value="<?= $student['id']; ?>">

                        <div class="mb-3">
                          <label for="">Student Name</label>
                          <input type="text" name="name" placeholder="Enter Name..." class="form-control" value="<?= $student['name']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="">Student Email</label>
                          <input type="email" name="email" placeholder="Enter Email..." class="form-control" value="<?= $student['email']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="">Student Phone-No</label>
                          <input type="number" name="phone" placeholder="Enter Phone..." class="form-control" value="<?= $student['phone']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="">Student Course</label>
                          <input type="text" name="course" placeholder="Enter Course..." class="form-control" value="<?= $student['course']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="">Student Address</label>
                          <input type="text" name="address" placeholder="Enter address..." class="form-control" value="<?= $student['address']; ?>">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="update_student" class="btn btn-primary">Update Student</button>
                        </div>

                      </form>

                  <?php
                  }
                  else {
                    echo "NO Such Data found...";
                  }
                }
             ?>




          </div>
        </div>
      </div>
    </div>
  </div>

  <?= include('include/footer.php'); ?>
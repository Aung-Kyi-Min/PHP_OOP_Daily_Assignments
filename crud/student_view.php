<?php 

require('dbcon.php');

?>


<?= include('include/header.php'); ?>

  <div class="container mt-5 " >

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

                      <input type="hidden" name="stu_id" placeholder="Enter Name..." class="form-control" value="<?= $student['id']; ?>">

                        <div class="mb-3">
                          <label for="">Student Name</label>
                          <p class="form-control">
                            <?= $student['name']; ?>
                          </p>
                        </div>
                        <div class="mb-3">
                          <label for="">Student Email</label>
                          <p class="form-control">
                            <?= $student['email']; ?>
                          </p>
                        </div>
                        <div class="mb-3">
                          <label for="">Student Phone-No</label>
                          <p class="form-control">
                            <?= $student['phone']; ?>
                          </p>                        
                        </div>
                        <div class="mb-3">
                          <label for="">Student Course</label>
                          <p class="form-control">
                            <?= $student['course']; ?>
                          </p>                        
                        </div>
                        <div class="mb-3">
                          <label for="">Student Address</label>
                          <p class="form-control">
                            <?= $student['address']; ?>
                          </p>                        
                        </div>

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
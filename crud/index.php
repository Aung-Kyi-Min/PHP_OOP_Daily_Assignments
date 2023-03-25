<?php

require 'dbcon.php';
session_start();

?>


<?= include('include/header.php'); ?>


  <div class="container mt-5">

    <?php include 'message.php'; ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>
              Students Details
              <a href="student_create.php" class="btn btn-primary float-end ">Add Student</a>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered text-center bg-dark text-light">
              <thead>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Address</th>
                <th>Action</th>
              </thead>
              <tbody>

                <?php

                  $query = "SELECT * FROM students.students_info";
                  $query_run = mysqli_query($con, $query);
                  if (mysqli_num_rows($query_run) > 0) {

                      foreach ($query_run as $students) {

                 ?>

                    <tr>
                      <td><?=$students['id'];?></td>
                      <td><?=$students['name'];?></td>
                      <td><?=$students['email'];?></td>
                      <td><?=$students['phone'];?></td>
                      <td><?=$students['course'];?></td>
                      <td><?=$students['address'];?></td>
                      <td>
                        <a href="student_view.php?id=<?= $students['id'];?>" class="btn btn-success btn-sm">View</a>
                        <a href="student_edit.php?id=<?= $students['id'];?> " class="btn btn-info btn-sm">Edit</a>
                        <form action="code.php" method="POST" class="d-inline">
                          <button type="submit" value="<?= $students['id']; ?>" name="student_delete" class="btn btn-danger btn-sm"> 
                            Delete
                          </button>
                        </form>
                      </td>
                    </tr>
                <?php

    }
} else {
    echo "No Datat Here...";
}
?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?= include('include/footer.php');









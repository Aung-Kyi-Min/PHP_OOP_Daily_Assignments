<?php

session_start();
require 'dbcon.php';


//Delete
if(isset($_POST['student_delete'])){
  $student_id = mysqli_real_escape_string($con,$_POST['student_delete']);
  $query = "DELETE FROM students.students_info WHERE id='$student_id'";
  $query_run = mysqli_query($con,$query);

  if($query_run){

    $_SESSION['message'] = "Students Deleted Successfully...";
    //header("Location : index.php");
    echo "<script>window.location='index.php'</script>";
    exit(0);
  }
  else{
    $_SESSION['message'] = "Students Not Deleted...";
    echo "<script>window.location='index.php'</script>";
    exit(0);
  }

}



//update
if(isset($_POST['update_student'])){
  $student_id = mysqli_real_escape_string($con,$_POST['stu_id']);
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $phone = mysqli_real_escape_string($con,$_POST['phone']);
  $course = mysqli_real_escape_string($con,$_POST['course']);
  $address = mysqli_real_escape_string($con,$_POST['address']);

  $query = "UPDATE students.students_info SET  name='$name' , email='$email', phone='$phone',
            course='$course', address= '$address' where id='$student_id' ";
  $query_run = mysqli_query($con,$query);


  if($query_run){

    $_SESSION['message'] = "Students Updated Successfully...";
    //header("Location : index.php");
    echo "<script>window.location='index.php'</script>";
    exit(0);
  }
  else{
    $_SESSION['message'] = "Students Not Added...";
    echo "<script>window.location='index.php'</script>";
    exit(0);
  }

}




//create
if(isset($_POST['save_student'])){


  $name = mysqli_real_escape_string($con,$_POST['name']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $phone = mysqli_real_escape_string($con,$_POST['phone']);
  $course = mysqli_real_escape_string($con,$_POST['course']);
  $address = mysqli_real_escape_string($con,$_POST['address']);


  $query = "INSERT INTO `students`.`students_info` ( `name`, `email`, `phone`, `course`, `address`)
           VALUES ('$name', '$email', '$phone', '$course', '$address')";
  $query_run = mysqli_query($con,$query);

  if($query_run){

    $_SESSION['message'] = "Students Added Successfully...";
    echo "<script>window.location='student_create.php'</script>";
    exit(0);
  }
  else{
    $_SESSION['message'] = "Students Not Added...";
    echo "<script>window.location='student_create.php'</script>";
    exit(0);
  }


}

?>
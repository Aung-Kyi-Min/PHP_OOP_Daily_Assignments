<?php

$con = mysqli_connect("localhost","root","aungkyi1000","students");

if (!$con){
  die('Connection Failed' . mysqli_connect_error());
}else{
  //echo "Connection Successful";
}

?>
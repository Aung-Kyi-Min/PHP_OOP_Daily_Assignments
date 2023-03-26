<?php
  $num = 33;
  function global_var(){
    global $num;
    echo "inside variable:$num <br>";
  }
  global_var();
  echo "outside variable:$num ";

?>
<?php 

$fruit = array("apple","orange","mango","lemon");
sort($fruit);           // asccending sort array
print_r($fruit);        //  same as asort($fruit)
echo "<br>";

rsort($fruit);
print_r($fruit);  
echo "<br>";      // descending sort array

$allae = array("a"=> "aa", "b"=>"bb" , "c"=>"cc" , "d"=>"dd");



asort($allae);
print_r($allae);  // asccending sort array's keys
echo "<br>"; 

ksort($allae);
print_r($allae);    //asccending sort array's keys
echo "<br>";

arsort($allae);     
print_r($allae);     //descending sort array's keys 
echo "<br>";


krsort($allae);     
print_r($allae);     //descending sort array's keys 
echo "<br>";

?>
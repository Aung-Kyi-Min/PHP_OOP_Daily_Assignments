<?php

echo "<h1>String Section</h1>". "<br>";

$text = "allae amal amal";
$length = strlen($text);
echo $length . "<br>";

$count_word = str_word_count($text);
echo $count_word . "<br>";

$revere = strrev($text);
echo $revere . "<br>";

$count_front_position = strpos($text,'amal');       // don't effect second 'amal'
echo $count_front_position . "<br>";


echo "<h1>Number Section</h1>". "<br>";
$num = 12;
$num1 = "23rrr";
var_dump(is_int($num));                 // also include is_float() in number section
echo "<br>";
var_dump(is_int($num1));
echo "<br>";
var_dump(is_numeric($num));
echo "<br>";
var_dump(is_numeric($num1));
echo "<br>";
echo "<br>";

// casting

$one = 12.33;
$onee = "allae";
$on = (int)$one;
echo $on;
echo "<br>";
var_dump($on);
echo "<br>";

$onn = (int)$onee;
echo $onn;
echo "<br>";
var_dump($onn);
echo "<br>";


echo "<h1>Number Section</h1>". "<br>";

echo pi();  echo "<br>";
echo min(3,2,4,2,1,0);  echo "<br>";
echo max(2,3,4,6,2,1);  echo "<br>";
echo abs(-123);     echo "<br>";
echo sqrt(25);      echo "<br>";
echo round(1.4);    echo "<br>";
echo rand();        echo "<br>";
echo rand(100, 900);    echo "<br>";


echo "<h1>Constant Section</h1>". "<br>";

define("a","allae");
define("b",["a","b","c","d","e"]);
echo a . "<br>";
echo b[2] . "<br>";





?>
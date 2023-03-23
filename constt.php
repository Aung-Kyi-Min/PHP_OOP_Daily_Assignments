<?php
define("a","22");
define("aaa","aung aung");

class Aa{
    const LAA= 3;
    public static $name;

    function getit(){
    
        echo __CLASS__ . " This is " . __LINE__ . " Method " . __METHOD__;
    }
}
Aa::$name="allae";
echo Aa::$name . "<br>";
echo Aa::LAA . "<br>";
echo aaa. "<br>";
$ne = new Aa();
$ne->getit();
?>
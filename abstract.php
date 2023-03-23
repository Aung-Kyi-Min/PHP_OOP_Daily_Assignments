<?php

// abstract method never have body
// class must be abstract when there is abstract method
// must override all the abstract methods  when it has at least one abstract method 

abstract class papa{
    public function mama(){
        echo "She is my mom " ;

    }
    public abstract function brother();
}
class sister extends papa{
    public function mama(){
        echo "She is beautiful.";
    }
    public function brother()
    {
        echo "Here is my brother.<hr>";
    }
}
$sis = new sister();
$sis->brother();
echo "<br>";
$sis->mama();
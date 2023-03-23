<?php

class Su{
    public function call(string $val){             // string , int , float , bool 
        echo $val;
    }
}
$su = new Su();
$su->call("allae");
echo "<br>";

// Array type casting
class A{
    public function a(array $som){
        var_dump($som) ;
    }
}
$a = new A();
$a->a(["One"=> 'aung',"Two"=> 'susu']);
echo "<br>";


// Object type casting
class B{
    
}
class C{
    public function c(B $allae){
        var_dump($allae) ;
    }
}
$b = new B();
$c = new C();
$c->c($b);
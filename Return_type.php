<?php 

class A{
    public function a(float $aa) : int {
        var_dump(TRUE);
        echo "<hr>";
        return "allae";             //  int so tw string data phyit loz ma ya bu
    }
}
$a = new A();
// echo $a->a(1);
$aaa = $a->a(1.2);
var_dump($aaa);
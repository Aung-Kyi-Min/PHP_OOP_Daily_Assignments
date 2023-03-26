<?php

class Dog
{
    public $name;
    public function __construct(String $name)
    {
        $this->name = $name;
    }
    public function __invoke(String $next, String $next1)
    {
        echo $next . "<br>";
        echo $next1 . "<br>";
    }
    public function __clone()
    {
        $this->name = "blank";
    }
    public function __debugInfo()
    {
        return [
            'name : ' . $this->name,
        ];
    }
}
$dog = new Dog("Jackie");
echo $dog->name . "<br>";

$dog("Eti", "MoeMoe");
$dog1 = clone $dog;
echo $dog1->name . "<br>";
if ($dog == $dog1) {
    echo "<br>They are same";
} else {
    echo "Not Same <br>";
}
var_dump($dog);

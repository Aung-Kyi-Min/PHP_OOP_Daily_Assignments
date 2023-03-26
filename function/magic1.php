<?php
class Dog
{
    public $name;
    private $args = [];
    public function __construct(String $name)
    {
        $this->name = $name;
        echo "this is construct!!" . "<br>";
    }
    public function __destruct()
    {
        var_dump(__CLASS__ . "destruct!!");
    }
    public function __set($key, $value)
    {
        $this->args[$key] = [$value];
        echo "start setting ";
    }
    public function __get($key)
    {
        echo "start getting";
        return $this->args[$key];
    }
    public function __call($name, $args)
    {
        var_dump($name);
        var_dump($args);
    }
    public function __toString()
    {
        return
        "Class Name is " . __CLASS__ . "<br>";
        // "Dog's name is " . $this->name ."<br>";
        // "Args Array = " . $this->args . "<br>";

    }
    public static function __callStatic($name, $args)
    {
        var_dump($name);
        var_dump($args);
    }
}

Dog::fool("static method goes" . "<br>"); //static method

$dog = new Dog("Jackie");
$dog->color = "red"; //properties overloading
$dog->legs = 4;
echo $dog->name . "<br>";
echo $dog;
//echo $dog->color;
//echo $dog->legs;
$dog->dance("fast", "slow", 3); //method overloading

<?php

class Cat
{
    public $name;
    public $color;
    public $data = [];
    public function __construct(String $name, String $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function __set($key, $value)
    {
        $this->data[$key] = [$value];
    }
    public function __get($key)
    {
        return $this->data[$key];
    }
    public function __toString()
    {
        return "Class name : " . __CLASS__ . "<br>" .
        "Cat name : " . $this->name . "<br>" .
        "Cat color : " . $this->color . "<br>";
    }
    public function __isset($key)
    {
        return isset($this->data[$key]);
    }
    public function __unset($key)
    {
        unset($this->data[$key]);
    }
}
$cat = new Cat("shwe mi", "yellow");
// echo $cat;
$cat->name = "allae";
echo $cat;
//unset($cat->name);
if (isset($cat->name)) {
    echo $cat . "<br>";
    // echo "hola";
} else {
    echo "Nothing is here";
}

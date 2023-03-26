<?php

class Dog
{
    private $name;
    public $color;
    protected $leg;
    public $heavy_loaded;
    public function __construct(string $name, string $color, int $leg)
    {
        $this->name = $name;
        $this->color = $color;
        $this->leg = $leg;
        $this->connect();
    }
    public function connect()
    {
        $this->heavy_loaded = "How are you?";
        echo "Heavy_loaded is connected <br>";
    }
    public function __sleep()
    {
        return ['name', 'color', 'leg'];
    }
    public function __wakeup()
    {
        return $this->connect();
    }
}

$dog = new Dog("Jackie", "white", 4);
echo $dog->heavy_loaded . "<br>";
$s_dog = serialize($dog); // Seriallize ka sleep() ko call ty
$u_dog = unserialize($s_dog); // Unserialize ka wakeup() ko call ty
// echo $s_dog . "<br>";

echo $u_dog->heavy_loaded . "<br>";
echo $u_dog->color;

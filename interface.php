<?php
interface DogFun{
    public function bark();
    public function eat();
}
trait superman{         // trait session start
    public $age=11;
    public function breath(){
        echo "<br>$this->name is breathing<br>";
    }
}
class Dog implements DogFun{
    public $name;
    use superman;           // using trait mehtod
    public function __construct(string $name) {
        $this->name = $name;
    }
    public function bark(){
        echo "$this->name wolfff <br>";
    }
    public function eat(){
        echo "$this->name eats breads <br>";
    }

}
$dog = new Dog("Jackie");
echo $dog->name. "<br>";
$dog->bark();
$dog->eat();
$dog->breath();
echo $dog->age;
?>
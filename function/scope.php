<?php
class Cat{
    public $name;
    private $claws;
    protected $foods;
    public function __construct(String $name,bool $claws,array $foods ) {
        $this->name=$name;
        $this->claws=$claws;
        $this->foods=$foods;
    }
    private function call(){       //userdefined function         
        echo "<br>meow!!<br>";
    } 
    public function isclaws(){
        if($this->claws==true){
            echo "<br>Its claws are hidden<br><br>";
        }else{
            echo "Its claws are not hidden";
        }
    }
    public function sayfoods(){
        $this->call();
        var_dump($this->foods);
    }

}
class Baba extends Cat{
    public function __construct(String $name,bool $claws, array $foods){
        parent::__construct($name,$claws,$foods);
    }
        function cute(){
            echo "<br>this is " . $this->name . " and too a pouk soe!! <br>";
            var_dump($this->foods);
        }
    
}
$cat = new Cat("Shwe Shwe",true,["fish","rice","cookie"]);
echo $cat->name . "<br>";
$cat->sayfoods();
$cat->isclaws();
$cat1=new Baba("Eaint",true,["bones","chee","Moe Arkar"]);
echo $cat1->name . "<br>";
$cat1->isclaws() ;
$cat1->cute();


?>
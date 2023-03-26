<?php

class Writer
{
    public $foods;
    public $name;
    public $hours;
    public function __construct(String $name)
    {
        $this->name = $name;
    }
    public function eat(String...$foods): Writer
    {
        $response = $this->name . " is eating : ";
        foreach ($foods as $food) {
            $response .= $food . ",";
        }
        $response .= ". <br>";
        $this->hours += 2;
        echo $response;
        return $this; 
    }

    public function sleep(): Writer
    {
        $this->hours += 4;
        echo $this->name . " is sleeping " . $this->hours . "hours .<br>";
        return $this;
    }
    public function repeat(): Writer
    {
        $this->hours += 4;
        echo $this->name . " is repeating" . $this->hours . "hours .<br>";
        return $this;
    }
}
$writer = new Writer("Saya Phyo");
$writer
    ->eat('bread', 'milk', 'coffee')
    ->sleep()
    ->repeat();
// var_dump($writer->hours);
echo $writer->hours;

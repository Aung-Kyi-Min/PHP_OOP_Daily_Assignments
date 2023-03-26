<?php

class JuiceMaker
{
    public $name;
    private static $_instance;
    public function __construct(String $name)
    {
        $this->name = $name;
    }
    public static function addWater(string $name)
    {
        if (!self::$_instance instanceof JuiceMaker) {
            self::$_instance = new JuiceMaker($name);
        }
        echo $name . " adds Water... <br>";
        return self::$_instance;

    }
    public function addApple()
    {
        echo __CLASS__ . " adds apple juice...<br>";
        return $this;
    }
    public function addOrange()
    {
        echo __CLASS__ . " adds Orange juice...<br>";
        return $this;
    }
    public function addsugar()
    {
        echo __CLASS__ . " adds sugar to juice...<br>";
        return $this;
    }
}
JuiceMaker::addWater("Hla Hla")
    ->addOrange()
    ->addsugar();
JuiceMaker::addWater("Aung Aung")
    ->addApple()
    ->addsugar();

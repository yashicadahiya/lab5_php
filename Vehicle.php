<?php

class Vehicle
{
    const DIESEL = 'd';
    const PETROL = 'p';
    private static $count =0;

    private $build;
    private $color;
    private $fuel;

    public static function getCount(){
        return self::$count;
    }
    public function setFuel($value){
        if($value == self::DIESEL || $value == self::PETROL) {
            $this->fuel = $value;
        }
    }
    public function getFuel(){
        return $this->fuel;
    }

    public function getBuild()
    {
        return $this->build;
    }

    public function setBuild($build)
    {
        $this->build = $build;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function __construct($build, $color, $fuel){
        $this->build = $build;
        $this->color = $color;
        $this->setFuel($fuel);
        self::$count++;
    }
    public function displayVehicle(){
        return "Build:  " . $this->build . " Color: " . $this->color. "Fuel: " . $this->getFuel();;
    }
   /* public function displayfuel()
    {
        return "Fuel type: " . $this->fuelType;
    }*/

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        //echo "close database";
    }

}
<?php

class Car {

    public $brand;
    public $model;
    public $year;
    public $color;

    protected $speed = 0;

    public function __construct($brand, $model, $color = "grigio", $year = 2022) 
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
    }

    public function accelerate() {
        $this->speed = $this->speed + 10;
        echo $this->brand . ' ' . $this->model . ' sta accelerando <br>';
        $this->getReadableSpeed();
    }

    public function brake() {
        if ($this->speed >= 10) {
            $this->speed = $this->speed - 10;
            echo $this->brand . ' ' . $this->model . ' sta frenando <br>';
            $this->getReadableSpeed();
        }
    }

    protected function getReadableSpeed() {
        echo $this->brand . ' ' . $this->model . ' viaggia a ' . $this->speed . '<br><br>';
    }

    public function getSpeed() {
        return $this->speed;
    }


    
}



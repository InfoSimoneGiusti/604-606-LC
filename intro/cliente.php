<?php

class Cliente {
    
    public $name;
    public $lastname;
    public $age;
    protected $discount = 0;
    
    public function __construct($name, $lastname, $age = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    public function getFullName() {
        echo $this->name . ' ' . $this->lastname . "<br>";
    }

    public function setDiscountByAge($age) {  
        $this->age = $age;
        if ($age >= 65) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }

    public function getDiscount() {
        return $this->discount;
    }

}   

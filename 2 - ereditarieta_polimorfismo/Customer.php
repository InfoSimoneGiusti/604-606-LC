<?php

require_once __DIR__ . '/User.php';

class Customer extends User {
    
    protected $discount = 0;
    public $fidalityCard = null;

    public function __construct($name, $lastname, $fidalityCard, $age = null)
    {
        /*
            $this->name = $name;
            $this->lastname = $lastname;
            $this->age = $age;
        */

        parent::__construct($name, $lastname, $age);
        
        $this->fidalityCard = $fidalityCard;

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

    public function getFullName() {
        return "***** " . $this->name . ' ' . $this->lastname . " *****<br>";
    }


}   

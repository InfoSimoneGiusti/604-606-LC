<?php

class User {
    
    public $name;
    public $lastname;
    public $age;
    

    public function __construct($name, $lastname, $age = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    public function getFullName() {
        return $this->name . ' ' . $this->lastname . "<br>";
    }

}   

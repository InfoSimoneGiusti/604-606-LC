<?php

require_once __DIR__ . '/Shape.php';

class Circle extends Shape {

    public $radius = 0;

    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getArea() {
        return $this->radius * $this->radius * pi();
    }

}
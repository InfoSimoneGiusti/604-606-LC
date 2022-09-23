<?php

require_once __DIR__ . '/Shape.php';

class Triangle extends Shape {

    public $height = 0;
    public $width = 0;

    public function __construct($name, $height, $width) {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function getArea() {
        return $this->height * $this->width / 2;
    }

}
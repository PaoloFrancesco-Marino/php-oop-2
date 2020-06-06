<?php 

include_once __DIR__ . '/Products.php';

class Electroncics extends Products {

    // Properties
    public $brand;
    public $model;
    public $type;
    public $condition;
    public $price;

    // constructor
    public function __construct($_categories, $_brand,   $_model, $_type, $_condition, $_price) {
        parent::__construct($_categories);

        $this->brand = $_brand;
        $this->name = $_model;
        $this->type = $_type;
        $this->condition = $_condition;
        $this->price = number_format($_price, 0);
    }

    // method
    public function printElectronics() {
        return $this->brand . $this->name . $this->type . $this->condition . $this->price;
    }
}


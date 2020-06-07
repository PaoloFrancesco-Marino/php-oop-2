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
        $this->model = $_model;
        $this->type = $_type;
        $this->condition = $_condition;
        $this->price = $_price;
    }

    // method
    public function printElectronics() {
        return "
            <li>$this->brand </li>
            <li>$this->model </li>
            <li>$this->type </li>
            <li>$this->condition </li>
            <li>$this->price €</li>
            <li>Prezzo Scontato del 30%:{$this->Discount(30)} €</li>";
    }
}


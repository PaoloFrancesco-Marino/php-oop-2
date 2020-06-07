<?php 
include_once __DIR__ . '/Products.php';

class DomesticApp extends Products {

    // Properties
    public $type;
    public $brand;
    public $model;
    public $price;

    // constructor
    public function __construct($_categories, $_type, $_brand, $_model, $_price) {
        parent::__construct($_categories);

        $this->type = $_type;
        $this->brand = $_brand;
        $this->model = $_model;
        $this->price = $_price;
    }

    // method
    public function printDomesticApp() {
        return "
            <li>$this->type </li>
            <li>$this->brand </li>
            <li>$this->model </li>
            <li>$this->price €</li>
            <li>Prezzo Scontato 20%: {$this->Discount(20)} €</li>";
    }
}
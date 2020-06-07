<?php
include_once __DIR__ .'/Domestic_appliances.php';

class Fridge extends DomesticApp {
    // properties
    public $capacity;
    public $measures;
    public $energyClass;
    public $weight;
    public $installation;

    // construct
    public function __construct($_categories, $_type, $_brand, $_model, $_price, $_capacity, $_measures, $_energyClass, $_weight, $_installation) {
        parent::__construct($_categories, $_type, $_brand, $_model, $_price);

        $this->capacity = $_capacity;
        $this->measures = $_measures;
        $this->energyClass = $_energyClass;
        $this->weight = $_weight;
        $this->installation = $_installation;
    }

    // method
    public function printFridge() {
        return "
            <li>$this->capacity </li>
            <li>$this->measures </li>
            <li>$this->energyClass </li>
            <li>$this->weight €</li>
            <li>$this->installation €</li>";
    }
}

// instace object

$fridge1 = new Fridge('Elettrodomestici', 'Frigorifero', 'Whirlpool', 'W7 831T', 549, '338L', '596x1890x677 mm', 'A+++', '84 kg', 'Libera Installazione');

$fridge2 = new Fridge('Elettrodomestici', 'Frigorifero', 'Candy', 'CMDDS', 249, '204L', '550x1430x550 mm', 'A+', '64 kg', 'Libera Installazione');

$fridge3 = new Fridge('Elettrodomestici', 'Frigorifero', 'LG', 'GSB760PZXZ', 849, '626L', '738x1790x770 mm', 'A++', '110 kg', 'Libera Installazione');
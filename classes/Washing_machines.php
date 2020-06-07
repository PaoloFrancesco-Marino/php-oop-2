<?php
include_once __DIR__ . '/Domestic_appliances.php';

class WashingMachine extends DomesticApp {
    // properties
    public $energyClass;
    public $weight;
    public $capacity;
    public $measures;

     // constructor
    public function __construct($_categories, $_type, $_brand, $_model, $_price, $_energyClass, $_weight, $_capacity, $_measures) {
        parent::__construct($_categories, $_type, $_brand, $_model, $_price);

        $this->energyClass = $_energyClass;
        $this->weight = $_weight;
        $this->capacity = $_capacity;
        $this->measures = $_measures;
        
    }

    // method
    public function printWashingMach() {
        return "
            <li>$this->energyClass </li>
            <li>$this->weight </li>
            <li>$this->capacity </li>
            <li>$this->measures </li>";
    }
}

// instance object

$washing1 = new WashingMachine('Elettrodomestici', 'Lavatrice', 'Indesit', 'IWC', 229, 'A+++', '63 kg', 'Capacità cestello: 7 kg', '595x850x517 mm');

$washing2 = new WashingMachine('Elettrodomestici', 'Lavatrice', 'LG', 'F2WV4S', 369, 'A+++20%', '60 kg', 'Capacità cestello: 7 kg', '600x850x450 mm');

$washing3 = new WashingMachine('Elettrodomestici', 'Lavatrice', 'Candy', 'CSS 129T3', 299, 'A+++', '69 kg', 'Capacità cestello: 9 kg', '850x520x600 mm');
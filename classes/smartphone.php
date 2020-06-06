<?php
include_once __DIR__ . '/Electronics.php';

class Smartphone extends Electroncics {

    // Properties
    public $system;
    public $ram;
    public $memory;

    // constructor
    public function __construct($_categories, $_brand,   $_model, $_type, $_condition, $_price, $_system, $_ram, $_memory ) {
        parent::__construct($_categories, $_brand,   $_model, $_type, $_condition, $_price);

        $this->system = $_system;
        $this->ram = $_ram;
        $this->memory = $_memory; 
    }

    // method
    public function printSmartphoneSpecs() {
        return "
            <li>$this->system</li> 
            <li>$this->ram</li> 
            <li>$this->memory</li>";
    }
}

// instance object

$smartphone1 = new Smartphone('Elettronica','Apple', 'IPhone SE', 'Smartphone', 'Nuovo', 499, 'iOS 13', '3GB', '64GB');

$smartphone2 = new Smartphone('Elettronica','Samsung', 'Galaxy S20 Ultra', 'Smartphone', 'Nuovo', 1055, 'Android 10', '12GB', '128GB');

$smartphone3 = new Smartphone('Elettronica','Huawei', 'P40 Pro', 'Smartphone', 'Nuovo', 749, 'Android 10', '8GB', '128GB');
<?php
include_once __DIR__ . '/Electronics.php';

class Computers extends Electroncics {
    // Properties
    public $processor;
    public $os;
    public $ram;
    public $hd;
    public $monitor;
    public $weight;

    // constructor
    public function __construct($_categories,$_brand,   $_model, $_type, $_condition, $_price, $_processor, $_os, $_ram, $_hd, $_monitor, $_weight) {
        parent::__construct($_categories, $_brand,   $_model, $_type, $_condition, $_price,);

        $this->processor = $_processor;
        $this->os = $_os;
        $this->ram = $_ram;
        $this->hd = $_hd;
        $this->monitor = $_monitor;
        $this->weight = $_weight;
    }

    // method 
    public function printComputerSpecs() {
        return "
            <li>$this->processor</li> 
            <li>$this->os</li> 
            <li>$this->ram</li>
            <li>$this->hd</li> 
            <li>$this->monitor</li> 
            <li>$this->weight</li>";
    }
}

// instance object

$computer1 = new Computers('Elettronica','Dell', 'XPS 13', 'Notebook', 'Nuovo', 1299, 'Intel i3-1005G1', 'Windows 10 Home', '4 GB LPDDR4 a 3733 MHz', 'SSD PCIe NVMe 256 GB', '13,4 Pollici FHD', '1,33 kg');

$computer2 = new Computers('Elettronica','Lenovo', 'Thinkpad X1 Carbon', 'Notebook', 'Nuovo', 1779, 'Intel i5-10210U', 'Windows 10 Home', '8 GB LPDDR3 a 2.133 MHz', 'SSD PCIe NVMe 256 GB', '14 Pollici FHD IPS', '1,09 kg');

$computer3 = new Computers('Elettronica','Dell', 'Alienware Aurora', 'Desktop', 'Nuovo', 1598, 'Intel i5-9600K', 'Windows 10 Home', '16 GB DDR4 a 2.666 MHz', 'SSD PCIe NVMe 256 GB (avvio) + SATA da 1TB a 7.200 rpm', 'Escluso', '17,8 kg');
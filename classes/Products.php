<?php

include_once __DIR__ . '/Traits.php';

class Products {
    // import traits
    use CodeProducts;

    // Properties
    public $categories;
    
    // constructor
    public function __construct($_categories) {
        $this->categories = $_categories;
        $this->getRandomCode();
    }

    // methods
    public function printProducts() {
        return "
            <li>$this->categories </li>
            <li>{$this->getRandomCode()}</li>";
    }


}



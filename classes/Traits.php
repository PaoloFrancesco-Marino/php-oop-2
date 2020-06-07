<?php

trait CodeProducts {

    // methods
    // code products
    public function getRandomCode($length = 5) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

trait Discount {
    public function Discount($perc) {
        $discount = $this->price * $perc / 100;
        $discount_price = $this->price - $discount;
        
        return number_format($discount_price, 0);
    }
}
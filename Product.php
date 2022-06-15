<?php

class Product {
    public $ward;
    public $price;
    public $loyalty_points;

    function __construct($_ward, $_price, $_loyalty_points)
    {
        $this->ward = $_ward;
        $this->price = $_price;
        $this->loyalty_points = $_loyalty_points;
    }

    public function printInfo() {
        return "$this->ward € $this->price $this->loyalty_points";
    }
}

?>
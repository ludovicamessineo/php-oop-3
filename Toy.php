<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product {
    public $rope;
    public $noise;

    function __construct($_ward, $_price, $_loyalty_points, $_rope, $_noise) {
        parent::__construct($_ward, $_price, $_loyalty_points);
        $this->rope = $_rope;
        $this->noise = $_noise;
    }

    public function printInfo() {
        return "Reparto numero: $this->ward / Prezzo: €$this->price / Punti Fedeltà: $this->loyalty_points / $this->rope $this->noise";
    }
}
?>
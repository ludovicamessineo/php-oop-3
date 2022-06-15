<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
    public $animal;
    public $type;

    function __construct($_ward, $_price, $_loyalty_points, $_animal, $_type) {
        parent::__construct($_ward, $_price, $_loyalty_points);
        $this->animal = $_animal;
        $this->type = $_type;
    }

    public function printInfo() {
        return "Reparto numero: $this->ward / Prezzo: €$this->price / Punti Fedeltà $this->loyalty_points / Tipo di animale: $this->animal /$this->type";
    }
}

?>
<?php
    trait Supplier {
        public $city;
        public $address;
        public $cap;
        public $invoice;
        
        public function printAddress() {
            return "$this->city $this->address $this->cap $this->invoice";
        }

        public function setAddress($_city, $_address, $_cap, $_invoice) {
            $this->city = $_city;
            $this->address = $_address;
            $this->cap = $_cap;
            $this->invoice = $_invoice;
        }
    }
?>
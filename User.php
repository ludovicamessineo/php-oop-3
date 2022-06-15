<?php

class User {
    public $name;
    public $last_name;
    public $email;
    public $cart = [];

    public function subscribe($_name, $_email) {
        $this->name = $_name;
        $this->email = $_email;
    }
    
    public function isRegistered () {
        if ($this->email && $this->name) {
            return true;
        } else {
            return false;
        }
    }
}

?>
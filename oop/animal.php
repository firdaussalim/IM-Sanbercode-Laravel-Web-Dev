<?php

class Animal {
    public $nama;
    public $legs = 4;
    public $cold_blooded = "no";
    public function __construct($name) {
        $this->nama = $name;
    }
    public function get_name() {
        return $this->nama ;
    }
    public function get_legs() {
        return $this->legs ;
    }
    public function get_cold_blooded() {
        return $this->cold_blooded;
    }
}

?>


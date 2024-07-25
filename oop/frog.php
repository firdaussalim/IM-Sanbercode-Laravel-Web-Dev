<?php
require_once("animal.php");

class Frog extends Animal {
    public $cold_blooded = "yes";
    public function jump() {
        return "hop hop";
    }
}

?>
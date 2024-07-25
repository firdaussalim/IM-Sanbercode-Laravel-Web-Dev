<?php
require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$sheep = new Animal("shaun");
echo "nama : " . $sheep->get_name() . "<br>";
echo "kaki : " . $sheep->get_legs() . "<br>";
echo "darah dingin: ". $sheep->get_cold_blooded() . "<br> <br>";

$kodok = new Frog("princeton");
echo "nama : " . $kodok->get_name() . "<br>";
echo "kaki : " . $kodok->get_legs() . "<br>";
echo "darah dingin: ". $kodok->get_cold_blooded() . "<br>";
echo $kodok->jump() . "<br> <br>";

$kera = new Ape("wukong");
echo "nama : " . $kera->get_name() . "<br>";
echo "kaki : " . $kera->get_legs() . "<br>";
echo "darah dingin: ". $kera->get_cold_blooded() . "<br>";
echo $kera->yell() . "<br> <br>";


?>
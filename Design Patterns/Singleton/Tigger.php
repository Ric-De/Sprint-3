<?php

class Tigger{

//Constructor
public function __construct(){
    echo "Building character..." . PHP_EOL;
}

//Roar method
public function roar(){
    echo "Grrr!" . PHP_EOL;
}

}

$tigger1 = new Tigger();
$tigger2 = new Tigger();

$tigger1->roar();


?>
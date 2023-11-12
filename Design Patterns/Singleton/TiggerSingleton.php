<?php

class TiggerSingleton{

    //Attributes
    private static $instance;
    private $roarCounter;

    //Constructor
    private function __construct(){
        $this->roarCounter = 0;
    }

    //Get instance of the class
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    //Roar Method
    public function roar(){
        echo "Grrr!" . PHP_EOL;
        $this->roarCounter++;
    }

    //Roar Counter Method
    public function countRoars(){
        return $this->roarCounter;
    }

    }

    //$tigger1 = new TiggerSingleton(); //This is not going to work due to the private property in the constructor.
    //$tigger1->roar();

    $tigger = TiggerSingleton::getInstance();

    $tigger->roar();
    $tigger->roar();
    $tigger->roar();
    $tigger->roar();
    echo $tigger->countRoars();
?>
<?php

class Animal {
    public $name; 
    public $nrOfLegs;

    public function __construct($name, $nrOfLegs){
        $this->name = $name;
        $this->nrOfLegs = $nrOfLegs;
    }

    public function sayName(){
       echo $this->name;
    }
}
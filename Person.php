<?php

class Person{
    
    public $name;
    public $age;

    public function __construct($name, $age){
        $this-> name = $name;
        $this-> age = $age;
    }

    function greet(){
        return "Hello {$this->name}! I hope you are doing well. you are {this->age} years old.";
    }
    function birthday(){
        $this->age += 1;
        return "Huurrayyy! Today you are {$this->age} years old. it's your birthday";
    }
    function isAdult(){
        return $this->age >= 18 ? "Adult" : "Not Adult"; 
    }
    function breathe(){
        return $this->name . ' is not breathing';
    }
}

$person = new Person("Zain Fatima", 22);


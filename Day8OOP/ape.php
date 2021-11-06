<?php

class Ape extends Animal 
{
    private $yell = "Auooo";
    protected $legs = 2;
    function __construct($name){
        $this->name = $name;
    }
    function get_name(){
        echo "<br><br>Name : ".$this->name;
    }
    function get_legs(){
        echo "<br>Legs : ".$this->legs;
    }
    function get_cold_blooded(){
        echo "<br>Cold Blooded : ".$this->cold_blooded;
    }
    function get_yell(){
        $this->get_name();
        $this->get_legs();
        $this->get_cold_blooded();
        echo "<br>Yell : ".$this->yell;
    }

}
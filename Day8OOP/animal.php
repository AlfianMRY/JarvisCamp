<?php

class Animal 
{
    protected $name;
    protected $legs = 4;
    protected $cold_blooded = "no";

    function __construct($name){
        $this->name = $name;
    }
    function get_name(){
        echo "<br>Name : ".$this->name;
    }
    function get_legs(){
        echo "<br>Legs : ".$this->legs;
    }
    function get_cold_blooded(){
        echo "<br>Cold Blooded : ".$this->cold_blooded;
    }

}
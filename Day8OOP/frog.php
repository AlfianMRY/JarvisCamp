<?php

class Frog extends Animal
{
    private $jump = "hop hop";

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
    function get_jump(){
        $this->get_name();
        $this->get_legs();
        $this->get_cold_blooded();
        echo "<br>Jump : ".$this->jump;
    }
}

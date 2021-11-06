<?php
require_once ('animal.php');
require_once ('frog.php');
require_once ('ape.php');


$sheep = new Animal("shaun");

$sheep->get_name();
$sheep->get_legs();
$sheep->get_cold_blooded();

$sungokong = new Ape("kera sakti");
$sungokong->get_yell();

$kodong = new Frog("buduk");
$kodong->get_jump();

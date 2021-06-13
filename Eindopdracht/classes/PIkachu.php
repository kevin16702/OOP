<?php

include "Pokemon.php";
include "Resistance.php";

class Pikachu extends Pokemon {
    public function __construct(){
        $resistance = ['Fighting', 20];
        parent::__construct('Pikachu', 60, 'Electric', [['Electric Ring', 50 ], ['Pika Punch', 20]], $weakness, $resistance);
    }
}
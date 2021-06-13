<?php

include "Pokemon.php";

class Charmeleon extends Pokemon {
    public function __construct(){
        $weakness = ['Water', 2];
        $resistance = ['Lighting', 10];
        parent::__construct('Charmeleon', 60, 'Fire', [['Head Butt', 10], ['Flare', 30]], $weakness, $resistance);
    }
}
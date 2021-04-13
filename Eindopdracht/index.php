<?php

require 'classes/Pokemon.php';

$pikachu = new Pokemon('Pikachu', 60, 'Electric', [['Electric Ring', 50 ], ['Pika Punch', 20]]);
$charmeleon = new Pokemon('Charmeleon', 60, 'Fire', [['Head Butt', 10], ['Flare', 30]]);

$pikachu->attack(0, $charmeleon);
$charmeleon->attack(1, $pikachu);
$pikachu->attack(0, $charmeleon);


Pokemon::getPopulation();
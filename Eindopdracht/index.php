<?php

require 'classes/Pokemon.php';

$pikachu = new Pokemon('Pikachu', 60, 'Electric', [['Electric Ring', 50 ], ['Pika Punch', 20]]);
$charmeleon = new Pokemon();

$pikachu->attack(0, $charmeleon);
$charmeleon->attack(1, $pikachu);
$pikachu->attack(0, $charmeleon);


Pokemon::getPopulation();
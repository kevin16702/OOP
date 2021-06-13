<?php

class Pokemon{
    public $name;
    public $hp;
    public $energytype;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;
    public $attackId;
    public $attackedPokemon; 
    public static $count;

    public function __construct($name, $hp, $energytype, $attacks, $weakness, $resistance){
        $this->name=$name;
        $this->hp=$hp;
        $this->energytype=$energytype;
        $this->attacks=$attacks;
        $this->health=$hp;
        $this->weakness=$weakness;
        $this->resistance=$resistance;
        self::$count++;
    }
    public function getPopulation(){
        echo Pokemon::$count;
    }
    public function attack($attackid, $attackedPokemon){
        echo $this->name, ' heeft: ', $this->health, ' HP </br>', $attackedPokemon->name, ' heeft: ', $attackedPokemon->health, ' HP </br></br>';
        $attack = $this->attacks[$attackid];
        if($this->energytype == $attackedPokemon->weakness[0]){
            $attack[1] = $attack[1] * $attackedPokemon->weakness[1];
        }
        if($this->energytype == $attackedPokemon->resistance[0]){
            $attack[1] = $attack[1] - $attackedPokemon->resistance[1];
        }
        echo $this->name, ' valt ', $attackedPokemon->name, ' aan met ', $attack[0], '</br>';
        $attackedPokemon->health = $attackedPokemon->health - $attack[1];
        if($attackedPokemon->health <= 0){
            $attackedPokemon->health = 0;
            echo $this->name, ' heeft: ', $this->health, ' HP </br>', $attackedPokemon->name, ' heeft: ', $attackedPokemon->health, ' HP, De pokemon is uiteschakeld </br></br></br>';

            self::$count--;
        } else{
            echo $this->name, ' heeft: ', $this->health, ' HP </br>', $attackedPokemon->name, ' heeft: ', $attackedPokemon->health, ' HP </br></br></br>';
        }
    }
}
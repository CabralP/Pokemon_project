<?php

require_once __DIR__ . "/Pokemon.php";
require_once __DIR__ . "/../interfaces/Evolvable.php";
require_once __DIR__ . "/../interfaces/Tradeable.php";

// FirePokemon erft van Pokemon
// Implementeert Evolvable en Tradeable

class FirePokemon extends Pokemon implements Evolvable, Tradeable {

    public function attack() {

        echo "$this->naam gebruikt een vuur aanval 🔥<br>";

    }

    public function getType() {

        return "Fire";

    }

    public function specialMove() {

        echo "$this->naam gebruikt FLAME BURST 🔥🔥<br>";

    }

    public function evolve() {

        echo "$this->naam evolueert naar een sterkere vuur pokemon!<br>";

    }

    public function canEvolve() {

        return $this->level >= 10;

    }

    public function trade($newTrainer) {

        echo "$this->naam wordt geruild naar trainer {$newTrainer->getName()}<br>";

    }

}

?>
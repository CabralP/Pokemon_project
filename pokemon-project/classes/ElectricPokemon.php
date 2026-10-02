<?php

require_once __DIR__ . "/Pokemon.php";
require_once __DIR__ . "/../interfaces/Evolvable.php";

// Extra pokemon type

class ElectricPokemon extends Pokemon implements Evolvable {

    public function attack() {

        echo "$this->naam gebruikt een elektrische aanval ⚡<br>";

    }

    public function getType() {

        return "Electric";

    }

    public function specialMove() {

        echo "$this->naam gebruikt THUNDER ⚡⚡<br>";

    }

    public function evolve() {

        echo "$this->naam evolueert naar een sterkere electric pokemon!<br>";

    }

    public function canEvolve() {

        return $this->level >= 12;

    }

}

?>
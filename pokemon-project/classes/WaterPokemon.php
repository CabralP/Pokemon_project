<?php

require_once __DIR__ . "/Pokemon.php";
require_once __DIR__ . "/../interfaces/Evolvable.php";
require_once __DIR__ . "/../interfaces/Tradeable.php";
require_once __DIR__ . "/../interfaces/Healable.php";

// WaterPokemon kan evolueren, traden en healen

class WaterPokemon extends Pokemon implements Evolvable, Tradeable, Healable {

    public function attack() {

        echo "$this->naam gebruikt een water aanval 💧<br>";

    }

    public function getType() {

        return "Water";

    }

    public function specialMove() {

        echo "$this->naam gebruikt WATER CANNON 💧💧<br>";

    }

    public function evolve() {

        echo "$this->naam evolueert naar een sterkere water pokemon!<br>";

    }

    public function canEvolve() {

        return $this->level >= 8;

    }

    public function trade($newTrainer) {

        echo "$this->naam wordt geruild naar trainer {$newTrainer->getName()}<br>";

    }

    // Healt andere pokemon
    public function healOther($pokemon) {

        echo "$this->naam healt een andere pokemon 💙<br>";
        $pokemon->heal(20);

    }

}

?>
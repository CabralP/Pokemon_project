<?php

require_once __DIR__ . "/Pokemon.php";
require_once __DIR__ . "/../interfaces/Evolvable.php";
require_once __DIR__ . "/../interfaces/Tradeable.php";
require_once __DIR__ . "/../interfaces/Flyable.php";

// FlyingPokemon implementeert alle interfaces

class FlyingPokemon extends Pokemon implements Evolvable, Tradeable, Flyable {

    public function attack() {

        echo "$this->naam gebruikt een vlieg aanval 🕊<br>";

    }

    public function getType() {

        return "Flying";

    }

    public function specialMove() {

        echo "$this->naam gebruikt SKY ATTACK ☁️<br>";

    }

    public function evolve() {

        echo "$this->naam evolueert naar een sterkere flying pokemon!<br>";

    }

    public function canEvolve() {

        return $this->level >= 7;

    }

    public function trade($newTrainer) {

        echo "$this->naam wordt geruild naar trainer {$newTrainer->getName()}<br>";

    }

    public function fly() {

        echo "$this->naam vliegt hoog in de lucht!<br>";

    }

}

?>
<?php

class Trainer {

    private $naam;
    private $pokemons = [];

    public function __construct($naam) {

        $this->naam = $naam;

    }

    public function getName() {

        return $this->naam;

    }

    // Pokemon toevoegen aan team
    public function addPokemon($pokemon) {

        $this->pokemons[] = $pokemon;

    }

    // Toon team
    public function showTeam() {

        echo "<h2>$this->naam Team</h2>";

        foreach ($this->pokemons as $pokemon) {

            $pokemon->toonInfo();

        }

    }

    // Laat alle pokemon evolueren
    public function evolveAll() {

        foreach ($this->pokemons as $pokemon) {

            if ($pokemon instanceof Evolvable) {

                if ($pokemon->canEvolve()) {
                    $pokemon->evolve();
                }

            }

        }

    }

}

?>
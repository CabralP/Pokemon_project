<?php

// Interface voor Pokemon die kunnen evolueren
// Elke class die dit implementeert moet deze methods maken

interface Evolvable {

    // Laat de pokemon evolueren
    public function evolve();

    // Controleert of pokemon kan evolueren
    public function canEvolve();

}

?>
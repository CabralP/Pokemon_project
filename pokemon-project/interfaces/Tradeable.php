<?php

// Interface voor Pokemon die geruild kunnen worden

interface Tradeable {

    // Methode om een pokemon te ruilen met een andere trainer
    public function trade($newTrainer);

}

?>
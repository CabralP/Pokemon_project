<?php

// Extra interface (eigen bedacht)
// Pokemon die andere pokemon kunnen healen

interface Healable {

    // Heal een andere pokemon
    public function healOther($pokemon);

}

?>
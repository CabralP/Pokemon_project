<?php

// Abstracte parent class voor alle pokemon

abstract class Pokemon {

    // Protected properties zodat child classes ze kunnen gebruiken
    protected $naam;
    protected $level;
    protected $hp;
    protected $maxHp;

    // Constructor
    public function __construct($naam, $level, $hp, $maxHp) {

        $this->naam = $naam;
        $this->level = $level;
        $this->hp = $hp;
        $this->maxHp = $maxHp;

    }

    // Toon informatie van de pokemon
    public function toonInfo() {

        echo "<strong>$this->naam</strong><br>";
        echo "Type: " . $this->getType() . "<br>";
        echo "Level: $this->level<br>";
        echo "HP: $this->hp / $this->maxHp<br><br>";

    }

    // Heal de pokemon
    public function heal($amount) {

        $this->hp += $amount;

        if ($this->hp > $this->maxHp) {
            $this->hp = $this->maxHp;
        }

        echo "$this->naam is gehealed met $amount HP<br>";

    }

    // Abstract methods die child classes moeten maken
    abstract public function attack();

    abstract public function getType();

    abstract public function specialMove();

}

?>
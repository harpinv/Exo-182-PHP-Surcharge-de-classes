<?php

class sorcier extends Personnage {

    public function __construct() {
        // Surcharge de la méthode construct, on éxécute celle de la classe parent puis on redéfini les propriétés qui
        // sont différentes par rapport à la classe mere.
        parent::__construct();

        // Définition des propriétés propre à cette classe
        $this->x = 125;
        $this->y = 125;
    }
}
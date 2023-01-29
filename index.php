<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
// TODO attention, certaines erreurs volontaires ont pu être glissées, a vous de vérifier ! Ce message en lui même est peut être un piège :-)
require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require "classes/sorcier.php";


// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("Vincent");
echo $humain->getNom() . "<br>";

// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("vert");
echo $dragon->getNom() . "<br>";

// Creation d'une instance de la classe dragon
$princesse = new princesse();
$princesse->setNom("Emilie");
echo $princesse->getNom() . "<br>";

// Creation d'une instance de la classe dragon
$sorcier = new sorcier();
$sorcier->setNom("Merlin");
echo $sorcier->getNom() . "<br>";

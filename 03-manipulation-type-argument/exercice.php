<?php
require_once 'Voiture.php';
require_once 'Pompe.php';
$pompe = new Pompe(800,800);
$voiture1 = new Voiture(50,5);

// Départ
echo "Il y a " . $voiture1->getNbLitresEssence() . " litres dans le réservoir de " .$voiture1->getTailleReservoire() . " litres de la voiture 1 <br>";
echo "Il y a " . $pompe->getNbLitresEssence() . " litres dans le réservoir de " .$pompe->getTailleReservoire() . "litres de la pompe <br>";
echo "<hr>";

//simuler un passage de la voiture 1 à la pompe
echo $pompe->delivrerEssence($voiture1);

//Après passage 
echo "Il y a " . $voiture1->getNbLitresEssence() . " litres dans le réservoir de " .$voiture1->getTailleReservoire() . " litres de la voiture 1 <br>";
echo "Il y a " . $pompe->getNbLitresEssence() . " litres dans le réservoir de " .$pompe->getTailleReservoire() . " litres de la pompe <br>";
echo "<hr>";

$voiture2 = new Voiture(70,20);
echo $pompe->delivrerEssence($voiture2);

//Après passage
echo "Il y a " . $voiture2->getNbLitresEssence() . " litres dans le réservoir de " .$voiture2->getTailleReservoire() . " litres de la voiture 2 . <br>";
echo "Il y a " . $pompe->getNbLitresEssence() . " litres dans le réservoir de " .$pompe->getTailleReservoire() . " litres de la pompe.<br>";
echo "<hr>";
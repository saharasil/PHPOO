<?php
// permet de définir le fuseau horaire

date_default_timezone_set('Europe/Paris');
//Fonction date de php : afficher la date 
echo date('d-m-y');

echo '<hr>';

// DateTime est une classe de PHP
$datedujour = new DateTime();
var_dump($datedujour);

echo '<hr>';

// Formatage de la date (cf. date php)
echo $datedujour->format('l d/m/y H:i:s') . '<br>';
echo '<hr>';


// DateTime avec paramètre fabrique une date au moment de l'instanciation
$naufragetitanic = new DateTime('1912-04-14');
var_dump($naufragetitanic);
echo '<hr>';
echo $naufragetitanic->format('l d/m/y H:i:s') . '<br>';
echo '<hr>';

// Création d'un objet de type DateInterval pour afficher l'intervale entre la date du jour et celle de l'objet
$intervalle = $datedujour->diff($naufragetitanic);
var_dump($intervalle);
echo '<hr>';

// On peut aussi format les détails de cette intervalle
echo $intervalle->format('%y années %m mois') . '<br>';
echo $intervalle->y . 'années <br>';

echo '<hr>';
echo '<hr>';

$monAnniversaire = new DateTime('1989-05-16');
var_dump($monAnniversaire);
echo $monAnniversaire->format('l d/m/y H:i:s') . '<br>';
$intervalle = $datedujour->diff($monAnniversaire);
echo $intervalle->format('%y années %m mois') . '<br>';

// phpinfo(); // pour voir la version di mon PHP
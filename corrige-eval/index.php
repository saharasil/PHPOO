<?php
// Inclusion du fichier de classe
require 'Fighter.php';

// Connexion PDO
$pdo = new PDO(
    'mysql:host=localhost;dbname=jeucombat',
    'root',
    '',
    array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    )
);

// Selection de deux combattants au hasard
$resultat = $pdo->query("SELECT * FROM personnages ORDER BY RAND() LIMIT 2");

// Création du premier personnage
$personnage1 = $resultat->fetch();
$combattant1 = new Fighter($personnage1->nom, $personnage1->vie);

// Création du deuxième personnage
$personnage2 = $resultat->fetch();
$combattant2 = new Fighter($personnage2->nom, $personnage2->vie);

// Simulation du combat
$round = 1;
while( $round <=10 && $combattant1->vie > 0 &&  $combattant2->vie ){
    echo "<strong>Round $round  - " .$combattant1->nom. '(' . $combattant1->vie. ') - '.$combattant2->nom. '(' . $combattant2->vie. ')</strong><br>';
    echo $combattant1->frappe($combattant2) . "<br>";
    if ($combattant2->vie>0) {
        echo $combattant2->frappe($combattant1) . "<br>";
    }
    $round++;
}
echo "<hr>";
echo $combattant1->bilan($combattant2);
// ou echo $combattant2->bilan($combattant1);
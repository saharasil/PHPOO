<?php
require_once 'lib1.php';

use NAMESPACE_AU_NOM_VRAIMENT_TRES_LONG as A; // création d'un alias avec "as"
$a = new A\ClassA;
$a->maMethode();

echo '<hr>';

$b = new NAMESPACE_AU_NOM_VRAIMENT_TRES_LONG\ClassA;
$b->maMethode();

// as : permet de créer un raccourci d'appel pour le namespace , cela  n'empêche  pas l'utilisation du nom original complet 
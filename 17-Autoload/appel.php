<?php
/*
require_once('A.php');
require_once('Module/B.php');
require_once('Module/C.php');
...
150 require_once ??
*/

require_once 'autoload.php';

$a = new A; // on veut charger A.php
$b = new Modules\B; // on veut charger Modules/B.php
$c = new Modules\C; // on veut charger Modules/C.php
$d = new Modules\Sousmodules\D; // Modules/Sousmodules/D.php

/*
RAPPEL sur les inclusion de fichiers

inclide 'fichier.php';
include_once('fichier.php');

require('fichier.php'); // REQUIS !
require_once('fichier.php');

*/
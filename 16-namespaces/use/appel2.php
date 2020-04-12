<?php

require_once 'lib2.php';

use NS\NOM\COMPOSE; //l'interpreteur fait de COMPOSE un alias du namespace NS\NOM\COMPOSE

$a = new COMPOSE\Maclasse; // utilisation possible de COMPOSE
$a->methode();

/*
un alias nommé COMPOSE a automatiquement été créé à partie de la dernière composante du namespace ( \ ) : NS\NOM\COMPOSE
*/
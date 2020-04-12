<?php

require_once 'lib.php';

Projet\maFonction();
Projet\A\maFonction();
Projet\B\maFonction();

/*
PHP ne permet pas de réelle imbrication d'espaces de noms mais on peut la simuler : il est possible d'utiliser l'antislash ( le séparateur de namespace) à l'intérieur du nom de namespace
ex : Projet\A
*/

/*
 $objet1 = new Projet\Maclasse();
 $objet2 = new Projet\A\Maclasse();
 $objet3 = new Projet\B\Maclasse();
*/
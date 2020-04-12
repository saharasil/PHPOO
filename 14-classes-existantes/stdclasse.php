<?php

$tab = array('orange', 'pomme', 'cerise');
var_dump($tab);
echo $tab[1]  . '<br>'; // accéder à la valeur d'un tableau

echo '<hr>';

$objet = (object) $tab; // c'est un cast : transformation de nature : ici un tableau en objet
var_dump($objet);

echo $objet->{0}; // Notation qui permet d'interpréter le nom de la propriété

echo '<hr>';

for($i=1; $i<=3; $i++){
    $objet->{'prop'.$i} = $i;
}

var_dump($objet);

/*
$objet est objet associé à la classe stdclass (classe satndar) la stdclass est une classe qui récupère les objets orphelins de classe les objets qui sont créés autrement que par New sont "récupéres" par la stdclass*/

$objet2 = new stdclass; /*on peut aussi fabriquer un objet depuis classe standard*/
$objet2->nom = 'Durand';
var_dump($objet2);

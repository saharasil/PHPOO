<?php

// iterator est une interface qui impose des noms de méthodes au classes qui vont l'implémenter
// les classes qui implémentent iterator ont le mot 'iterator' dans leur nom
// iterator est un design pattern


///////// 1- Parcours d'un tableau

$familles = array(
                's' =>'Stark' ,
                'l' => 'Lannister', 
                't' =>'Targaryen'
            );

// classe qui permet de parcourir un tableau
$it1 = new ArrayIterator($familles);

$it1->rewind(); // On s'assure qu'on est en début de tableau (rewind, rembobinage)
while($it1->valid()){
    // la méthode valide renvoie "vrai" s'il reste un élément à parcourir
    echo $it1->Key() . ' - ' . $it1->current() .'<br>';
    // key() renvoie l'index
    //current() renvoie la valeur
    $it1->next();
}

echo '<hr>';

//////////2-Parcours d'un répertoire

// classe qui permet de parcourir un dossier/repertoire
//                           ('images', '../03-manipulation-type-argument', ...)
$it2 = new DirectoryIterator('..');
$it2 -> rewind(); // je me place en début de parcours du répertoire

while($it2->valid()){
    echo $it2->key() . ' - ' . $it2->current() . '<br>';
    $it2->next();
}

echo '<hr>';

//////////3- Parcours un fichier XML
$it3 = new SimpleXMLIterator('fichier.xml',null,true);
$it3->rewind(); // je me place en début de parcours du fichier
while($it3->valid()){
    echo $it3->key() . ' - ' . $it3->current() . '<br>';
    $it3->next();
}

/*
iterator est un design pattern permettant de parcourir des élément de différents nature (tableau, dossier, fichier xml, ....)
les noms des méthodes sont standardisés par l'interface iterator
rewind() : se place au début du parcours
valid() : indique s'il reste un élément à parcourir 
key() : renvoie la valeur
next() : permet de passer à l'élément suivant

*/
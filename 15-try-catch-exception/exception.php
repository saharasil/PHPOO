<?php

$fruits = array('pomme', 'poire', 'banane');
echo array_search('poire',$fruits);
var_dump(array_search('raisin', $fruits));

function recherche($elem,$tab){
    //si $tab n'est PAS un tableau
    if(!is_array($tab)){
        // on lève une exception
        throw new Exception("Vous devez envoyer un tableau !"); //Exception c'est une classe
    }
    return array_search($elem,$tab);
}

try{
    //echo recherche('banane', $fruits);
    echo recherche('banane', 'blabalbalbal');
}
catch(Exception $e){
    echo $e->getMessage();

    var_dump($e);
    // var_dump(get_class_methods($e));
    echo "le souci a été rencontré sur la ligne ".$e->getTrace()[0]['line'];
}
// exemple PDO 
echo "<hr>";
try{
    $pdo = new PDO(
        'mysql:host=localhost;dbname=nawar',
        'root',
        ''
    );
}
catch(PDOException $e){

    // echo $e->getMessage() .'<br>';
    // echo $e->getFile() .'<br>';
    // echo $e->getLine() .'<br>';



    echo "Problème temporaire avec le serveur";
}

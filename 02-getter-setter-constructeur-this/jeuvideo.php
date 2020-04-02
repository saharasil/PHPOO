<?php

class jeuvideo{
    // propriétés public 
    public $nom_du_jeu;
    public $console;
    public $prix;

    public function __construct($n, $c, $p){ // méthode  magique avec trois paramétres qui vont être remplacer avec les arguments fournie lors de l'instanciation  de la classe . 
        $this->nom_du_jeu = $n; // on définie la première propriété dans l'objet courrament utlisé.
        $this->console = $c;// on définie la 2 éme propriété dans l'objet courrament utlisé.
        $this->prix = $p; // on définie la 3 éme propriété dans l'objet courrament utlisé
    }

}

$jeuvideo1 = new jeuvideo('Detroit', 'Ps4', 39); // on instancie une classe et on la stock dans l'objet $jeuvideo1 avec les arguments : 'Detroit', 'Ps4', 39
$jeuvideo2 = new jeuvideo('Mount $ blade II', 'Pc', 49); // on instancie une classe et on la stock dans l'objet $jeuvideo2 avec les arguments : 'Mount $ blade II', 'Pc', 49
var_dump($jeuvideo1);
var_dump($jeuvideo2);

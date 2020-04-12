<?php

//création d'une classe qui permet de définir un livre

class Livre{
    private $titre;
    private $auteur;
    private $nbPage;

    public function __construct($t,$a,$n){
        $this->titre = $t;
        $this->auteur = $a;
        $this->nbPage = $n;

    }
   


}

$livre1 = new Livre('Equinoxe', 'pierre Giraud', 150);
var_dump($livre1);
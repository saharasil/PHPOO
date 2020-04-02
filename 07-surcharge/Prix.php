<?php
class PrixHT{
    public function calcul(){
        //traitements
        return 15;
    }
}

Class PrixTTC extends PrixHT{
    //on fait une redéfinition avec surcharge(overrside)
    public function calcul(){
        return parent::calcul() * 1.2;
        // parent désigne la classe dont j'hérite, me permettant d'accéder à ma méthode calcul originale auquel j'ajoute un traitement complémentaire
    }
}

$prix1 = new PrixTTC;
echo $prix1->calcul();


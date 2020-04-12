<?php
class PrixHT{
    public function calcul(){
        //traitements
        return 15;
    }
}
//on « surcharge » une propriété ou une méthode d’une classe mère lorsqu’on la redéfinit dans une classe fille.
//on ne peux surcharger que des méthodes et propriétés définies avec des niveaux de visibilité public ou protected.
Class PrixTTC extends PrixHT{
    //on fait une redéfinition avec surcharge(overrside)
    public function calcul(){ //Pour surcharger une propriété ou une méthode, il va falloir la redéclarer en utilisant le même nom. Par ailleurs, si on souhaite surcharger une méthode, il faudra également que la nouvelle définition possède le même nombre de paramètres.
 
        return parent::calcul() * 1.2;
        // parent:: -> désigne la classe dont j'hérite, me permettant d'accéder à ma méthode calcul() originale auquel j'ajoute un traitement complémentaire
    }
}

$prix1 = new PrixTTC;
echo $prix1->calcul();


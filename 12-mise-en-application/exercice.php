<?php
// je ne peux pas instancier Vehicule, mais par contre je peux en hériter (1)
abstract class Vehicule{
    // je verouille avec final la méthode démarrer afin qu'on puisse pas la surcharger (2)
    final public function demarrer(){
        return 'je démarre';
    }

    // en mettant une classe abstraite j'oblige les classes héritiéres à redéfinir la méthode carburant (3)
    abstract public function carburant();

    public function nbTestsObligatoires(){
        return 100;
    }
}
// extends chap 06
class Renault extends vehicule{
    public function carburant(){
        return 'essence';
    }
    // surcharger pour utiliser le comportememtn de la méthodes nbTestsObligatoires()(4)
    public function nbTestsObligatoires(){
        return parent:: nbTestsObligatoires() + 30 ;
    }
}

// extends chap 06
class Dacia  extends vehicule {
    public function carburant(){
        return 'GPL';
    }
    // surcharger pour utiliser le comportememtn de la méthodes nbTestsObligatoires()(5)
    public function nbTestsObligatoires(){
        return parent:: nbTestsObligatoires() + 70 ;
    }
}

/* 
1- Faire en sorte que je ne puisse pas instancier vehicule // voir dossier 08
2- Obligation pour la Renault et la Dacia d'avoir la même méthode démarrer sans modification possible// cf chap 09
3- Obligation pour la Renault et la Dacia de déclarer la méthode carburant (Renault Essence, Dacia GPL) // cf chap 08
4- La  Renault devra effectuer 30 tests  de plus qu'un véhicule de base(chap 07)
5- La Dacia devra effectuer 70 tests de plus qu'un véhicule de base(chap 07)
6- Faire les controles et affichages
*/

// $v = new Vehicule; // (1) Je ne peux pas instancier vehicule

$clio = new Renault;
$sandero = new Dacia;

//(2) les deux véhicule ont bien la même méthode démarrer() (final)
echo 'CLIO : ' . $clio->demarrer() .'<br>';
echo 'SANDERO : ' . $sandero->demarrer() .'<br>';
//(3) les deux véhicule ont bien la même méthode carburant() (abstract)
echo 'CLIO : ' . $clio->carburant() .'<br>';
echo 'SANDERO : ' . $sandero->carburant() .'<br>';
//(4) et (5)
echo 'CLIO : ' . $clio->nbTestsObligatoires() .'<br>';
echo 'SANDERO : ' . $sandero->nbTestsObligatoires() .'<br>';
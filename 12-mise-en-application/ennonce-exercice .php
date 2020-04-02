<?php

 class Vehicule{
    
   public function demarrer(){
        return 'je démarre';
    }

    
    abstract public function carburant(){
        return;
    }

    public function nbTestsObligatoires(){
        return 100;
    }
}

class Renault{}
class Dacia {}

/* 
1- Faire en sorte que je ne puisse pas instancier vehicule 
2- Obligation pour la Renault et la Dacia d'avoir la même méthode démarrer sans modification possible
3- Obligation pour la Renault et la Dacia de déclarer la méthode carburant (Renault Essence, Dacia GPL)
4- La  Renault devra effectuer 30 tests  de plus qu'un véhicule de base
5- La Dacia devra effectuer 30 tests de plus qu'un véhicule de base
6- Faire les controles et affichages
*/
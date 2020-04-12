<?php
final class Application{ // final ici empêche l'héritage
    public function LancementApplication(){
        //traitements
        return 'l\'application se lance comme ça';
    }
}

// class Extension extends Application{} :c'est pas possible
// une classe finale ne peut pas avoir d'hériters

$app = new Application;
//-----------------------------------

 class Application2{ 
    final public function LancementApplication(){
        //traitements
        return 'l\'application se lance comme ça';
    }
}

class Extension2 extends Application2{
   /* public function LancementApplication(){
        //traitements
        return 'l\'application se lance comme ça';
    }
    on ne peut pas surcharger une méthode finale dont on a hérité */
}

/*
    La finalisation vérouille le comportement d'une classe ou d'une méthode de classe empéchant sa modification par héritage
*/
<?php
class Membre {
    public $pseudo;
    public $mdp;
    public function ecrireMessage(){}
}


 // Extends : indique  que la classe Moderateur hérite de la classe Memnbre
class Moderateur extends Membre { // la classe Modérateur hérite grâce à extends tout les propriété et méhodes de Membre 
    
    public function bannirUtilisateur(){}
}

// Laclasse Administrateur  héritant de Modérateur qui luimêmehérite de Membre contiendra touts les propriétés et méthodes "accumulées"
class Administrateur extends Moderateur{
    
    public function nommerModerateur(){}
    public function accesBackoffice(){}
}

$admin = new Administrateur;
var_dump($admin);
var_dump(get_class_methods($admin));
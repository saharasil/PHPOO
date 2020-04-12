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


// Etendre à nouveau une classe étendue
//l’héritage va alors traverser les générations : les classes filles de Moderateur hériteront des méthodes et propriétés non privées de  Moderateur mais également de celles de leur grand parent Membre.


class Administrateur extends Moderateur{
    // La classe Administrateur  héritant de Modérateur qui lui même hérite de Membre contiendra touts les propriétés et méthodes "accumulées"
    public function nommerModerateur(){}
    public function accesBackoffice(){}
}

$admin = new Administrateur;
var_dump($admin);
var_dump(get_class_methods($admin));
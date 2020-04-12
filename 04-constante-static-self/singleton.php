<?php
/*
Design pattern : solution ou réponse répondant à un schéma particulier et qui résoud des problématiques similaires
*/

class Singleton {
    public $numero = 20; // propriété static 
    private static $instance = null;
    private function __construct(){} //je bloque l'instanciation avec la privatisation du constructeur
    private function __colone(){}//je bloque l'instanciation avec la privatisation du constructeur
    public static function getInstance(){ // méthode principale d'instanciation statique
        if(is_null(self::$instance)){ // si la valeur de la propriété dans la class est null je rentre dans la dondition
            self::$instance = new self;// on stock un objet unique en s'auto-instancier la classe : la création de l'objet
        }
        return self:$instance; // je renvoie l'objet créé pour la premiére fois et la dérniére fois 
    }

     
}
$obj1 = Singleton::getInstance();
var_dump($obj1);

$obj2 = Singleton::getInstance(); // on essaye d'instancier un nouvel objet
var_dump($obj2); // on remarque que c'est le même objet 

/*
L'objectif de singleton est d'avoir un objet unique tout le long du projet 
ex :
    1- connexion à la BDD
    2- une entité correspondant à une personne physique 



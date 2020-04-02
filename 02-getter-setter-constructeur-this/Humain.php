<?php

/* Visibilité
 - public :  accessible de partout (intérieur et extérieur de la classe).
 - private : accessible uniquement à l'intérieur de la classe.
 - protected : accessible à l'intérieur de la classe et dans les classes héritières
 */

class Humain {
    private $prenom; // une propriété privé de la class : n'est accessible que depuis l'intérieur de la classe
    private $nom;// une proprièté privé de la class :n'est accessible que depuis l'intérieur de la classe


    //constructeur : méthode magique qui s'execute toute seule dès qu'elle rencontre le mot new

    public function __construct($p = null, $n = null){ // = null pour ne pas rendre obligatoire une paramètre
        // echo "Je suis dans le constructeur";
        $this->setPrenom($p);  // $this(remplacé par l'objet courrament utlisé à la suite) accéde à la méthode setPrenom() qui recolte l'argument défine dans l'instanciation de la classe ( ici : 'sébastien') et le stocker par la suite dans la propriété $prenom;
        $this->setNom($n); // $this(remplacé par l'objet courrament utlisé à la suite) accéde à la méthode setPrenom() qui recolte l'argument défine dans l'instanciation de la classe ( ici : 'Delrue') et le stocker par la suite dans la proprièté $nom.
    }

    ////// Setters : méthodes qui servent à définir/modifier/mettre à jour une valeur 
    // je viens attribuer la valeur
    public function setPrenom($p){ // la mèthode est "public" : on peut l'utiliser depuis l'extérieur de la classe.

        if(is_string($p)){ // si c'est une chaine de caractére je rentre dans la condition

            
            $this->prenom = $p; // mot clef $this est une "pseudo-variable" , elle va être remplacée par l'objet courrament utilisé. 
            // la proprièté prenom  de l'objet couramment utilisé prendra la valeur de l'argument $p 
        }
    }

    public function setNom($n){  // méthode public pour attribuer le nom
        if(is_string($n)) {
            $this->nom = $n;
        }
    }


    ///////// Getters : méthodes qui servent à récupérer des valeurs
    // je viens récupérer la valeur 
    public function getPrenom(){  //méthode public pour accéder au prénom depuis l'extérieur de la classe
        
        return $this->prenom; // cette méthode retourne la valeur du prénom stocké dans la propriété "$prenom" de l'objet couramment utilisé
        
    }

    public function getNom(){ //methode public pour récupérer le nom
        return $this->nom;
    }

}// fin de la CLASSE



$vincent = new Humain; // on instancie la classe et on la stock dans un objet $vincent.

//$vincent->prenom = 'vincent'; ce n'est pas possible car la proprièté est privée
$vincent->setPrenom('vincent'); //  on stock la valeur vincent dans la propriété $prenom grâce à la méthode setPrenom() de l'objet couramment utilisé (ici $vincent).
// var_dump($vincent);
echo $vincent->getPrenom(); // on récupére la valeur stocké dans la propriété $prenom grâce à la méthode getPrenom() et on l'affiche.

$vincent->setNom('Lefebvre'); //  on stock la valeur Lefebvre dans la propriété $nom grâce à la méthode settNom() de l'objet couramment utilisé (ici $vincent).
// var_dump($vincent);
echo '<br>' . $vincent->getNom();  // on récupére la valeur stocké dans la propriété  $nom grâce à la méthode getNom() et on l'affiche.
var_dump($vincent);

/*
    Les propriétés  étant 'private', il est nécessaire de passer par des methodes 'publiques' pour pouvoir lire et écrire ces propriétés. 
    On parle le Getter(lire/ récupérer) et de Setter(écrire / définir).
    $this désigne l'objet courant à l'intérieur de la classe.
*/

$cinnie = new Humain;
$cinnie->setPrenom('Cinnie'); //définir le prenom

echo $cinnie->getPrenom('cinnie'); // récupérer prenom

$cinnie->setNom('Farnaud');// définir nom

var_dump($cinnie);
var_dump($vincent);

// méthode " __construct() " :
// la méthode est déclarer dans la classe au début du script
/*
Le constructeur est une méthode particulière __construct() qui se déclenche au moment de l'instanciation et qui utilise les paramètres utilisés entre parenthèses
ex: new Humain('toto','durand')
*/
$sebastien = new Humain('sébastien', 'Delrue'); // instanciation de la classe avec la méthode construct(), les arguments de la méthode : "sébastien" , "Delrue".
echo "Je m'appelle" . $sebastien->getPrenom(). ' ' . $sebastien->getNom(). '<br>'; // affichage

$maria = new Humain('Maria','De Carvalho');
echo "Je m'appelle" . $maria->getPrenom(). ' ' . $maria->getNom(). '<br>';



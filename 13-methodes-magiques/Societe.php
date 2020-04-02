<?php
/*
méthodes  magique : méthodes qui s'exécutent automatiquement dans certaines conditions
*/
class Societe{
    public $adresse;
    public $cp;
    public $ville;
    public function __construct($mavar){
        // se déclenche à l'instanciation et récupére les paramétres à initailiser
        echo "Je suis déclenchée et je suis $mavar <br>";
    }
    public function __set($nom,$valeur){
        // se déclenche à l'instanciation et récupére les paramétres à initailiser
        echo "Vous tentez d'ajouter $valeur dans $nom, mais cette propriété n'existe pas <br>";
    }
    public function __get($name){
        // se déclanche  sur tentative d'affichage d'une propriété qui n'existe pas 
        echo "Vous tentez d'afficher la propriété $name  mais cette propriété n'existe pas <br>";
    }
    public function __call($name, $args){
        // se déclanche sur tentative d'exécution d'une méthode qui n'existe pas dans la classe
        echo " vous tentez de lancer $name mais elle n'existe pas. Les paramètre étaient " . implode(",", $args) . '<br>';
    }
    public function __clone(){
        // se déclanche sur utilisation de la fonction PHP clone
        echo " Clonage detecté <br>";
    }
    

}

$soc1 = new Societe('Le pôle super S');
$soc1->ville = 'villeneuve la Garenne';
$soc1->pays = 'France';
echo $soc1->ville . '<br>';
echo $soc1->telephone . '<br>';
echo $soc1->scrgggggg('Toto',12,'bonjour');
$soc2 = $soc1; //copie
var_dump($soc2);
$soc2->cp =92390;
var_dump($soc1);
$soc3 = clone $soc1; // clonage qui produit un nouvel objet
var_dump($soc3);

/*
namespace
autoload
(pdo)
mvc = (modelevue controleur)
*/
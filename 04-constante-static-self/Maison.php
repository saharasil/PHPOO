<?php
//--------------------------Méthodes et propriétés STATIQUE ------------------//

/*
    -- Le mot static pour définir et préciser que la propriété ou la méthode appartient  seulement à la classe dans laquelle elle a été définie ( => ne vont pas appartenir à une instance de classe et par la suite à un objet qui stocke cette instance).
    -- Les méthodes et lespropriétés STATIQUES vont avoir la même définition et la mêmevaleur pour toutes les instances d'une classe .
    -- On peut  accéder  à ces éléments sans avoir besoin d'instancier la classe .
    -- Depuis un objet : 
            - Ilest impossible d'accéder à une propriété statique.
            - Il est possible d'accéder à une méthode statique.
 */
class Maison {

    private static $nbPieces = 7; // propriété statique qui appartient à la classe
    public static $espaceTerrain = '500m²'; // propriété statique  qui appartient à la classe.
    public $couleur = 'blanc'; // appartient à l'objet.
    const HAUTEUR = '10m'; //  Constante qui appartient à la classe
    private $nbPortes = 8; //appartient à l'objet.

    public static function getNbPieces(){ //méthode statique qui appartient à la classe
        return self::$nbPieces;  // les "::" sont appelé "opérateurs de résolution de portée" ils remplacent le "->" puisque la ropriété $nbPieces est statique et appartient à la classe . 
        //retourner une propriété de classe
        //self désigne la classe à l'intérieur de la classe

    }

    public function getNbPortes(){
        return $this->nbPortes;
    }


}

// affiche le nombe de pièces
//j'atteins la méthode statique en partant de la classe Maison(plan)
echo 'nb pièces ' . Maison::getNbPieces() . "<br>";

//j'atteins la propriété statique en partant de la classe Maison(plan)
echo 'Terrain ' . Maison::$espaceTerrain . '<br>';

//j'atteins une contante en partant de la classe Maison(plan) (comme on a fait dans le fetch(PDO::FETC_HASSOC))
echo 'Hauteur ' . Maison::HAUTEUR . '<br>';


$maison1 = new Maison; // instanciation de la classe et son stockage dans un objet
echo 'couleur ' .$maison1->couleur . '<br>';
echo 'NB portes ' .$maison1->getNbPortes() .'<br>';

//objet 
echo $maison1->couleur;
// classe
echo Maison::$espaceTerrain;

/* quand je suis à l'intérieur d'une classe
        $this->element  ça désigne l'objet
        self::$element ça désigne la classe

    quand je suis à l'extérieur d'une classe
        $objet->element ça désigne l'objet
        classe::$element ça désigne la classe 
*/

//Eprérience 1 : accéder une propriété statique depuis l'objet 
    // echo $maison1->espaceTerrain : affiche erreur 

//Expérience 2 : accéder une méthode non satitic depuis la class 
    // echo Maison::$couleur; ERREUR

// Expérience 3 : accéder une méthode non statique depuis la classe
    // echo Maison::getNbPortes(); ERREUR à cause de $this
// maison n'est pas un objet 

// Expérience 4 : accéder une méthode statique depuis l'objet 
echo '<hr>';
 echo $maison1->getNbPieces(); //Exception 1 , un objet peut atteindre des méthodes statiques //on aurait plutot à utiliser Maison::getNbPiece()
 echo '<hr>';
 //Expérience 5
 echo $maison1::$espaceTerrain; // Exception 2 , un objet peut atteindre une propriété statique en empruntant la notation de classe :: au lieu de -> .


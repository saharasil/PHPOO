<?php

/* Créer un objet $pomme avec les propriétés suivantes : Grany, Vert 
issus de la classe Fruit.

La Classe fruit à les propriétés 'public' suivante : $nom et $couleur

La classe devra avoir un constructeur, une méthode get_nom() et get_couleur()
qui retourne le nom et la couleur

Afficher les propriétés l'objet : Grany, Vert dans un echo

*/








// Le nom de la classe s'écrit toujours avec une majuscule, tout comme le nom du fichier Fruit.php

class Fruit {
  public $nom;  // Ce sont les propriétés (équivalent variable), public veut dire accessible depuis l'extérieur
  public $couleur;// Ce sont les propriétés (équivalent variable)

  function __construct($nom, $couleur) {
    $this->nom = $nom;
    $this->couleur = $couleur;
  }

  //ceci est une méthode (équivalent de fonction)
  function get_nom() {
    return $this->nom;
  }
  function get_couleur() {
    return $this->couleur;
  }
}

//$pomme est un objet
$pomme = new Fruit("grany", "verte");//Instanciation de la classe donnant lieu à la création de mon objet $pomme
echo $pomme->get_nom();
echo "<br>";
echo $pomme->get_couleur();

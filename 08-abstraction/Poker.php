<?php
// Une classe abstraite est une classe qui ne va pas pouvoir être instanciée directement, c’est-à-dire qu’on ne va pas pouvoir manipuler directement.
//Dès qu’une classe possède une méthode abstraite, il va falloir la déclarer comme classes abstraite.
abstract class Joueur{ //on définie une classe abstraite avec le mot clef "abstract".
    //on peut avoir des fonction classique (non abstraite ) et des propriétés en plus de les méthodes abstraites
    public function seConnecter(){
        return $this->EtreMajeur();
    }
     // les méthodes abstraites n'ont pas de corps/contenu
    abstract public function EtreMajeur(); 
    abstract public function Devise();
}

// $j = new Joueur; Une classe abstraite n'est pas instanciable
// Donc on est obligé d'étendre la classe parente 
// Les méthodes déclarées comme abstraites dans la classe parent doivent obligatoirement être définies dans la classe enfant avec des signatures (nom et paramètres) correspondantes.
class JoueurFr extends Joueur{
    // on implémente la méthode dans la classe fille sans le mot clef abstarct
    public function EtreMajeur(){ // imposée par la classe dont j'hérite
        return 18;
    }
    public function Devise(){ // imposée par la classe dont j'hérite
        return '€';
    }
}
class JoueurUs extends Joueur{
    public function EtreMajeur(){ // imposée par la classe dont j'hérite
        return 21;
    }
    public function Devise(){ // imposée par la classe dont j'hérite
        return '$';
    }
}
/*
- Une classe abstraite n'est pas instanciable
- Une méthode abstraite (forcément contenue dans une classe abstraite) n'a pas de contenu mais impose d'être redefinie dans la classe héritière
- Une classe abstraite peut contenir des méthodes "normales"
*/
$j1 = new JoueurFr;
$j2 = new JoueurUs;

echo $j1->seConnecter();
echo "<hr>";
echo $j2->seConnecter();
echo "<hr>";
echo $j1->EtreMajeur() . '<br>';
echo $j1->Devise(). '<br>';
echo "<hr>";
echo $j2->EtreMajeur() . '<br>';
echo $j2->Devise(). '<br>';

/*
Une classe abstraite est le plan d'un plan
Le developpeur qui écrit la classe abstraite est au coeur de l'application (noyau) et va imposer aux autres developpeurs qui vont utiliser sa classe des noms précis à utiliser et à redéfinir dans classes héritières
Il s'agit de bonnes contraintes (saines)
*/



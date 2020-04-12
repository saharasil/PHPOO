<?php
// class = plan de fabrication
//Propriété dans un objet = variable
//fonction dans une classe = méthodes -> rôle: obtenir ou mettre à jour les valeurs de nos propriètés
class Panier {

    public $nbProduits; //une proprièté de la class Panier

    public function ajouterArticle(){ // méthode 1 de la class
        //traitements
        return "l'article a été ajouté !";
    }
    public function retirerArticle(){  // mèthode 2 de la class
        //traitements
        return "l'article a été retiré !";
    }
}

// objet créé à partir du plan
$panier1 = new Panier; //instanciation de la classe : on instancie ou on crée une instance de notre classe(on copie notre classe) on la stocke dans un objet.

var_dump($panier1); // affiche la valeur de la proprièté dans l'objet
var_dump(get_class_methods($panier1));

$panier1->nbProduits = 5; // on accéde à la proprièté $nbProduit grâce à la fléche "->"  appelé "opérateur objet" et on lui donne une valeur défine = 5.
var_dump($panier1);

echo 'il y a ' . $panier1->nbProduits . ' produits dans le panier<br>';

echo $panier1->ajouterArticle() . '<br>'; // on accéde à la mèthode 1
echo $panier1->retirerArticle() . '<br>'; // on accéde à la mèthode 2
$panier1->nbProduits = 6;
var_dump($panier1);
 
$panier2 = new Panier; // on instancie (crée) un deuxième classe et la stock dans un deuxième objet 
var_dump($panier2); // affiche la valeur de la proprièté dans l'objet

$panier2->nbProduits = 8; // on accéde à la propriété et on lui affecte une valeur = 8.
var_dump($panier2);//affiche la valeur de la proprièté dans l'objet

unset($panier1); // unset() pour déteruire un objet 
$panier3 = new Panier; // on instancie un troisième classe et on la stock dans un troisième  objet.
var_dump($panier3);//ici on l'avait fait pour vérifierque le nouvel objet $panier3 a bien pris la palce du $panier1 dans le mémoir : on voit [1] dans la var_dump($panier3).

/* 
une fois créé, les objects sont indépendants et ont chacun leurs propriétées.
ils ont tous accés aux méthodes déclarées dans la classe 
*/

/* Visibilité
 - public :  accessible de partout (intérieur et extérieur de la classe).
 - private : accessible uniquement à l'intérieur de la classe.
 - protected : accessible à l'intérieur de la classe et dans les classes héritières
 */


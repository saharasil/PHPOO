<?php

//chaque namespace est un espace locale avec ses propre propriété ou méthode dans l'espace globale de PHP 
namespace Commerce1;
// echo 'Je suis dans le namepsace : ' . __NAMESPACE__ . '<br>'; 
class Commande {
    public $nbCommande = 12;
    

}
// echo 'Je suis dans le namepsace : ' . __NAMESPACE__ . '<br>'; 


namespace Commerce2;
// echo 'Je suis dans le namepsace : ' . __NAMESPACE__ . '<br>'; 
class Produit{
    public $nbProduit = 25;

}

namespace Commerce3;
// echo 'Je suis dans le namepsace : ' . __NAMESPACE__ . '<br>'; 
class Produit {
    public $Produit = 44;

    
}

// il ne faut pas mettre de code aprés avoir défini des espaces de noms
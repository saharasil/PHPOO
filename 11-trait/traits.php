<?php
// on trouve dans un trait des propriétés et des méthodes
//c'est un ensemble de caractéristiques
trait tPanier{
    public $nbProduits = 5;
    public function affichageProduits(){
        return 'voici vos produits : ...';
    }

}
trait tMembre{
    public $pseudo;
    public function seConnecter(){
        return 'je me connecte ...';
    }

}

// $t1 = new tPanier; un trait n'est pas instanciable

class Site{
    use tPanier, tMembre; // le mot use importe le contenu des traits
}

$site1 = new Site;
var_dump ($site1);
var_dump(get_class_methods($site1));
//une classe ne peut hériter que d'une SEULE CLASSE , par contre elle peut utiliser (USE) plusieurs traits.
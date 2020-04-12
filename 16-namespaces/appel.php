<?php


namespace General;

require_once 'commerce.php'; // inclusion du fichier qui contient les 3 namespaces commerce

echo 'Je suis dans le namepsace : ' . __NAMESPACE__; //constante magique qui renvoie le namespace dans lequel je me trouve 

echo '<hr>';

$commande = new \Commerce1\Commande; // 1ere notation : on met l'anti-slach \ pour remonter dans l'espace globale de PHP et redescendre dans Commerce1\Commande;
var_dump($commande);


use Commerce2,DateTime; // import du namespace Commerce2 (//global)
    // use namespace1, namespace, classe
    // de préférence on met l'import de namespace après l'inclusion des namespaces

$produit1 = new Commerce2\Produit; // 2éme notation : en ayant précisé que j'allais utiliser le namespace Commerce2 (use), je n'ai plus d'antislash à ajouter 
var_dump($produit1);

// $maDate = new \DateTime(); //solution 1
$maDate = new DateTime(); //solution 2

/*
Dans un cadre de namespace, on appelle la classe avec son chemin complet
ex : new Namespace\Classe();
c'est l'anti-slash \ qui definit la séparation dans les namespaces
Pour importer des éléments de l'espace global de PHP ou des éléments d'autres namespaces, on peut utiliser le mot clé USE
*/

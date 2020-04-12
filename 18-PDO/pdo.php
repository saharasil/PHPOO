<?php
// PDO : PHP Database Object
// Connexion
        try{
        $pdo = new PDO(
            'mysql:host=localhost;dbname=entreprise',// SGBD
            'root',//Login
            '', //mdp mamp
            array( // Tableau d'options facultatif
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // Définir le charset UTF-8 des echanges avec la BDD
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // PDO::ERRMODE_SILENT <= en prod // Pour définir lemode d'affichage des erreurs
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // tableau ASSOCIATIF(array) // Pour définir le mode de fetch par défaut
            ));
        }catch (PDOException $e){
            die('Erreur SQL : ' . $e->getMessage());
        }
// Requête de selection
        $resultat = $pdo->query("SELECT * FROM employes");
// La méthode  fetchAll permet de récuperer touts le lignes dans un tableau multidimentionnel
    $donnees = $resultat->fetchAll();
// var_dump($donnees);
// Ecrire le prénom du 1er employé
// echo $donnees[0]['prenom'];

//For permet de parcourir le tableau principale $donnees
for($i=0; $i<$resultat->rowCount();$i++){
    // A chaque tour de boucle (un tour = une ligne SQL = un employe)
    echo "<ul>";
    // FOREACH permet de parcourir les colonnes et d'afficher la valeur
    foreach( $donnees[$i] as $colonne => $valeur)
    {
        echo "<li>" . $colonne . " : " . $valeur . "</li>";
    }
    echo "</ul><hr>";
}

echo '<hr>';

$resultat = $pdo->query("SELECT * FROM employes");
// fetch classique, je charge les informations employe par employe
 while($employe = $resultat->fetch()){
     //var_dump($employe);
     echo $employe['prenom']. "<br>";
 }

 echo '<hr>';

//Requete qui n'attend qu'un resultat

$resultat = $pdo->query("SELECT * FROM employes WHERE id_employes = 417");
$employe = $resultat->fetch(); // j'avance mon curseur sur la toute première (et unique) ligne
echo $employe['prenom'];

echo '<hr>';

// requête préparée, P.E.F. (Prepare,Execute,Fetch)
$resultat1 = $pdo->prepare("SELECT * FROM employes WHERE service= ?");
$resultat2 = $pdo->prepare("SELECT * FROM employes WHERE service= :service");
// exécution
$resultat1->execute(array('production')); // marqueur anonyme
$resultat2->execute(array(
                    'service' => 'production' // marquer nommé
                    ));
// lecture
while($employe =$resultat1->fetch()){
echo $employe['nom'] . "<br>";
}


// FETCH_OBJ
$resultat = $pdo->prepare("SELECT * FROM employes WHERE id_employes=?");
$resultat->execute(array(417));
$employe = $resultat->fetch(PDO::FETCH_OBJ); // produit un objet(stdClass)
var_dump($employe);
echo $employe->nom; // $employe->nom_colonne

echo '<hr>';


// FETCH_CLASS
class Employe{
    //propriété = colonnes de la table SQL
    public $id_employes;
    private $prenom;
    public $nom;
    public $sexe;
    public $service;
    public $date_embauche;
    public $salaire;
    public $pdo;

    public function __construct(){
        $this->pdo = new PDO(
            'mysql:host=localhost;dbname=entreprise',// SGBD
            'root',//Login
            '', //mdp mamp
            array( // Tableau d'options facultatif
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // Définir le charset UTF-8 des echanges avec la BDD
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // PDO::ERRMODE_SILENT <= en prod // Pour définir lemode d'affichage des erreurs
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // tableau ASSOCIATIF(array) // Pour définir le mode de fetch par défaut
            ));
    }
    // getter d'une propriété privée (private)
    public function getPrenom(){
        return $this->prenom;
    }
    // méthode raccourci qui renvoie le salaire annuel
    public function getSalaireAnnuel(){
        return $this->salaire * 12;
    }

    // public function delete(){
    //     $resultat = $this->pdo->prepare("DELETE FROM employes WHERE id_employes = :id ");
    //     $resultat->execute(array('id' => $this->id_employes));
    // }

    public function update($colonne,$valeur){
        // mise à jour de la propriété
        $this->$colonne = $valeur;
        //mise à jour coté BDD
        $resultat = $this->pdo->prepare('UPDATE employes SET ' .$colonne .'= :valeur WHERE id_employes = :id_employes');
        $resultat->execute(array(
                ':valeur' => $valeur,
                ':id_employes' => $this->id_employes

        ));
    }


}

$resultat = $pdo->prepare("SELECT * FROM employes WHERE id_employes = ?");
$resultat->execute(array(417));
// Je change le mode de  'fetch' en FETCH_CLASS suivi du nomde la classe
$resultat->setFetchMode(PDO::FETCH_CLASS,"Employe");
$employe = $resultat->fetch();
var_dump($employe);
// $employe->prenom; // la propriété est privé c'est pas possible 
echo $employe->getPrenom() . '<br>';
// echo $employe->nom;
echo $employe->getSalaireAnnuel() .'<br>';
//$employe->delete();
// $employe->update('salaire',$employe->salaire + 200); //pour éviter que sa se passe à chaque refraiche
echo $employe->salaire . '<br>';
// mise à jour coté objet ET 



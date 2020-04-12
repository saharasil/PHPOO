<?php
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

//Selectionner 3 employés au hasards dans l'entreprise 

$result = $pdo->query("SELECT * FROM employes ORDER BY RAND() LIMIT 0,3 ");
/*
LIMIT 3 signifie prendre les trois prmiére lignes
LIMIT 0,3 signifie prendre les 3 premiéres lignes
LIMIT 12,5 signifie prendre les 5 lignes qui suivent le 12eme enregistrement 

exemple pour une pagination de 10 produits par 10
Page1 LIMIT 0,10
Page2 LIMIT 10,10
Page1 LIMIT 20,10
Page1 LIMIT 30,10
*/

// Employé numero 1 
$employe1 = $result->fetch();
echo '1er prix decerné à ' .$employe1['prenom'] .' '.$employe1['nom']. "<br>";

// Employé numero 2 
$employe2 = $result->fetch();
echo '2éme prix decerné à ' .$employe2['prenom'] .' '.$employe2['nom']. "<br>";

// Employé numero 3 
$employe3 = $result->fetch();
echo '3eme prix decerné à ' .$employe3['prenom'] .' '.$employe3['nom']. "<br>";

// si je tente un fetch alors que j'ai limité à 3 résultat, j'ai en retour le booléen false
$employe4 = $result->fetch();
var_dump($employe4);






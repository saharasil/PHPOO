<?php
require_once 'Fighter.php';
//connexion à la BDD
try{
    $pdo = new PDO(
        'mysql:host=localhost;dbname=jeucombat',// SGBD
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

    //selection des deux combattants de la BDD
$query = $pdo->query("SELECT * FROM personnages ORDER BY RAND() LIMIT 0,2");

// 1er fetch pour la première personnage
$personnage1 = $query->fetch(PDO::FETCH_OBJ);
$nom = $personnage1->nom;
$vie = $personnage1->vie;
// echo $nom;

//instanciation de la premiére personnage
$personnage1 = new Fighter($nom, $vie);
// var_dump($personnage1);

// 2éme fetch pour la deuxième personnage
$personnage2 = $query->fetch(PDO::FETCH_OBJ);
$nom = $personnage2->nom;
$vie = $personnage2->vie;
// echo $nom;

//instanciation de la deuxième personnage
$personnage2 = new Fighter($nom, $vie);
// var_dump($personnage2); 


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Jeu de combat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
      <div class="row">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header">
                       <h1> Jeu de combat</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">
                        
                        <?php
                        for($i=1; $i<11; $i++){
                            
                            if($personnage1->vie !== 0 || $personnage2->vie !==0 || $i !== 0  ){  
                            
                                 
                            echo '<h3>Round '. $i . ' - ' . $personnage1->nom .'('. $personnage2->vie . ')' .' - ' .  $personnage2->nom .'(' . $personnage1->vie.')' .'</h3><br>';
                                echo '<p>' . $personnage1->frapper($personnage2) . '</p>';
                            
                            }
                           
                            }

                        ?>
                    </p>
                </div>
                <div class="card-footer text-muted">
                    <p>Bilan de combat</p>
                    <p> 
                        <?php
                        if ($personnage2->vie > $personnage1->vie ){
                           echo '<p>' . $personnage1->bilan($personnage2) .'</p>';
                        }
                        if ($personnage1->vie > $personnage2->vie ){
                            echo '<p>' . $personnage2->bilan($personnage1) .'</p>';
                         }
                         if ($personnage2->vie == $personnage1->vie ){
                            echo '<p>' . $personnage2->bilan($personnage1) .'</p>';
                         }
                        
                        ?>
                    </p>
                </div>
            </div>
        </div>
      </div>
    </div>
</body>
</html>









<?php
//on définit notre autoloader pour l'instanciation des objets
require_once('autoload.php');

// on va créer notre controller
$app = new Controller\Controller;

// on lance notre application web
$app->run();
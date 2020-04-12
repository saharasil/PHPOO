<?php

// Déclarer la fonction qui désigne l'autoloader
spl_autoload_register('inclusionAutomatique');


// Autoloader qui récupére en paramétre ce qui suit le mot new

function inclusionAutomatique($nomdelaclasse){
    //A => a.php
    // Modules\B => Modules/B.php
    echo "<br>Je passe dans l'autoloader<br>";
    $nomdelaclasse = str_replace('\\', '/', $nomdelaclasse);//je transforme  les slash en antislash
    require_once($nomdelaclasse . '.php');
}
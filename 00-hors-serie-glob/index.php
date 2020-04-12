<?php
// Générer une gallerie à partir des fichiers du répertoire img
$images = glob('img/*.{jpg,jpeg,gif,png}', GLOB_BRACE);
//            (rep/*.{extensions autorisées séparées par des virgules};avec option  GLOB_BRACE)

var_dump($images); //Tableau listant touts mes images

foreach($images as $image){
    ?>
    <img src="<?= $image ?>" alt="<?= $image ?>" style ="width : 300px; height: 300px" >

    <?php
}
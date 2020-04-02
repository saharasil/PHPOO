<?php
class Compteur {
    public static $nbInstance = 0;// appartient à la classe (static)
    public $nbObjet = 0; //appartient à l'objet($this)
    public function __construct(){
        self::$nbInstance++;
        $this->nbObjet++;
    }
}

$c1 = new Compteur; // 1 er objet


$c2 = new Compteur; // 2
var_dump(Compteur::$nbInstance); 
$c3 = new Compteur; // 3
var_dump(Compteur::$nbInstance); 
$c4 = new Compteur; // 4
$c5 = new Compteur; // 5
echo 'nbre de fois que la classe a été instanciée : ' .Compteur::$nbInstance.'<br>';
var_dump($c5::$nbInstance);
echo 'nbre de fois que l\'objet 1 a été instanciée : ' . $c1->nbObjet .'<br>';

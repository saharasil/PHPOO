<?php

class Utilisateur {
    protected $user_name; //propriété de la classe parente
    protected $user_pass; //propriété de la classe parente
    protected $prix_abo; //propriété de la classe parente
    protected $user_region; //propriété de la classe parente
    public const ABONNEMENT = 15; //constante de la classe parente
     
    public function __construct($n,$p, $r){
        $this->user_name = $n;
        $this->user_pass = $p;
        $this->user_region = $r;
    }

    public function getNom(){
        echo $this->user_name;
    }

    public function setPrixAbo(){
        if($this->user_region === 'Sud'){
            return $this->prix_abo = self::ABONNEMENT / 2;

        }else{
            return $this->prix_abo = self::ABONNEMENT;

        }
    }

    public function getPrixAbo(){
        echo $this->prix_abo;
    }
}


class Admin extends Utilisateur {

    protected $ban; //propriété de la classe fille
    public const ABONNEMENT = 5;// On surcharge ici la constante ABONNEMENT de la classe parente en lui attribuant une nouvelle valeur


    public function __construct($n, $p, $r){
        $this->user_name = strtoupper($n);
        $this->user_pass = $p;
        $this->user_region = $r;
    }
    
    public function setBan($b){
        $this->ban[] .= $b;
    }
    


    public function getBan(){
        echo 'Utilisateurs bannis par ' . $this->user_name . ' : ';
        foreach($this->ban as $valeur){
            echo $valeur . ', ';
        }
    }
    public function setPrixAbo(){
        if($this->user_region === 'Sud'){
            return $this->prix_abo = self::ABONNEMENT ;

        }else{
            return $this->prix_abo = parent::ABONNEMENT / 2;

        }
    }


}

$pierre = new Admin('Pierre', 'abcdef', 'Sud');
$mathilde = new Admin('Math', 123456, 'Nord');
$florian = new Utilisateur('Flo', 'flotri', 'Est');

$pierre->getNom();
$mathilde->getNom();

echo '<br>';

$pierre->setBan('Paul');
$pierre->setBan('Jean');

echo $pierre->getBan();
// var_dump($pierre);
echo '<br>';

$pierre->setPrixAbo();
$mathilde->setPrixAbo();
$florian->setPrixAbo();

$u = 'Utilisateur';
echo 'Valeur de ABONNEMENT dans Utilisateur : ' . $u::ABONNEMENT. '<br>';
echo 'Valeur de ABONNEMENT dans Admin : ' . Admin::ABONNEMENT. '<br>';

echo 'Prix de l\'abonnement pour ';
$pierre->getNom();
echo ' : ';
$pierre->getPrixAbo();

echo '<br>Prix de l\'abonnement pour ';
$mathilde->getNom();
echo ' : ';
$mathilde->getPrixAbo();

echo '<br>Prix de l\'abonnement pour ';
$florian->getNom();
echo ' : ';
$florian->getPrixAbo();

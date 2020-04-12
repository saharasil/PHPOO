<?php
/*
Créer un objet $mario et $luigi issus de la classe Personnage 
ayant les attributs suivants : 

    private $metier = "Plombier";
    private $couleurCasquette = "Rouge";
    private $force = 40;

    le constructeur devra nous permettre de modifier la 
    force et la couleur de casquette

    Vous devrez créer les méthodes suivantes : 
    getMetier()
    getForce()
    setForce()
    getCouleur()
    setCouleur()

    Vous devez réussir à afficher avec un echo les 2 phrases suivantes : 
    " Mario est un Plombier il a une force de 100 et une casquette de couleur rouge"
    " Luigi est un Plombier il a une force de 80 et une casquette de couleur verte"
*/







class Personnage{

    //Attributs
    private $metier = "Plombier";
    private $couleurCasquette = "Rouge";
    private $force = 40;

    //Constructeur
    public function __construct($couleur, $force){
        $this->setForce($force);
        $this->setCouleur($couleur);
    }

    //Methodes
    public function getMetier(){
        return $this->metier;
    }

    public function getForce(){
        return $this->force;
    }

    public function setForce($force){
        $this->force=$force;
    }

    public function getCouleur(){
        return $this->couleurCasquette;
    }

    public function setCouleur($couleur){
        $this->couleurCasquette=$couleur;
    }

}

$mario = new Personnage ('rouge',100);
echo "Mario est un ".$mario->getMetier()." il a une force de ".$mario->getForce(). " et une casquette de couleur ".$mario->getCouleur()."<br>";

$luigi = new Personnage ('verte', 80);
echo "Luigi est un ".$luigi->getMetier()." il a une force de ".$luigi->getForce(). " et une casquette de couleur ".$luigi->getCouleur();
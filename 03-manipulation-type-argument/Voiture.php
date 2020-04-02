
<?php
class Voiture { // création de la classe 
    private $tailleReservoire; //propriété privé pour la tille de réservoire
    private $nbLitresEssence; //propriété privé pour la quantité à remplir

    public function __construct($r, $n){ //(pour $voiture1: (50,5))
        $this->setTailleReservoire($r);
        $this->setNbLitresEssence($n);

    }

    public function setTailleReservoire($taille){ // méthode pour définir la taille du reservoire de la voiture
        if(is_numeric($taille)){ // si c'est numérique
            $this->tailleReservoire = $taille; // l'objet couramment utilisé reçoit dans sa propriété la valeur défine dans l'instanciation.
        }
    }

    public function getTailleReservoire(){ // méthode pour récupérer la taille du réservoire de la voiture 
       return $this->tailleReservoire;
    }

    public function setNbLitresEssence($quantite){  // méthode pour définir la quantité d'essence à remplir dans la voiture 
        if(is_numeric($quantite)){ // si c'est numérique
            $this->nbLitresEssence = $quantite;  // l'objet couramment utilisé reçoit dans sa propriété la valeur défine dans l'instanciation.
        }
    }

    public function getNbLitresEssence(){ // méthode pour récupérer la quantité d'essence à remplir dans la voiture 
        return $this->nbLitresEssence;
     }
    
}
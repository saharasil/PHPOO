<?php
class Pompe {
    
    private $tailleReservoire; //propriété privé pour la tille de réservoire
    private $nbLitresEssence; //propriété privé pour la quantité d'essence dans la pompe

    public function __construct($r, $n){ //(pour $pompe: (800,800))
        $this->setTailleReservoire($r);
        $this->setNbLitresEssence($n);

    }

    public function setTailleReservoire($taille){ // méthode pour définir la taille du reservoire de la pompe
        if(is_numeric($taille)){ // si c'est numérique
            $this->tailleReservoire = $taille; // l'objet couramment utilisé reçoit dans sa propriété la valeur défine dans l'instanciation.
        }
    }

    public function getTailleReservoire(){ // méthode pour récupérer la taille du réservoire de la pompe
       return $this->tailleReservoire;
    }

    public function setNbLitresEssence($quantite){  // méthode pour définir la quantité d'essence dans la pompe
        if(is_numeric($quantite)){ // si c'est numérique
            $this->nbLitresEssence = $quantite;  // l'objet couramment utilisé reçoit dans sa propriété la valeur défine dans l'instanciation.
        }
    }

    public function getNbLitresEssence(){ // méthode pour récupérer la quantité d'essence dans la voiture 
        return $this->nbLitresEssence;
     }
    
    public function delivreressence(voiture $v){
        $quantite_a_delivrer = $v->getTailleReservoire() - $v->getNbLitresEssence();
        //      45           =          50              -          5  
        // si je n'ai pas assez dans la pompe, je rectifie la quantité en lui attribuant ce qui me reste
        if($quantite_a_delivrer > $this->getNbLitresEssence()){
            $quantite_a_delivrer = $this->getNbLitresEssence();
        }
        // 1- Affecter la nouvelle valeur à nbLitresEssence de voiture
        $v->setNbLitresEssence($v->getNbLitresEssence() + $quantite_a_delivrer);
        //                                   5            +        45
        //2- Affecter la nouvelle valeur à nbLitresEssence de pompe
        $this->setNbLitresEssence($this->getNbLitresEssence() - $quantite_a_delivrer);
         //                                   800               -    45
        return "Je viens de délivrer $quantite_a_delivrer litres(s) d'essences<br>";
    }
    
}

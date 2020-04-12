<?php

class Animal {
    
    protected function deplacement(){//protected : signifie que la méthode est protégé et n'est utilisable que dans la classe et dans les classes héritères
        return 'Je me déplace sur 4 pattes';

    }
    public function manger(){ // une méthode public accessible de l'extérieur
        return 'Je mange 1 fois par jour';

    }
}

/*
    Etendre une classe : créer des nouvelles classes qui vont hériter des méthodes et des propriétés de la classe qu'elles étendent  tout en définissent des nouvellespropriétés et méthodes qui leurs sont propre  
*/

class Chien extends Animal{ //nous créons une classe fille chien qui hérite de toutes le propriétées et les méthode de la classe parent grâce au mot clef " extends"
    public function quiSuisJe(){
        return 'Je suis un chien et '. $this->deplacement(). ' et ' . $this->manger(). '<br>';
        //étant dans une classe héritière de Animal ,j'ai le droit d'utiliser une méthode d'un niveau de visibilité protected (méthode : deplacement()) et par lasuite on peux y accéder de l'extérieur dans un objet.

    }
}

class Elephant extends Animal{  //nous créons une classe fille Elephant qui hérite de toutes le propriétées et les méthode de la classe parent grâce au mot clef " extends"
    
    public function manger(){ //redéfinition d'une méthode = surcharger une méthode d'une classe
        return 'Je mange 2 fois par jour';
        //cette méthode est prioritaire sur la méthode du parent
    }
    public function quiSuisJe(){ //redéfinition d'une méthode
        return 'Je suis un éléphant et '. $this->deplacement(). ' et ' . $this->manger(). '<br>';
        

    }

}

$rex = new chien; //instanciatio de la classe fille
echo $rex->quiSuisJe();
echo $rex->manger();
//echo $rex->deplacement(); impossible car la méthode est protected
echo '<hr>';
$dumbo= new Elephant;
echo $dumbo->quiSuisJe();
echo $dumbo->manger();

/*
L'orsqu'on appelle une méthode d'une classe qui a un héritage, l'interpreteur cherche d'abord dans la classe dont l'objet est issu avant d'aller voir la classe parent.
*/